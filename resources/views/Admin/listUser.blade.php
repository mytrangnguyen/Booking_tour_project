@extends('admin.index')
@section('content')
<div class="card shadow mb-4">
	<form method="post">
	    <div class="card-header py-3">
	        <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
	        <input type="hidden" name="_token" value="{{csrf_token()}}">
	    </div>
	    <div class="col-md-12">
	    	<div class="col-md-2"></div>
	    	<div class="col-md-8">
	    		<label>Tìm kiếm:<input width="100px" type="search" id="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
	    	</div>
	    	<div class="col-md-2"></div>
	    </div>

	    <div class="card-body">
	        <div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
					 	<tr>
					        <th>Tên người dùng</th>
					        <th>Địa chỉ</th>
					        <th>Số điện thoại</th>
					        <th>Email</th>
					        <th>Vai trò</th>
					        <th style="width: 30%">Action</th>
					    </tr>
					</thead>
					<tbody>
						@foreach($user as $value)
						<tr>
							<td>{{$value->user_name}}</td>
							<td>{{$value->address}}</td>
							<td>{{$value->phone_number}}</td>
							<td>{{$value->email}}</td>
							<td>{{$value->role}}</td>
							<td>
								<a class="btn btn-warning" href="{{url('xetQuyenTruyCap',$value->id)}}">Admin</a>
								<a class="btn btn-success" href="{{url('xetUser',$value->id)}}">User</a>
								<a class="btn btn-danger"  href="{{url('xoaUser',$value->id)}}">Delete</a>
							</td>
						@endforeach
						</tr>
					</tbody>
				</table>
			</div>
	    </div>
	</form>
</div>
@endsection