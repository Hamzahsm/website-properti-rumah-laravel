<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IklanProperti;
use App\Models\IklanPremium;

class SearchController extends Controller
{
    // cari iklan biasa
    public function cariProperti(Request $request) 
    {
        if($request->keyword) {
            $properties = IklanProperti::search($request->keyword)->get();
        } else {
            $properties = IklanProperti::get();
        }

        return view('search.cari-properti', compact('properties'));
    }

    //cari iklan properti premium
    public function cariIklanPremium(Request $request) 
    {
        if($request->keyword) {
            $properties = IklanPremium::search($request->keyword)->get();
        } else {
            $properties = IklanPremium::get();
        }

        return view('search.cari-properti', compact('properties'));
    }
}