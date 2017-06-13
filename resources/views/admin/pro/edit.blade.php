@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h4 class="panel-title pull-left" style="padding-top: 7.5px;">Request for a professional</h4>            
			</div>
			<div class="panel-body">
				{!! Form::model($pro_req,['method' => 'PUT', 'route' => ['admin.updateProrequest',$pro_req]]) !!}
					<div class="form-group">
						{!! Form::label('email','Customer Email')!!}
						{!! Form::text('email', $pro_req->email, ['class' => 'form-control','disabled' =>'disabled']) !!}
					</div>

					<div class="form-group">
          				{!! Form::label('description','Describe what you need a pro for!') !!}
          				{!! Form::textarea('description', $pro_req->description,['class' => 'form-control','id' => 'description']) !!}
        			</div>

        			<div class="form-group">
        				{!! Form::label('when_needed','When do you want the professional?') !!}
        				{!! Form::text('when_needed', $pro_req->when_needed,['class' => 'form-control','disabled' => 'disabled']) !!}
        			</div>

        			<div class="form-group">
            			{!! Form::label('status','Status')!!}
            			{!! Form::select('status', ["Open" => 'Open', 'Assigned' => 'Assigned','Closed' => 'Closed'], $pro_req->status,['class' => 'form-control']) !!}
          			</div>          			

          			<div class="form-group">
            			{!! Form::label('pro_id', 'Professional Assigned')!!}
            			{!! Form::select('pro_id', $pros, $pro_req->pro_id, ['placeholder' => 'Choose Professional','class' => 'form-control'])!!}
          			</div>

          			<div class="form-group">
            			{!! Form::label('deleted','Delete ProRequest?')!!}
            			{!! Form::select('deleted', [0 => 'No', 1 => 'Yes'], $pro_req->deleted,['class' => 'form-control']) !!}
          			</div>

					<div class="form-group">
						{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}					
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script
src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script>
	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link  charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime   contextmenu paste"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		readonly : 1
	});
</script>
@endpush