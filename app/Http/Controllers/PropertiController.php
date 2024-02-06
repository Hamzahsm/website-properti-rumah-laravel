<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\IklanProperti\StoreRequest;
use App\Models\IklanProperti;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('properties.index', [
            'parallaxTitle' => 'Properti Dijual'
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  
    {
        //
        return view('dashboard.manage-iklan-properti-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // 
        $validated = $request->validated();

        if ($request->hasFile('featured_image')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan-properties/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        // foto_perusahaan_properti
        if ($request->hasFile('foto_perusahaan_properti')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan-properties/foto-perusahaan', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        //insert only requests that already validated in the StoreRequest
        $create = IklanProperti::create($validated);

        if($create) {
            //add flash for nification
            // session()->flash('notif.success', 'Properti Berhasil Ditambahkan!');
            return redirect()->route('home');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
