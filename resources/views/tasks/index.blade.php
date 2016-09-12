@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
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

                       @foreach($tasks as task)
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
                {{link_to_route{'task.create', 'Add new task', null,['class'=> 'btn btn-primary']} }}
        </div>
    </div>
</div>
@endsection
