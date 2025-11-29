@extends('frontend.layouts.app')

@section('title', 'Departments | Pub Kamrup College')

@section('content')

<br>

    <div class="container">
        <h3 style="font-family:'Times New Roman', Times, serif;border-bottom: 1px solid sienna;">All Departments</h3>
    </div>
<div class="container">
    <div class="row">
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<a href="{{ route('department.show', 'assamese') }}" style="text-decoration: none;">
<div class="card online w3-card" style="background:#164bb4;height: 80px; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Assamese</span></center>
</div>
</div>
</a>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<a href="{{ route('department.show', 'botany') }}" style="text-decoration: none;">
<div class="card online w3-card" style="background:#164bb4;height: 80px; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Botany</span></center>
</div>
</div>
</a>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<a href="{{ route('department.show', 'biophysics') }}" style="text-decoration: none;">
<div class="card online w3-card" style="background:#164bb4;height: 80px; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Bio-Physics</span></center>
</div>
</div>
</a>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<a href="{{ route('department.show', 'bba') }}" style="text-decoration: none;">
<div class="card online w3-card" style="background:#164bb4;height: 80px; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">BBA</span></center>
</div>
</div>
</a>
</div>
{{-- <div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f5" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="c5d7d236a0e925336d31f14e4eb00c6209cfe56970a4bf97b0ee0846b6fd134b8acb68270aba5344ef800bb8687e6d50">
<button type="button" class="dept-btn" data-form="f5" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">BCA</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f6" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="fc90f0d23c6bc6ad6fd92618ac19763bbc9df8efa9c93e4b13dbd97df78f17c178b73615d560ada95be2ec04b3e3cb7eb956d9f93e3b98667efd05d11243a01b">
<button type="button" class="dept-btn" data-form="f6" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Chemistry</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f7" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="f6b865dc5af025362c6a2452166c5668e1e827307290ef0ebab76cfc872702aa1c5f83e6323306c5d6468f98cabf3e88a94dfbd50905fe704423caa777c3ea2f">
<button type="button" class="dept-btn" data-form="f7" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Computer Science</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f8" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="ae8f6c0dd461bef3cb2a7ce9a552f8e7d6170068883794603d991ff8bd60eb6e687a67eb9006114475c7dddfe0f591be4b15f5ff4952b5851316806e1c18cad5">
<button type="button" class="dept-btn" data-form="f8" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Economics</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f9" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="b00dac5eb604fc70c477f5a6604b4da25c5d1b8a8207b4d9f903bcac45164a1d5bfe8c6aa4ac3fe4487b4f27b59e87636001edb8384c4cc511b20749e278a908">
<button type="button" class="dept-btn" data-form="f9" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Education</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f10" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="185dcfb9de37884ed9b26e85aea2b7a7dae804b7053de4a72efd58df4b52198928b30a04566ec083a0ce6c13468e182e8fa4bcca968470731756c83153cd8801">
<button type="button" class="dept-btn" data-form="f10" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Software Developement and System Administration</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f11" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="8e78b920240716999cdb069f20819734cf99661aa3b3ffde4b445d07624f84c53346aa5ed9eb9d45185d2e4c3e898533250fcbfff6c937144a384619d0424f39">
<button type="button" class="dept-btn" data-form="f11" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">English</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f12" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="c5d7d236a0e925336d31f14e4eb00c62f5472071e26655f54b2cd3b03c0980cbe5cc014849c4090368f9f1776ef125f40528e962c837a6f81948f73cfc43ab3a">
<button type="button" class="dept-btn" data-form="f12" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Geography</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f13" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="4b0b583bc9e17ec1e4421ec8350f0ba73210362d035487d3866ea95e4cb073ab069911d63f50d20ba69644b93cd55649b12b0f3c7dd69e5d8847acc7f8874c2b">
<button type="button" class="dept-btn" data-form="f13" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">History</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f14" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="fc90f0d23c6bc6ad6fd92618ac19763b6d8b968c44f2872fece8d22b3e3228e47a36846bfae7267bba06853ace18b3f43e681d24a8f546ba075a1ae03364dd29">
<button type="button" class="dept-btn" data-form="f14" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Mathematics</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f15" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="8c1c152ea846d11ca5bf45c81026094989c55f548d20b21d425dc26724298cf530260446333c7fa88f997eef872ac523f0a828f4876cb7e7be44702caf9c8342">
<button type="button" class="dept-btn" data-form="f15" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Philosophy</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f16" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="aa5dccc60242d5e7cca89c9cfe4dd98d583adf01f0a0400800abcbb32ba1a5bafa2a394d6fb223a2ef265cb2030b3a51e154b2b3686dad1f456e5e560c5f4d39">
<button type="button" class="dept-btn" data-form="f16" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Physics</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f17" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="69a24475132f7acdd0bb544341e88abdc7c24ab123f0cebedca5904f728a78f06038c8b78de386db1b7709becd86dbc8ff1767a9e6291f786c8581ec391d0bf6">
<button type="button" class="dept-btn" data-form="f17" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Political Science</span></center>
</div>
</button>
</form>
</div>
</div>
<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f18" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="d22f243d25cee12f27783957a183a684b251f971f50ad29939ced4e43bbe3dd1a9f8ce7694bde3137dbd12d1bc98a4cf7cba1ea9eeb0e51c71108459c9343aaf">
<button type="button" class="dept-btn" data-form="f18" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Statistics</span></center>
</div>
</button>
</form>
</div>
</div>

<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f19" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="8c1c152ea846d11ca5bf45c81026094957e0f11d8923471af4a08451cb8a43afe9deb2c414133e9f44cd0ec8be8cef435dc808541f9dfc7386e8136ea572fe07">
<button type="button" class="dept-btn" data-form="f19" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Zoology</span></center>
</div>
</button>
</form>
</div>
</div>

<div class="col-md-12 col-lg-3 col-sm-12" style="margin-bottom:20px">
<div class="card online w3-card" style="background:#164bb4;height: 80px">
<form id="f20" method="post" name="redirect" action="Academic-Departments.php">
    <input type="hidden" name="encRequest" value="8c1c152ea846d11ca5bf45c8102609498a9fe1ae99d5cfc64f437f3eb25b1872d5c199b15d684ac3c17ce889209a467ccb83e8263b6969e5a3b91c22b32574e7">
<button type="button" class="dept-btn" data-form="f20" style="width: 100%; border: none; background: none; cursor: pointer;">
<div class="card-body" style="padding: 20px">
<center><span style="margin:5px; text-decoration:none; color:white;">Food Processing and Quality Management</span></center>
</div>
</button>
</form>
</div>
</div> --}}
    

                          
                            </div>
</div>
    <br><br>

@endsection