       <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy;</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>theme/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>theme/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>theme/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>theme/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>theme/js/custom.min.js"></script>  
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.3/js/all.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>theme/css/mobile.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>theme/js/function.js"></script>
    <script src="<?php echo base_url();?>theme/js/bootstrap-notify.min.js"></script>
<?php
if(isset($_GET['m'])){
    switch ($_GET['m']) {
    case '1':
            $title="Acción completada!";
            $content="La acción se ejecutó correctamente";
            $icon="fa fa-check-circle";
            $type="success";

        break;
    case "2":
            $title="Acción no completada!";
            $content="La acción no se ejecutó correctamente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "prod1":
            $title="Acción no completada!";
            $content="Código de barras existente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "prod2":
            $title="Acción no completada!";
            $content="Código existente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "prod3":
            $title="Acción no completada!";
            $content="Producto no existente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "user1":
            $title="Acción no completada!";
            $content="Cedula existente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "tipo1":
            $title="Acción no completada!";
            $content="Nombre del tipo existente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "tipo2":
            $title="Acción no completada!";
            $content="Tipo no existente";
            $icon="fa fa-times-circle";
            $type="danger";
        break;
    case "cerrado":
            $title="Sesion Cerrada!";
            $content="Adios";
            $icon="far fa-frown";
            $type="success";
        break;
    case "Invalido":
            $title="Acción no completada!";
            $content="Datos invalido";
            $icon="fa fa-times-circle";
            $type="danger";
        break;

    default:
            $title="Ocurrió un problema!";
            $content="Intente de nuevo mas adelante";
            $icon="fa fa-exclamation-triangle";
            $type="warning";
    }


    ?>

    <script>
        $.notify({
            // options
            icon: '<?php echo $icon; ?>',
            title: '<strong><?php echo $title; ?></strong><br>',
            message: '<?php echo $content; ?>',
        }, {
            // settings
            element: 'body',
            position: null,
            type: "<?php echo $type; ?>",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
                '</div>'
        });
    </script>
<?php
}
?>
<div id="base_url"><?php echo site_url();?></div>
</body>

</html>