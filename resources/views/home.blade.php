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
             
                <!-- Los grids aparecen al click del radio, modificar las categorias 1111111111111 de las leves -->
                <div class="form-group" id="sl1" style="display:none">
                <label>Tipo de Causal</label>
                <!-- Personal -->
                <select class="form-control" name="causal">
                    
                    <option>Maltrato reiterado a sujetos procesales y servidores del apoyo judicial</option>
                    <option>Otra acción que represente conducta personal o profesional inadecuada, que pueda ser reparada</option>
                        
                </select>
                </div>

                <div class="form-group" id="sl2" style="display:none">
                <label>Tipo de Causal</label>
                <!-- Al deber -->
                <select class="form-control" name="causal">
                    
                    <option>Ausencia injustificada por un día o dos discontinuos en el mes</option>
                    <option>Incumplimiento del deber de dar audiencia o faltar al horario establecido</option>
                    <option>Ausencia del lugar donde ejerce sus funciones en horario judicial sin causa justificada</option>
                    <option>Abandono del lugar donde ejerza sus funciones, sin licencia ni justificativo legal</option>    
                </select>
                </div>

                <div class="form-group" id="sl3" style="display:none">
                <label>Tipo de Causal</label>
                <!-- A la institucion -->
                <select class="form-control" name="causal">
                    
                    <option>Manejo inadecuado de los libros o registros del tribunal o juzgado</option>
                    <option>No llevar los registros del tribunal o juzgado en forma regular o adecuada</option>
                    <option>Desempeñar funciones ajenas a sus labores durante horas de trabajo o actividades de compraventa de bienes o servicios en las instalaciones</option>
                        
                </select>
                </div>

                <!--Fin de los grids -->

                <!-- Los grids aparecen al click del radio, modificar las categorias 222222222222-->
                <div class="form-group" id="sl4" style="display:none">
                <label>Tipo de Causal</label>
                <!--personal -->
                <select class="form-control" name="causal">
                    
                    <option>No promueva la acción disciplinaria contra su personal auxiliar, conociendo una falta grave</option>
                    <option>Tener a su servicio para las labores propias de su despacho a personas ajenas al órgano judicial</option>
                    <option>Actos de violencia física o malos tratos contra superiores, subalternos o compañero de trabajo</option>
                    <option>Propiciar, organizar o participar en huelgas, paros o suspensiones de actividades jurisdiccionales</option>
                    <option>No se excusen o inhiban oportunamente conociendo una causal de recusación en su contra</option>
                    <option>Encomendar a los subalternos trabajos particulares ajenos a sus funciones oficiales</option>
                    <option>Comisión de una falta leve habiendo sido sancionado en otras dos oportunidades</option>
                    <option>Solicitar o fomentar la publicidad de su persona o sus actuaciones profesionales o realizar declaraciones en medios de comunicación sobre causas en curso</option>
                    <option>Incurrir en actos de hostigamiento laboral y acoso sexual</option>
                </select>
                </div>

                <div class="form-group" id="sl5" style="display:none">
                <label>Tipo de Causal</label>
                <!--Al deber -->
                <select class="form-control" name="causal">
                    
                    <option>Ausencia injustificada  por dos días continuos o tres discontinuos en un mes</option>
                    <option>Se declare improbada una recusación habiéndose allanado a la misma</option>
                    <option>Emitir opinión anticipada sobre asuntos que esta llamado a decidir</option>
                    <option>Incumplir de manera injustificada y reiterada los horarios de audiencias publicas y de atención de su despacho</option>
                    <option>Suspender audiencias sin instalación previa</option> 
                    <option>Incurra en perdida de competencia de manera dolosa</option>
                    <option>Incurrir en demora dolosa y negligente en la admisión y tramitación de los procesos e incumplir plazos procesales en providencias de mero tramite</option>  
                    <option>Incumplimiento de obligaciones asignadas por norma legal a secretarias/os, auxiliares y notificadores. Por tres veces durante un año</option>
                    <option>Omisión,negación o retardación indebida de la tramitación de los asuntos a su cargo</option>
                    <option>Incumplimiento por parte de secretarios, auxiliares y oficiales de diligencias por tres veces durante un mes de las obligaciones inherentes a sus funciones</option>
                </select>
                </div>

                <div class="form-group" id="sl6" style="display:none">
                <label>Tipo de Causal</label>
                <!--A la institucion -->
                <select class="form-control" name="causal">
                    
                    <option>Uso de inmuebles u oficinas del Órgano Judicial con fines distintos a las actividades de la administración de justicia</option>
                    <option>Causar daño o perder bienes del Órgano Judicial o documentos de la oficina</option>
                    <option>category 9</option>
                        
                </select>
                </div>

                <!--Fin de los grids -->
                <!-- Los grids aparecen al click del radio, modificar las categorias 333333333333-->
                <div class="form-group" id="sl7" style="display:none">
                <label>Tipo de Causal</label>
                <!-- personal -->
                <select class="form-control" name="causal">
                    
                    <option>No excusarse del conocimiento de un proceso estando comprendido en las causales previstas</option>
                    <option>Se solicite o reciba dinero u otro beneficio ilegal del litigante, abogado o parte interesada</option>
                    <option>Delegación de funciones jurisdiccionales al personal subalterno del juzgado o particulares</option> 
                    <option>Comisión de una falta grave, cuando se hubiese sido sancionado en otras dos oportunidades por faltas graves.</option>
                    <option>emitir informes o declaraciones con datos falsos dentro de procesos disciplinarios</option>
                </select>
                </div>

                <div class="form-group" id="sl8" style="display:none">
                <label>Tipo de Causal</label>
                <!-- Al deber -->
                <select class="form-control" name="causal">
                    
                    <option>Uso indebido de la condición de funcionario judicial para obtener un trato favorable</option>
                    <option>Se declaren ilegales dos o mas excusas durante un año</option>
                    <option>Se declare improbadas dos o mas recusaciones habiéndose allanado a las mismas en un año</option>
                    <option>Perdida de competencia por tres o mas veces dentro del año judicial</option>   
                    <option>Ausencia injustificada por tres días hábiles continuos o cinco días discontinuos en el mes</option>
                    <option>Revelación de hechos o datos conocidos en sus funciones y que se deban guardar en reserva</option>
                    <option>Actuar en proceso que no sea de su competencia o cuando la hubiera perdido</option>
                </select>
                </div>

                <div class="form-group" id="sl9" style="display:none">
                <label>Tipo de Causal</label>
                <!-- A la institucion -->
                <select class="form-control" name="causal">
                    <option>Por actuar como abogado o apoderado en forma directa o indirecta en cualquier causa ante los tribunales del Órgano Judicial</option>
                    <option>Asistencia a su fuente laboral en estado de ebriedad</option>
                        
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