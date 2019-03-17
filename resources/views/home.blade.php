@extends('layouts.app')
@section('title','Administrador')

@section('content')
<div class="container">
    <div class="row">
        <div class="form col-md-4">
            <h3>Formulario de registro de Libros</h3><hr>
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
                <!-- radio de las faltas -->
                 <div class="form-group">
                    <label>Tipo de Falta</label><br>
                    <select name="foul" class="form-control">
                        <option>Leves</option>
                        <option>Graves</option>
                        <option>Gravisimas</option>
                    </select>
                </div>
                <!--fin radio de las faltas -->

                <!-- radio de las categorias -->
                <div class="form-group">
                    <label>Categoria</label><br>
                    <select name="category" class="form-control">
                        <option>Jurisprudencia</option>
                        <option>Resoluciones</option> 
                    </select>
                </div>
             
                @include('admin.select_causal')

                <div class="form-group {{$errors->has('pdf') ? 'has-error' : ''}}">
                    <label>Subir pdf</label>
                    <input type="file" name="pdf" class="form-control">
                    {!! $errors->first('pdf', '<span class="help-block">:message</span>') !!}
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="list col-md-7 col-md-offset-1">
    <h3>Lista de Libros</h3><hr>
    <div class="table-responsive">
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
                      <a class="btn btn-success btn-xs" href="{{ asset('books/'.$book->pdf) }}" download="{{$book->title}}"><span class="glyphicon glyphicon-save"></span> </a>
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
</div>
@endsection

@push('styles')  
  <link rel="stylesheet" type="text/css" href="{{ asset('datatable/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('scripts')
  <script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('datatable/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
            });
        } );
    </script>

@endpush 