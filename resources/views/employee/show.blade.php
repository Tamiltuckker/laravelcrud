@extends('layouts.app')
<title>{{ ('Form') }}</title>
@section('content')
   <h1>Name:{{ $employees->name }}</h1>
   <h1>Gender: {{ $employees->gender }}</h1>
   <h1>Skills: {{ $employees->skills }}</h1>
   <h1>DOB: {{ $employees->dob }}</h1>
   <h1>city: {{ $employees->city }}</h1>
   <h1>address: {{ $employees->address }}</h1>
@endsection