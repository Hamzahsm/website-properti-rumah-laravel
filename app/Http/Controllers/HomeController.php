<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IklanProperti;
use App\Models\IklanPremium;
use App\Models\SellProperti;
use App\Models\RentProperti;
use App\Models\GetInTouch;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $ads = IklanProperti::all();
        $premiums = IklanPremium::all();
        $sells = SellProperti::all();
        $rents = RentProperti::all();
        $emails = GetInTouch::all();
        $posts = Post::all();
        return view('dashboard.index', compact('users', 'ads', 'premiums', 'sells', 'rents', 'emails', 'posts'));
    }
}
