@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            
            <div class="panel panel-default">
                <div class="panel-heading">Client Tracker</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Move In Date</th>
                          <th>Budget</th>
                          <th># of Rooms</th>
                          <th># of Baths</th>
                          <th>Pets</th>
                          <th>Client Status</th>
                        </tr>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->clientName }}</td>
                                <td>{{ $client->clientNum }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->moveInDate }}</td>
                                <td>{{ $client->budget }}</td>
                                <td>{{ $client->numRooms }}</td>
                                <td>{{ $client->numBaths }}</td>
                                <td>{{ $client->pets }}</td>
                                <td>{{ $client->clientStatus }}</td>
                                
                                <td>

                                    {!! Form::open(array('route'=>['clients.destroy', $client->id], 'method'=> 'DELETE')) !!}
                                    {{ link_to_route('clients.edit','Edit',[$client->id],['class'=>'btn btn-primary']) }}
                                    |
                                    
                                    {!! Form::button('Delete',['type' =>'submit', 'class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>    
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>

            {{ link_to_route('clients.create','Add new Client',null,['class'=>'btn btn-success']) }}

        </div>
    </div>
</div>
@endsection