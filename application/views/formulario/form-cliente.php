<?php
    $action = base_url()."clientes/add";
    if($id != 0){
        $action = base_url()."clientes/update/".$id;
    } 
?>

<form action="<?php echo $action; ?>"  method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input placeholder="Identificación:" class="form-control" type="text" name="identificacion" <?php if($id != 0){ echo 'value="'.$cliente[0]->id.'" readonly'; } ?>/>
    </div>
    <div class="form-group">
        <input placeholder="Nombre:" class="form-control" type="text" name="nombre" <?php if($id != 0){ echo 'value="'.$cliente[0]->nombre.'"'; } ?>/>
    </div>
    <div class="form-group">
        <input placeholder="Correo:" class="form-control" type="email" name="correo" <?php if($id != 0){ echo 'value="'.$cliente[0]->correo.'"'; } ?>/>
    </div>
    <div class="form-group">
        <input placeholder="Telefono:" class="form-control" type="number" name="telefono" <?php if($id != 0){ echo 'value="'.$cliente[0]->telefono.'"'; } ?>/>
    </div>
    <div class="form-group">
        Dirección
        <textarea class="textarea_full ckeditor" class="form-control"  placeholder="Dirección:" type="text" name="direccion" ><?php if($id != 0){ echo $cliente[0]->direccion; } ?></textarea>
    </div>
     <div class="form-group">
        Estado:
        <select class="select_form" class="form-control" name="estado">
            <option <?php if($id != 0){ if($cliente[0]->estado == "Activo"){ echo "selected"; } } ?> value="Activo">Activo</option>
            <option <?php if($id != 0){ if($cliente[0]->estado == "Inactivo"){ echo "selected"; } } ?> value="Inactivo">Inactivo</option>
        </select> 
    </div>
    <div class="form-group">
        <input  class="btn btn-success" class="form-control" type="submit" name="submit"  value="Guardar" />
    </div>
        <div class="clear"></div>
</form>
<a href="" data-dismiss="modal">Cancelar</a>
<script>
jQuery(document).ready(function () {
    CKEDITOR.replace('direccion');
});
</script>