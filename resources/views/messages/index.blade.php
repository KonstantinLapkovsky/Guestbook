@extends ('layouts.master')

@section ('content')

@if (count($messages) > 0)

<div class="col-sm-12 blog-main"  id="messages">
	<div class="col-md-5 mb-4">
		<span class="mr-3">
			Sort by: 
		</span>
		<span class="mr-2">
			<a href="/messages?order=name&dir=asc">Name </a>
		</span>
		<span class="mr-2">
			<a href="/messages?order=email&dir=asc">Email </a>
		</span>
		<span class="mr-2">
			<a href="/messages?order=created_at&dir=asc">Created time</a>
		</span>
	</div>
    <table class="table table-bordered table-striped">
		<tr>
			<th>
				Name
			</th>
			<th>
				Message
			</th>
		</tr>
		@foreach ($messages as $message)
			<tr>
				<td>{{ $message->name }}
				  	<p class="blog-post-meta">
				    	{{ $message->created_at->toFormattedDateString() }}
				    </p>
					<p class="blog-post-meta">
				  		{{ $message->email }}
				  	</p>
			    </td>
			    <td>
			    	{{ $message->message }}
			    </td>
			</tr>
		@endforeach
	</table>	
	{!! $messages->appends(Request::except('page'))->links() !!}

</div><!-- /.blog-main -->

@endif

@endsection