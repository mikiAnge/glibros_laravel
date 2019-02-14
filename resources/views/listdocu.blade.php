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
                    @foreach ($book as $book)
                        <div class="col-md-3">
                            <div class="services-post">
                                <a href="{{ route('viewpdf', $book->id) }}"><i class="fa fa-file-pdf-o"></i></a>
                                <h2>{{ $book->title }}</h2>
                                <p>{{ $book->category }}--{{ $book->causal }}</p>
                                <p>{{ $book->year }}</p>
                            </div>
                        </div>

                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- Start Service Section -->
    
    <!-- Start Pagination -->
    <nav>
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Start">Start</a></li>
            <li class="disabled"><a href="#" aria-label="Previous">Prev</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">Next</a></li>
            <li><a href="#">End</a></li>
        </ul>
    </nav>
    <!-- End Pagination -->
@endsection     
