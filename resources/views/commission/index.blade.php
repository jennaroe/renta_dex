@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Commission Tracker</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                          <th>Name</th>
                          <th>Building</th>
                          <th>Unit #</th>
                          <th>Move In Date</th>
                          <th>Rental Rate</th>
                          <th>Commission Rate</th>
                          <th>Status</th>
                          <th>Notes</th>
                        </tr>
                        @foreach($commissions as $commission)
                            <tr>
                                <td>{{ $commission->clientName }}</td>
                                <td>{{ $commission->building }}</td>
                                <td>{{ $commission->unitNum }}</td>
                                <td>{{ $commission->moveInDate }}</td>
                                <td>{{ $commission->rentalRate }}</td>
                                <td>{{ $commission->Commission }}</td>
                                <td>{{ $commission->Status }}</td>
                                <td>{{ $commission->notes }}</td>
                                <td>

                                    {!! Form::open(array('route'=>['commissions.destroy', $commission->id], 'method'=> 'DELETE')) !!}
                                    {{ link_to_route('commissions.edit','Edit',[$commission->id],['class'=>'btn btn-warning']) }}
                                    |
                                    
                                    {!! Form::button('Delete',['type' =>'submit', 'class'=>'btn btn-info']) !!}
                                    {!! Form::close() !!}

                                </td>    
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>

            {{ link_to_route('commissions.create','Add New Signed Lease',null,['class'=>'btn bg-purple']) }}

        </div>
    </div>
</div>
@endsection