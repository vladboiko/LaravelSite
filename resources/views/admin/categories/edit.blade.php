@extends('layouts.app_dashboard')

@section('content')
	
<div class="content-header">
<div class="container-fluid">
	@if (session('success'))
		<div class="alert alert-success" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>	
			<h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
		</div>			

	@endif
	</div>
	</div>
     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit category: {{$theme->theme_title}} </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('themes.update',$theme->id)}}" method="POST">
			  @csrf
			  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" value = "{{$theme->id}}" name ="{{$theme->id}}" class="form-control" id="{{$theme->id}}" placeholder="Enter id">
					<br>
					
					<input type="text" value = "{{$theme->theme_title}}" name ="theme_title" class="form-control" id="{{$theme->theme_title}}" placeholder="Enter category">
					<br>
		<textarea   name ="theme_description" class="form-control"  placeholder="Enter text">
		{{$theme->theme_description}}
		</textarea>
                  </div>
	
		<div class="form-group">
		
<label for="feature_image">Feature Image</label>
<img src = "" alt ="" class = "img-uploaded">
<input type="text" id="feature_image" name="feature_image" value="">
<br>	
<a href="" class="popup_selector" data-inputid="feature_image">Select Image</a>
	</div>

                <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Save</button>
              </form>
            </div>
            <!-- /.card -->
		




@endsection