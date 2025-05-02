<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $project = Portfolio::with('type', 'technologies')->get();

        return response()->json(
            [
                "success" => 'true',
                "data" => $project
            ]
        );
    }

    public function show(Portfolio $project)
    {

        $project->load('type', 'technologies');

        return response()->json(
            [
                "success" => 'true',
                "data" => $project
            ]
        );
    }
}
