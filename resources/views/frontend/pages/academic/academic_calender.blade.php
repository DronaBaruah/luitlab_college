@extends('frontend.layouts.app')

@section('title', 'Academic Calender | Demo College')

@section('content')

<br>
<div class="container">
    <h3 class="text-center text-light bg-primary py-2" style="border-radius:20px;">
        Academic Calender</h3>
</div>

<div class="container">
    <div class="row"><br>
        <div class="col-md-3 col-sm-6 text-center">
            <a href="upload/academic_calenders/academic_calender.pdf" target="_blank">
                <i style="color:red;font-size:140px;" class="fas fa-file-pdf"></i></a>
            <br>
            <h4 class="py-2">Academic Calender 2025</h4>
        </div>
        <br>
        {{-- <div class="col-md-3 col-sm-6 text-center">
                <a href="upload/facility/1620799511.pdf" target="_blank">
                    <i style="color:red;font-size:140px;" class="fas fa-file-pdf"></i></a>
                    <br>
                    <h4 class="py-2">Facility Maintenance Policies 2018-19</h4>
                </div> --}}
    </div>
</div> <br><br>


@endsection