@extends('layouts.app')
@section('title','Administrador')

@section('content')
<div class="container">
    <div class="row">
        <div class="form col-md-4">
            <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                    <label>Titulo</label>
                    <input type="text" name="title" class="form-control">
                    {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{$errors->has('year') ? 'has-error' : ''}}">
                    <label>Fecha</label>
                    <input type="date" name="year" class="form-control">
                    {!! $errors->first('year', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group">
                    <label>Tipo de Falta</label>
                    <select class="form-control" name="foul">
                        <option>Leves</option>
                        <option>Graves</option>
                        <option>Gravisimas</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="category">
                        <option>Personal</option>
                        <option>Al deber</option>
                        <option>A la institucion</option>
                    </select>
                </div>
                <!-- Los ifs modificar las categorias -->
                <div class="form-group">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    @if ('foul' === "Leves")
                        @if ('category' === "Personal")
                                <option>category 1</option>
                                <option>category 2</option>
                                <option>category 3</option>
                        @elseif ('category' === 'Al deber')
                                <option>category 4</option>
                                <option>category 5</option>
                                <option>category 6</option>
                        @else
                                <option>category 7</option>
                                <option>category 8</option>
                                <option>category 9</option>
                        @endif
                    @else
                        <option>category 7</option>
                        <option>category 8</option>
                        <option>category 9</option>
                    @endif
                </select>
                </div> 

                <div class="form-group {{$errors->has('pdf') ? 'has-error' : ''}}">
                    <label>Subir pdf</label>
                    <input type="file" name="pdf" class="form-control">
                    {!! $errors->first('pdf', '<span class="help-block">:message</span>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="list col-md-7 col-md-offset-1"><br> 
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Faltas</th>
                <th>Categoria</th>
                <th>Causales</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
           @foreach($books as $book)
              <tr>
                  <td>{{ $book->title }}</td>
                  <td>{{ $book->year }}</td>
                  <td>{{ $book->foul }}</td>
                  <td>{{ $book->category }}</td>
                  <td>{{ $book->causal }}</td>
                  <td>                    
                      <a class="btn btn-success btn-xs" href="{{ Storage::url($book->pdf) }}" download="{{$book->title}}"><span class="glyphicon glyphicon-save"></span> </a>
                      <a href="{{ route('book.show', $book->id) }}" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-eye-open"></span></a>
                      <a href="{{ route('book.edit', $book->id) }}" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                      <form method="POST" action="{{ route('book.destroy', $book) }}">
                        {{ method_field('DELETE') }} {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button>
                      </form>
                  </td>
              </tr>
             @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Faltas</th>
                <th>Categoria</th>
                <th>Causales</th>
                <th>Acciones</th>
        </tfoot>
    </table>

        </div>
    </div>
</div>
@endsection

@push('styles')
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
@endpush