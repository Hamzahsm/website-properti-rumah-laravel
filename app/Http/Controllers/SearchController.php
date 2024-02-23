<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IklanProperti;
use App\Models\IklanPremium;
use App\Models\SellProperti;
use App\Models\RentProperti;
use App\Models\User;

class SearchController extends Controller
{
    /**
     * 
     * Fitur Search Iklan Biasa -> from iklan properties table
     * 
     */
    public function cariProperti(Request $request) 
    {
        if($request->keyword) {
            $properties = IklanProperti::search($request->keyword)->get();
        } else {
            $properties = IklanProperti::get();
        }

        return view('search.cari-properti', compact('properties'));
    }

    /**
     * 
     * Fitur Search  Iklan Premium -> from iklan premia table
     */
    public function cariIklanPremium(Request $request) 
    {
        if($request->keyword) {
            $properties = IklanPremium::search($request->keyword)->get();
        } else {
            $properties = IklanPremium::get();
        }

        return view('search.cari-properti', compact('properties'));
    }

    /**
     * 
     * Fitur Search Cari Agen -> from users table
     * 
     */
    public function cariAgen(Request $request)
    {
        if($request->keyword) {
            $users = User::search($request->keyword)->get();
        } else {
            $users = User::get();
        } 

        return view('search.cari-agen', compact('users')); 
    }

    /**
     * 
     * Fitur Search Properti Dijual
     * 
     */
    public function cariPropertiDijual(Request $request) 
    {
        // return dd($request);
        if($request->keyword) {
            $results = SellProperti::search($request->keyword)->get();
        } else {
            $results = SellProperti::get();
        }

        return view('search.cari-properti-dijual', compact('results'));
    }

    /**
     * 
     * Fitur Search Properti Disewakan
     * 
     */
    public function cariPropertiDisewakan(Request $request)
    {
        // return dd($request);
        if($request->keyword) {
            $results = RentProperti::search($request->keyword)->get();
        } else {
            $results = RentProperti::get();
        }
        
        return view('search.cari-properti-disewakan', compact('results'));
    }

    /**
     * 
     * Fitur Multiple Search -> Joining Table
     * 
     */
    public function multipleSearch(Request $request)
    {
        // return dd($request);
        if($request->keyword) {
            // $results = IklanProperti::search($request->keyword)->get();
            $db = IklanProperti::join('IklanPremium', 'IklanPremium.name', '=', 'IklanProperti.name');
            $results = $db::search($request->keyword)->get();
        } else {
            $results = IklanProperti::get();
        } 

        return view('search.multiple-search', compact('results')); 
    }
}
