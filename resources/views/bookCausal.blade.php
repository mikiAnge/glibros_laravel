@extends('layouts.user')
@section('title','Documentos')
@section('contenido')
    <!-- Start Header Section -->
    <div class="page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Resultados de Busqueda</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->
    
    
    
    
    
    <!-- Start contenido Section -->
    <section id="service-section">

    @if (isset($details))
        <div class="container">
            <div class="row">
                @foreach ($details as $books)
                    
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
    @elseif(isset($message))
        <div class="container">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>!Lo sentimos! No hay Resultados!!!</strong><br>
                <strong>(╥_╥)</strong>
            </div>
        </div>
    @endif
            
    </section>
    <!-- end contenido Section -->
    
    
@endsection     
