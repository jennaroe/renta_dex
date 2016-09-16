@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5" >
            <div class="panel panel-default">
                 <div class="panel-heading">Update Profile</div>

                <div class="panel-body">
                    Update Profile:
                    {!! Form::model($user, array('route'=>['acctInfo', $users->id], 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=> 'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::text('password', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('brokerName', 'Broker Name') !!}
                            {!! Form::text('brokerName', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('brokerAddress', 'Broker Address') !!}
                            {!! Form::text('brokerAddress', null, ['class'=> 'form-control']) !!}
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
