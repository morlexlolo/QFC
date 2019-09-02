<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use SEOMeta;
use App\ServiceCategory;

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

    public function cat($slug)
    {
        $services = ServiceCategory::where('slug', $slug)->first()->services()->get();
        $serviceCatItem = ServiceCategory::where('slug', $slug)->first()->services()->take(1)->get();
        $servicesList = ServiceCategory::where('slug', $slug)->first()->services()->get();
        return view('services.cat', compact('services', 'serviceCatItem', 'servicesList'));
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

       $category = Service::select('service_category_id')->where('slug', $slug)->get();
      
         foreach ($category as $c) {
              // code
              $cc = $c->service_category_id;
            }
            

        $service = Service::where('slug', $slug)->firstOrFail();
        $services = Service::where('service_category_id', $cc)->orderBy('id', 'asc')->get();
        SEOMeta::setTitle($service->title);
        SEOMeta::setDescription($service->conent);
        return view('services.show')->with([
            'service' => $service,
            'services' => $services,
        ]);
    }
}