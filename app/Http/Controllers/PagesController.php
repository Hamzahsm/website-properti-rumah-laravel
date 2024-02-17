<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IklanProperti;
use App\Models\IklanPremium;

class PagesController extends Controller
{
    // 

    public function test() {
        $ads = IklanProperti::all();
        $premiums = IklanPremium::all();
        return view('test', compact('ads', 'premiums'));
    }

    public function tentangKami() {
        return view('pages.about');
    }

    public function cari() {
        return view('pages.properties', [
            'parallaxTitle' => 'Cari Properti'
        ]); 
    }

    public function simulasiKpr() {
        return view('pages.simulasi-kpr');
    }

    public function pindahKpr() {
        return view('pages.pindah-kpr');
    }

    public function jualPropertimu() {
        return view('pages.jual-properti');
    }
}
