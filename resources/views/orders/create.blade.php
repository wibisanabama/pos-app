@extends('layouts.app')

@section('title', 'Create Order')
@section('page_title', 'Create Order')

@section('content')
<div class="card card-primary">
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Customer</label>
                <select name="customer_id" class="form-control" required>
                    <option value="">-- Select Customer --</option>
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Product</label>
                <select name="product_id" class="form-control" required>
                    <option value="">-- Select Product --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} (Rp {{ number_format((int)$product->price, 0, ',', '.') }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="qty" class="form-control" value="1" min="1" required>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Process Order</button>
            <a href="{{ route('orders.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>
@endsection
