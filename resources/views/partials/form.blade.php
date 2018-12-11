{{ csrf_field() }}
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Nombre de la tarea</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="tarea" value="{{ isset($tarea->tarea) ? $tarea->tarea : "" }}">
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <label class="col-sm-2 form-control-label">Estado</label>
    <div class="col-sm-10">
        <div class="i-checks">
            <input  type="hidden" value="0" class="form-control-custom" name="estado">
            <input id="checkboxCustom2" type="checkbox" value="1" class="form-control-custom" name="estado" {{ (isset($tarea->completed) && $tarea->completed==1) ? "checked" : "" }}>
            <label for="checkboxCustom2">Completado</label>
        </div>
    </div>
</div>
<div class="line"></div>
<div class="form-group row">
    <div class="col-sm-4 offset-sm-2">
        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
    </div>
</div>