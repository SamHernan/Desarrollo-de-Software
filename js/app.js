document.addEventListener('DOMContentLoaded', function() {
    recuperarProducto();
});

var idP;
const productos = document.querySelectorAll('.producto a');
function recuperarProducto() {
    productos.forEach( producto =>{
        producto.addEventListener('click', e => {
            e.preventDefault();
            idP= producto.getAttribute("data-paso");
            console.log(idP);
            sessionStorage.idProducto = idP;
            window.location="producto.php?id="+idP;
            // window.onload = mostrarDatosPro();
            
        });
    });
}
