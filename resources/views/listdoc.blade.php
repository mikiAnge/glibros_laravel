@extends('layouts.user')
@section('title','Documentos')
@section('contenido')
    <!-- Start Header Section -->
    <div class="page-header">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Listado</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Section -->
    
    
    
    
    
    <!-- Start Portfolio Section -->
    <section id="portfolio" class="portfolio-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <!-- Start Portfolio items -->
                    <ul id="portfolio-list">
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                            <div class="portfolio-item">
                                <img src="{{ asset('images/portfolio/pdf.png') }}" class="img-responsive" alt="" />
                                <div class="portfolio-caption">
                                    <h4>titulo Documento</h4>
                                    <p>fecha del documento</p>
                                    <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-download"></i></a>
                                    <a href="{{ route('viewpdf') }}" class="link-2"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="{{ asset('images/portfolio/pdf.png') }}" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>titulo Documento</h4>
                                        <p>fecha del documento</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-download"></i></a>
                                        <a href="{{ route('viewpdf') }}" class="link-2"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="{{ asset('images/portfolio/pdf.png') }}" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>titulo Documento</h4>
                                        <p>fecha del documento</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-download"></i></a>
                                        <a href="{{ route('viewpdf') }}" class="link-2"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="{{ asset('images/portfolio/pdf.png') }}" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>titulo Documento</h4>
                                        <p>fecha del documento</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-download"></i></a>
                                        <a href="{{ route('viewpdf') }}" class="link-2"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="{{ asset('images/portfolio/pdf.png') }}" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>titulo Documento</h4>
                                        <p>fecha del documento</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-download"></i></a>
                                        <a href="{{ route('viewpdf') }}" class="link-2"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="300ms">
                                <div class="portfolio-item">
                                    <img src="{{ asset('images/portfolio/pdf.png') }}" class="img-responsive" alt="" />
                                    <div class="portfolio-caption">
                                        <h4>titulo Documento</h4>
                                        <p>fecha del documento</p>
                                        <a href="#portfolio-modal" data-toggle="modal" class="link-1"><i class="fa fa-download"></i></a>
                                        <a href="{{ route('viewpdf') }}" class="link-2"><i class="fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </li>
                        
                        
                    </ul>
                    <!-- End Portfolio items -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->

@endsection     
