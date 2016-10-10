
<script type="text/javascript">
var mensaje = "<?php echo $message;?>";
    $(function(){
        new PNotify({
            title: 'Éxito!',
            text: mensaje,
            type: 'success'
        });
    });
</script>
