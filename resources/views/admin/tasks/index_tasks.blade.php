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

      <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Themes </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          №
                      </th>
                      <th style="width: 20%">
                           Title Task
                      </th>
                      <th style="width: 30%">
                          Description's task
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
			@foreach($tasks as $task)  
              <tbody>
                  <tr>
                      <td>
					  {{  $task['id']}}
                      </td>
                      <td>
                          <a>
						  {{$task->task_title}}
                          </a>
                          <br>
                          <small>
                            {{$task->reg_date}}
                          </small>
                      </td>
					  <td>
					  {{  $task ->task_text}}
                      </td>
                      
                      
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{route('tasks.show',$task->id)}}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                  <td>
                          <a class="btn btn-info btn-sm" href="{{route('tasks.edit',$task['id'])}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
						  </td>
						  <td>
                        <form action="{{route('tasks.destroy',$task['id'])}}" method="post" style="display:inline-block">
						  @csrf
						  @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm delete-btn" onclick="return confirm('are you sure you want to delete this post')">
                              <i class="fas fa-trash" >
                              </i>
                              Delete
                          </button>
						  </form>
                      </td>
                  </tr>
					  @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>

    </section>
    <!-- /.content -->
 
@endsection
