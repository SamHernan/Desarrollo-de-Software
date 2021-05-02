$("#agregarDi").click(function (event) {
    console.log('Oprimiste Agregar');
})


$("#addDir").click(function (event) {
    console.log('Oprimiste en agregar');
    var codigo= $('#codigoPos').val();
    var colonia= $('#colonia').val();
    var vialidad= $('#tipoVialidad').val();
    var namevialidad= $('#nombreVialidad').val();
    var numE= $('#numeroEx').val();
    var numI= $('#numeroIn').val();
    var idCliente = $('#idCliente').val();
    console.log(codigo);
    console.log(colonia);
    console.log(vialidad);
    console.log(namevialidad);
    console.log(numE);
    console.log(numI);
    console.log(idCliente);

    var formData = new FormData();
    formData.append("codigoPostal", codigo);
    formData.append("colonia", colonia);
    formData.append("tipoVialidad", vialidad);
    formData.append("nombreVialidad", namevialidad);
    formData.append("numeroExterior", numE);
    formData.append("numeroInterior", numI);
    formData.append("idCliente", idCliente);

    fetch('agregarDireccion.php',{
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
        $('#agregar').modal('hide'); 
        location.reload();
        }else if(prueba === 'bd'){
        alert('¡Error: El servidor se encuentra en reparación. Intentelo mas tarde!');
        }
    }).catch(function (error) {
        console.error(error);
    })

})