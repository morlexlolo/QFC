<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use SEOMeta;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEOMeta::setTitle('Our Gallery');
        SEOMeta::setDescription('Galleries of Quntum financial corp');
        $galleries = Gallery::latest()->get();
        return view('gallery.index', compact('galleries'));
    }
}