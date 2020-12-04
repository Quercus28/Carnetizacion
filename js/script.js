var resultado = document.getElementById("info");

function mostrarUsuario(nombre){
     
     var xmlhttp = new XMLHttpRequest();
     
     xmlhttp.open("GET","buscar.php?nombre=" + nombre, true);

     if(nombre.length === ""){
          resultado.innerHTML = "";
     } else {

          xmlhttp.onload = function() {

               if(xmlhttp.readyState === 4 && this.status === 200) {
                    // const respuesta = JSON.parse(xmlhttp.responseText);
                    // resultado.innerHTML =  respuesta.respuesta.salida;
                    resultado.innerHTML =  xmlhttp.responseText;
               }
          }
          
          xmlhttp.send();
     }
}
