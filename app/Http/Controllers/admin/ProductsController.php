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
        // dd($request->all());
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('products'), $imageName);

        // dd($imageName);

        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'availability' => 'boolean',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000', // Adjust max size as needed
            'description' => 'nullable',
            'size' => 'nullable',
            'release_date' => 'nullable|date',
        ]);

        if($request->hasFile('image')) {
            // $formFields['image'] = $request->file('image')->store('images', 'public');
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
        }
        $merchant = new Merch;
        $merchant->type = $request->type;
        $merchant->name = $request->name;
        $merchant->price = $request->price;
        $merchant->stock = $request->stock;
        $merchant->availability = $request->availability;
        $merchant->image = $imageName;
        $merchant->description = $request->description;
        $merchant->size = $request->size;
        $merchant->release_date = $request->release_date;
        $merchant->save();

        // Merch::create($formFields);

        return redirect('/admin/products')->withSuccess('Product Created Successfully');
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
