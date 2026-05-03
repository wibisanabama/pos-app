@extends('layouts.app')

@section('title', 'POS Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Order</h3>
                <p>Manage Transactions</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="{{ route('orders.index') }}" class="small-box-footer">Go to Orders <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Customer</h3>
                <p>Member Database</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('customers.index') }}" class="small-box-footer">Go to Customers <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner text-white">
                <h3>Category</h3>
                <p>Product Grouping</p>
            </div>
            <div class="icon">
                <i class="fas fa-list"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer" style="color: #ffffff !important;">Go to Categories <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>Product</h3>
                <p>Inventory Items</p>
            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">Go to Products <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>

<!-- Row for Daily Report (Full Width) -->
<div class="row">
    <div class="col-lg-12">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>Daily Report</h3>
                <p>View daily sales summary and revenue</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <a href="{{ route('reports.daily') }}" class="small-box-footer">View Full Report <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
@endsection
