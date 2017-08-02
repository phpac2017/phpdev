@extends('layouts.doctorlayout')

@section('content')	
	<div id="page-content-wrapper">
		<aside class="right-sidebar">
			<div class="menu-toggle-icon">
				<div class="navbar-header fixed-brand">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle">
					  <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
					</button> 
				</div><!-- navbar-header-->

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active" ><button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
				<i class="fa fa-bars fa-lg" aria-hidden="true"></i></button></li>
							</ul>
				</div>
			</div>

			<div class="breadcrumbs">
				<div class="row">
					<div class="dr-name-details col-md-4">
						<h5>Dr.{{ Auth::user()->name }}</h5>
						<p>
							<span>
								<a href="#">NOT LIVE</a>
							</span>
							Mandatory Details Missing
							<a href="#">
								View-errors
							</a>
						</p>
					</div>
					<div class="profile-progress-bar col-md-4">
						<h5><sup>33%</sup> Profile Complete</h5>
						  <div class="progress">
							
							<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:33%">
							<span class="sr-only">70% Complete</span>
							</div>
						  </div>
					</div>
					<div class="pending-fields col-md-4">
						<h5><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <sup>5</sup> pending Mandatory Fields</h5>
						<p>Complete these fields to make your profile go live</p>
					</div>
				</div>
			</div>

			<div class="calendarevents-create">
				<h1>Events / Edit</h1>

			<div class="row">
				<div class="col-md-12">
					<?php $user_id = Auth::user()->id;?>
					<form action="{{ route('calendar_events.update', $calendar_event->id) }}" method="POST">
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="nome">ID</label>
							<p class="form-control-static">{{$calendar_event->id}}</p>
						</div>
						<div class="form-group">
							 <label for="title">Title</label>
							 <input type="text" name="title" class="form-control" value="{{$calendar_event->title}}"/>
						</div>
							<div class="form-group">
							 <label for="start">Start</label>
							 <input type="text" name="start" class="form-control" value="{{$calendar_event->start}}" id="datepicker" readonly/>
						</div>
							<div class="form-group">
							 <label for="end">End</label>
							 <input type="text" name="end" class="form-control" value="{{$calendar_event->end}}" id="datepicker1" readonly/>
						</div>
							<div class="form-group">
							 <label for="is_all_day">Is All Day</label>
							 <input type="text" name="is_all_day" class="form-control" value="{{$calendar_event->is_all_day}}" readonly="true" />
						</div>
							<div class="form-group">
							 <label for="background_color">Background Color</label>
							 <input type="text" name="background_color" class="form-control demo1" value="{{$calendar_event->background_color}}"/>
						</div>

						{{ Form::hidden('user_id', $user_id, array('class' => 'form-control', 'id' => 'id')) }}

					<a class="btn btn-formsubmit password-btn" href="{{ route('calendar_events.index') }}">Back</a>
					<button class="btn btn-formsubmit password-btn" type="submit" >Save</button>
					</form>
				</div>
			</div>
			</div>
			{{ Form::close() }}
			<div class="footer-copyrights">
				<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
			</div>
				
		</aside>
	</div>


@endsection


@section('scripts')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.responsive-tabs/1.6.1/responsive-tabs.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('js/bootstrap-colorpicker.min.js') }}"></script> 


<script>
$(document).ready(function(){

	$(".demo1").colorpicker();
    $("#datepicker, #datepicker1").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true
	});
});

</script>
@stop
