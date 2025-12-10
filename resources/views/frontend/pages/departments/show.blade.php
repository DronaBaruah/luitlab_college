@extends('frontend.layouts.app')

@section('title', $department . ' | Pub Kamrup College')

@section('content')

<div class="container py-5">
    <!-- Department Header -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #164bb4 0%, #1a5dcd 100%); color: white;">
                <div class="card-body p-5 text-center">
                    <h1 class="card-title mb-3">{{ strtoupper($department) }}</h1>
                    <p class="card-text lead">Faculty of Arts & Science</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Department Overview -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h3 class="mb-4">Department Overview</h3>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        The {{ $department }} Department is committed to providing quality education and fostering academic excellence. 
                        Our dedicated faculty members bring expertise and passion to the classroom, ensuring students receive comprehensive 
                        education in all aspects of the discipline.
                    </p>
                    <hr>
                    <h5 class="mt-4">Department Highlights:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Experienced Faculty Members</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Modern Laboratory Facilities</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Research Opportunities</li>
                        <li class="list-group-item"><i class="fas fa-check text-success"></i> Industry Collaboration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Faculty Members Section -->
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb-4">Faculty Members</h3>
            
            <div class="row" id="facultyContainer">
                <!-- Faculty cards will be dynamically loaded here or added manually -->
                
                <!-- Example Faculty Card 1 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card faculty-card shadow-sm h-100 hover-shadow" style="transition: all 0.3s ease;">
                        <img src="https://via.placeholder.com/300x300?text=Faculty+Photo" class="card-img-top" alt="Faculty Photo">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">Dr. Sample Faculty</h5>
                            <p class="card-text small text-muted mb-2">
                                <strong>Position:</strong> Assistant Professor<br>
                                <strong>Email:</strong> <a href="mailto:faculty@pubkamrup.edu.in">faculty@pubkamrup.edu.in</a><br>
                                <strong>Phone:</strong> +91-XXXXXXXXXX
                            </p>
                            <p class="card-text small">
                                <strong>Specialization:</strong> Subject Specialization<br>
                                <strong>Qualification:</strong> PhD
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <a href="#" class="btn btn-sm btn-primary">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Example Faculty Card 2 -->
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card faculty-card shadow-sm h-100 hover-shadow" style="transition: all 0.3s ease;">
                        <img src="https://via.placeholder.com/300x300?text=Faculty+Photo" class="card-img-top" alt="Faculty Photo">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary">Prof. Another Faculty</h5>
                            <p class="card-text small text-muted mb-2">
                                <strong>Position:</strong> Associate Professor<br>
                                <strong>Email:</strong> <a href="mailto:faculty@pubkamrup.edu.in">faculty@pubkamrup.edu.in</a><br>
                                <strong>Phone:</strong> +91-XXXXXXXXXX
                            </p>
                            <p class="card-text small">
                                <strong>Specialization:</strong> Subject Specialization<br>
                                <strong>Qualification:</strong> PhD
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <a href="#" class="btn btn-sm btn-primary">View Profile</a>
                        </div>
                    </div>
                </div>

                <!-- Add more faculty cards as needed -->
            </div>

            <div class="alert alert-info mt-4" role="alert">
                <strong>Note:</strong> To add faculty members for this department, update the faculty data in the route or create a separate faculty management system.
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h5 class="card-title">Need more information?</h5>
                    <p class="card-text">Contact the department for details about programs, admissions, and opportunities.</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <a href="{{ route('departments') }}" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-arrow-left"></i> Back to Departments
            </a>
        </div>
    </div>
</div>

<style>
    .faculty-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2) !important;
    }
    
    .faculty-card img {
        height: 250px;
        object-fit: cover;
    }
</style>

@endsection
