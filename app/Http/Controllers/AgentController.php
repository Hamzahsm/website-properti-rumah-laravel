<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\IklanProperti;
use App\Models\IklanPremium;
use App\Models\GetInTouch;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Requests\GetInTouch\StoreRequest;

use App\Http\Controllers\Controller;

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

    public function singleListing(string $id) {
        $ads = IklanProperti::findOrFail($id);
        return view('agents.single-listing', compact('ads')); 
    } 

    public function showIklanPremium(string $id) {
        $ads = IklanPremium::findOrFail($id);
        return view('agents.show-iklan-premium', compact('ads'));
    }

    public function loginAgen(Request $request)
    {

        request()->validate([
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telepon' => ['required', 'string', 'min:5', 'max:255'],
            'domisili' => ['required', 'string', 'min:5', 'max:300']
        ]);

        $user = Agent::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'telepon' => request('telepon'),
            'domisili' => request('domisili'),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->to('/login');
        // return redirect()->to(RouteServiceProvider::HOME);
    }

    public function StoreGetInTouch(StoreRequest $request)
    {
        $validated = $request->validated();

        $create = GetInTouch::create($validated);

        if($create) {
            return redirect()->route('test');
        }

        return abort(500);
    }

}
