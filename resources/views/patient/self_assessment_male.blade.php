@extends('layouts.patientlayout')
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
				<select class="form-control" id="choose_date" onChange="window.location.href=this.value">
					<option value="{{ url('patient/self_assessment_male') }}">Male</option>
					<option value="{{ url('patient/self_assessment_female') }}">Female</option>
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
				
				<div class="dr_schedule_appointment">
						<div class="edit-profile-photo login-register-tab">
							<div class="appointment-table">
								<h2>Self Assessment</h2>
								<div class="patient-self">
									<div class ="patient-self-img">
										<img src="{{ asset('images/patient-img-male.png') }}" alt="" title=" " />
										<span class="pointer-dot1" data-toggle="modal" href="#myModal1" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot2" data-toggle="modal" href="#myModal2" data-dismiss="modal">
											
										</span>
										
										<span class="pointer-dot3" data-toggle="modal" href="#myModal3" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot4" data-toggle="modal" href="#myModal4" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot5" data-toggle="modal" href="#myModal5" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot5" data-toggle="modal" href="#myModal5" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot6" data-toggle="modal" href="#myModal6" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot7" data-toggle="modal" href="#myModal7" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot8" data-toggle="modal" href="#myModal8" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot9" data-toggle="modal" href="#myModal9" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot10" data-toggle="modal" href="#myModal10" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot11" data-toggle="modal" href="#myModal11" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot12" data-toggle="modal" href="#myModal12" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot13" data-toggle="modal" href="#myModal13" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot14" data-toggle="modal" href="#myModal14" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot15" data-toggle="modal" href="#myModal15" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot16" data-toggle="modal" href="#myModal16" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot17" data-toggle="modal" href="#myModal17" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot18" data-toggle="modal" href="#myModal18" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot19" data-toggle="modal" href="#myModal19" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot20" data-toggle="modal" href="#myModal20" data-dismiss="modal">
											
										</span>
										<span class="pointer-dot21" data-toggle="modal" href="#myModal21" data-dismiss="modal">
											
										</span>
									</div>
									<div class="modal" id="myModal1">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 1 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									
									
									<div class="modal" id="myModal2">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 2 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									
									<div class="modal" id="myModal3">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 3 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal4">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 4 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal5">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 5 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal6">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 6 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal7">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 7 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal8">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 8 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal9">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 9
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal10">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 10 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									
									<div class="modal" id="myModal11">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 11 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal12">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 12 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal13">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 13 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal14">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 14
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal15">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 15 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal16">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 16 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal17">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 17 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal18">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 18 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal19">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 19 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal20">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 20 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="modal" id="myModal21">
										<div class="modal-dialog">
											<div class="heart">
												<h3>
													<span><img src="{{ asset('images/heart-icon.png') }}"/></span>
													Heart 21 
													<button type="button" class="close pointer-close" data-dismiss="modal">&times;</button>
												</h3>
													<ul>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
														<li>
															<a href="#">Dreum Ipsum yu</a>
														</li>
														<li>
															<a href="#">Moreum Ipsudo</a>
														</li>
														<li>
															<a href="#">Loreum Ipsukuso</a>
														</li>
														<li>
															<a href="#">Voreum Ipsudui</a>
														</li>
														<li>
															<a href="#">Oreum Ipsuoku</a>
														</li>
														<li>
															<a href="#">Koreum Ipsdoji</a>
														</li>
														<li>
															<a href="#">Moeum Ipsgdgor</a>
														</li>
														<li>
															<a href="#">Loreum Ipsum one</a>
														</li>
													</ul>
											</div>
										</div>
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