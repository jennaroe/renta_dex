@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10" >
            <div class="panel panel-default">
                 <div class="panel-heading">Update Invoice</div>

                <div class="panel-body">
                    Update Invoice:
                    {!! Form::model($invoices, array('route'=>['invoices.update', $invoice->id], 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!! Form::label('date', 'Date') !!}
                            {!! Form::text('date', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('buildingName', 'Enter Building Name') !!}
                            {!! Form::text('buildingName', null, ['class'=> 'form-control']) !!}

                        </div>

                         <div class="form-group">
                            {!! Form::label('buildingAddress', 'Enter Building Address') !!}
                            {!! Form::text('buildingAddress', null, ['class'=> 'form-control']) !!}

                        </div>

                         <div class="form-group">
                            {!! Form::label('repName', 'Enter Rep Name') !!}
                            {!! Form::text('repName', null, ['class'=> 'form-control']) !!}

                        </div>

                         <div class="form-group">
                            {!! Form::label('tenantName', 'Enter Tenant Name') !!}
                            {!! Form::text('tenantName', null, ['class'=> 'form-control']) !!}

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
                            {!! Form::label('totalDue', 'Total Commission Due') !!}
                            {!! Form::text('totalDue', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Commission', 'Commission Amount') !!}
                            {!! Form::text('Commission', null, ['class'=> 'form-control']) !!}
                        </div>

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
