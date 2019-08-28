<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use SEOMeta;

class AboutController extends Controller
{
    //
    public function index()
    {
        SEOMeta::setTitle('About-QFC');
        SEOMeta::setDescription('About Quntum financial corp');
        $abouts   = About::orderBy('title', 'asc')->take(1)->get();
        return view('about.index', compact('abouts'));
    }
}