<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return Task::with(['state', 'user', 'project'])->limit($request->perpage ?? 5)
            ->offset(($request->perpage ?? 5) * ($request->page ?? 0))->get();
    }

    public function total()
    {
        return Task::all()->count();
    }

    public function show(string $id)
    {
        return Task::find($id);
    }

}