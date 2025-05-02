<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PostController extends Controller
{
    public function index(){
        $project = Portfolio::with('type','technologies')->get();
       
        return response()->json(
            [
                "success"=>'true',
                "data" => $project
            ]
            );
    }
}
