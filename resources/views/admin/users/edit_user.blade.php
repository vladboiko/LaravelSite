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
                <h3 class="card-title">Edit user: $user->name </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('users.update',$user->id)}}" method="POST">
			  @csrf
			  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
				  <label for = "id"> ID</label>
                    <input type="text" value = "{{$user->id}}" name ="{{$user->id}}" class="form-control" id="{{$user->id}}" placeholder="Enter id">
					<br>
					<label for = "name">User name</label>
					<input type="text" value = "{{$user->name}}" name ="name" class="form-control"  placeholder="Enter user name">
					<br>
					<label for = "email">User email</label>
		<input type="email" value = "{{$user->email}}" name ="email" class="form-control" id="{{$user->email}}" placeholder="Enter user email">
		
		<label for = "role_id">Role ID</label>
        <input type="text" value = "{{$user->role_id}}" name ="role_id" class="form-control" id="{{$user->role_id}}" placeholder="Enter role id">
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