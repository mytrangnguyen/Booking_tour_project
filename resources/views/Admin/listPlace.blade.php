@extends('admin.index')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách địa chỉ</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				 	<tr>
				        <th>Tên địa chỉ</th>
				        <th>Thành phố</th>
				        <th>Description</th>
				        <th>Image</th>
				        <th style="width: 20%">Action</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($place as $value)
					<tr>
						<td>{{$value->name_place}}</td>
						@foreach($city as $cities)
							@if($value->id_city == $cities->id_city)
								<td>{{$cities->name_city}}</td>
							@endif
						@endforeach
						<td>{{$value->description1}}</td>
						<td><img src="{{asset('/public/source/images/'.$value->image)}}" width="100px"></td>
						<td>
							<a class="btn btn-warning" href="{{url('editPrs',$value->id)}}">Edit</a>
							<a class="btn btn-danger"  href="{{url('deleteSpham',$value->id)}}">Delete</a>
						</td>
					@endforeach
					</tr>
				</tbody>
			</table>
		</div>
    </div>
</div>
@endsection