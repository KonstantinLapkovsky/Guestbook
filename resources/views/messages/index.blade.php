@extends ('layouts.master')

@section ('content')

@if (count($messages) > 0)

<div class="col-sm-8 blog-main"  id="messages">
    <table class="table table-bordered table-striped">
		<tr>
			<th>
				<a href="/messages?order=name&dir=asc">Name</a>
			</th>
			<th>
				<a href="/messages?order=email&dir=asc">Email</a>
			</th>
			<th>
				<a href="/messages?order=created_at&dir=asc">Date</a>
			</th>
		</tr>
		@foreach ($messages as $message)
			
				<tr>
					<td><a href="#">{{ $message->name }}</a></td>
					<td>{{ $message->email }}</td>
					<td>{{ $message->created_at }}</td>
				</tr>

		@endforeach
	</table>	
	
	{!! $messages->appends(Request::except('page'))->links() !!}

</div><!-- /.blog-main -->

@endif



@endsection