<div class="form-group {{ $errors->has('codigo') ? 'has-error' : ''}}">
    <label for="codigo" class="control-label">{{ 'Codigo' }}</label>
    <input class="form-control" name="codigo" type="text" id="codigo" value="{{ isset($activo->codigo) ? $activo->codigo : ''}}" >
    {!! $errors->first('codigo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descrip') ? 'has-error' : ''}}">
    <label for="descrip" class="control-label">{{ 'Descripción' }}</label>
    <input class="form-control" name="descrip" type="text" id="descrip" value="{{ isset($activo->descrip) ? $activo->descrip : ''}}" >
    {!! $errors->first('descrip', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" id="precio" value="{{ isset($activo->precio) ? $activo->precio : ''}}" >
    {!! $errors->first('precio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fechaadq') ? 'has-error' : ''}}">
    <label for="fechaadq" class="control-label">{{ 'Fecha de adquisición' }}</label>
    <input class="form-control" name="fechaadq" type="date" id="fechaadq" value="{{ isset($activo->fechaadq) ? $activo->fechaadq : ''}}" >
    {!! $errors->first('fechaadq', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($activo->foto) ? $activo->foto : ''}}" >
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('grupo_id') ? 'has-error' : ''}}">
    <label for="grupo_id" class="control-label">{{ 'Grupo' }}</label>
    




    <select name="grupo_id" id="grupo_id" class="form-control" >
    @foreach ($grupos as $fila)
        <option value="{{$fila->id}}">{{$fila->descrip}}</option>
    @endforeach
    
    </select>

   






    {!! $errors->first('grupo_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estado_id') ? 'has-error' : ''}}">
    <label for="estado_id" class="control-label">{{ 'Estado' }}</label>

    
    

    <select name="estado_id" id="estado_id" class="form-control" >
    @foreach ($estados as $fila)
        <option value="{{$fila->id}}">{{$fila->descrip}}</option>
    @endforeach
    
    </select>
 




    {!! $errors->first('estado_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('oficina_id') ? 'has-error' : ''}}">
    <label for="oficina_id" class="control-label">{{ 'Oficina' }}</label>
    





    <select name="oficina_id" id="oficina_id" class="form-control" >
    @foreach ($oficinas as $fila)
        <option value="{{$fila->id}}">{{$fila->nombre}}</option>
    @endforeach
    
    </select>
    
    
    
    
    {!! $errors->first('oficina_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
