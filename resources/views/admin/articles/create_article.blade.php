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
                <h3 class="card-title">New article</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('articles.store')}}" method="POST">
			  @csrf
                <div class="card-body">
                  <div class="form-group">
					<label for="article_title">Article title</label>
                    <input type="text" name ="article_title" class="form-control" id="title" placeholder="Enter title article" required>       
<label for="article_full">Article text</label>
					<textarea rows="10" name ="article_full" class="form-control"  ></textarea>
<label for="author_id">Author ID</label>					
					<input type="text" name ="author_id" class="form-control"  placeholder="Enter author ID" required>	
					<label for="theme_id">Theme ID</label>
					<input type="text" name ="theme_id" class="form-control"  placeholder="Enter theme ID" required>	
					<br>
					<input type="text" name ="article_image" class="form-control" id="image" placeholder="Enter image">
                  </div>
            
    <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- /.card -->
			
@endsection