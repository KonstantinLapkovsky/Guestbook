@extends ('layouts.master')

@section ('content')

	<div class="col-sm-8 blog-main">

		<h2>{{ $message->name }}</h2>
		<p class="blog-post-meta">
	  		{{ $message->email }}
	    	{{ $message->created_at->toFormattedDateString() }}
	    </p>

	 	<p>{{ $message->message }}</p>

	</div>

@endsection