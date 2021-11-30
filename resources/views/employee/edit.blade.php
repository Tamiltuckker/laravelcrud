@extends('layouts.app')

@section('content')
<div class="container"> 
{!! Form::model($getemployees,['url' =>['employee_update', $getemployees->id], 'method' => 'post'])!!} 
{{ csrf_field() }} 

        <div class="card">          
            <div class="card-header bg-primary text-white text-center head mt-3">Employee Edit Form</div>
              <div class="card-body">
                  @include('employee.form')
                  <!-- card footer -->
                <div class="col text-left">
                {!! Form::submit('Update',['class' => 'btn btn-primary']) !!} 
                {!! Form::hidden("emp_id", $getemployees->id ,['class' => 'col-sm-4']) !!}
                </div>
            </div>
        </div>
      {!! Form::close() !!}
</div> 
@endsection                             