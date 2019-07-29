<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    //
    public function index()
    {
        //
        $abouts   = About::orderBy('title', 'asc')->get();
        return view('about.index', compact('abouts'));
    }
}