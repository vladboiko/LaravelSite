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

      <!-- /.card -->
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create theme</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('themes.store')}}" method="POST">
			   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="Theme ID">Theme ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Enter ID">
                  </div>
                  <div class="form-group">
                    <label for="createCategory">Name Theme</label>
                    <input type="text" class="form-control" name="theme_title" placeholder="Enter category">
                  </div>
                  <div class="form-group">
                    <label for="descriptionCategory">Description Theme</label>
                    <textarea class="form-control" name="theme_description" placeholder="Description"> </textarea>
                  </div>
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection