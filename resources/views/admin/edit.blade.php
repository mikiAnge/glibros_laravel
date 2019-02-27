@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="form col-md-4">
                <form method="post" action="{{ route('book.update', $book) }}" enctype="multipart/form-data">
                    {{ method_field('put') }}  {{ csrf_field() }}
                <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                    <label>Titulo</label>
                    <input type="text" name="title" value="{{ old('name',  $book->title) }}" class="form-control">
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{$errors->has('year') ? 'has-error' : ''}}">
                    <label>Fecha</label>
                    <input type="date" name="year" value="{{ old('year',  $book->year)}}" class="form-control">
                    {!! $errors->first('year', '<span class="help-block">:message</span>') !!}
                </div>
                <!-- radio de las faltas -->
               <div class="form-group">
                    <label>Tipo de Falta</label><br>
                    <select name="foul" class="form-control" value="{{ $book->foul }}">
                        <option>{{ $book->foul }}</option>
                        <option>Leves</option>
                        <option>Graves</option>
                        <option>Gravisimas</option>
                    </select>
                </div>
                <!--fin radio de las faltas -->

                <!-- radio de las categorias -->
                <div class="form-group">
                    <label>Categoria</label><br>
                    <select name="category" class="form-control" value="{{ $book->category }}">
                        <option>{{ $book->category }}</option>
                        <option>Al deber</option>
                        <option>Personal</option>
                        <option>A la institucion</option>
                    </select>
                </div>
             
                @include('admin.select_causal')

                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-info pull-right" href="{{ route('book.index') }}">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection