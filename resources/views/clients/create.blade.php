@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Clients</div>

                <div class="panel-body">
                    Enter new Signed Lease:
                    {!! Form::open(array('route'=>'clients.store')) !!}
                        <div class="form-group">
                            {!! Form::label('clientName', 'Name') !!}
                            {!! Form::text('clientName', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('clientNum', 'Phone Number') !!}
                            {!! Form::text('clientNum', null, ['class'=> 'form-control']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('moveInDate', 'Move In Date') !!}
                            {!! Form::text('moveInDate', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('budget', 'Budget') !!}
                            {!! Form::text('budget', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('numRooms', '# of Rooms') !!}
                            {!! Form::text('numRooms', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('numBaths', '# of Baths') !!}
                            {!! Form::text('numBaths', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('pets', 'Any Pets?') !!}
                            {!! Form::select('pets', ['Yes' => 'Yes', 'No' => 'No'], null, ['class'=> 'form-control', 'placeholder' =>'Select Status']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('clientStatus', 'Current Status') !!}
                            {!! Form::select('clientStatus', ['Emails Exchanged' => 'Emails Exchanged', 'Phone Calls Exchanged' => 'Phone Calls Exchanged', 'Tours Scheduled' => 'Tours Scheduled', 'Application Submited' => 'Application Submitted', 'No more response' => 'No more response'], null, ['class'=> 'form-control', 'placeholder' =>'Select Status']) !!}
                        </div>


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
