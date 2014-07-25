<<<<<<< HEAD
@extends('layouts.master')

@section('content')
<div class="page-header">
	<div class="pull-right">

<!-- Create profile button -->
 <a href="{{route('users.create')}}" class="btn btn-default">Create profile</a>
</div>
<h2>Users</h2>
</div>
<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
			@foreach ($users as $user)
		<tr>
			<td>{{ $user->names }} </td>
			<td>{{ $user->phone }} </td>
			<td>{{ $user->gender }} </td>
		<td>
 			<a href="{{route('users.show',array($user->id))}}" class="btn btn-primary">View</a>
 		</td>
		</tr>
		@endforeach
		</tbody>



</table>
=======
@section('main')

<h1>All Users</h1>

<p>{{ link_to_route('users.create', 'Add new user') }}</p>

@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
          <td>{{ $user->password }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->phone }}</td>
          <td>{{ $user->name }}</td>
                    <td>{{ link_to_route('users.edit', 'Edit',
 array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('users.destroy', $user->id))) }}                       
                            {{ Form::submit('Delete', array('class'
 => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no users
@endif
>>>>>>> c38a752649ee9d8ff0c1beb028772a14d4b39fcb

@stop