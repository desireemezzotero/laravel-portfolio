<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {
        $post = Portfolio::all();
        return view('welcome', compact('post'));
    }
}
