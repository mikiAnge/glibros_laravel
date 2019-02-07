@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="form col-md-3 col-md-offset-1">
            <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{$errors->has('year') ? 'has-error' : ''}}">
                    <label>Year</label>
                    <input type="int" name="year" class="form-control">
                    {!! $errors->first('year', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        <option>category 1</option>
                        <option>category 2</option>
                        <option>category 3</option>
                    </select>
                </div>
                <div class="form-group {{$errors->has('pdf') ? 'has-error' : ''}}">
                    <label>Upload pdf</label>
                    <input type="file" name="pdf" class="form-control">
                    {!! $errors->first('pdf', '<span class="help-block">:message</span>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="list col-md-6 col-md-offset-1"><br>
            <!-- <img width="200" src="/storage/nA1lLUMRkP8zyJOgyQtNHOEIcCowDyYBphfkxzJj.jpeg">

            <a href="/storage/aBZ0Q54XM8noLETgUuyjydf4WfEbtLL9lSfHNtYU.pdf" download="data.pdf">Download Text</a>
            <a href="/storage/aBZ0Q54XM8noLETgUuyjydf4WfEbtLL9lSfHNtYU.pdf" target="_blank"><i class="ion-android-archive"></i>asd</a>

            <embed src="/storage/aBZ0Q54XM8noLETgUuyjydf4WfEbtLL9lSfHNtYU.pdf" type="application/pdf" width="800" height="600"></embed> -->

            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form><br>

            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nombre</th>
                  <th>Año</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($books as $book)
                    <tr>
                      <td>1</td>
                      <td>{{ $book->title }}</td>
                      <td>{{ $book->year }}</td>
                      <td>                    
                            <a class="btn btn-success btn-xs" href="{{ Storage::url($book->pdf) }}" download="{{$book->title}}">descargar</a>
                            <a href="{{ route('book.show', $book->id) }}" class="btn btn-warning btn-xs">ver</a>
                            <form method="delete" action="{{ route('book.destroy', $book->id) }}">
                                <button class="btn btn-danger btn-xs">eliminar</button>
                            </form>
                            <button class="btn btn-info btn-xs">editar</button>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>        
        </div>
    </div>
</div>
@endsection
