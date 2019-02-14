@extends('layouts.user')
@section('title','pdf')
@section('contenido')
    <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{ $book->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        
        
        
        <!-- Start Blog Page Section -->
        <div class="container">
            <div class="row">
                
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    
                    <!-- Start Blog post -->
                    <div class="blog-post">
                        <i class="fa fa-file-pdf-o"></i>
                        <h1 class="post-title">{{ $book->foul }}>{{ $book->category }}>{{ $book->causal }}</h1>
                        
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>{{ $book->year }} |</li>
                            <li><i class="fa fa-download"></i><a href="{{ Storage::url($book->pdf) }}" download="{{ $book->title }}">Descargar |</a></li>
							<li><i class="fa fa-eye"></i><a href="{{ Storage::url($book->pdf) }}" target="_blank"><i class="ion-android-archive"></i>Ver en pantalla completa</a></li>
						</ul>
                        
                        <embed src="{{ Storage::url($book->pdf) }}" type="application/pdf"  width="750" height="800"></embed>

                    </div>
                    <!-- End Blog Post -->
                </div>
                <!-- End Blog Body Section -->
                
                <!-- Start Sidebar Section -->
                <div class="col-md-4 sidebar right-sidebar">
                    
                    
                    <!-- Start botones extras -->
                    <div class="widget flickr-widget">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Flickr Stream</span>
                            </h3><br>
                            <a href="#" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- End botones extras -->
                </div>
                <!-- End Sidebar Section -->
                
            </div>
        </div>
        <!-- End Blog Page Section -->

@endsection     