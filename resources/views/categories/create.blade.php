@extends('layouts.app')

@section('title', 'Add Category')
@section('page_title', 'Create Category')

@section('content')
<div class="card card-primary">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>
@endsection
