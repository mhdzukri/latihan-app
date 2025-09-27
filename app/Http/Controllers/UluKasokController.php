<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Order;
use App\Models\Comment;
use App\Models\Payment;
use Illuminate\Http\Request;

class UluKasokController extends Controller
{
    public function index()
    {
        $todoPosts = Post::all();
        $comments = Comment::all();

        return view('ulu-kasok', compact('todoPosts', 'comments'));
    }

    public function viewKontak()
    {
        return view('kontak');
    }

    public function viewInformasi()
    {
        return view('informasi');
    }

    public function viewDetailTicket(Order $order)
    {
        $payment = $order->payment;
        $snap_token = '';

        if($payment == null || $payment->status != 'success') {
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$isProduction = config('midtrans.is_production');
            \Midtrans\Config::$is3ds = config('midtrans.is_3ds');

            $transaction_details = array(
                'order_id' => $order->invoice_number,
                'gross_amount' => $order->total_amount,
            );

            $customer_details = array(
                'first_name'    => $order->customer->name,
                'last_name'     => "",
                'email'         => $order->customer->email,
                'phone'         => $order->customer->phone,
            );

            $item_details = [[
                'id' => $order->orderItem->product->id,
                'price' => $order->orderItem->product->price,
                'quantity' => $order->orderItem->quantity,
                'name' => $order->orderItem->product->product_name,
            ]];

            $transaction = array(
                'transaction_details' => $transaction_details,
                'customer_details' => $customer_details,
                'item_details' => $item_details,
            );

            $snap_token = '';
            try {
                $snap_token = \Midtrans\Snap::getSnapToken($transaction);
                Payment::updateOrCreate(
                    [
                        'order_id' => $order->id
                    ],
                    [
                        'amount' => $order->total_amount,
                        'status' => 'pending',
                        'snap_token' => $snap_token
                    ]);
                }
            catch (\Exception $e) {
                $snap_token = '';
            }

        }

        return view('detail-ticket', compact('order', 'snap_token'));
    }
}
