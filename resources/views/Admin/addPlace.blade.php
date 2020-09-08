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
		<form action="{{route('themDiaDiem')}}" method="POST" role="form" enctype="multipart/form-data">
			<legend>Thêm địa điểm</legend>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
			<div class="form-group">
				<label for="">Name place</label>
				<input type="text" name="namePlace" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">City</label>
				<input type="text" name="city" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Description</label>
				<input type="text" name="desPlace" class="form-control" id="" placeholder="Input field">
			</div>
			<div class="form-group">
				<label for="">Image</label>
				<input type="file" name="imagePlace" class="form-control" id="" placeholder="Input field">
			</div>
			<center><button type="submit" class="btn btn-primary">Thêm địa điểm</button></center>
			
		</form>
	</div>
@endsection