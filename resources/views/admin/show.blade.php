@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="data col-md-3">
				<p><strong>Título:</strong> {{ $book->title }}</p>
				<p><strong>Año:</strong> {{ $book->year }}</p>
				<p><strong>Categoría:</strong> {{ $book->category }}</p>
				<p><a href="{{ Storage::url($book->pdf) }}" target="_blank"><i class="ion-android-archive"></i>Ver pantalla completa</a></p>
			</div>
			<div class="pdf col-md-6">
				<embed src="{{ Storage::url($book->pdf) }}" type="application/pdf" width="800" height="600"></embed>
			</div>
			
		</div>
	</div>


@endsection