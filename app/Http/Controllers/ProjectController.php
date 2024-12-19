<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectController extends Controller
{
    
    public function index(Request $request)
    {
        return Project::with(['state', 'manager'])->limit($request->perpage ?? 5)->offset(($request->perpage ?? 5) * ($request->page ?? 0))->get();;
    }

    public function total()
    {
        return Project::all()->count();
    }

    public function show(string $id)
    {
        return Project::find($id);
    }

    public function store(Request $request)
    {
        // if(!Gate::allows('create-project')) {
        //     return [ 'code' => 1, 'message' => 'У вас нет прав на добавление проектов' ];
        // }
        $validated = $request->validate([
            'name' => 'required|unique:projects|max:255',
            'note' => 'nullable',
            'state_id' => 'required',
            'image' => 'required|file'
        ]);
        $file = $request->file('image');
        $fileName = rand(1, 100000).'_'.$file->getClientOriginalName();
        try {
            $path = Storage::disk('s3')->putFileAs('project_pictures', $file, $fileName);
            $fileUrl = Storage::disk('s3')->url($path);
        } catch(Exception $exception) {
            return [ 'code' => 2, 'message' => 'Ошибка загрузки файла в хранилище s3' ];
        }
        $project = new Project($validated);
        $project->picture_url = $fileUrl;
        $project->manager_id = Auth::user()->id;
        $project->save();
        return [ 'code' => 0, 'message' => 'Проект успешно добавлен' ];
    }

    public function update(Request $request, string $id)
    {
        if(!Gate::allows('edit-project', Project::all()->where('id', $id)->first())) {
            return redirect('/project')->withErrors([
                'error' => 'У вас нет разрешения на редактирование завершенных проектов.'
            ]);
        }
        $validated = $request->validate([
            'name' => 'required|max:255',
            'note' => 'nullable',
            'status' => 'required|max:8'
        ]);
        $project = Project::all()->where('id', $id)->first();
        $project->name = $validated['name'];
        $project->note = $validated['note'];
        $project->status = $validated['status'];
        $project->save();
        return redirect('/project')->withErrors([
            'success' => 'Проект обновлен.'
        ]);
    }

    public function destroy(string $id)
    {
        Project::destroy($id);
        return [ 'code' => 0, 'message' => 'Проект успешно удален' ];
    }

}