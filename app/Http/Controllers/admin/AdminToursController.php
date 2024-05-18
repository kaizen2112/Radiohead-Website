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
        return view('admin.tours.tours', compact('tours'));
    }
    public function tourcreate() {
        return view('admin.tours.createtour');
    }

    public function tourstore(Request $request) {
        $request->validate([
            'tour_title' => 'required|string|max:255',
            'tour_description' => 'required|string',
            'ticket_price' => 'required|numeric',
            'ticket_stock' => 'required|integer',
            'tour_date' => 'required|date',
            'location' => 'required|string|max:255',
            'theatre' => 'required|string|max:255',
            'tour_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000', // Adjust max size as needed
        ]);

        if($request->hasFile('tour_image')) {
            // $formFields['tour_image'] = $request->file('tour_image')->store('images', 'public');
            $imageName = time().'.'.$request->tour_image->extension();
            $request->tour_image->move(public_path('tours'), $imageName);
        }

        // Tour::create($formFields);
        $tour = new Tour;
        $tour->tour_title = $request->tour_title;
        $tour->tour_description = $request->tour_description;
        $tour->ticket_price = $request->ticket_price;
        $tour->ticket_stock = $request->ticket_stock;
        $tour->tour_date = $request->tour_date;
        $tour->location = $request->location;
        $tour->theatre = $request->theatre;
        $tour->tour_image = $imageName;
        $tour->save();


        return redirect('/admin/tours')->with('message', 'Tour Enlisted Successfully');
    }
    public function turedit($id) {
        $tour = Tour::findOrFail($id);
        return view('admin.tours.edittour', compact('tour'));
    }
    public function tourupdate(Request $request, $id) {
         $request->validate([
            'tour_title' => 'required|string|max:255',
            'tour_description' => 'required|string',
            'ticket_price' => 'required|numeric',
            'ticket_stock' => 'required|integer',
            'tour_date' => 'required|date',
            'location' => 'required|string|max:255',
            'theatre' => 'required|string|max:255',
            'tour_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000', // Adjust max size as needed
        ]);

        if($request->hasFile('tour_image')) {
            // $formFields['tour_image'] = $request->file('tour_image')->store('images', 'public');
            $imageName = time().'.'.$request->tour_image->extension();
            $request->tour_image->move(public_path('tours'), $imageName);
        }

        $tour = Tour::findOrFail($id);
        // $tour->update($formFields);

        $tour = new Tour;
        $tour->tour_title = $request->tour_title;
        $tour->tour_description = $request->tour_description;
        $tour->ticket_price = $request->ticket_price;
        $tour->ticket_stock = $request->ticket_stock;
        $tour->tour_date = $request->tour_date;
        $tour->location = $request->location;
        $tour->theatre = $request->theatre;
        $tour->tour_image = $imageName;
        $tour->save();

        return redirect('/admin/tours')->with('message', 'Tour Updated Successfully');
    }
    public function tourdestroy($id) {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect('/admin/tours')->with('message', 'Tour Deleted Successfully');
    }
}
