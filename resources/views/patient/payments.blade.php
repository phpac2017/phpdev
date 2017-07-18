@extends('layouts.patientlayout')
@section('content')
<!-- Page Content -->
	 <!-- Page Content -->
        <div id="page-content-wrapper">
          <aside class="right-sidebar">
			 <div class="menu-toggle-icon">
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
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
				
    <!-- Brand and toggle get grouped for better mobile display -->
				
				<!-- bs-example-navbar-collapse-1 -->
			
			
			
				<ul class="breadcrumbs-left">
					<li>
						Home
					</li>
					<li>
						<a href="#"> Edit Profile</a>
					</li>
				</ul>
				<ul class="breadcrumbs-right">
					<li>
						<a href="#">Self Assesment</a>
					</li>
					<li>
						<a href="#">Appointment</a>
					</li>
					<li>
						<a href="#" class="active">Consult Now</a>
					</li>
				</ul>
			</div>
			<div class="edit-profile-photo login-register-tab">
				<h2>Payments</h2> 
					
				<div class="display-item">
					<div class="display-item-left">
						<label>Show</label>
						<select class="form-control" id="Display">
							<option value="">1</option>
							<option value="">2</option>
							<option value="">3</option>
							<option value="">4</option>
							<option value="">5</option>
							<option value="">6</option>
							<option value="">7</option>
							<option value="">8</option>
							<option value="">9</option>
							<option value="">10</option>
							<option value="">11</option>
							<option value="">12</option>
						</select>
						<label>Entries</label>
					</div>
					
				</div>
				
				
				<div class="appointment-table">
				
				 <div class="tab-content">
						
						    <div class="table-responsive">    
								<table class="table payments-table table-bordered">
									<thead>
									  <tr>
										<th>Bill No</th>
										<th>Transcation ID</th>
										<th>Bill Date</th>
										<th>Patient</th>
										<th>Doctor</th>
										<th>Charges</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>11</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									  <tr>
										<td>12</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									  <tr>
										<td>13</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									  <tr>
										<td>14</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									  <tr>
										<td>15</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>16</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>17</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>18</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>19</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>20</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									  
									   <tr>
										<td>22</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>24</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>26</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>34</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									   <tr>
										<td>56</td>
										<td>45535343434</td>
										<td>05/07/2017</td>
										<td>Christina Thomas</td>
										<td>Jessica Patterson</td>
										<td>102</td>
										
									  </tr>
									</tbody>
							  </table>
							
						</div>
						
					</div>
				
					
				  <div class="appointment-pagination">
						<div class="show-entries">
							Showing <span>1</span> to <span>10</span> of <span>11</span> entries
						</div>
						<ul class="pagination app-pagination">
							<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">....</a></li>
							<li><a href="#">Next</a></li>
							
						</ul>
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

$('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs']
});

	<!-- Multiselect -->
    $('#qualification').multiselect({
      buttonWidth: '100%'
    });
	
	 $('#blood-group').multiselect({
      buttonWidth: '100%'
    });
	$('#language').multiselect({
      buttonWidth: '100%'
    });
	$('#nationality').multiselect({
      buttonWidth: '100%'
    });
	$('#country_code').multiselect({
      buttonWidth: '100%'
    });
	$('#experience').multiselect({
      buttonWidth: '100%'
    });
	
 
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());;

  
 

});





 

</script>
@stop