<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SellProperti\StoreRequest;
use App\Http\Requests\SellProperti\UpdateRequest;
use App\Models\SellProperti;
use Alert; //sweet alert

class SellPropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:properti-dijual-list|properti-dijual-create|properti-dijual-edit|properti-dijual-delete', ['only' => ['index','show']]);
         $this->middleware('permission:properti-dijual-create', ['only' => ['create','store']]);
         $this->middleware('permission:properti-dijual-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:properti-dijual-delete', ['only' => ['destroy']]);
    } 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $titleDelete = 'Hapus Iklan!';
        $textDelete = 'Apakah Anda Yakin ?';
        confirmDelete($titleDelete, $textDelete);

        $data = SellProperti::all();
        return view('dashboard.manage-properti-dijual-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.manage-properti-dijual-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        // return dd($request);
        $validated = $request->validated();

        //foto-utama-properti
        if ($request->hasFile('featured_image')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/properti-dijual/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        //foto_detail_properti_multiple_upload
        if ($request->hasFile('detail_foto_properti')) {
            $images = [];

            foreach($validated['detail_foto_properti'] as $image) {
                $judulProperti = $request->input('judul_properti');
                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image_path = $image->storeAs('properti-dijual/' . $judulProperti , $fileName , 'public');
                // $image_path = $image->storeAs('images' , $fileName , 'public');

                array_push($images, $image_path);
            }

            $validated['detail_foto_properti'] = $images;
        }

        // foto_perusahaan_properti
        if ($request->hasFile('foto_perusahaan_properti')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/properti-dijual/foto-perusahaan', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        // validasi user id
        $validated['user_id'] = auth()->user()->id;

        //insert only requests that already validated in the StoreRequest
        $create = SellProperti::create($validated);

        if($create) {
            Alert::success('Selesai !', 'Berhasil Menambahkan Iklan Baru!');
            return redirect()->route('sells.index')->with('success', 'Iklan Properti Berhasil Ditambahkan!');
        }

        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 
        $data = SellProperti::findOrFail($id);
        return view('dashboard.manage-properti-dijual-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = SellProperti::findOrFail($id);
        return view('dashboard.manage-properti-dijual-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $ads = SellProperti::findOrFail($id);
        $validated = $request->validated();

        //foto gambar utama
        if($request->hasFile('featured_image')) {
            //delete image
            Storage::disk('public')->delete($post->featured_image);

            $filePath = Storage::disk('public')->put('images/properti-dijual/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        //foto_detail_properti_multiple_upload
        if ($request->hasFile('detail_foto_properti')) {
            $images = [];

            foreach($validated['detail_foto_properti'] as $image) {
                $judulProperti = $request->input('judul_properti');
                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image_path = $image->storeAs('properti-dijual/' . $judulProperti , $fileName , 'public');
                // $image_path = $image->storeAs('images' , $fileName , 'public');

                array_push($images, $image_path);
            }

            $validated['detail_foto_properti'] = $images;
        }

        //foto perusahaan
        if($request->hasFile('foto_perusahaan_properti')) {
            //delete image
            Storage::disk('public')->delete($post->foto_perusahaan_properti);

            $filePath = Storage::disk('public')->put('images/properti-dijual/featured-images', request()->file('foto_perusahaan_properti'));
            $validated['foto_perusahaan_properti'] = $filePath;
        }

        $update = $ads->update($validated);

        if($update) {
            Alert::success('Selesai !', 'Iklan Berhasil Diperbarui!');
            return redirect()->route('sells.index')->with('success', 'Iklan Berhasil di Update !');
        }

        return 500;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = SellProperti::findOrFail($id);
        //also delete the image 
        Storage::disk('public')->delete($data->featured_image);
        Storage::disk('public')->delete($data->foto_perusahaan_properti);
        $delete = $data->delete($id);

        if($delete) {
            Alert::success('Selesai !', 'Iklan Berhasil Dihapus!');
            return redirect()->route('sells.index');
        }
    }
}
