@extends('frontend.layouts.app')

@section('title', 'UG Course | Demo College')

@section('content')

<br>
<div class="container">
    <h3 class="text-center text-light bg-primary py-2" style="border-radius:20px;"><strong>PROGRAMMES
            OFFERED</strong></h3>
    <br>
    <h4>General Course</h4>
    <hr>
    <h6>
        Three Year Degree Course (TDC) in Arts & Science
        (Honours & Regular)
    </h6>
    <br>
    <h3 class="text-center text-danger">Honors Offered In</h3>
    <table class="table table-bordered text-center">
        <tr>
            <th>Arts Stream</th>
            <th>Science Stream</th>
        </tr>
        <tr>
            <td>
                Assamese
            </td>
            <td>Botany</td>
        </tr>
        <tr>
            <td>English</td>
            <td>Chemistry</td>
        </tr>
        <tr>
            <td>Economics</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Education</td>
            <td>Economics</td>
        </tr>
        <tr>
            <td>Geography</td>
            <td>Geography</td>
        </tr>
        <tr>
            <td>History</td>
            <td>Mathematics</td>
        </tr>
        <tr>
            <td>Mathematics</td>
            <td>Physics</td>
        </tr>
        <tr>
            <td>Philosophy</td>
            <td>Statistics</td>
        </tr>
        <tr>
            <td>Political Science</td>
            <td>Zoology</td>
        </tr>
    </table><br>
    <h4>Vocational Course (under UGC recognised BVoc Scheme)</h4>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Sl No.</th>
            <th>Subject</th>
            <th>Total No. Of Seats</th>
        </tr>
        <tr>
            <td>1</td>
            <td>BVoc in Food Processing and Quality Management (FPQM)</td>
            <td>50</td>
        </tr>
        <tr>
            <td>2</td>
            <td>BVoc in Software Development and System Administration (SDSA)</td>
            <td>50</td>
        </tr>
    </table>
    <br>
    <h4 class="w3-text-red">*Diploma & Certificate Course:</h4>
    <h4>1. Add-On Course (recognised by UGC)</h4>
    <hr>
    <h6>
        i) Advance Diploma in Medical Laboratory Tchnician (ADMLT)<br>
        ii) Certificate Course in Medical Laboratory Technician (CCMLT)<br>
        iii) Diploma in Travel & Tourism Management (DTTM)
    </h6>
    <br>
    <h4>Diploma Course(under community college scheme)</h4>
    <hr>
    <h6>
        i)Diploma in Organic Farming and Post Harvest Management
    </h6>
    <br>
</div>
<br>

@endsection