@extends('layouts.master')

@section('content')
	{{ Form::open(array('route' =>'users.store')) }}
	<div class="form-group">
        {{Form::label('Names')}}
	    {{Form::text('names',null ,array('class'=> 'form-control'))}}
	</div>
	<div class="form-group">
        {{Form::label(' Date of birth')}}
        {{Form::selectRange('dob[day]',1,31)}}
        {{Form::selectRange('dob[year]',1996,1900) }}
        {{Form::selectMonth('dob[month]') }}
	</div>
    <div class="form-group">
        {{Form::label('Gender')}}
        <div class="radio">
        <label>{{Form::radio('gender','Male')}} Male</label>
        </div> 
        <div class="radio">
        <label>{{Form::radio('gender','Female',true)}} Female</label>
        </div> 
    </div> 
    <div class="form-group">
        {{Form::label('Phone number')}}
        {{Form::text('phone',null ,array('class'=> 'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('Country')}}
        {{Form::text('country',null ,array('class'=> 'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('Marital status')}}
        {{Form::select('marital_status',$marital_status,null ,array('class'=> 'form-control'))}}
    </div>

    <div class="form-group">
        {{Form::submit('Create profile', array('class'=>'btn btn-primary'))}}
     </div>

    <div class="form-group">
      	{{Form::close() }}
    </div>

@stop