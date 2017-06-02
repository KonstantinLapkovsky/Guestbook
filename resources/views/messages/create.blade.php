@extends ('layouts.master')

@section ('content')

	<div class="col-sm-12" id="register">
		
		<h1>Register</h1>

		<form method="POST" action="/messages">

			{{ csrf_field() }}
			
			<div class="form-group">
				
				<label for="name">Name:</label>

				<input type="text" class="form-control" id="name" name="name" required>

			</div>

			<div class="form-group">
				
				<label for="email">Email:</label>

				<input type="email" class="form-control" id="email" name="email" required>

			</div>

			<div class="form-group">
				
				<label for="password">Password:</label>

				<input type="password" class="form-control" id="password" name="password" required>

			</div>

			<div class="form-group">
				
				<label for="text">Message text:</label>

				<input type="textarea" class="form-control" id="text" name="email" required>

			</div>

			<div class="form-group">
				
				<label for="password_confirmation">Password confirmation:</label>

				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

			</div>

			<div class="form-group">
				
				<div class="btn btn-primary">Send message</div>

			</div> 

			@include ('layouts.errors')

		</form>

	</div>

@endsection