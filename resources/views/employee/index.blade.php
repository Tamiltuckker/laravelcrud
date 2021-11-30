@extends('layouts.app')
<title>{{ ('Form') }}</title>
@section('content')

<div class="container">
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif
    <a href="{{route('employee.create')}}" class="btn btn-info float-right mb-3">Register Here</a>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Skills</th>
            <th scope="col">Dob</th>
            <th scope="col">City</th>     
            <th scope="col">Address</th>   
            <th scope="col">Phone</th>           
            <th scope="col">Edit</th>  
            <th scope="col">Show</th>
            <th scope="col">Delete</th>              
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $key=> $value)
            @php
                $key = $key+1; 
            @endphp
            <tr>
                <th scope="row">{{$key}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->gender}}</td>
                <td>{{$value->skills}}</td>
                <td>{{$value->dob}}</td>
                <td>{{$value->city}}</td>
                <td>{{$value->address}}</td>
                <td>{{$value->phone['phone']}}</td>
                <td> 
                    <div class="col-6">
                        <a href="{{route('employee.edit',$value->id)}}" class="btn btn-primary">Edit</a>
                    </div>
                </td>
                <td> 
                    <div class="col-6">
                        <a href="{{route('employee.show',$value->id)}}" class="btn btn-success">Show</a>
                    </div>
                </td>
                <td> 
                    <div class="col-6">
                        <a href="{{route('employee.destroy',$value->id)}}" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection