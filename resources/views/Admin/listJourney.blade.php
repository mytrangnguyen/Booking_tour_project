@extends('admin.index')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách hành trình</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
				 	<tr>
				        <th>Hành trình tham quan</th>
				        <th>Description</th>
				        <th>Địa điểm</th>
				        <th>Id_tour</th>
				        <th style="width: 20%">Action</th>
				    </tr>
				</thead>
				<tbody>
					@foreach($journey as $value)
					<tr>
						<td>{{$value->days}}</td>
						<td>{{$value->description}}</td>
						@foreach($place as $places)
							@if($value->id_place == $places->id_place)
								<td>{{$places->name_place}}</td>
							@endif
						@endforeach
						<td>{{$value->id}}</td>
						<td>
							<a class="btn btn-danger"  href="{{url('xoaJourney',$value->id)}}">Delete</a>
						</td>
					@endforeach
					</tr>
				</tbody>
			</table>
		</div>
    </div>
</div>
@endsection