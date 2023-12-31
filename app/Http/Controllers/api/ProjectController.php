<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index () {
        $project = Project::with(['type', 'technologies'])->paginate(5);
        return response()->json([
            'success' => true,
            'results' => $project
        ]);
    }

    public function show($slug) {
        $project = Project::where('slug', $slug)->first();
        return response ()->json([
            'success' => true,
            'results' => $project
        ]);
    }
}
