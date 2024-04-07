<?php

namespace App\Http\Controllers;

use App\Models\tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //
    // public function index() {

    //     // dd(request('tag')); 
    //     return view('home', [
    //         'tours' => tour::latest()
    //     ]);
    // }

    public function index() {
        $tours = tour::latest()->get(); // Call ->get() to execute the query
        return view('home', ['tours' => $tours]);
    }
}
