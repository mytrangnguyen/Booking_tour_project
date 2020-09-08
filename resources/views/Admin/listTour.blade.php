@extends('admin.index')
@section('content')
<div class="card shadow mb-4">
	<meta name="_token" content="{{ csrf_token() }}">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách địa chỉ</h6>
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
				        <th>Tên tour</th>
				        <th>Giá tour</th>
				        <th>Giá khuyến mãi</th>
				        <th>Hình ảnh</th>
				        <th>Ngày bắt đầu</th>
				        <th>Ngày Kết thúc</th>
				        <th>Nơi bắt đầu</th>
				        <th>Phương tiện</th>
				        <th>Số lượng người</th>
				        <th>Tình trạng</th>
				        <th style="width: 20%">Action</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($tour as $value)
					<tr>
						<td>{{$value->name_tour}}</td>
						<td>{{$value->price_tour}}</td>
						<td>{{$value->price_promotion}}</td>
						<td><img src="/public/source/images/{{$value->image_tour}}" width="100px"></td>
						<td>{{$value->start_date}}</td>
						<td>{{$value->end_date}}</td>
						<td>{{$value->start_place}}</td>
						@foreach($vehicle as $vehicles)
							@if($value->id_vehicles==$vehicles->id_vehicles)
								<td>{{$vehicles->details}}</td>
							@endif
						@endforeach
						<td>{{$value->quantity_people}}</td>
						<td>{{$value->status}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('getEditTour',$value->id)}}">Edit</a>
							<a class="btn btn-danger"  href="">Delete</a>
						</td>
					@endforeach
					</tr>
				</tbody>
			</table>
		</div>
    </div>
</div>
@endsection