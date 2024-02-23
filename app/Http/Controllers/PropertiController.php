<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\IklanProperti\StoreRequest;
use App\Http\Requests\IklanProperti\UpdateRequest;
use App\Models\IklanProperti;
use Alert; //sweet alert

class PropertiController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:iklan-properti-list|iklan-properti-create|iklan-properti-edit|iklan-properti-delete', ['only' => ['index','show']]);
         $this->middleware('permission:iklan-properti-create', ['only' => ['create','store']]);
         $this->middleware('permission:iklan-properti-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:iklan-properti-delete', ['only' => ['destroy']]);
    } 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titleDelete = 'Hapus Iklan !';
        $textDelete = 'Apakah Anda Yakin ?';
        confirmDelete($titleDelete, $textDelete);

        $ads = IklanProperti::all();
        return view('dashboard.manage-iklan-properti-index', compact('ads'));


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

        // foto_utama_gambar_properti
        if ($request->hasFile('featured_image')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan-properties/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        //foto_detail_properti_multiple_upload
        if ($request->hasFile('detail_foto_properti')) {
            $images = [];

            foreach($validated['detail_foto_properti'] as $image) {
                $judulProperti = $request->input('judul_properti');
                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image_path = $image->storeAs('iklan-properti/' . $judulProperti , $fileName , 'public');
                // $image_path = $image->storeAs('images' , $fileName , 'public');

                array_push($images, $image_path);
            }

            $validated['detail_foto_properti'] = $images; 
        }

        // foto_perusahaan_properti
        if ($request->hasFile('foto_perusahaan_properti')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/iklan-properties/foto-perusahaan', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        // validasi user id
        $validated['user_id'] = auth()->user()->id;

        //insert only requests that already validated in the StoreRequest
        $create = IklanProperti::create($validated);

        if($create) {
            Alert::success('Selesai !', 'Berhasil Menambahkan Iklan Baru!');
            return redirect()->route('properties.index')->with('success', 'Iklan Properti Berhasil Ditambahkan!');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $ads = IklanProperti::findOrFail($id);
        return view('dashboard.manage-iklan-properti-show', compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $ads = IklanProperti::find($id);
        return view('dashboard.manage-iklan-properti-edit', compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $ads = IklanProperti::findOrFail($id);
        $validated = $request->validated();

        //foto banner properti
        if($request->hasFile('featured_image')) {
            //delete image
            Storage::disk('public')->delete($request->featured_image);

            $filePath = Storage::disk('public')->put('images/iklan-properties/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        //foto_detail_properti_multiple_upload
        if ($request->hasFile('detail_foto_properti')) {
            $images = [];

            foreach($validated['detail_foto_properti'] as $image) {
                $judulProperti = $request->input('judul_properti');
                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image_path = $image->storeAs('iklan-properti/' . $judulProperti , $fileName , 'public');
                // $image_path = $image->storeAs('images' , $fileName , 'public');

                array_push($images, $image_path);
            }

            $validated['detail_foto_properti'] = $images; 
        }

        //foto perusahaan
        if($request->hasFile('foto_perusahaan_properti')) {
            //delete image
            Storage::disk('public')->delete($request->foto_perusahaan_properti);

            $filePath = Storage::disk('public')->put('images/iklan-properties/featured-images', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        $update = $ads->update($validated);

        if($update) {
            Alert::success('Selesai !', 'Iklan Berhasil Diperbarui!');
            return redirect()->route('properties.index')->with('success', 'Iklan Berhasil di Update !');
        }

        return 500;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ads = IklanProperti::findOrFail($id);
        //also delete the image 
        Storage::disk('public')->delete($ads->featured_image);
        Storage::disk('public')->delete($ads->foto_perusahaan_properti);
        $delete = $ads->delete($id);

        if($delete) {
            Alert::success('Selesai', 'Iklan Berhasil Dihapus!');
            return redirect()->route('properties.index');
            // return redirect()->route('properties.index')->with('success', 'Iklan Properti Berhasil di Hapus');
        }
    }
}
