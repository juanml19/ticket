jQuery(document).ready(function () {
    jQuery(".estado-Activo").addClass("btn btn-success");
    jQuery(".estado-Inactivo").addClass("btn btn-danger");
    jQuery('.datatable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
    jQuery(".nuevo-modal").click(function(){
        var urls = [
            "clientes/form_clientes",
        ];
        var datos = jQuery(this).attr("datos");
        var dato = datos.split("/");
        var id = dato[0];
        if(dato[1] == 0){
            var titulo = [
                "Nuevo Cliente"
            ];
            jQuery(".modal-nuevo-title").html(titulo[dato[2]]);
        }else{
            var titulo = [
                "Editando Cliente:"
            ];
            jQuery(".modal-nuevo-title").html(titulo[dato[2]]+" "+dato[1]);
        }
        var base_url = jQuery("#base_url").html();
        jQuery.ajax({
            url:base_url+"/"+urls[dato[2]]+"/"+id,
            type:"GET",
            success:function(data){
                if(data){
                    jQuery(".form-nuevo").html(data)
                }else{
                    alert("error")
                }
            }
        });
    });
    
    jQuery(".imagen-modal").click(function(){
        var urls = [
            "clientes/form_imagen"
        ];
        var datos = jQuery(this).attr("datos");
        var dato = datos.split("/");
        var id = dato[0];
        var titulo = [
            "Imagen del cliente:"
        ];
        jQuery(".modal-imagen-title").html(titulo[dato[2]]+" "+dato[1]);
        var base_url = jQuery("#base_url").html();
        jQuery.ajax({
            url:base_url+"/"+urls[dato[2]]+"/"+id,
            type:"GET",
            success:function(data){
                if(data){
                    jQuery(".form-imagen").html(data)
                }else{
                    alert("error")
                }
            }
        });
    });
    
    jQuery(".estado-modal").click(function(){
        var urls = [
            "clientes/form_estado"
        ];
        var datos = jQuery(this).attr("datos");
        var dato = datos.split("/");
        var id = dato[0];
        var titulo = [
            "Estado del cliente:"
        ];
        jQuery(".modal-imagen-title").html(titulo[dato[2]]+" "+dato[1])
        var base_url = jQuery("#base_url").html();
        jQuery.ajax({
            url:base_url+"/"+urls[dato[2]]+"/"+id,
            type:"GET",
            success:function(data){
                if(data){
                    jQuery(".form-estado").html(data)
                }else{
                    alert("error")
                }
            }
        });
    });
});