$("tr>td>button").click(function (event) {
    if($(this).attr('id') != 'eliminar'){
        $fila= $(this).parents('tr');
        console.log($(this).attr('id'));
        console.log($fila.find('.postal').html());
        console.log($fila.find('.colon').html());
        console.log($fila.find('.tiVi').html());
        console.log($fila.find('.naVia').html());
        console.log($fila.find('.numeExt').html());
        console.log($fila.find('.numeInt').html());
        $('#muestroId').html($(this).attr('id'));
        $('#coPos').attr('value', $fila.find('.postal').html());
        $('#col').attr('value', $fila.find('.colon').html());
        $('#tipoVialidad2').val($fila.find('.tiVi').html());
        $('#nomVi').attr('value', $fila.find('.naVia').html());
        $('#numEx').attr('value', $fila.find('.numeExt').html());
        $('#numIn').attr('value', $fila.find('.numeInt').html());
    }
})
$("#guardarCambios").click(function (event) {
    $fila= $(this).parents('tr');
    console.log($(this).attr('id'));

    var id = $('#muestroId').html();
    console.log(id);
    var postal = $('#coPos').val();
    console.log(postal);
    var colonia = $('#col').val();
    console.log(colonia);
    var vialidad = $('#tipoVialidad2').val();
    console.log(vialidad);
    var nombreVia = $('#nomVi').val();
    console.log(nombreVia);
    var numE = $('#numEx').val();
    console.log(numE);
    var numI = $('#numIn').val();
    console.log(numI);

    var formData = new FormData();
    formData.append("id", id);
    formData.append("codigoPostal", postal);
    formData.append("colonia", colonia);
    formData.append("tipoVialidad", vialidad);
    formData.append("nombreVialidad", nombreVia);
    formData.append("numeroExterior", numE);
    formData.append("numeroInterior", numI);

    fetch('editarDireccion.php',{
        method : 'post',
        body: formData
    }).then(function (response){
        return response.text();
    }).then(function (text){
       var prueba = text.replace(/\s/g, '');
        console.log(prueba);
        if(prueba === 'vacio'){
            alert('Porfavor llene todos los campos');
        }else if(prueba === 'realizado'){
            $('#editar').modal('hide'); 
            location.reload();
        }else if(prueba === 'bd'){
            alert('¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!');
        }
    }).catch(function (error) {
        console.error(error);
    })
})



