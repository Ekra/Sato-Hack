@extends('layouts.master')

@section('content')
<div class="page-header">
<div class="pull-right">
<div class="btn-group">

 	<a href="{{route('users.index')}}" class="btn btn-default">Back</a>


 	<a href="{{route('users.edit',array($user->id))}}" class="btn btn-default">Edit profile</a>
 </div>
 </div>
 <h2>Show profile</h2>
</div>
<p>{{ $user->names }}</p>
<p>{{ $user->gender }}</p>
<p>{{ $user->phone }}</p>
<p>{{ $user->country }}</p>
<p>{{ $user->dob }}</p>
<p>{{ $user->marital_status }}</p>
<p>{{ $user->photo }}</p>



@stop