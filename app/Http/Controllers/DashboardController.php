<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (Gate::allows('admin')) {
            $orders = Order::paginate(10);
        } else {
            $orders = Order::where('user_id', auth()->user()->id)->paginate(10);
        }
        return view('dashboard', compact('orders'));
    }
}
