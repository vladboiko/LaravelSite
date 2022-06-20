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
                <h3 class="card-title">Edit solution: {{$solution->solution_title}} </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('solutions.update',$solution->id)}}" method="POST">
			  @csrf
			  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
				  <p style="font-weight:bold">Solution ID
                    <input type="text" value = "{{$solution->id}}" name ="{{$solution->id}}" class="form-control" id="{{$solution->id}}" placeholder="Enter id">
					<br>
					<p style="font-weight:bold">Solution title
					<input type="text" value = "{{$solution->solution_title}}" name ="solution_title" class="form-control" id="{{$solution->solution_title}}" placeholder="Enter category">
					<p style="font-weight:bold">Solution description
		<textarea   name ="solution_description" class="form-control"  placeholder="Enter text">
		{{$solution->solution_description}}
		</textarea>
		<p style="font-weight:bold">Solution during
		<input type="text" value = "{{$solution->solution_during}}" name ="solution_during" class="form-control" id="{{$solution->solution_during}}" placeholder="Enter solution">
		<p style="font-weight:bold">Solution examples
		<textarea  name ="solution_example" class="form-control"  placeholder="Enter example">
		{{$solution->solution_example}}</textarea>
					
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