@extends('index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <h3 align="center">Add Data</h3>
            <br/>
            <form method="post" action="{{url('daudua')}}">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"/>
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Enter Address"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary"/>
                </div>
            </form>
        </div>
    </div>
@endsection()