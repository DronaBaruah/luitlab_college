<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg main-nav sticky-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                style="background-color: white;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        About Us
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('about')}}">About</a></li>
                        {{-- <li><a class="dropdown-item" href="#history">History</a></li> --}}
                        <li><a class="dropdown-item" href="{{route('vision-and-mission')}}">Vision & Mission</a></li>
                        <li><a class="dropdown-item" href="{{ route('contact')}}">Contact Us</a></li>
                        <li><a class="dropdown-item" href="{{ route('facilities')}}">Facilities</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Administration
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#principal">Principal's Desk</a></li>
                        <li><a class="dropdown-item" href="#governing">Governing Body</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Academic
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('admission')}}">Admission</a></li>
                        <li><a class="dropdown-item" href="{{ route('calender') }}">Academic Calendar</a></li>
                        <li><a class="dropdown-item" href="{{route('instructions')}}">General Instructions</a></li>
                        <li><a class="dropdown-item" href="{{route('fee-details')}}">Fee Details</a></li>
                        <li><a class="dropdown-item" href="{{route('scholarships')}}">Scholarships and Awards</a></li>
                        <li><a class="dropdown-item" href="{{route('rules-and-regulations')}}">Rules and Regulations</a></li>
                        <li><a class="dropdown-item" href="{{route('examinations')}}">Examinations</a></li>
                        <li><a class="dropdown-item" href="{{route('syllabus')}}">Syllabus</a></li>
                        <li><a class="dropdown-item" href="{{route('affiliation')}}">Affiliation</a></li>
                        <li><a class="dropdown-item" href="{{route('research_and_innovation')}}">Research and Innovation</a></li>
                        <li><a class="dropdown-item" href="{{route('results')}}">Results</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#departments">Departments</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Staff
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#teaching">Teaching Staff</a></li>
                        <li><a class="dropdown-item" href="#non-teaching">Non-Teaching Staff</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('hs-course') }}">Higher Secondary</a></li>
                        <li><a class="dropdown-item" href="{{ route('ug-course') }}">Under Graduate</a></li>
                        <li><a class="dropdown-item" href="{{ route('pg-course') }}">Post Graduate</a></li>
                        <li><a class="dropdown-item" href="{{ route('certificate-course') }}">Certificate Course</a></li>
                        <li><a class="dropdown-item" href="{{ route('self-finance-course') }}">Self Finance Course</a></li>
                        <li><a class="dropdown-item" href="{{ route('kkhsou') }}">KKHSOU</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Publications
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#journal">Journal</a></li>
                        <li><a class="dropdown-item" href="#newsletter">Newsletter</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Library
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#books">Books</a></li>
                        <li><a class="dropdown-item" href="#e-resources">E-Resources</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cell">Cell</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        IQAC
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#aqar">AQAR</a></li>
                        <li><a class="dropdown-item" href="#ssr">SSR</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nirf">NIRF</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aishe">AISHE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aria">ARIA</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
