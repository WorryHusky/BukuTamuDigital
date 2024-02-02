<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landingPage()
    {
        return view('landingpage');
    }

    public function home()
    {
        $guests = Guest::all();
        return view('home', compact('guests'));
    }
}