$("tr>td>button").click(function (event) {
    if($(this).attr('id') != 'editar'){
        console.log('oprimiste eliminar');
        console.log($(this).attr('id'));
        console.log($fila.find('.postal').html());
        $('#muestroId2').html($(this).attr('id'));
        $('#muestroCP').html($fila.find('.postal').html());
    }
})

$("#delete").click(function (event) {
    console.log('si lo vas eliminar');

    $fila= $(this).parents('tr');
    console.log($(this).attr('id'));
    var id = $('#muestroId2').html();

    var formData = new FormData();
    formData.append("id", id);

    fetch('eliminarDireccion.php',{
        method : 'post',
        body: formData
    }).then(function (response){
        return response.text();
    }).then(function (text){
        var prueba = text.replace(/\s/g, '');
        console.log(prueba);
        if(prueba === 'bd'){
            alert('¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!');
        }else{
            location.reload();
        }
    }).catch(function (error) {
        console.error(error);
    })
})