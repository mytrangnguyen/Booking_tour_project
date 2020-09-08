@extends('admin.index')
@section('content')
<div class="col-md-4" style="margin-left: 338px;">
		<!-- Display error -->
        @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul> 
            </div>
        @endif
        <!-- //Display error -->
		<form action="{{route('themTour')}}" method="POST" role="form" enctype="multipart/form-data">
			<legend>Thêm tour</legend>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
			<div class="form-group">
				<label for="">Tên tour</label>
				<input type="text" name="name" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Giá tour</label>
				<input type="text" name="price" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Giá khuyến mãi</label>
				<input type="text" name="khuyenmai" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Ngày bắt đầu</label>
				<input type="date" name="startdate" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Ngày kết thúc</label>
				<input type="date" name="enddate" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Nơi bắt đầu</label>
				<input type="text" name="startPlace" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Phương tiện</label>
				<select class="form-control" name="vehicle" >
                        <option value="">Please choose:</option>
                       @foreach($vehicle as $value)
                            <option value="{{ $value->id}}">{{ $value->details}}</option>
                        @endforeach
                    </select>
			</div>
			<div class="form-group">
				<label for="">Số lượng người</label>
				<input type="text" name="quantity" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tình trạng</label>
				<input type="text" name="status" class="form-control" id="" placeholder="Input field">
			</div>
			<center><button type="submit" class="btn btn-primary">Thêm tour</button></center>
		</form>
	</div>
@endsection