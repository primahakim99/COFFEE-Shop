<?php

namespace App\Http\Controllers;

use App\Models\Evidence_shipping;
use Illuminate\Http\Request;
use PDF;

class OrderController extends Controller
{
    public function downloadPDF()
    {
        $order = ::all();
        $pdf = PDF::loadView('pdf',compact('order'));
        return $pdf->stream();

    }
}
?>