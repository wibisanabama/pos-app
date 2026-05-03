@extends('layouts.app')

@section('title', 'Order Details')
@section('page_title', 'Order Invoice: ' . $order->invoice)

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h6 class="mb-3">To:</h6>
                <div><strong>{{ $order->customer->name ?? 'Unknown' }}</strong></div>
                <div>{{ $order->customer->address ?? '' }}</div>
                <div>Email: {{ $order->customer->email ?? '' }}</div>
                <div>Phone: {{ $order->customer->phone_number ?? '' }}</div>
            </div>
            <div class="col-sm-6 text-sm-right">
                <div><strong>Invoice:</strong> {{ $order->invoice }}</div>
                <div><strong>Date:</strong> {{ $order->created_at->format('d M Y H:i') }}</div>
            </div>
        </div>

        <div class="table-responsive-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="center">#</th>
                        <th>Item</th>
                        <th class="right">Unit Cost</th>
                        <th class="center">Qty</th>
                        <th class="right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->orderDetails as $index => $detail)
                    <tr>
                        <td class="center">{{ $index + 1 }}</td>
                        <td class="left strong">{{ $detail->product->name ?? 'Deleted Product' }}</td>
                        <td class="right">Rp {{ number_format($detail->price, 0, ',', '.') }}</td>
                        <td class="center">{{ $detail->qty }}</td>
                        <td class="right">Rp {{ number_format($detail->price * $detail->qty, 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-5 ml-auto">
                <table class="table table-clear">
                    <tbody>
                        <tr>
                            <td class="left"><strong>Grand Total</strong></td>
                            <td class="right"><strong>Rp {{ number_format($order->total, 0, ',', '.') }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
        </div>
    </div>
</div>
@endsection
