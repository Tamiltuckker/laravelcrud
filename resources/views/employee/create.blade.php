@extends('layouts.app')
@section('content')
<div class="container">  
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif 

    {!! Form::model($model,['url' => 'employee','method' => 'post']) !!} 
    @csrf 
      <div class="card">
        <div class="card-header bg-info text-white text-center head mt-3">Employee Registration Form</div>
          <div class="card-body">
            @include('employee.form')
            <!-- card footer -->
            <div class="col text-left">
            {!! Form::submit('Register',['class' => 'btn btn-info']) !!} 
            <a href="{{route('employee.index')}}" class="btn btn-success">All Employees List</a>
            </div>
        </div>
      </div>
    {!! Form::close() !!}
</div>                              
@endsection