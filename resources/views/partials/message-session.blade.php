@if(session('success'))
	<div class="row ">
		<div class="col-md-12">
			<div class="alert alert-success alert-dismissible">
		      <button type="button" class="close text-danger" data-dismiss="alert" aria-hidden="true">&times;</button>
		        <i class="icon fa fa-check"></i>{{session('success')}}
		    </div>
		</div>
	</div>
@endif
