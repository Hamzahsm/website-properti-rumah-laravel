<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Posts\StoreRequest;
use App\Http\Requests\Posts\UpdateRequest;
use App\Models\Post;
use Alert; //sweet alert

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    } 

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titleDelete = 'Hapus Iklan!';
        $textDelete = 'Apakah Anda Yakin ?';
        confirmDelete($titleDelete, $textDelete);

        $posts = Post::all();
        return view('dashboard.manage-panduan-artikel-index', compact('posts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.manage-panduan-artikel-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();

        //check if the form has input file gambar
        if ($request->hasFile('featured_image')){
            //put image in the public storage
            $filePath = Storage::disk('public')->put('images/posts/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        // validasi user id
        $validated['user_id'] = auth()->user()->id;

        //insert only requests that already validated in the StoreRequest
        $create = Post::create($validated);

        if($create) {
            Alert::success('Selesai !', 'Panduan Artikel Berhasil Ditambahkan!');
            return redirect()->route('posts.index')->with('success', 'Iklan Properti Berhasil Ditambahkan!');
        }

        return abort(500);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Post::findOrFail($id);
        return view('dashboard.manage-panduan-artikel-show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Post::findOrFail($id);
        return view('dashboard.manage-panduan-artikel-edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {

        $ads = Post::findOrFail($id);
        $validated = $request->validated();

        //foto gambar utama
        if($request->hasFile('featured_image')) {
            //delete image
            Storage::disk('public')->delete($post->featured_image);

            $filePath = Storage::disk('public')->put('images/posts/featured-images', request()->file('featured_image'));
            $validated['featured_image'] = $filePath;
        }

        $update = $ads->update($validated);

        if($update) {
            Alert::success('Selesai !', 'Panduan Berhasil Diperbarui!');
            return redirect()->route('posts.index')->with('success', 'Iklan Berhasil di Update !');
        }

        return 500;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Post::findOrFail($id);
        //also delete the image 
        Storage::disk('public')->delete($data->featured_image);
        $delete = $data->delete($id);

        if($delete) {
            Alert::success('Selesai !', 'Panduan Artikel Berhasil Dihapus!');
            return redirect()->route('posts.index');
        }
    }
}
