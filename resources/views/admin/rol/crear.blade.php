@extends("theme.$theme.layout")
@section('titulo')
    Sistema - Rol
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Rol</h3>
                <div class="box-tool pull-right">
                    <a href="{{route('rol')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply"></i> Volver al Listado
                    </a>
                </div>
            </div>
            <form  action="{{route('guardar_rol')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="box-body table-responsive no-padding">
                    @include("admin.rol.form")
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection