document.addEventListener('DOMContentLoaded', function() {
    recuperarProducto();
});


// const producto = document.querySelectorAll('.producto a');
// var idP;
// function recuperarProducto() {
//     producto.addEventListener('click', e => {
//         e.preventDefault();
        
//         idP= producto.getAttribute("data-paso");
//         // window.location="producto.php?id="+idP;
        
//         console.log(idP); 
//     });
// }

// const selectProducto = function (e) {
// 	// Recuerda, this es el elemento
// 	console.log("El texto que tiene es: ", this.innerText);

// 	// Podemos cambiar cualquier cosa, p.ej. el estilo
// 	this.style.borderColor = "blue";
// }
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
