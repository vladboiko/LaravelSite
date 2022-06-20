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
                <h3 class="card-title">New task</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('tasks.store')}}" method="POST">
			  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <input type="text" name ="task_title" class="form-control" id="title" placeholder="Enter Task" required>       
<br>
					<input type="text" name ="task_text" class="form-control"  placeholder="Enter Text" required>	
					<br>
					<input type="text" name ="task_image" class="form-control" id="image" placeholder="Enter image">
                  </div>
            
    <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card -->
			
@endsection