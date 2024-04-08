<?php

namespace App\Http\Controllers;

use App\Models\Musicstore;
use Illuminate\Http\Request;

class MusicstoreController extends Controller
{
    //
    public function index() {

        $musics = Musicstore::latest()->get(); // Assuming Music is your model for music data
        $merches = (new MerchController())->index()->getData();

        return view('store', compact('musics', 'merches'));



        // $musics = Musicstore::latest()->get(); // Call ->get() to execute the query
        // return view('store', ['musics' => $musics]);
    }
}
