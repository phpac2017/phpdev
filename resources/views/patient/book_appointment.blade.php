@extends('layouts.applayout')
@section('content')
<section class="login-bg patient_login_bg">
	<div id="wrapper">
	<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<aside class="leftsidebar refinesearch">
				<h5>Refine Search</h5>
				<label for="choose_date">Choose Date:</label>
				<select class="form-control" id="choose_date">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
				
				<label for="choose_date">Choose Time:</label>
				<select class="form-control" id="choose_date">
					<option>10.10 AM</option>
					<option>12.10 AM</option>
					<option>02.10 PM</option>
					<option>14.10 PM</option>
				</select>
				
				<label for="choose_date">Consultation Fees:</label>
				<select class="form-control" id="choose_date">
					<option>$20</option>
					<option>$40</option>
					<option>$60</option>
					<option>$70</option>
				</select>
				
				<label for="choose_date">Languages:</label>
				<select class="form-control" id="choose_date">
					<option>English</option>
					<option>Spanish</option>
					<option>Japanese</option>
					<option>French</option>
				</select>
				
				<label for="choose_date">Gender:</label>
				<select class="form-control" id="choose_date">
					<option>Male</option>
					<option>Female</option>
				</select>
				
				<h5>Other Specialities</h5>
				<ul>
					<li><a href="#">Gastroenterology</a></li>
					<li><a href="#">Dermatology</a></li>
					<li><a href="#">Neurology</a></li>
					<li><a href="#">Urology</a></li>
					<li><a href="#">Endocrinology</a></li>
				</ul>
			</aside>
		</div><!-- /#sidebar-wrapper -->
	<!-- Page Content -->
		<div id="page-content-wrapper">
			<aside class="right-sidebar">
				<div class="menu-toggle-icon">
					<div class="navbar-header fixed-brand">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button>
					</div><!-- navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button></li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul class="breadcrumbs-left">
						<li>Home</li>
						<li><a href="{{ url('patient/get_appointment') }}">Get Appointment</a></li>
					</ul>
					<ul class="breadcrumbs-right">
						<li><a href="#">Self Assesment</a></li>
						<li><a href="#">Appointment</a></li>
						<li><a href="#" class="active">Consult Now</a></li>
					</ul>
				</div>
				
				<div class="dr_schedule_appointment">
					<div class="row">
						<div class="col-lg-9 col-md-12">
							<div class="dr-appointment-details">
								<div class="row">
									<div class="col-lg-7 col-md-8 col-sm-12">
										<div class="dr-details">
											<div class="row">
												<div class="col-md-3 col-sm-4 col-xs-4">
													<img src="{{ asset('images/dr_img.jpg') }}" alt="" class="dr-img" />
												</div>
												<div class="col-md-9 col-sm-8 col-xs-8">
													<h5>Dr.Rajni Bhardwaj, M.D</h5>
													<p><span>Speciality</span> : Dental 10 years</p>
													<p><span>Languages</span> : English and Chinese</p>
													<p><span>Ratings</span> : <img src="{{ asset('images/dr_star.png') }}" alt="" /></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-4 col-sm-12">
										<div class="dr-consult-details">
											<div class="available">
												<div class="form-group">
													<label for="sel1">Available Today:</label>
													<select class="form-control" id="sel1">
														<option>10.00 am  -  11.00 am</option>
														<option>12.00 pm  -  01.00 pm</option>
														<option>07.00 pm  -  08.00 pm</option>
														<option>08.00 pm  -  09.00 pm</option>
													</select>
												</div>
											</div>
											<h5>Consultation Fee $11400</h5>
											<button class="book_appointment">Self Assesment</button>
											<button class="book_appointment">Book Appointment</button>
											<button class="consult_now">Consult Now</button>
										</div>
									</div>
								</div>
								
								<div class="appointment_opendiv" style="display: none;">
									<ul class="progressbar">
										<li class="active">Appointment Info</li>
										<li class="active">Patient Info</li>
										<li class="active">Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<div class="consultation_summary">
										<h5>Consultation Summary</h5>
										<div class="row">
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Online Consultation Fee</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11400</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Internet Handling Fee</h6>
													<span>(Inclusive of all taxes)</span>
												</div>
												<div class="col-xs-4 text-right">
													<p>$40</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Amount Payable</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11440</p>
												</div>
											</div>
										</div>
									</div>
									
									<div class="payment_options">
										<h5>Payment Options <span>(Choose any one)</span></h5>
										<div class="radio-box">
											<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Debit Card / Credit Card / Netbanking</label>
										</div>
										<div class="radio-box">
											<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">PayTM Wallet</label>
										</div>
										<a href="#" class="patient_payment">Proceed a Payment</a>
									</div>
								</div>
							</div>
							
							<div class="dr-appointment-details">
								<div class="row">
									<div class="col-lg-7 col-md-8 col-sm-12">
										<div class="dr-details">
											<div class="row">
												<div class="col-md-3 col-sm-4 col-xs-4">
													<img src="{{ asset('images/dr_img.jpg') }}" alt="" class="dr-img" />
												</div>
												<div class="col-md-9 col-sm-8 col-xs-8">
													<h5>Dr.Rajni Bhardwaj, M.D</h5>
													<p><span>Speciality</span> : Dental 10 years</p>
													<p><span>Languages</span> : English and Chinese</p>
													<p><span>Ratings</span> : <img src="{{ asset('images/dr_star.png') }}" alt="" /></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-4 col-sm-12">
										<div class="dr-consult-details">
											<div class="available">
												<div class="form-group">
													<label for="sel1">Available Today:</label>
													<select class="form-control" id="sel1">
														<option>10.00 am  -  11.00 am</option>
														<option>12.00 pm  -  01.00 pm</option>
														<option>07.00 pm  -  08.00 pm</option>
														<option>08.00 pm  -  09.00 pm</option>
													</select>
												</div>
											</div>
											<h5>Consultation Fee $11400</h5>
											<button class="book_appointment">Self Assesment</button>
											<button class="book_appointment">Book Appointment</button>
											<button class="consult_now">Consult Now</button>
										</div>
									</div>
								</div>
								
								<div class="appointment_opendiv" style="display: none;">
									<ul class="progressbar">
										<li class="active">Appointment Info</li>
										<li class="active">Patient Info</li>
										<li class="active">Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<div class="consultation_summary">
										<h5>Consultation Summary</h5>
										<div class="row">
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Online Consultation Fee</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11400</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Internet Handling Fee</h6>
													<span>(Inclusive of all taxes)</span>
												</div>
												<div class="col-xs-4 text-right">
													<p>$40</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Amount Payable</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11440</p>
												</div>
											</div>
										</div>
									</div>
									
									<div class="payment_options">
										<h5>Payment Options <span>(Choose any one)</span></h5>
										<div class="radio-box">
											<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Debit Card / Credit Card / Netbanking</label>
										</div>
										<div class="radio-box">
											<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">PayTM Wallet</label>
										</div>
										<a href="#" class="patient_payment">Proceed a Payment</a>
									</div>
								</div>
							</div>
							
							<div class="dr-appointment-details">
								<div class="row">
									<div class="col-lg-7 col-md-8 col-sm-12">
										<div class="dr-details">
											<div class="row">
												<div class="col-md-3 col-sm-4 col-xs-4">
													<img src="{{ asset('images/dr_img.jpg') }}" alt="" class="dr-img" />
												</div>
												<div class="col-md-9 col-sm-8 col-xs-8">
													<h5>Dr.Rajni Bhardwaj, M.D</h5>
													<p><span>Speciality</span> : Dental 10 years</p>
													<p><span>Languages</span> : English and Chinese</p>
													<p><span>Ratings</span> : <img src="{{ asset('images/dr_star.png') }}" alt="" /></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-4 col-sm-12">
										<div class="dr-consult-details">
											<div class="available">
												<div class="form-group">
													<label for="sel1">Available Today:</label>
													<select class="form-control" id="sel1">
														<option>10.00 am  -  11.00 am</option>
														<option>12.00 pm  -  01.00 pm</option>
														<option>07.00 pm  -  08.00 pm</option>
														<option>08.00 pm  -  09.00 pm</option>
													</select>
												</div>
											</div>
											<h5>Consultation Fee $11400</h5>
											<button class="book_appointment">Self Assesment</button>
											<button class="book_appointment">Book Appointment</button>
											<button class="consult_now">Consult Now</button>
										</div>
									</div>
								</div>
								
								<div class="appointment_opendiv" style="display: none;">
									<ul class="progressbar">
										<li class="active">Appointment Info</li>
										<li class="active">Patient Info</li>
										<li class="active">Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<div class="consultation_summary">
										<h5>Consultation Summary</h5>
										<div class="row">
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Online Consultation Fee</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11400</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Internet Handling Fee</h6>
													<span>(Inclusive of all taxes)</span>
												</div>
												<div class="col-xs-4 text-right">
													<p>$40</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Amount Payable</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11440</p>
												</div>
											</div>
										</div>
									</div>
									
									<div class="payment_options">
										<h5>Payment Options <span>(Choose any one)</span></h5>
										<div class="radio-box">
											<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Debit Card / Credit Card / Netbanking</label>
										</div>
										<div class="radio-box">
											<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">PayTM Wallet</label>
										</div>
										<a href="#" class="patient_payment">Proceed a Payment</a>
									</div>
								</div>
							</div>
							
							<div class="dr-appointment-details">
								<div class="row">
									<div class="col-lg-7 col-md-8 col-sm-12">
										<div class="dr-details">
											<div class="row">
												<div class="col-md-3 col-sm-4 col-xs-4">
													<img src="{{ asset('images/dr_img.jpg') }}" alt="" class="dr-img" />
												</div>
												<div class="col-md-9 col-sm-8 col-xs-8">
													<h5>Dr.Rajni Bhardwaj, M.D</h5>
													<p><span>Speciality</span> : Dental 10 years</p>
													<p><span>Languages</span> : English and Chinese</p>
													<p><span>Ratings</span> : <img src="{{ asset('images/dr_star.png') }}" alt="" /></p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-4 col-sm-12">
										<div class="dr-consult-details">
											<div class="available">
												<div class="form-group">
													<label for="sel1">Available Today:</label>
													<select class="form-control" id="sel1">
														<option>10.00 am  -  11.00 am</option>
														<option>12.00 pm  -  01.00 pm</option>
														<option>07.00 pm  -  08.00 pm</option>
														<option>08.00 pm  -  09.00 pm</option>
													</select>
												</div>
											</div>
											<h5>Consultation Fee $11400</h5>
											<button class="book_appointment">Self Assesment</button>
											<button class="book_appointment">Book Appointment</button>
											<button class="consult_now">Consult Now</button>
										</div>
									</div>
								</div>
								
								<div class="appointment_opendiv" style="display: none;">
									<ul class="progressbar">
										<li class="active">Appointment Info</li>
										<li class="active">Patient Info</li>
										<li class="active">Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<div class="consultation_summary">
										<h5>Consultation Summary</h5>
										<div class="row">
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Online Consultation Fee</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11400</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Internet Handling Fee</h6>
													<span>(Inclusive of all taxes)</span>
												</div>
												<div class="col-xs-4 text-right">
													<p>$40</p>
												</div>
											</div>
											<div class="consultation_fee">
												<div class="col-xs-8">
													<h6>Amount Payable</h6>
												</div>
												<div class="col-xs-4 text-right">
													<p>$11440</p>
												</div>
											</div>
										</div>
									</div>
									
									<div class="payment_options">
										<h5>Payment Options <span>(Choose any one)</span></h5>
										<div class="radio-box">
											<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Debit Card / Credit Card / Netbanking</label>
										</div>
										<div class="radio-box">
											<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">PayTM Wallet</label>
										</div>
										<a href="#" class="patient_payment">Proceed a Payment</a>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-lg-3 col-md-12">
							<div class="health-tips">
								<h5>Top Health Tips</h5>
								<ul>
									<li>5 Foods that Ruin Your TEETH Without Your Knowledge, Every Day!</li>
									<li>4 Foods That Strengthen Your Child’s TeethMouthwash - Should You Really Use Them?</li>
									<li>Bad Breath - 5 Reasons You Might Suffer From It And What Can You Do...</li>
									<li>How to Heal Tooth Cavities Naturally?</li>
									<li>6 Tips to Prevent Teeth Stains</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-copyrights">
					<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
				</div>
			</aside>
		</div>
	<!-- /#page-content-wrapper -->
	</div>
</section>
@endsection
@section('scripts')
<!-- jQuery -->
<script src="{{ asset('js/jquery.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/sidebar_menu.js') }}"></script>
<script>
$(document).ready(function(){
$(".book_appointment").click(function(){
   $(this).closest("div").parents().next(".appointment_opendiv").slideToggle();
});
$('#myModal').on('hidden', function () {
  // Load up a new modal...
  $('#myModalNew').modal('show')
})
});
</script>
@stop