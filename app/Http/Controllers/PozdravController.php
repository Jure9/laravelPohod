<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PozdravController extends Controller
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
        return view('pages.crusades');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
