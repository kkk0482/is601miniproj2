<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
//use App\Cars;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $user = Auth::user();
        //$user = User::find(3);
        //$user->delete();
        //$users = User::all();
        dd($user->cars());
        /*
                $users = User::where('id', 1)
                    ->orderBy('name', 'desc')
                    ->take(2)
                    ->get();
                dd($users->count());
                */
        return view('test', ['variables' => $user]);
    }
}
