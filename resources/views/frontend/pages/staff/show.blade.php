@extends('frontend.layouts.app')

@section('title', $staff['name'] . ' | Demo College')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <!-- Staff Photo -->
            <div class="card">
                <img src="{{ asset($staff['image']) }}" class="card-img-top" alt="{{ $staff['name'] }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $staff['name'] }}</h5>
                    <p class="text-muted">{{ $staff['designation'] }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- Staff Details -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $staff['name'] }}</h3>
                    <hr>

                    <div class="mb-3">
                        <h6 class="text-primary"><strong>Designation</strong></h6>
                        <p>{{ $staff['designation'] }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-primary"><strong>Department</strong></h6>
                        <p>{{ $staff['department'] }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-primary"><strong>Email</strong></h6>
                        <p><a href="mailto:{{ $staff['email'] }}">{{ $staff['email'] }}</a></p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-primary"><strong>Phone</strong></h6>
                        <p>{{ $staff['phone'] }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-primary"><strong>Qualification</strong></h6>
                        <p>{{ $staff['qualification'] }}</p>
                    </div>

                    <div class="mb-3">
                        <h6 class="text-primary"><strong>Specialization</strong></h6>
                        <p>{{ $staff['specialization'] }}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('teaching-staff') }}" class="btn btn-primary">Back to Teaching Staff</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection