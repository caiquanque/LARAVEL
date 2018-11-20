@extends('index')

@section('content')
    <div class="row">
        <div class="col-md-21">
            <br/>
            <h3 align="center">
                Dau Dua Data
            </h3>
            <br/>
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div align="right">
                <a href="{{route('daudua.create')}}" class="btn btn-primary">Add</a>
                <br/>
                <br/>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($dauduas as $daudua)
                    <tr>
                        <td>{{$daudua['name']}}</td>
                        <td>{{$daudua['address']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection