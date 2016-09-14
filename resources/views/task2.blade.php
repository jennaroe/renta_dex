@extends('admin_template')

@section('content')
    <div class='row'>
         <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks</div>

                <div class="panel-body">
                    <table class='table'>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        
                        @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->taskTitle}}</td>
                                <td>{{$task->taskDescript}}</td>
                                <td>{{$task->taskTime}}</td>
                                <td>
                                      edit
                                      |
                                      delete

                                </td>
                            </tr>

                        @endforeach

                    </table>
  
                </div>

              </div>
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection