@extends('layouts.app')

@section('content')

	<div class="container">
		{{ $book->title }}
	</div>

	<div class="container">
		<embed src="{{ Storage::url($book->pdf) }}"  type="application/pdf" width="800" height="600"></embed>
	</div>

@endsection