<form action="<?php echo base_url("clientes/update_estado/$id");?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        Estado:
        <select class="select_form" class="form-control" name="estado">
            <option <?php if($estado == "Activo"){ echo "selected"; } ?> value="Activo">Activo</option>
            <option <?php if($estado == "Inactivo"){ echo "selected"; } ?> value="Inactivo">Inactivo</option>
        </select> 
    </div>
    <div class="form-group">
        <input  class="btn btn-success" class="form-control" type="submit" name="submit"  value="Guardar" />
    </div>
    <div class="clear"></div>
</form>
<a href="" data-dismiss="modal">Cancelar</a>