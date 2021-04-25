$("tr>td>button").click(function (event) {
    if($(this).attr('id') != 'detalles'){
        $fila= $(this).parents('tr');
        console.log($(this).attr('id'));
        console.log($fila.find('.estatus').html());
        $('#modalId').html($(this).attr('id'));
        $('#modalStatus').html($fila.find('.estatus').html());

        var statusActual =$fila.find('.estatus').html();
        if(statusActual==='Nuevo'){
            $('#modalStatusNew').html('En Preparacion');
        }else if(statusActual==='En Preparacion'){
            $('#modalStatusNew').html('Listo');
        }else if(statusActual==='Listo'){
            $('#modalStatusNew').html('Enviado');
        }else if(statusActual==='Enviado'){
            $('#modalStatusNew').html('Entregado');

        }
    }
})

$("#RealizarCambios").click(function (event) {
    $fila= $(this).parents('tr');
    console.log($(this).attr('id'));
    console.log($fila.find('.estatus').html());
    var id = $('#modalId').html();
    var status = $('#modalStatus').html();
    var statusNew = $('#modalStatusNew').html();
    
    var formData = new FormData();
    formData.append("id", id);
    formData.append("status", status);
    formData.append("statusNew", statusNew);


    fetch('modificarStatus.php',{
        method : 'post',
        body: formData
    }).then(function (response){
        return response.text();
    }).then(function (text){
        console.log(typeof text);
        var prueba = text.replace(/\s/g, '');
        if(prueba === 'error'){
            $('#exampleModal').modal('hide'); 
            $('#errorModal').modal('show'); 
        }else{
            $('#exampleModal').modal('hide'); 
        }
    }).catch(function (error) {
        console.error(error);
    })
})





