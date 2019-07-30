@extends("theme.$theme.layout")
@section("titulo")
Rol
@endsection
@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection 

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-success">
            <div class="card-header with-border">
                <h3 class="card-title">Rol</h3>
                <div class="card-tool pull-right">
                    <a href="{{route('crear_rol')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear Nuevo Rol
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive no-padding">
                    <table class="table table-bordered table-hover table-striped" id="tabla-data">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Nombre</th>
                                <th class="Width70"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $rol)
                            <tr>
                                {{-- <td>{{$rol->id}}</td> --}}
                                <td>{{$rol->nombre}}</td>
                                <td>
                                    {{-- {{url("admin/rol/$rol->id/editar")}} --}}
                                <a href="{{route('editar_rol',['id'=>$rol->id])}}" class="btn-accion-tabla tooltipsC " title="Editar este registro">
                                        <i class="fa fa-fw fa-pen  "></i>
                                    </a>
                                    {{-- {{url("admin/rol/$rol->id")}} --}}
                                    <form action="{{route('eliminar_rol',['id'=>$rol->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                            <i class="fa fa-fw fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
        </div>
    </div>
</div> 
@endsection