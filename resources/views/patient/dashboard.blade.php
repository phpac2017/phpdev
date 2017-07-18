@extends('layouts.patientlayout')
@section('content')
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
								<li><a href="#">Edit Profile</a></li>
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
				
				<div class="patient_dashboard">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-12">
							<div class="dr_appointment_details">
								<div class="row">
									<div class="col-md-3 col-sm-3 text-center">
										<img src="images/dr.jpg" alt="" />
									</div>
									<div class="col-md-9 col-sm-9">
										<h4>Michael Linden <span>37 years</span></h4>
										<span class="dr_designation">Health Issue</span>
										<p>Lorem Ipsum dolor sit ametLorem Ipsum dolor rem Ipsum dolor sit amet sit amet</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="upcoming_appointment">
								<h4>Upcoming Appointment</h4>
								<div class="owl-carousel owl-theme">
									<div class="upcoming_appointment_details">
										<div class="dr-img">
											<span class="dr-circular"><img src="images/dr.jpg" alt=""></span>
										</div>
										<h5>24 march 2017 <span>2:30 Pm</span></h5>
										<p>John Michael Linden</p>
										<p>Speciality : Dental</p>
									</div>
									<div class="upcoming_appointment_details">
										<div class="dr-img">
											<span class="dr-circular"><img src="images/dr.jpg" alt=""></span>
										</div>
										<h5>24 march 2017 <span>2:30 Pm</span></h5>
										<p>John Michael Linden</p>
										<p>Speciality : Dental</p>
									</div>
									<div class="upcoming_appointment_details">
										<div class="dr-img">
											<span class="dr-circular"><img src="images/dr.jpg" alt=""></span>
										</div>
										<h5>24 march 2017 <span>2:30 Pm</span></h5>
										<p>John Michael Linden</p>
										<p>Speciality : Dental</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-12 col-sm-12">
							asdfasdf
						</div>
					</div>
				</div>
				
				<div class="dashboard_overview">
					<div class="row">
						<div class="col-lg-3 col-md-12">
							<div class="recent_encounters">
								<h4>Appointments</h4>
								<h3>5  Recent Encounters</h3>
								<p>3 Planned&nbsp;&nbsp;|&nbsp;&nbsp;2 Unsceduled</p>
							</div>
							<div class="medicine_alert_test">
								<div class="medication">
									<h4>Medications</h4>
									<h3>10 Total Medications</h3>
									<p>7 Delivered&nbsp;&nbsp;|&nbsp;&nbsp;3 Unsceduled</p>
								</div>
								<div class="medication_alerts">
									<h4>Lab Tests</h4>
									<h3>4 Recent Request</h3>
									<p>3 Results&nbsp;&nbsp;|&nbsp;&nbsp;2 Approval</p>
								</div>
								<div class="medication_tests">
									<h4>Alerts</h4>
									<h3>1 New Alert</h3>
									<p>12 Previous&nbsp;&nbsp;|&nbsp;&nbsp;2 Serious</p>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-12">
							<div class="care_appointments">
								<h4>Care Plan Appointments</h4>
								<div class="row">
									<div class="col-md-4">
										<div class="total_appointments"><span>107</span><h5>Total Appointments</h5></div>
									</div>
									<div class="col-md-4">
										<div class="appointments_occured"><span>17</span><h5>Appointments Occured</h5></div>
									</div>
									<div class="col-md-4">
										<div class="up_coming_appointments"><span>4</span><h5>Upcoming Appointments</h5></div>
									</div>
								</div>
							</div>
							<div class="appointment_breakout">
								<div class="row">
									<div class="col-md-8">
										<div class="row appointment_breakout_graph">
											<div class="col-md-5 col-sm-12 col-xs-12 text-center">
												<img src="images/breakout_graph.jpg" alt="" />
											</div>
											<div class="col-md-7 col-sm-12 col-xs-12">
												<h4>Appointment Breakout</h4>
												<ul>
													<li><span class="breakout_colorone"></span><p>1 Confirmed Appointment</p></li>
													<li><span class="breakout_colortwo"></span><p>1 Confirmed Appointment</p></li>
													<li><span class="breakout_colorthree"></span><p>1 Requested Appointment</p></li>
													<li><span class="breakout_colorfour"></span><p>1 Requested Appointment</p></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 text-center">
										<div class="unscheduled_appointment_graph">
											<img src="images/unscheduled.jpg" alt="" />
											<ul>
												<li><span class="colorone"></span><p>1 Confirmed Appointment</p></li>
												<li><span class="colortwo"></span><p>1 Requested Appointment</p></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="dashboard_percentage common">
											<p><span>3%</span>of appontments are completed within the treatment goal</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="dashboard_percentage common">
											<p><span>10/17</span>next scheduled in home care manager visit</p>
										</div>
									</div>
									<div class="col-md-4">
										<div class="dashboard_percentage common">
											<p><span>10/23</span>next chemotheraphy regimen and doctor checkup</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="patient_history_bg">
					<h4>Patient History</h4>
					<div class="patient_history">
						<div class="row">
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="patient_banner_footer_wrapper">
									<a href="#" class="health_insur"><p>Health Insurance</p></a>
								</div>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="patient_banner_footer_wrapper">
									<a href="#" class="online_bill_payment"><p>Online Bill Pay</p></a>
								</div>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="patient_banner_footer_wrapper">
									<a href="{{ url('patient_medical_records') }}" class="medical_records"><p>Medical Records</p></a>
								</div>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="patient_banner_footer_wrapper">
									<a href="#" class="order_medicines"><p>Order Medicines</p></a>
								</div>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="patient_banner_footer_wrapper">
									<a href="#" class="test"><p>Book Test</p></a>
								</div>
							</div>
							<div class="col-md-2 col-sm-4 col-xs-6">
								<div class="patient_banner_footer_wrapper">
									<a href="#" class="health_tips"><p>Health Tips</p></a>
								</div>
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
	@endsection
	@section('scripts')

<script>
$(document).ready(function(){

$('.common').matchHeight();

$( window ).resize(function() {
  $('.common').matchHeight();
});

$('.upcoming_appointment .owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
			nav: true
		},
		767: {
			items: 1,
			nav: true
		},
		1024: {
			items: 1,
			nav: true
		}
	}
});

});
</script>
@stop
