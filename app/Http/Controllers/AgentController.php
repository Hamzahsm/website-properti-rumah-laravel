<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\RegistersUsers;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;

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

    public function singleListing() {
        return view('agents.single-listing', [
            'parallaxTitle' => 'Daftar Properti'
        ]);
    }

}
