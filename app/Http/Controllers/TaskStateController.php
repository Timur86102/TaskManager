<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskState;

class TaskStateController extends Controller
{
    public function index()
    {
        return TaskState::all();
    }

    public function show(string $id)
    {
        return TaskState::find($id);
    }   
}
