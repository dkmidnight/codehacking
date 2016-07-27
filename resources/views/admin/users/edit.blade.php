@extends('layouts.admin')



@section('content')

	<h1>Edit Users</h1>

	<div class="col-sm-3">
		
		<img height="30" src="{{$user->photo ? $user->photo->file : '/images/no-image-icon-hi.png'}}" class="img-responsive img-rounded"></img>


	</div>

	<div class="col-sm-9">

		@include('includes.form_error')

		{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}




		<div class="form-group">
			
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}

		</div>



		<div class="form-group">
			
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			
			{!! Form::label('role_id', 'Role:') !!}
			{!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			
			{!! Form::label('is_active', 'Status:') !!}
			{!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active', ), null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			
			{!! Form::label('photo_id', 'Photo:') !!}
			{!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}

		</div>

		<div class="form-group">
			
			{!! Form::label('confirm_password', 'Confirm Password:') !!}
			{!! Form::password('confirm_password', ['class'=>'form-control']) !!}

		</div>


		<div class="form-group">

			{!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6']) !!}
			
		</div>

		{!! Form::close() !!}
		
		<div class="form-group">

			{!! Form::open(['method'=>'Delete', 'action'=>['AdminUsersController@update', $user->id]]) !!}

			{!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}

			{!! Form::close() !!}
		</div>

	</div>









@stop