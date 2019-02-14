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
                <!-- radio de las faltas -->
                <div class="form-group">
                    <label>Tipo de Falta</label><br>
                    <input type="radio" name="foul" value="Leves" onclick="botonfalta(1)"> Leves  |
                    <input type="radio" name="foul" value="Graves" onclick="botonfalta(2)"> Graves  |
                    <input type="radio" name="foul" value="Gravisimas" onclick="botonfalta(3)"> Gravisimas
                </div>
                <!--fin radio de las faltas -->

                <!-- radio de las categorias -->
                <div class="form-group" id="rd1" style="display:none">
                    <label>Categoria</label><br>
                    <input type="radio" name="category" value="Personal" onclick="botoncategoria(1)"> Personal  |
                    <input type="radio" name="category" value="Al deber" onclick="botoncategoria(2)"> Al deber  |
                    <input type="radio" name="category" value="A la institucion" onclick="botoncategoria(3)"> A la institucion
                </div>

                <div class="form-group" id="rd2" style="display:none">
                    <label>Categoria</label><br>
                    <input type="radio" name="category" value="Personal" onclick="botoncategoria(4)"> Personal  |
                    <input type="radio" name="category" value="Al deber" onclick="botoncategoria(5)"> Al deber  |
                    <input type="radio" name="category" value="A la institucion" onclick="botoncategoria(6)"> A la institucion
                </div>

                <div class="form-group" id="rd3" style="display:none">
                    <label>Categoria</label><br>
                    <input type="radio" name="category" value="Personal" onclick="botoncategoria(7)"> Personal  |
                    <input type="radio" name="category" value="Al deber" onclick="botoncategoria(8)"> Al deber  |
                    <input type="radio" name="category" value="A la institucion" onclick="botoncategoria(9)"> A la institucion
                </div>
                <!-- fin radio de las categorias -->   
             
                <!-- Los grids aparecen al click del radio, modificar las categorias 1111111111111 -->
                <div class="form-group" id="sl1" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>Out 1</option>
                    <option>category 2</option>
                    <option>category 3</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl2" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>Out 4</option>
                    <option>out 5</option>
                    <option>category 6</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl3" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>Out 7</option>
                    <option>category 8</option>
                    <option>category 9</option>
                        
                </select>
                </div>

                <!--Fin de los grids -->

                <!-- Los grids aparecen al click del radio, modificar las categorias 222222222222-->
                <div class="form-group" id="sl4" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>sad 1</option>
                    <option>category 2</option>
                    <option>category 3</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl5" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>df 4</option>
                    <option>out 5</option>
                    <option>category 6</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl6" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>af 7</option>
                    <option>category 8</option>
                    <option>category 9</option>
                        
                </select>
                </div>

                <!--Fin de los grids -->
                <!-- Los grids aparecen al click del radio, modificar las categorias 333333333333-->
                <div class="form-group" id="sl7" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>ewr 1</option>
                    <option>category 2</option>
                    <option>category 3</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl8" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>fgh 4</option>
                    <option>out 5</option>
                    <option>category 6</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl9" style="display:none">
                <label>Tipo de Causal</label>
                <select class="form-control" name="causal">
                    
                    <option>jkl 7</option>
                    <option>category 8</option>
                    <option>category 9</option>
                        
                </select>
                </div>

                <!--Fin de los grids -->

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