@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="form col-md-4">
                <form method="post" action="{{ route('book.update', $book) }}" enctype="multipart/form-data">
                    {{ method_field('put') }}  {{ csrf_field() }}
                    <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                        <label>Title</label>
                        <input type="text" name="title" value="{{ $book->title }}" class="form-control">
                        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {{$errors->has('year') ? 'has-error' : ''}}">
                        <label>Year</label>
                        <input type="date" name="year" value="{{ $book->year }}" class="form-control">
                        {!! $errors->first('year', '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            <option>Personal</option>
                            <option>Al deber</option>
                            <option>A la institucion</option>
                        </select>
                    </div>
                    <div class="form-group {{$errors->has('pdf') ? 'has-error' : ''}}">
                        <label>Upload pdf</label>
                        <input type="file" name="pdf" class="form-control" value="{{ $book->pdf }}">
                        {!! $errors->first('pdf', '<span class="help-block">:message</span>') !!}
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-info pull-right" href="{{ route('book.index') }}">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection