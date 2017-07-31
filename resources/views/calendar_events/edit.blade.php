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
			<div class="page-header">
				<h1>CalendarEvents / Edit </h1>
			</div>


			<div class="row">
				<div class="col-md-12">
					<?php echo $user_id = Auth::user()->id;?>
					<form action="{{ route('calendar_events.update', $calendar_event->id) }}" method="POST">
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="nome">ID</label>
							<p class="form-control-static">{{$calendar_event->id}}</p>
						</div>
						<div class="form-group">
							 <label for="title">TITLE</label>
							 <input type="text" name="title" class="form-control" value="{{$calendar_event->title}}"/>
						</div>
							<div class="form-group">
							 <label for="start">START</label>
							 <input type="text" name="start" class="form-control" value="{{$calendar_event->start}}"/>
						</div>
							<div class="form-group">
							 <label for="end">END</label>
							 <input type="text" name="end" class="form-control" value="{{$calendar_event->end}}"/>
						</div>
							<div class="form-group">
							 <label for="is_all_day">IS_ALL_DAY</label>
							 <input type="text" name="is_all_day" class="form-control" value="{{$calendar_event->is_all_day}}"/>
						</div>
							<div class="form-group">
							 <label for="background_color">BACKGROUND_COLOR</label>
							 <input type="text" name="background_color" class="form-control" value="{{$calendar_event->background_color}}"/>
						</div>

						{{ Form::hidden('user_id', $user_id, array('class' => 'form-control', 'id' => 'id')) }}

					<a class="btn btn-default" href="{{ route('calendar_events.index') }}">Back</a>
					<button class="btn btn-primary" type="submit" >Save</button>
					</form>
				</div>
			</div>
			{{ Form::close() }}
			<div class="footer-copyrights">
				<h5>Copyright @ 2017 Doctor online All Rights reserved</h5>
			</div>
				
		</aside>
	</div>


@endsection
