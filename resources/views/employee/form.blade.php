
<div class="form-group">
    {!! Form::label('name', 'Name',['class' => 'col-sm-4']) !!}
    {!! Form::text('name'); !!}
    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('gender', 'Gender',['class' => 'col-sm-4']) !!}
        <div class="form-check form-check-inline radio-item ">
        {!! Form::radio('gender', 'Male'); !!}
        {!! Form::label('gender', 'Male',['class' => 'form-check-label']) !!}
        </div>
        <div class="form-check form-check-inline">
        {!! Form::radio('gender', 'Female'); !!}
        {!! Form::label('gender', 'Female',['class' => 'form-check-label']) !!}
        @if ($errors->has('gender'))
        <span class="text-danger">{{ $errors->first('gender') }}</span>
        @endif 
        </div>
</div>
<div class="form-group">
    {!! Form::label('skills[]', 'Skills',['class' => 'col-sm-4']) !!}                           
        <div class="form-check form-check-inline">
        {!! Form::checkbox('skills[]','C') !!} 
        {!! Form::label('skill', 'C',['class' => 'form-check-label']) !!} 
        </div>
        <div class="form-check form-check-inline">
        {!! Form::checkbox('skills[]','C++') !!} 
        {!! Form::label('skill', 'C++',['class' => 'form-check-label']) !!} 
        </div>
        <div class="form-check form-check-inline">
        {!! Form::checkbox('skills[]','JAVA') !!} 
        {!! Form::label('skill', 'JAVA',['class' => 'form-check-label']) !!} 
        </div>
        <div class="form-check form-check-inline">
        {!! Form::checkbox('skills[]','AJAX') !!} 
        {!! Form::label('skill', 'AJAX',['class' => 'form-check-label']) !!} 
        </div> 
        @if ($errors->has('skills'))
        <span class="text-danger">{{ $errors->first('skills') }}</span>
        @endif                           
</div>
<div class="form-group">
    {!! Form::label('dob', 'DOB',['class' => 'col-sm-4']) !!}                     
    {!! Form::date('dob'); !!} 
    @if ($errors->has('dob'))
        <span class="text-danger">{{ $errors->first('dob') }}</span>
        @endif                                                    
</div>
<div class="form-group">
{!! Form::label('city', 'CITY',['class' => 'col-sm-4']) !!}
{!! Form::select('city', ['placeholder' => 'Select City','M' => 'Madurai', 'CH' => 'Chennai','T' => 'Theni','C' => 'Coimbatore']); !!}    
</div>
<div class="form-group">
    {!! Form::label('address', 'Address',['class' => 'col-sm-4']) !!}                     
    {!! Form::text('address'); !!} 
    @if ($errors->has('address'))
    <span class="text-danger">{{ $errors->first('address') }}</span>
    @endif                         
</div>
<div class="form-group">
    {!! Form::label('phone', 'Phone Number',['class' => 'col-sm-4']) !!}
    {!! Form::number('phone'); !!}
    @if ($errors->has('phone'))
    <span class="text-danger">{{ $errors->first('phone') }}</span>
    @endif
</div>