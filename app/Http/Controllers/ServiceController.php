<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::orderBy('id','asc')->get();
        return view('services.index',compact('services'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('services.show')->with([
            'service' => $service,
        ]);
    }

}
