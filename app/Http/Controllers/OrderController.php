<?php

namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function ship($orderId)
    {
        $order = Order::findOrFail($orderId);

        Mail::to('hello@example.com')->send(new OrderShipped($order));

        return redirect('/');
    }
}
