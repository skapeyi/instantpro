@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<h4 class="panel-title pull-left" style="padding-top: 7.5px;">Request for a professional</h4>            
				</div>
				<div class="panel-body">
					{!! Form::open(['action' => 'ProrequestController@saveProrequest']) !!}
						@if(Auth::check())
							<div class="form-group">
								{!! Form::label('name','Your Names')!!}
								{!! Form::text('name', Auth::user()->name, ['class' => 'form-control','disabled' =>'disabled']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('email','Your email')!!}
								{!! Form::text('email', Auth::user()->email, ['class' => 'form-control','disabled' =>'disabled']) !!}
							</div>

						@else
							<div class="form-group">
								{!! Form::label('name','Your Names')!!}
								{!! Form::text('name', '', ['class' => 'form-control']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('email','Your email')!!}
								{!! Form::text('email', '', ['class' => 'form-control']) !!}
							</div

						@endif

						<div class="form-group">
              				{!! Form::label('description','Describe what you need a pro for!') !!}
              				{!! Form::textarea('description', '',['class' => 'form-control','id' => 'description']) !!}
            			</div>

            			<div class="form-group">
            				{!! Form::label('when_needed','When do you want the professional?') !!}
            				{!! Form::date('when_needed', \Carbon\Carbon::now(),['class' => 'form-control']) !!}
            			</div>


						<div class="form-group">
							{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
						</div>

					{!! Form::close() !!}					
				</div>
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
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	});
</script>
@endpush