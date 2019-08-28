<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Gainers;
use App\Indice;
use App\Loosers;
use App\InternationalMarkets;
use SEOMeta;
use TCG\Voyager\Models\Post;

class WelcomeController extends Controller
{
    public  function index()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is home page ');
        $gainers = Gainers::orderBy('percentage', 'desc')->take(5)->get();
        $loosers = Loosers::orderBy('percentage', 'desc')->take(5)->get();
        $indices = Indice::orderBy('percentage', 'desc')->take(5)->get();
        $news = Post::orderBy('id', 'desc')->get();
        $international = InternationalMarkets::orderBy('price', 'desc', 'international')->take(5)->get();
        return view('welcome', compact('gainers', 'loosers', 'international', 'indices', 'news'));
    }
}