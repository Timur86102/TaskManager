<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectState;

class ProjectStateController extends Controller
{
    public function index()
    {
        return ProjectState::all();
    }

    public function show(string $id)
    {
        return ProjectState::find($id);
    }   
}