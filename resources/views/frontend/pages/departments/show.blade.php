@extends('frontend.layouts.app')

@section('title', $department . ' | Pub Kamrup College')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">{{ $department }}</h2>
            <hr>
            
            <!-- Add your department content here -->
            <div class="alert alert-info">
                <p>Department details page for <strong>{{ $department }}</strong> is under development.</p>
                <p>Slug: <code>{{ $slug }}</code></p>
            </div>
            
            <div class="mt-4">
                <a href="{{ route('departments') }}" class="btn btn-primary">Back to Departments</a>
            </div>
        </div>
    </div>
</div>

@endsection
