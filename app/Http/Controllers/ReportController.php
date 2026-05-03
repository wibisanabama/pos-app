<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function daily()
    {
        $today = Carbon::today();
        $orders = Order::with('customer')
            ->whereDate('created_at', $today)
            ->get();

        $totalRevenue = $orders->sum('total');

        return view('reports.daily', compact('orders', 'totalRevenue', 'today'));
    }
}
