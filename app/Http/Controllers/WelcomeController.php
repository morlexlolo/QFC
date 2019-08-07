<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use SEOMeta;

class WelcomeController extends Controller
{
    public  function index()
    {
        SEOMeta::setTitle('Home');
        SEOMeta::setDescription('This is home page ');
        return view('welcome');
    }
}