<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrderSummaryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Order $order)
    {
        if (Auth::user()->id !== $order->user_id) {
            abort(403, 'Unauthorized');
        }
        return view('order-summary', compact('order'));
    }
}
