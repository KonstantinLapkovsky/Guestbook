@extends ('layouts.master')

@section ('content')

<div class="guest-form">

	<div class="col-sm-12">
		
		<h1>Send message</h1>

		<form method="POST" action="/messages/create" id="message-create-form">

			{{ csrf_field() }}
			
			<div class="form-group">
				
				<label for="name">Name:</label>

				<input type="text" class="form-control" id="name" name="name">

			</div>

			<div class="form-group">
				
				<label for="email">Email:</label>

				<input type="email" class="form-control" id="email" name="email" class="required email">

			</div>

			<div class="form-group">
				
				<label for="message">Message text:</label>

				<textarea class="form-control" id="message" name="message"></textarea>

			</div>

			<div class="form-group">
				
				<label for="captcha">Captcha:</label>

				<span id="captcha">{{ $captcha }}</span>

			</div>

			<div class="form-group">
				
				<label for="captcha_confirmation">Captcha:</label>

				<input type="text" class="form-control" id="captcha_confirmation" name="captcha_confirmation">

			</div>

			<div class="form-group">
				
				<button type="submit" class="btn btn-primary">Send message</button>

			</div> 

			@include ('layouts.errors')

		</form>

	</div>

</div>

@endsection