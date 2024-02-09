<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\IklanPremium\StoreRequest;
use App\Http\Requests\IklanPremium\UpdateRequest;
use App\Models\IklanPremium;

class IklanPremiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:iklan-premium-list|iklan-premium-create|iklan-premium-edit|iklan-premium-delete', ['only' => ['index','show']]);
         $this->middleware('permission:iklan-premium-create', ['only' => ['create','store']]);
         $this->middleware('permission:iklan-premium-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:iklan-premium-delete', ['only' => ['destroy']]);
    } 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = IklanPremium::all();
        return view('dashboard.manage-iklan-premium-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.manage-iklan-premium-create');
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
            $filePath = Storage::disk('public')->put('images/iklan-premium/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        // foto_perusahaan_properti
        if ($request->hasFile('foto_perusahaan_properti')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan-premium/foto-perusahaan', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        //insert only requests that already validated in the StoreRequest
        $create = IklanPremium::create($validated);

        if($create) {
            return redirect()->route('ads.index')->with('success', 'Iklan Properti Berhasil Ditambahkan!');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = IklanPremium::findOrFail($id);
        return view('dashboard.manage-iklan-premium-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = IklanPremium::findOrFail($id);
        return view('dashboard.manage-iklan-premium-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        //
        $ads = IklanPremium::findOrFail($id);
        $validated = $request->validated();

        if($request->hasFile('featured_image')) {
            //delete image
            Storage::disk('public')->delete($post->featured_image);

            $filePath = Storage::disk('public')->put('images/iklan-premium/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        if($request->hasFile('foto_perusahaan_properti')) {
            //delete image
            Storage::disk('public')->delete($post->foto_perusahaan_properti);

            $filePath = Storage::disk('public')->put('images/iklan-premium/featured-images', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        $update = $ads->update($validated);

        if($update) {
            return redirect()->route('ads.index')->with('success', 'Iklan Berhasil di Update !');
        }

        return 500;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = IklanPremium::findOrFail($id);
        //also delete the image 
        Storage::disk('public')->delete($data->featured_image);
        Storage::disk('public')->delete($data->foto_perusahaan_properti);
        $delete = $data->delete($id);

        if($delete) {
            return redirect()->route('ads.index')->with('success', 'Iklan Properti Berhasil di Hapus');
        }
    }
}
