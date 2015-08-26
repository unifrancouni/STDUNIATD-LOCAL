

<!-- Select picker-->
<script src="<?php echo base_url(); ?>styles/admin/dist/js/bootstrap-select.min.js" type="text/javascript"></script>


<script>

    llamarFuncionalidadTabla("#c");

    $('#editarCatalogo').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var code = button.data('codigo') // Extract info from data-* attributes
        var description = button.data('descripcion')
        var title = 'Editar Catálogo: '+description
        var catalogoID = button.data('catalogoid')

        var modal = $(this)
        modal.find('.modal-title').text(title+':'+catalogoID)
        modal.find('#txtDescripcion').attr('value',description)
        modal.find('#txtCodigo').attr('value',code)
        modal.find('#idCatalogo').attr('value',catalogoID)

    });


    $(function () {
        $('.selectpicker').selectpicker('refresh');

    });


</script>