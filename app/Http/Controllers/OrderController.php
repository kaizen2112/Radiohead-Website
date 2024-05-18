<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrderForm()
    {
        return view('order.create');
    }
    public function storeOrder(Request $request){
        $request->validate([
            'name' => 'required|string',
            'product_name' => 'required|string',
            'product_quantity' => 'required|numeric',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'location' => 'required|string'
        ]);

        $order = new Order();
        $order->name=$request->name;
        $order->product_name=$request->product_name;
        $order->product_quantity=$request->product_quantity;
        $order->email=$request->email;
        $order->phone_number=$request->phone_number;
        $order->location=$request->location;

        $order->save();
        return redirect()->route('homepage');
    }
    public function showOrder()
    {
        $orders = Order::latest()->get();
        return view('order.showorder',[
            'orders' => $orders
        ]);
    }
}
