@extends('index')
@section('content')

<div class="">
	<h1>{{ Auth::user()->name }}</h1>
	
</div>
{{Form::open(['route'=>'profile.edit','role'=>'form','id'=>'profile_form','class'=>'form'])}}
	<div class="form-group col-sm-5">
	<label for="addressInput">Address:
		{{ Form::text('address',null, ['class'=>'form-control address',
		'id'=>'addressInput']) }}
	</label>
	</div>

	<div class="form-group col-sm-5">
		<label for="birthdateInput">Birth Date:
		{{ Form::date('birthdate',null, ['class'=>'form-control',
		'id'=>'birthdateInput']) }}
		</label>
		
	</div>
	<div class="form-group col-sm-5">
		<label for="fileInput">
		{{ Form::file('prof pic',null, ['class'=>'form-control file',
		'id'=>'fileInput']) }}
		</label>
		
	</div>
	<div class="form-group col-sm-5">
		<input type="submit" value="Edit Details" class="btn btn-secondary"/>
		
	</div>
	
	
{{ Form::close() }}
	<script>
		$(function(){
	var inputSelector =$('input');
	if(!inputSelector.val().toString().length==0){
		inputSelector.attr('disabled','disabled');
	}
		})

		
	</script>
@endsection

