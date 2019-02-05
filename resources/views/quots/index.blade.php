@extends('master')

@section('content')

<div>
	@if(session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}  
	</div><br>
	@endif



	@foreach ($quots as $quot)
	<blockquote class="wp-block-quote">
		<p>{{ $quot->body }}</p>
		<cite>- {{ $quot->author }}</cite>
	</blockquote>
	@endforeach

	<div class="paginate text-center">

		{{ $quots->links() }}

	</div>
	


	@endsection