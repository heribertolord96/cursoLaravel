<div class="form-group">
        <label for="nombre" class="col-sm-4 control-label requerido">Nombre</label>

        <div class="col-lg-8">
          <input type="text" name="nombre" id="nombre"  placeholder="Email" class="form-control" value="{{old('nombre')}}" >
        </div>
 </div>

 <div class="form-group">
        <label for="url" class="col-sm-4 control-label requerido">URL</label>

        <div class="col-lg-8">
          <input type="text" name="url" id="url"  placeholder="Email" class="form-control" value="{{old('url')}}" >
        </div>
 </div>

 <div class="form-group">
        <label for="icono" class="col-sm-4 control-label ">Icono</label>

        <div class="col-lg-8">
          <input type="text" name="icono" id="icono"  placeholder="Email" class="form-control" value="{{old('icono')}}" >
        </div>
        <div class="col-lg-1">
          <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
      </div>
 </div>