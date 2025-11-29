@extends('frontend.layouts.app')

@section('title', 'Teaching Staff | Pub Kamrup College')

@section('content')

<div class="container py-5">
    <div class="mg-m">
        <div class="w3-container">
            <section>
                <br><br>
                <div class="w3-container">
                    <h4 style="color:#ee240f;border-bottom:solid 3px teal;font-size: 1.5rem;text-transform:uppercase;font-family:'Times New Roman', Times, serif;text-align:center;">
                        TEACHING STAFF
                    </h4>
                </div>

                <div class="w3-row">
                    <!-- Teacher Card Example -->
                    <div class="w3-col m6 l6 s12 w3-padding">
                        <div class="w3-card 16 text-center" style="background:honeydew;">
                            <div class="container-fluid">
                                <a href="{{ route('staff.show', 1) }}" style="text-decoration: none; color: inherit;">
                                    <center>
                                        <img src="online/attendence/upload/profile/1661410877Barnali Photo.jpeg" 
                                             class="rounded-circle" 
                                             style="width: 100px;height:120px;border: 2px groove #545565;">
                                    </center>
                                    <br>
                                    <center>
                                        <p style="font-size:12px; height:90px;">
                                            <span style="color:#453bc1; font-size:20px;"><strong>ABC</strong></span><br>
                                            <b style="color:green;">Designation: </b>ASSISTANT PROFESSOR<br>
                                            <b style="color:green;">Email: </b>abc@xyz.edu.in
                                        </p>
                                    </center>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Add more teacher cards following the same pattern -->
                    <!-- Example: -->
                    {{-- <!-- 
                    <div class="w3-col m6 l6 s12 w3-padding">
                        <div class="w3-card 16 text-center" style="background:honeydew;">
                            <div class="container-fluid">
                                <a href="{{ route('staff.show', 2) }}" style="text-decoration: none; color: inherit;">
                                    <center>
                                        <img src="path/to/image.jpg" 
                                             class="rounded-circle" 
                                             style="width: 100px;height:120px;border: 2px groove #545565;">
                                    </center>
                                    <br>
                                    <center>
                                        <p style="font-size:12px; height:90px;">
                                            <span style="color:#453bc1; font-size:20px;"><strong>TEACHER NAME</strong></span><br>
                                            <b style="color:green;">Designation: </b>DESIGNATION<br>
                                            <b style="color:green;">Email: </b>email@pubkamrup.edu.in
                                        </p>
                                    </center>
                                </a>
                            </div>
                        </div>
                    </div>
                    --> --}}

                </div>
            </section>
        </div>
    </div>
</div>

@endsection