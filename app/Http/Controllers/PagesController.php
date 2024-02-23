<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IklanProperti;
use App\Models\IklanPremium;
use App\Models\Image;
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

    /**
     * 
     * uploads multiple images 
     * 
     */
    public function uploadsMultiple()
    {
        $images = Image::all();
        return view('dashboard.multiple-image-upload', compact('images'));
    }

    public function storeUploadMultiple(Request $request)
    {
        // return dd($request);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'required|array'
        ]);

        $images = [];

        foreach($data['images'] as $image) {
            $username = $request->input('name');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image_path = $image->storeAs('images/' . $username , $fileName , 'public');
            // $image_path = $image->storeAs('images' , $fileName , 'public');

            array_push($images, $image_path);
        }

        $data['images'] = $images;

        Image::create($data);
        return redirect()->route('upload.multiple.images')->with('success', 'gambar berhasil di upload!');
    }

    /**
     * 
     * test joining db search
     * 
     */
    public function multipleSearch()
    {
        return view('pages.multiple-search');
    }
}
