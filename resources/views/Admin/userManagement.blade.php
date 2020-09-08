@extends('admin.index')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				 	<tr>
				        <th>Name's product</th>
				        <th>Category</th>
				        <th>Description</th>
				        <th>Price</th>
				        <th>Image</th>
				        <th>Unit</th>
				        <th>New</th>
				        <th style="width: 20%">Action</th>
				    </tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
    </div>
</div>
@endsection