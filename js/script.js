

function mostrarUsuario(nombre){
     
     var xmlhttp = new XMLHttpRequest();
     
     xmlhttp.open("GET","buscar.php?nombre=" + nombre, true);

     if(nombre.length === ""){
          resultado.innerHTML = "";
     } else {

          xmlhttp.onload = function() {

               if(xmlhttp.readyState === 4 && this.status === 200) {
                    // document.getElementById('info').innerHTML = xmlhttp.responseText;

                    var i = xmlhttp.responseText;
                    var m = i.slice(700,);
                    document.getElementById('info').innerHTML = m;

               }
          }          
          xmlhttp.send();
     }
     
}
