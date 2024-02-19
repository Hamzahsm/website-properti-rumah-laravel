<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IklanProperti;
use App\Models\IklanPremium;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CarikanProperti\StoreRequest;
use App\Models\HelpFindIt; 

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

    public function carikanProperti() {
        return view('pages.carikan-properti');
    }

    public function StoreCarikanProperti(StoreRequest $request) 
    {

        $validated = $request->validated();

        $create = HelpFindIt::create($validated);

        if($create) {
            return redirect()->route('test');
            // return redirect()->route('ads.index')->with('success', 'Iklan Properti Berhasil Ditambahkan!');
        }

        return abort(500);
    }
}
