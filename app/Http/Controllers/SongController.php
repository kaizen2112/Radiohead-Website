<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Songs;

class SongController extends Controller
{
    //
    public function index()
    {
        $songs = Songs::all();
        return view('songs', compact('songs'));
    }
}
