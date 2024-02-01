<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // 
    public function index() {
        return view('landing');
    }

    public function test() {
        return view('test');
    }

    public function tentangKami() {
        return view('pages.about');
    }

    public function cari() {
        return view('pages.properties');
    }
}
