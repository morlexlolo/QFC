<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Gainers;
use App\Loosers;
use App\InternationalMarkets;
use SEOMeta;


class WelcomeController extends Controller
{
    public  function index()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is home page ');
         $gainers = Gainers::orderBy('percentage', 'desc')->take(5)->get();
         $loosers = Loosers::orderBy('percentage', 'desc')->take(5)->get();
         $international = InternationalMarkets::orderBy('price', 'desc','international')->take(5)->get();
        return view('welcome',compact('gainers','loosers','international'));
    }
}