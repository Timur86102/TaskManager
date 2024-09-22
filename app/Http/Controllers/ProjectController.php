<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    
    public function index()
    {
        return Project::all();
    }

    public function show(string $id)
    {
        return Project::find($id);
    }

}