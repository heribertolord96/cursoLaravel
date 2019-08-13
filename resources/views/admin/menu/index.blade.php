@extends("theme.$theme.layout")
@section("titulo")
Menú
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="card card-success">
            <div class="card-header with-border">
                <h3 class="card-title">Menús</h3>
                <div class="card-tool pull-right">
                    <a href="{{route('crear_menu')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear Nuevo Menú
                    </a>
                </div>
            </div>
            <div class="card-body">
                @csrf
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item)
                            @if ($item["menu_id"] != 0)
                                @break
                            @endif
                            @include("admin.menu.menu-item",["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

{{-- @section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-primary">
@@ -22,7 +67,7 @@
                            <td>{{$menu->id}}</td>
                            <td>{{$menu->nombre}}</td>
                            <td>{{$menu->url}}</td>
                            <td></td>
                            <td>{{$menu->icono}}</td>
                        </tr>
                        @endforeach 
                    </tbody>
@@ -31,4 +76,4 @@
            </div>
        </div>
    </div>
@endsection 
@endsection --}} 