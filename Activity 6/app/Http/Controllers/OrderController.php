<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer(Request $request)
    {
        return view('customer', [
            'customerID' => $request->query('customerID', ''), // Default to empty if missing
            'name' => $request->query('name', ''),
            'address' => $request->query('address', '')
        ]);
    }

    public function item(Request $request)
    {
        return view('item', [
            'itemNo' => $request->query('itemNo', ''),
            'name' => $request->query('name', ''),
            'price' => $request->query('price', '')
        ]);
    }

    public function order(Request $request)
    {
        return view('order', [
            'customerID' => $request->query('customerID', ''), // Ensure correct variable names
            'name' => $request->query('name', ''),
            'orderNo' => $request->query('orderNo', ''),
            'date' => $request->query('date', '')
        ]);
    }

    public function orderDetails(Request $request)
    {
        return view('orderdetails', [
            'transNo' => $request->query('transNo', ''),
            'orderNo' => $request->query('orderNo', ''),
            'itemID' => $request->query('itemID', ''),
            'name' => $request->query('name', ''),
            'price' => $request->query('price', ''),
            'qty' => $request->query('qty', '')
        ]);
    }
}
