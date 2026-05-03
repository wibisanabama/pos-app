@extends('layouts.app')

@section('title', 'About')
@section('page_title', 'About This App')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="text-center mb-5">
            <i class="fas fa-cash-register fa-4x text-primary mb-3"></i>
            <h2>POS Application</h2>
            <p class="text-muted">Version 1.0.0</p>
        </div>

        <p class="lead text-center">
            This Point of Sales (POS) application is designed to help small and medium businesses manage their daily transactions, inventory, and customers efficiently.
        </p>

        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <i class="fas fa-tachometer-alt fa-3x text-info mb-2"></i>
                <h5>Fast Performance</h5>
                <p class="text-muted">Built with Laravel, providing lightning-fast response times for quick checkouts.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-shield-alt fa-3x text-success mb-2"></i>
                <h5>Secure Data</h5>
                <p class="text-muted">Your sales and customer data are stored safely with robust database security.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-chart-line fa-3x text-warning mb-2"></i>
                <h5>Real-time Reports</h5>
                <p class="text-muted">Monitor your daily income and sales directly from the dashboard and reports menu.</p>
            </div>
        </div>
    </div>
</div>
@endsection
