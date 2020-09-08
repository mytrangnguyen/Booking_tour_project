@extends('admin.index')
@section('content')
<div class="col-md-4"></div>
	<div class="col-md-4">
		@foreach($journey as $journeys)
		<form action="{{URL::action('page_controller@postEditJourney',$journeys->id)}}" method="POST" role="form" enctype="multipart/form-data">
			<legend>EDIT TOUR</legend>
		@endforeach
			<div class="form-group">
				<label for="">Hành trình tham quan</label>
				<input type="text" name="days" class="form-control" value="{{old ('name_tour',isset($journeys)?$journeys->days:NULL)}}" id="" >
			</div>
			<div class="form-group">
				<label for="">Chi tiết </label>
				<input type="text" name="quatrinh" class="form-control" value="{{old ('namePr',isset($journeys)?$journeys->description:NULL)}}" id="" >
			</div>
			<div class="form-group">
				<label for="">Địa điểm</label>
				<input type="text" name="place" value="{{old('description',isset($place)?$place['name_place']:NULL)}}" class="form-control" >
			</div>
			<center><button type="submit" class="btn btn-primary">Edit tour</button></center>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
		<div class="col-md-4"></div>
@endsection