@extends('layouts.app')

@section('title', 'Contact Us')
@section('page_title', 'Contact Information')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4><i class="fas fa-map-marker-alt text-primary"></i> Our Office</h4>
                <p>Jl. Teknologi No. 99, Jakarta, Indonesia</p>

                <h4 class="mt-4"><i class="fas fa-phone text-primary"></i> Phone</h4>
                <p>+62 812-3456-7890</p>

                <h4 class="mt-4"><i class="fas fa-envelope text-primary"></i> Email</h4>
                <p>support@pos-app.com</p>
            </div>
            <div class="col-md-6 d-flex">
                <div class="p-4 bg-light rounded flex-fill">
                    <h5>Need Help?</h5>
                    <p>If you encounter any issues with the POS system, please contact our support team immediately. We are available 24/7 to assist you with any technical problems.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
