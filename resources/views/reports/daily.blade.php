@extends('layouts.app')

@section('title', 'Daily Report')
@section('page_title', 'Daily Report - ' . $today->format('d M Y'))

@section('content')
<div class="row">
    <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Rp {{ number_format($totalRevenue, 0, ',', '.') }}</h3>
                <p>Today's Total Revenue</p>
            </div>
            <div class="icon">
                <i class="fas fa-money-bill-wave"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $orders->count() }}</h3>
                <p>Orders Completed Today</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-bag"></i>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Today's Transactions</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
            <tr>
                <th>Invoice</th>
                <th>Customer</th>
                <th>Time</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{ $order->invoice }}</td>
                    <td>{{ $order->customer->name ?? 'Unknown' }}</td>
                    <td>{{ $order->created_at->format('H:i') }}</td>
                    <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No transactions recorded today.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
