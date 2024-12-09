<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    
    public function index(Request $request)
    {
        return Project::with(['state', 'manager'])->limit($request->perpage ?? 5)
            ->offset(($request->perpage ?? 5) * ($request->page ?? 0))->get();
    }

    public function total()
    {
        return Project::all()->count();
    }

    public function show(string $id)
    {
        return Project::find($id);
    }

}