<?php

namespace App\Http\Controllers;

use App\Trip;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class SiteController extends Controller
{
    public function index()
    {

        return view('pages.home');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function crusades()
    {
        $trips=Trip::paginate(8);


        return view('pages.crusades', ['trips' => $trips]);
    }
    public function crusadesAll()
    {
        $trips=Trip::all();


        return view('pages.crusadesAll', ['trips' => $trips]);
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function store_trip()
    {
        $trip=new Trip();

        $trip->name=Request::get('name');
        $trip->startEvent=Request::get('start');
        $trip->endEvent=Request::get('end');
        $trip->price=Request::get('cost');
        $trip->description=Request::get('description');

        $trip->save();

        return redirect('addTrip');
    }
    public function addTrip()
    {

        return view('pages.add_trip');
    }
    public function showTrip($id)
    {
        $trip=Trip::find($id);

        return view('pages.trip', ['trip' => $trip]);
    }
}
