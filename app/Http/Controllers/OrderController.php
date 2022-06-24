<?php

namespace App\Http\Controllers;

use App\Models\Evidence_shipping;
use Illuminate\Http\Order;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    public function downloadPDF()
    {
        $orders = Order::all();
        $pdf = PDF::loadView('pdf',compact('order'));
        return $pdf ->download('Order.pdf');

    }
}
?>