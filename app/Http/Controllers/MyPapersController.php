<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPapersController extends Controller
{
    public function index()
    {
        return view('papers.mypapers');

    }

    public function create()
    {
        return view('papers.uploadpaper');

    }
}
