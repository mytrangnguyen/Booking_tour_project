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
		<form action="{{route('themHanhTrinh')}}" method="POST" role="form" enctype="multipart/form-data">
			<legend>Thêm hành trình</legend>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
			<div class="form-group">
				<label for="">Hành trình theo ngày</label>
				<input type="text" name="days" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Mô tả</label>
				<input type="text" name="des" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Địa điểm</label>
				<input type="text" name="id_place" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Tour</label>
				<input type="text" name="id_tour" class="form-control" id="" placeholder="Input field">
			</div>
			<center><button type="submit" class="btn btn-primary">Thêm hành trình</button></center>
			
		</form>
	</div>
@endsection