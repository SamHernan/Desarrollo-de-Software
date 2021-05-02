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

function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("cbox2");
    // Get the output text
    var text = document.getElementById("textNuevo");
    var text2 = document.getElementById("textOriginal");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "block";
      text2.style.display= "none";
    } else {
      text.style.display = "none";
      text2.style.display= "block";
    }
  }
