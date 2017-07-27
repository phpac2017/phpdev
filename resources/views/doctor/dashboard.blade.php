@extends('layouts.doctorlayout')
@section('content')
<!-- /#sidebar-wrapper -->
<!-- Page Content -->
<div id="page-content-wrapper">
	<aside class="right-sidebar">
		<div class="menu-toggle-icon">
			<div class="navbar-header fixed-brand">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button> 
			</div><!-- navbar-header-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"><i class="fa fa-bars fa-lg" aria-hidden="true"></i></button></li>
				</ul>
			</div>
		</div>
		<div class="breadcrumbs">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="panel panel-default bg-dash-01 doctor-dash text-center">
						<div class="panel-body">
							<h2>02</h2>
							<p>Todays <br>Appointments</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="panel panel-default bg-dash-02 doctor-dash text-center">
						<div class="panel-body">
							<h2>43</h2>
							<p>Upcoming <br>Appointments</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="panel panel-default bg-dash-03 doctor-dash text-center">
						<div class="panel-body">
							<h2>15</h2>
							<p>New <br>Appointments</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="panel panel-default bg-dash-04 doctor-dash text-center">
						<div class="panel-body">
							<h2>64</h2>
							<p>Total <br>Patients</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="panel panel-default bg-dash-05 doctor-dash text-center">
						<div class="panel-body">
							<h2>98</h2>
							<p>Messages <br>Patients</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="panel panel-default bg-dash-06 doctor-dash text-center">
						<div class="panel-body">
							<h2>52</h2>
							<p>Regular <br>vigorous </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumbs top-space">
			<div class="row">
				<div class="col-lg-6 col-md-6 div-chart">
					<img src=" {{ asset('images/fig_1.png') }}" alt="" style="width:100%"/>
				</div>
				<div class="col-lg-6 col-md-6 div-chart">			
					<img src="{{ asset('images/fig_2.png') }}" alt="" style="width:100%"/>
				</div>
			</div>
		</div>
		<div class="footer-copyrights">
			<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
		</div>
	</aside>
</div><!-- /#page-content-wrapper -->
			
        <!-- /#page-content-wrapper -->
		@endsection
@section('scripts')
<script>
$(document).ready(function(){
	//Split the Qualification Rows based on the registration details


});

</script>

@stop
