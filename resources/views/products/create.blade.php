@extends('layouts.app')

@section('title', 'Add Product')
@section('page_title', 'Create Product')

@section('content')
<div class="card card-primary">
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" name="stock" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>
@endsection
