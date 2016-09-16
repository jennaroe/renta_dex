@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Tours</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Tour Name</th>
                            <th>Description</th>
                            <th>Time/Date</th>
                        </tr>
                        @foreach($tours as $tour)
                            <tr>
                                <td>{{ $tour->tourName }}</td>
                                <td>{{ $tour->tourDescript}}</td>
                                <td>{{ $tour->tourTime}}</td>
                                <td>

                                    {!! Form::open(array('route'=>['tours.destroy', $tour->id], 'method'=> 'DELETE')) !!}
                                    {{ link_to_route('tours.edit','Edit',[$tour->id],['class'=>'btn btn-primary']) }}
                                    |
                                    
                                        {!! Form::button('Delete',['type' =>'submit', 'class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}

                                </td>    
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>

            {{ link_to_route('tours.create','Add new tour',null,['class'=>'btn btn-success']) }}

        </div>
    </div>
</div>
@endsection