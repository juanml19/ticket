<?php $this->load->view('partes/header',$dato_header); ?> 
<nuevo>
    <div class="row">
        <div class="col-md-12">
            <a href="#" datos="0/0/5" class="nuevo-modal btn btn-info btn-lg" data-toggle="modal" data-target="#Modal_Nuevo">Nuevo</a>
        </div>
    </div>
</nuevo>
<table id="clientes_table" class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Identificación</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
<?php
foreach($clientes as $cliente){
   ?>
    <tr>
        <td>
             <?php echo $cliente->id; ?>
        </td>
        <td>
             <?php echo $cliente->nombre; ?>
        </td>
        <td>
             <?php echo $cliente->correo; ?>
        </td>
        <td>
             <?php echo $cliente->telefono; ?>
        </td>
        <td>
             <?php echo $cliente->direccion; ?>
        </td>
        <td>
            <a href="#" datos="<?php echo $cliente->id."/".$cliente->nombre."/5"; ?>" class="estado-modal estado-<?php echo $cliente->estado;?>" data-toggle="modal" data-target="#Modal_Estado"><?php echo $cliente->estado;?></a>
        </td>
        <td>
             <a href="#" datos="<?php echo $cliente->id."/".$cliente->nombre."/5"; ?>" class="nuevo-modal btn btn-info btn-lg" data-toggle="modal" data-target="#Modal_Nuevo"><i class="fas fa-pencil-alt"></i>Editar</a>
        
             <a href="<?php echo base_url().'clientes/delete/'.$cliente->id;?>" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i>Eliminar</a>
        </td>
    </tr>
    <?php
}
?>
    </tbody>
</table>

 <div id="Modal_Nuevo" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-landing">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title modal-nuevo-title">Nuevo Usuario</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body form-nuevo">
      </div>
    </div>
  </div>
</div> 

 <div id="Modal_Estado" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-landing">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title modal-estado-title">Estado</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body form-estado"> 
      </div>
    </div>
  </div>
</div> 

 <div id="Modal_Imagen" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-landing">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title modal-imagen-title">Imagen</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body form-imagen"> 
      </div>
    </div>
  </div>
</div>         
<div class="separador"></div>      
<?php $this->load->view('partes/footer'); ?>