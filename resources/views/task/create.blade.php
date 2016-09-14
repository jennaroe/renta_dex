@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Tasks</div>

                <div class="panel-body">
                    Our Form
                    {!! Form::open(array('route'=>'task.store')) !!}
                        <div class="form-group">
                            {!! Form::label('taskTitle', 'Enter Title') !!}
                            {!! Form::text('taskTitle', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('taskDescript', 'Enter Description') !!}
                            {!! Form::text('taskDescript', null, ['class'=> 'form-control']) !!}

                        </div>

                        <!-- <div class="form-group">
                            {!! Form::label('taskTime', 'Enter Time') !!}
                            {!! Form::label('taskTime', null, ['class'=> 'form-control']) !!}
                        </div> -->
                        <div class="form-group">

                            {!! Form::button('Create',['type' =>'submit', 'class'=>'btn btn-primary']) !!}
                        </div>

                    {!! Form::close() !!}

                </div>
            </div>
                @if($errors->has())
                  <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                @endif
        </div>
    </div>
</div>
@endsection
