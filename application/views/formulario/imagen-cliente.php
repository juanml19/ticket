<form action="<?php echo base_url()."usuarios/update_imagen/".$id; ?>" id="nuevo_producto" method="post" enctype="multipart/form-data">
        <div class="form-group">
            Subir foto:<input type="file" class="form-control" id="imageInp" name="imgInp">
            <img id='image-upload' src="<?php if($id != 0){ echo base_url().'upload/usuarios/'.$imagen; } ?>"/>
        </div>
        <div class="form-group">
            <input  class="btn btn-success" class="form-control" type="submit" name="submit"  value="Guardar" />
        </div>
        <div class="clear"></div>
</form>
<a href="" data-dismiss="modal">Cancelar</a>
<script>
jQuery(document).ready(function () {
   function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                jQuery('#image-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    jQuery("#imageInp").change(function(){
        readURL2(this);
    });
});
</script>