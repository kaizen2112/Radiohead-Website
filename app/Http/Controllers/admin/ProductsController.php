<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Merch;
use App\Models\Musicstore;


class ProductsController extends Controller
{
    //
    public function productshow() {
        $merches = Merch::latest()->get(); // Call ->get() to execute the query
        $musics = Musicstore::latest()->get(); // Assuming Music is your model for music data

        // dd($request);


        // return view('store', [['merches' => $merches], ['musics' => $musics]]);
        return view('admin.products.products', compact('merches', 'musics'));
    }
    public function create() {
        return view('admin.products.create');
    }
    public function store(Request $request) {
        $formFields = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'availability' => 'boolean',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust max size as needed
            'description' => 'nullable',
            'size' => 'nullable',
            'release_date' => 'nullable|date',
        ]);

        // if($request->hasFile('image')) {
        //     $formFields['image'] = $request->file('image')->store('images', 'public');
        // }

        Merch::create($formFields);

        return redirect('/admin/products')->with('message', 'Product Enlisted Successfully');
    }
    public function edit($id) {
        $merch = Merch::findOrFail($id);
        return view('admin.products.edit', compact('merch'));
    }
    public function update(Request $request, $id) {
        $formFields = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'availability' => 'boolean',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust max size as needed
            'description' => 'nullable',
            'size' => 'nullable',
            'release_date' => 'nullable|date',
        ]);

        $merch = Merch::findOrFail($id);
        $merch->update($formFields);

        return redirect('/admin/products')->with('message', 'Product Updated Successfully');
    }
    public function destroy($id) {
        $merch = Merch::findOrFail($id);
        $merch->delete();

        return redirect('/admin/products')->with('message', 'Product Deleted Successfully');
    }



}
