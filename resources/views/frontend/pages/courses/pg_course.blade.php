@extends('frontend.layouts.app')

@section('title', 'UG Course | Demo College')

@section('content')

<br>
<div class="container">
    <h3 class="text-center text-light bg-primary py-2" style="border-radius:20px;"><strong>PG
            Course</strong></h3>
    <hr>
    <table class="table table-bordered">
        <tr>
            <th>Sl No.</th>
            <th>Subject</th>
            <!-- <th>Total No. Of Seats</th> -->
        </tr>
        <tr>
            <td>1</td>
            <td>MSc. and Int. MSc in Bio-Physics</td>
            <!-- <td>15</td> -->
        </tr>
        <tr>
            <td>2</td>
            <td>Msc. in Physics</td>
            <!-- <td>24</td> -->
        </tr>
        <tr>
            <td>3</td>
            <td>MSc. in Computer Science</td>
            <!-- <td>24</td> -->
        </tr>
        <tr>
            <td>4</td>
            <td>MSc. in Zoology</td>
            <!-- <td>24</td> -->
        </tr>
        <tr>
            <td>5</td>
            <td>M.Voc. in Food Processing & Quality Management</td>
            <!-- <td>24</td> -->
        </tr>
    </table>
    <br>
</div>
<br>
@endsection