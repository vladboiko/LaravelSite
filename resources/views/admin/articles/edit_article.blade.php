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
                <h3 class="card-title"><?php print('Edit article: '.$article->article_title); ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('articles.update',$article->id)}}" method="POST">
			  @csrf
			  @method('PUT')
                <div class="card-body">
                  <div class="form-group">
				  <label for = "id"> ID</label>
                    <input type="text" value = "{{$article->id}}" name ="{{$article->id}}" class="form-control" id="{{$article->id}}" placeholder="Enter id">
					<br>
					<label for = "article_title">article title</label>
					<input type="text" value = "{{$article->article_title}}" name ="article_title" class="form-control"  placeholder="Enter article title">
					<br>
					<label for = "article_part_new">article questions</label>
					<textarea rows="10" name="questions" class="form-control">
					{{$article->questions}}
					</textarea>
					<label for = "article_text">article text</label>
		<textarea rows ="20" name ="article_full" class="form-control"  placeholder="Enter text article">
		{{$article->article_full}}
			
		</textarea>
		
		<label for = "theme_id">Theme ID</label>
        <input type="text" value = "{{$article->theme_id}}" name ="theme_id" class="form-control" id="{{$article->theme_id}}" placeholder="Enter theme id">
		<label for = "author_id">Author ID</label>
        <input type="text" value = "{{$article->author_id}}" name ="author_id" class="form-control" id="{{$article->author_id}}" placeholder="Enter author id">
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