<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Musicstore;

class AlbumController extends Controller
{
    //
    public function index()
    {
        $albums = Musicstore::with('songs')->latest()->get();

        foreach ($albums as $album) {
            logger()->info('Album: ', ['title' => $album->album_title, 'songs' => $album->songs->toArray()]);
        }
        return view('albums', compact('albums'));
    }
    public function show($id)
    {
        $album = Musicstore::with('songs')->findOrFail($id);
        logger()->info('Album Details: ', ['album' => $album->toArray()]);
        
        return view('album-details', compact('album'));
    }

}
