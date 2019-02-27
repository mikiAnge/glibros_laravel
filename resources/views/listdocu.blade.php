@extends('layouts.user')
@section('title','Documentos')
@section('contenido')
    <!-- Start Header Section -->
    <div class="page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $titu }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->
    
    
    
    
    
    <!-- Start Service Section -->
    <section id="service-section">
            <div class="container">
                <div class="row">
                    @foreach ($book as $books)
                        <div class="col-md-3">
                            <div class="services-post">
                                <a href="{{ route('viewpdf', $books->id) }}"><i class="fa fa-file-pdf-o"></i></a>
                                <h2>{{ $books->title }}</h2>
                                <p>{{ $books->category }}--{{ $books->causal }}</p>
                                <p>{{ $books->year }}</p>
                            </div>
                        </div>

                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- Start Service Section -->
    
    <!-- Start Pagination -->
    
    <div class="pagination">
        {{ $book->links('vendor.pagination.bootstrap-4') }}
    </div>
    <!-- End Pagination -->
@endsection     
