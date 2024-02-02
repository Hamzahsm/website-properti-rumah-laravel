<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    // 
    public function index() {
        return view('agents.index', [
            'parallaxTitle' => 'Cari Agen'
        ]); 
    }

    public function jualProperti() {
        return view('agents.jual-properti', [
            'parallaxTitle' => 'Iklankan Properti'
        ]); 
    }

    public function explore() {
        return view('agents.explore', [
            'parallaxTitle' => 'Explore'
        ]); 
    }
}
