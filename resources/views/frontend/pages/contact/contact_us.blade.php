@extends('frontend.layouts.app')

@section('title', 'Contact Us | Demo College')

@section('content')

<div class="container" style="padding:4%">
	<div class="row">
		<div class="col-md-4 con" style="background-color: lightblue;">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
				<h2 class="text-light">Contact Us</h2>
				<h4 class="text-light"></h4>
				<h5>
					<address>
						<small class="text-light">
							<h6>Visit us at:</h6>
							<h6>Demo College <br>Baihata Chariali, Kamrup, Assam 781381</h6><br>

							<h6>Contact-no:</h6>
							<h6>+91 8638375658,+91 9435409567</h6> <br>
							<h6>Email-id :</h6>
							<h6><a href="mailto:pubkamrupcollege@gmail.com">pubkamrupcollege@gmail.com</a></h6>
						</small>
					</address>
				</h5>
			</div>
		</div>
		<div class="col-md-8 border border-info p-4">
			<div class="contact-form">
				<form method="post" enctype="multipart/form-data" action="/contact.php">
					<div class="form-group">
						<label for="name">Name:&nbsp;&nbsp;&nbsp;<span class="error">* </span></label>
						<input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
					</div>
					<div class="form-group">
						<label for="subject">Type:&nbsp;&nbsp;&nbsp;<span class="error">* </span></label>
						<select class="form-control custom-select" name="subject" required>
							<option selected disabled>Select Type</option>
							<option>Complaint</option>
							<option>Feedback</option>
							<option>Sales</option>
							<option>Suggestion</option>
							<option>Others</option>
						</select>
					</div>
					<div class="form-group">
						<label for="email">Email:&nbsp;&nbsp;&nbsp;</label>
						<input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email">
					</div>
					<div class="form-group">
						<label for="cn">Contact:&nbsp;&nbsp;&nbsp;<span class="error">* </span></label>
						<input class="form-control" maxlength="10" type="text" placeholder="Enter Your Number" name="cn" id="cn" required>
					</div>
					<div class="form-group">
						<label for="comment">Message:&nbsp;&nbsp;&nbsp;<span class="error">* </span></label>
						<textarea class="form-control" rows="5" id="comment" name="comment" maxlength="100" placeholder="Max limit:100 letters" required></textarea><span id='remainingC'></span>
					</div>
					<div class="form-group">
						<button type="submit" id="send" name="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
<br>
@endsection