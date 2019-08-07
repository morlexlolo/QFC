<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use SEOMeta;

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
        SEOMeta::setTitle('QFC Services');
        SEOMeta::setDescription('Services offer by QFC');
        $services = Service::orderBy('id', 'asc')->get();
        return view('services.index', compact('services'));
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
        SEOMeta::setTitle($service->title);
        SEOMeta::setDescription($service->conent);
        return view('services.show')->with([
            'service' => $service,
        ]);
    }
}