<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;

class AdminToursController extends Controller
{
    //
    public function tourshow() {
        // $merches = Merch::latest()->get(); // Call ->get() to execute the query
        // $musics = Musicstore::latest()->get(); // Assuming Music is your model for music data

        // dd($request);


        // return view('store', [['merches' => $merches], ['musics' => $musics]]);
        // return view('admin.products', compact('merches', 'musics'));
        $tours = Tour::latest()->get();
        return view('admin.tours', compact('tours'));
    }
}
