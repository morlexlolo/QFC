<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class WelcomeController extends Controller
{
 public  function index()
 {
     $services = Service::all();
     return view('welcome', compact('services')) ;
    }
}
