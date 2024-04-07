<?php

namespace App\Http\Controllers;

use App\Models\Musicstore;
use Illuminate\Http\Request;

class MusicstoreController extends Controller
{
    //
    public function index() {
        $musics = Musicstore::latest()->get(); // Call ->get() to execute the query
        return view('store', ['musics' => $musics]);
    }
}
