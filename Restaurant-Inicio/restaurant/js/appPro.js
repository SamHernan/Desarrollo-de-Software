document.addEventListener('beforeunload', function() {
    //cargarDatos();
});



async function cargarDatos(){
    let idP=sessionStorage.idProducto;
    try{
        const url= 'http://localhost:3000/servicios.php?id='+idP;
        const resultado=await fetch(url);
        const db= await resultado.json();
        // db.findIndex(mascota => mascota.id === idP);
        let producto=db.find(producto => producto.id === idP);
        let nombre=document.getElementById('nombre');
        let descripcion=document.getElementById('descrip');
        let precio=document.getElementById('precio');
        let stock=document.getElementById('stock');
        nombre.innerHTML=producto.nombre;
        descripcion.innerHTML=producto.nombre;
        precio.innerHTML="$"+producto.precio;
        stock.innerHTML=producto.precio;

        // Parte del post
        document.getElementById('productID').value=producto.id;
        document.getElementById('ProductoName').value=producto.nombre;
        document.getElementById('productPre').value=producto.precio;
        // document.getElementById('cantidad').value=producto.cantidad;
        console.log('Desde el input: '+document.getElementById('productPre').value);


        let cantidad=document.getElementById('cantidad');
        cantidad.setAttribute("max",20);

        console.log(producto.nombre);

        
    }catch (e){
        console.log(e); 
    }
    // console.log(sessionStorage.idProducto);

}

async function mostrarDatosPro(){
    
}