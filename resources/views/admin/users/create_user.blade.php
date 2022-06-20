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
                <h3 class="card-title">New user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('users.store')}}" method="POST">
			  @csrf
                <div class="card-body">
                  <div class="form-group">
					<label for="name">User name</label>
                    <input type="text" name ="name" class="form-control" id="title" placeholder="Enter title user" required>       
<label for="email">User email</label>
					<input type="email" name ="email" class="form-control"  placeholder="Enter  user email" required>
<label for="role_id">Role ID</label>					
					<input type="text" name ="role_id" class="form-control"  placeholder="Enter role ID" required>	
<label for="password">Password</label>					
					<input type="password" name ="password" class="form-control"  placeholder="Enter password" required>	
					<br>
					<input type="text" name ="user_image" class="form-control" id="image" placeholder="Enter image">
                  </div>
            
    <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card -->
			
@endsection