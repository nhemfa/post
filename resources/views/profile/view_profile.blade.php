@extends('index')
@section('content')
<h1>My Profile</h1>
<style>
	img{
		width: 200px;
		height:200px;
		max-height: 300px;
		max-width: 200px;
		border-radius: 50%;
		position: right;
		float: relative;
	}
</style>
<div class="col-sm-6">
	<div class="alert-success">
		<span class="text-success">Name:
			<strong>{{ Auth::user()->name }}</strong>
		</span><br>
		<span class="text-info">E-mail:
			<strong>{{ Auth::user()->email }}</strong>
		</span><br>
		@foreach($profile as $profile)
		<img src="{{asset('storage/avatars/'.$profile->prof_pic)}}" alt="My Prof Pic" />
		<br>
		<span class="text-success text-capitalize">Address:
			<strong>{{ $profile->address }}</strong>
		</span><br>
		<span class="text-success">Age:
			<strong>{{ $profile->age }}</strong>
		</span><br>
		<span class="text-success">Date of Birth:
			<strong>{{ $profile->birthdate }}</strong>
		</span>
		@endforeach
	</div>
	<td><a  class="btn btn-primary" type="submit">
		Edit Profile</a></td>
</div>
@endsection