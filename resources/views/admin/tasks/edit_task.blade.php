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
                <h3 class="card-title">Edit task: {{$task->task_title}} </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('tasks.update',$task->id)}}" method="POST">
			  @csrf
			  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
				  <label for = "id"> ID</label>
                    <input type="text" value = "{{$task->id}}" name ="{{$task->id}}" class="form-control" id="{{$task->id}}" placeholder="Enter id">
					<br>
					<label for = "task_title">Task title</label>
					<input type="text" value = "{{$task->task_title}}" name ="task_title" class="form-control"  placeholder="Enter task">
					<br>
					<label for = "task_text">Task text</label>
		<textarea type="text"  name ="task_text" class="form-control"placeholder="Enter text">{{$task->task_text}}</textarea>
		<label for = "theme_id">Task ID</label>
        <input type="text" value = "{{$task->theme_id}}" name ="theme_id" class="form-control" id="{{$task->theme_id}}" placeholder="Enter theme id">
		<label for = "solution_id">Solution ID</label>
        <input type="text" value = "{{$task->solution_id}}" name ="solution_id" class="form-control" id="{{$task->solution_id}}" placeholder="Enter solution id">
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