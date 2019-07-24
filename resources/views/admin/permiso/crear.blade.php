@extends("theme/$theme/layout")

@section('titulo')
    Permisos
@endsection
@section('contenido')
<div class="col-lg-12">
    <div class="card  card-primary col-lg-6 ">
            <div class="card-header">
              <h3 class="card-title"> Crear Permisos</h3>
            </div>
            <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                        <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Slug</th>
                                                <th></th>
                                              </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permisos as $permiso)
                                    <tr>
                                        <td>{{$permiso->id}}</td>
                                        <td>{{$permiso->nombre}}</td>
                                        <td>{{$permiso->slug}}</td>
                                    </tr>    
                                    @endforeach
                                </tbody>
                             
                            </table>
                    </div>
    </div>
    </div>
@endsection