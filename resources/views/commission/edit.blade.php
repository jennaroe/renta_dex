@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" >
            <div class="panel panel-default">
                 <div class="panel-heading">Update Commissions</div>

                <div class="panel-body">
                    Update Commissions:
                    {!! Form::model($commissions, array('route'=>['commissions.update', $commissions->id], 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('clientName', 'Name') !!}
                            {!! Form::text('clientName', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('building', 'Enter Building Name') !!}
                            {!! Form::text('building', null, ['class'=> 'form-control']) !!}

                        </div>

                        <div class="form-group">
                            {!! Form::label('unitNum', 'Unit Number') !!}
                            {!! Form::text('unitNum', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('moveInDate', 'Move In Date') !!}
                            {!! Form::text('moveInDate', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rentalRate', 'Rental Rate') !!}
                            {!! Form::text('rentalRate', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Commission', 'Commission Amount') !!}
                            {!! Form::text('Commission', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Status', 'Current Status') !!}
                            {!! Form::select('Status', ['Application Approved' => 'Application Approved', 'Lease Signed' => 'Lease Signed', 'Moved In' => 'Moved In', 'Invoice Sent' => 'Invoice Sent', 'Invoice Paid' => 'Invoice Paid'], null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('notes', 'Notes') !!}
                            {!! Form::text('notes', null, ['class'=> 'form-control']) !!}
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
