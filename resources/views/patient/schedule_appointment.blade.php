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
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<ul class="breadcrumbs-left">
								<li>Home</li>
								<li><a href="{{ url('patient/schedule_appointment') }}">Schedule Appointment</a></li>
							</ul>
						</div>
						<div class="col-md-8 col-sm-12 text-right">
							<div class="schedule_an_appointment">
								<select class="form-control" id="choose_date">
									<option>Cardiology</option>
									<option>Neurology</option>
									<option>Urology</option>
									<option>Endocrinology</option>
								</select>
								<select class="form-control" id="choose_date">
									<option>Sort By</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
								</select>
							</div>
						</div>
					</div>
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
										<li>Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<p>(Required as per medical guidelines and visible only to the doctor)</p>
									<div class="appointment_time">
										<div class="appointment_date_time">
											<h5>Appointment Date Time</h5>
											<p>Wednesday <span>12</span> July 2017 at <span>02:00 PM</span></p>
											<a href="#" class="change_date">Change</a>
										</div>
										<div class="appointment_form">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Name" id="name">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Email" id="email">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Mobile Number" id="mobnum">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="radio-box">
														<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
														<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<h5>Describe the purpose of the consultation in detail</h5>
									<div class="consultation_detail">
										<label>Required</label>
										<input type="text" class="form-control" placeholder="Share a detailed description of your symptoms, concers and help required" id="usr">
									</div>
									
									<h5>Additional Information about you</h5>
									<p>(Sharing this information will enable doctors to help better)</p>
									<div class="additional_info">
										<div class="row">
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any previously diagnosed conditions ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio3" type="radio" name="Checkbox" value="Box"><label for="radio3">No</label>
														<input id="radio4" type="radio" name="Checkbox" value="Box"><label for="radio4">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you take any medication ?</h5>
													<div class="medicine_selection">
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any allergies ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<a href="#" data-toggle="modal" data-target="#myModal" class="proceed_payment">Proceed a Payment</a>
											<div class="patient_popup modal fade" id="myModal" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal"><img src="{{ asset('images/popup_close.png') }}" alt="" /></button>
															<h4 class="modal-title">Add to Allergy</h4>
														</div>
														<div class="modal-body">
															<input type="text" class="form-control" placeholder="Enter Allergy" id="name">
															<div class="radio-box">
																<input id="radio7" type="radio" name="Checkbox" value="Box"><label for="radio7">Have this</label>
																<input id="radio8" type="radio" name="Checkbox" value="Box"><label for="radio8">No Longer have this</label>
															</div>
															<input type="text" class="form-control" placeholder="Optional Notes" id="name">
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-default allergy_add" data-dismiss="modal">Add</button>
														</div>
													</div>
												</div>
											</div>
										</div>
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
										<li>Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<p>(Required as per medical guidelines and visible only to the doctor)</p>
									<div class="appointment_time">
										<div class="appointment_date_time">
											<h5>Appointment Date Time</h5>
											<p>Wednesday <span>12</span> July 2017 at <span>02:00 PM</span></p>
											<a href="#" class="change_date">Change</a>
										</div>
										<div class="appointment_form">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Name" id="name">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Email" id="email">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Mobile Number" id="mobnum">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="radio-box">
														<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
														<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<h5>Describe the purpose of the consultation in detail</h5>
									<div class="consultation_detail">
										<label>Required</label>
										<input type="text" class="form-control" placeholder="Share a detailed description of your symptoms, concers and help required" id="usr">
									</div>
									
									<h5>Additional Information about you</h5>
									<p>(Sharing this information will enable doctors to help better)</p>
									<div class="additional_info">
										<div class="row">
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any previously diagnosed conditions ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio3" type="radio" name="Checkbox" value="Box"><label for="radio3">No</label>
														<input id="radio4" type="radio" name="Checkbox" value="Box"><label for="radio4">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you take any medication ?</h5>
													<div class="medicine_selection">
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any allergies ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<a href="#" class="proceed_payment">Proceed a Payment</a>
										</div>
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
										<li>Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<p>(Required as per medical guidelines and visible only to the doctor)</p>
									<div class="appointment_time">
										<div class="appointment_date_time">
											<h5>Appointment Date Time</h5>
											<p>Wednesday <span>12</span> July 2017 at <span>02:00 PM</span></p>
											<a href="#" class="change_date">Change</a>
										</div>
										<div class="appointment_form">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Name" id="name">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Email" id="email">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Mobile Number" id="mobnum">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="radio-box">
														<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
														<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<h5>Describe the purpose of the consultation in detail</h5>
									<div class="consultation_detail">
										<label>Required</label>
										<input type="text" class="form-control" placeholder="Share a detailed description of your symptoms, concers and help required" id="usr">
									</div>
									
									<h5>Additional Information about you</h5>
									<p>(Sharing this information will enable doctors to help better)</p>
									<div class="additional_info">
										<div class="row">
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any previously diagnosed conditions ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio3" type="radio" name="Checkbox" value="Box"><label for="radio3">No</label>
														<input id="radio4" type="radio" name="Checkbox" value="Box"><label for="radio4">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you take any medication ?</h5>
													<div class="medicine_selection">
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any allergies ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<a href="#" class="proceed_payment">Proceed a Payment</a>
										</div>
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
										<li>Payment</li>
										<li>Finished</li>
									</ul>
									<h5>Please share some basic info about yourself</h5>
									<p>(Required as per medical guidelines and visible only to the doctor)</p>
									<div class="appointment_time">
										<div class="appointment_date_time">
											<h5>Appointment Date Time</h5>
											<p>Wednesday <span>12</span> July 2017 at <span>02:00 PM</span></p>
											<a href="#" class="change_date">Change</a>
										</div>
										<div class="appointment_form">
											<div class="row">
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Name" id="name">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Email" id="email">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" class="form-control" placeholder="Mobile Number" id="mobnum">
												</div>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="radio-box">
														<input id="radio1" type="radio" name="Checkbox" value="Box"><label for="radio1">Male</label>
														<input id="radio2" type="radio" name="Checkbox" value="Box"><label for="radio2">Female</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<h5>Describe the purpose of the consultation in detail</h5>
									<div class="consultation_detail">
										<label>Required</label>
										<input type="text" class="form-control" placeholder="Share a detailed description of your symptoms, concers and help required" id="usr">
									</div>
									
									<h5>Additional Information about you</h5>
									<p>(Sharing this information will enable doctors to help better)</p>
									<div class="additional_info">
										<div class="row">
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any previously diagnosed conditions ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio3" type="radio" name="Checkbox" value="Box"><label for="radio3">No</label>
														<input id="radio4" type="radio" name="Checkbox" value="Box"><label for="radio4">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you take any medication ?</h5>
													<div class="medicine_selection">
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin Drop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
														<span>Crocin DropDrop <a href="#"><img src="{{ asset('images/filter-close.png') }}" alt=""></a></span>
													</div>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<div class="info_questions">
												<div class="col-md-9">
													<h5>Do you have any allergies ?</h5>
												</div>
												<div class="col-md-3">
													<div class="radio-box">
														<input id="radio5" type="radio" name="Checkbox" value="Box"><label for="radio5">No</label>
														<input id="radio6" type="radio" name="Checkbox" value="Box"><label for="radio6">Yes</label>
													</div>
												</div>
											</div>
											<a href="#" class="proceed_payment">Proceed a Payment</a>
										</div>
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