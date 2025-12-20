@extends('frontend.layouts.app')

@section('title', 'Higher Secondary Course | Demo College')

@section('content')

<br>
<div class="container">
    <h3 class="text-center text-light bg-primary py-2" style="border-radius:20px;"><strong>PROGRAMMES OFFERED IN +2 LEVEL</strong></h3>
    <br>
    <h4 class="text-danger"><strong>Higher Secondary Course (10 + 2) :</strong></h4>
    <h6>The following Programmes of study are Offered in the College</h6>
    <ol type="a" style="line-height:2;letter-spacing:1px;">
        <li>
            Higher Secondary Course (10+2) in Arts
        </li>
        <li>
            Higher Secondary Course (10+2) in Science<br>
            <p style="text-indent:50px;">
                This two year Course is to be undertaken with following Subject combination -
            </p>
            <ol type="i" style="line-height:2;letter-spacing:1px;">
                <li>
                    <strong>Compulsory Subjects:</strong> MIL (Assamese), English & Environmental Science in both the streams- Arts & Science
                </li>
                <li>
                    <strong>Elective Subjects :</strong> Every Student has to offer four elective subjects from the following combination
                    <br>
                    <ol type="a" style="line-height:2;letter-spacing:1px;">
                        <li><strong>Arts stream :</strong> Economics, Education, Political Science, Logic & Philosophy, Advance Assamese/
                            History/ Mathematics, Geography/Statistics, Computer Science.</li>
                        <li>
                            <strong>Science stream :</strong> Physics, Chemistry/Logic & Philosophy, Mathematics, Biology/ Economics,
                            Geography/ Statistics, Introductory Computer Science
                        </li>
                    </ol>
                </li>
            </ol>
        </li>
    </ol><br><br>
    <h3>Intake capacity in 1<sup>st</sup> year</h3>
    <hr>
    <br>
    <table class="table table-bordered text-center table-responsive-sm">
        <tr>
            <th>SL. NO</th>
            <th>CLASSES</th>
            <th>INTAKE CAPACITY</th>
        </tr>
        <tr>
            <td>1</td>
            <td>H.S (ARTS)</td>
            <td>200</td>
        </tr>
        <tr>
            <td>2</td>
            <td>H.S (SCIENCE)</td>
            <td>100</td>
        </tr>
    </table>
</div>
<br>
@endsection