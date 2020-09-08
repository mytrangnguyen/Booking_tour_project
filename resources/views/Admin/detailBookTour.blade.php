@extends('admin.index')
@section('content')
<div class="card shadow mb-4">
	<meta name="_token" content="{{ csrf_token() }}">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách tour đã đặt</h6>
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
				        <th>Id tour</th>
				        <th>Tên khách hàng</th>
				        <th>Người lớn</th>
				        <th>Trẻ em</th>
				        <th>Baby</th>
				        <th>Tổng tiền</th>
				        <th>Giá đàm phán</th>
				        <th>Thanh toán</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($tour as $value)
					<tr>
						<td>{{$value->id_tour}}</td>
						<td>{{$value->id_cus}}</td>
						<td>{{$value->adult}}</td>
						<td>{{$value->child}}</td>
						<td>{{$value->baby}}</td>
						<td>{{$value->amount}}</td>
						<td>{{$value->negotiated_price}}</td>
						<td>{{$value->payment}}</td>
						
					@endforeach
					</tr>
				</tbody>
			</table>
		</div>
    </div>
</div>
@endsection