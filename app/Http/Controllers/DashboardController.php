<?php

namespace App\Http\Controllers;
use Dymantic;

use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about-us');
    }
    public function galery(){
        $profile = \Dymantic\InstagramFeed\Profile::where('username', 'bonchanboncabe')->first();

        dd($profile);
    }

}
