<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Musicstore;
use Illuminate\Http\Request;


class MerchController extends Controller
{
    //
    public function index() {
        $merches = Merch::latest()->get(); // Call ->get() to execute the query
        $musics = Musicstore::latest()->get(); // Assuming Music is your model for music data


        // return view('store', [['merches' => $merches], ['musics' => $musics]]);
        return view('store', compact('merches', 'musics'));
    }
    // public function showalbum(Musicstore $musics) {
    //     // $musics = Musicstore::find($album->id)->musics;
    //     return view('showalbum', ['musics'=>$musics]);
    // }

    public function showalbum($id) {
        $musics = Musicstore::findOrFail($id);

        // dd($musics);
        return view('showalbum', ['music' => $musics]);
    }
    
}
