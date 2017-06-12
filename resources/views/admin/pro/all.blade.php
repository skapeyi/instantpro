@extends('layouts.admin')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading clearfix">
			<h4 class="panel-title pull-left" style="padding-top: 7.5px;">Pro Requests</h4>
		</div>
		<div class="panel-body">
			<table class="table table-striped" id="prorequests-table">
				<thead>
					<tr>						
						<th>Email</th>
						<th>Status</th>
						<th>Pro Request Date</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

@endsection

@push('scripts')
<script type="text/javascript">
  jQuery(document).ready(function ($) {
    $('#prorequests-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url('get-pro-requests') !!}',
        columns: [          
          { data: 'email', name: 'email' },
          { data: 'status', name: 'status' },
          { data: 'when_needed', name:'when_needed'},
          { data: 'created_at', name: 'created_at'},
          { data: 'edit', name:'edit'}            
        ]
      });
  });
</script>

@endpush()