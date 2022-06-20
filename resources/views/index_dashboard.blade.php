@extends('layouts.app_dashboard')

@section('content')
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
					  {{  $task ->task_id}}
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
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              40% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                         
                  </tr>
                  </tbody>
				  @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>

    </section>
    <!-- /.content -->
 
@endsection
