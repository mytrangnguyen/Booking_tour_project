@extends('admin.index')
@section('content')
<div class="col-md-4"></div>
	<div class="col-md-4">
		@foreach($tour as $tour)
		<form action="{{URL::action('page_controller@postEditTours',$tour->id)}}" method="POST" role="form" enctype="multipart/form-data">
			<legend>EDIT TOUR</legend>
		@endforeach
			<div class="form-group">
				<label for="">Tên tour</label>
				<input type="text" name="ten" class="form-control" value="{{old ('name_tour',isset($tour)?$tour->name_tour:NULL)}}" id="" >
			</div>
			<div class="form-group">
				<label for="">Giá tour</label>
				<input type="text" name="gia" class="form-control" value="{{old ('namePr',isset($tour)?$tour->price_tour:NULL)}}" id="" >
			</div>
			<div class="form-group">
				<label for="">Giá khuyến mãi</label>
				<input type="text" name="giakm" value="{{old('description',isset($tour)?$tour->price_promotion:NULL)}}" class="form-control" >
			</div>
			<div class="form-group">
				<label for="">Ngày bắt đầu</label>
				<input type="text" name="ngayBD" value="{{old('pricePr',isset($tour)?$tour->start_date:NULL)}}" class="form-control" >
			</div>
			<div class="form-group">
				<label for="">Ngày kết thúc</label>
				<input type="file" name="ngayKT" value="{{ isset($tour)?$tour->end_date:NULL}}">
                    <img src=" public/source/images{{$tour->image_tour}}" width="100px" >
			</div>
			<div class="form-group">
				<label for="">Nơi bắt đầu</label>
				<input type="text" name="diadiem" value="{{old('unit',isset($tour)?$tour->start_place:NULL)}}" class="form-control" >
			</div>
			<div class="form-group">
				<label for="">Phương tiện</label>
				<select class="form-control" name="catID" >
                        <option value="">Please choose:</option>
                       @foreach($vehicle as $value)
                       		@if($tour->id_vehicles == $value->id_vehicles)
                            	<option selected>{{$value->details}}</option>
                        	@else
                            	<option>{{$value->details}}</option>
                            @endif
                        @endforeach
                    </select>
			</div>
			
			<div class="form-group">
				<label for="">Số lượng người</label>
				<input type="text" name="soluong" value="{{old('new',isset($tour)?$tour->quantity_people:NULL)}}" class="form-control" >
			</div>
			<div class="form-group">
				<label for="">Tình trạng</label>
				<input type="text" name="status" value="{{old('new',isset($tour)?$tour->status:NULL)}}" class="form-control" >
			</div>
			<center><button type="submit" class="btn btn-primary">Edit Product</button></center>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
		<div class="col-md-4"></div>
@endsection