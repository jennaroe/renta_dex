@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Update Tours</div>

                <div class="panel-body">
                    Our Form
                    {!! Form::model($tours, array('route'=>['tours.update', $tours->id], 'method'=>'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('tourName', 'Tour Name') !!}
                            {!! Form::text('tourName', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('tourDescript', 'Enter Description') !!}
                            {!! Form::text('tourDescript', null, ['class'=> 'form-control']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('tourTime', 'Enter Time') !!}
                            {!! Form::text('tourTime', null, ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">

                            {!! Form::button('Update',['type' =>'submit', 'class'=>'btn btn-primary']) !!}
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
