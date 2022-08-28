@extends('layouts.main')
@section('content')

<div class="container">

	@if($errors->any())
	@foreach($errors->all() as $error)
	<div class="alert alert-danger" role="alert">
		{{ $error }}
	</div>

	@endforeach
	@endif

<h1>Create Page</h1>

<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">

	{{ csrf_field() }}

	<p class="h4 mb-4">Add Student</p>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example1" class="form-control" name="firstname" placeholder="First Name" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form3Example2" class="form-control" name="lastname" placeholder="Last Name" />
  
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Email" />
    
  </div>

  <!-- Phone Number -->
  <div class="form-outline mb-4">
  <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone Number" 	aria-describedby="defaultRegisterFormPhoneHelpBlock">
  </div>
  <!-- Checkbox -->
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4 ">Add Data</button>

  <!-- Register buttons -->
 
</form>

</div>
@endsection