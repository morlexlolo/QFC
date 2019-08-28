<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use SEOMeta;

class NewsController extends Controller
{

    public function index()
    {
        //
        SEOMeta::setTitle('QFC Services');
        SEOMeta::setDescription('Services offer by QFC');
        $news = Post::orderBy('id', 'asc')->get();
        return view('news.index', compact('news'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $new = Post::where('slug', $slug)->firstOrFail();
        SEOMeta::setTitle($new->title);
        SEOMeta::setDescription($new->conent);
        return view('news.show')->with([
            'new' => $new,
        ]);
    }
}