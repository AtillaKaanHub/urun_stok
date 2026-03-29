<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = $request->cart;

    $total = 0;

    foreach ($cart as $item) {
        $total += $item['price'] * $item['qty'];
    }

    $order = Order::create([
        'order_code' => 'ORD' . rand(10000, 99999),
        'total_price' => $total,
        'status' => 'hazırlanıyor',
        'items' => $cart
    ]);

    return response()->json([
        'order_code' => $order->order_code
    ]);
    }

    public function show($code)
    {
        $order = Order::where('order_code', $code)->firstOrFail();

        return view('order', compact('order'));
    }
}
