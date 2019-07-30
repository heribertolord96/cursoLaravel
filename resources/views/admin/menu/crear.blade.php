@extends("theme/$theme/layout")
@section('titulo')
Sistema - Menús
@endsection
@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido') 
<div class="col-lg-12">
 
    <div class="card  card-danger col-lg-12 ">
        @include('includes.mensaje')
        @include('includes.form-error')
            <div class="card-header with-border">
              <h3 class="card-title"> Crear Menus</h3>
            </div>
          <!-- Horizontal Form -->
            <div class="card card-info">
              <h3 class="box-title">Crear Menús</h3>

                <div class="card-tool pull-right">
                    <a href="{{route('menu')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply"></i> Volver al Listado
                    </a>
                </div>
              <!-- form start -->
            </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                    <div class="card-footer">
                       
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                                @include('includes.boton-form-crear')
                        </div>
                      </div>
                </form>
              
    </div>
    </div>
@endsection