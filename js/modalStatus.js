$("tr>td>button").click(function (event) {
    if($(this).attr('id') != 'detalles'){
        $fila= $(this).parents('tr');
        console.log($(this).attr('id'));
        console.log($fila.find('.estatus').html());
        $('#modalId').html($(this).attr('id'));
        $('#modalStatus').html($fila.find('.estatus').html());
    }
})

$("#RealizarCambios").click(function (event) {
    $fila= $(this).parents('tr');
    console.log($(this).attr('id'));
    console.log($fila.find('.estatus').html());
    var id = $('#modalId').html();
    var status = $('#modalStatus').html();

    var formData = new FormData();
    formData.append("id", id);
    formData.append("status", status);

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



