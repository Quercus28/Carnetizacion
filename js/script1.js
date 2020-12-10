

function mostrarUsuario1(nombre){
     
     var xmlhttp = new XMLHttpRequest();
     
     xmlhttp.open("GET","buscar_contractor.php?nombre=" + nombre, true);

     if(nombre.length === ""){
          resultado.innerHTML = "";
     } else {

          xmlhttp.onload = function() {

               if(xmlhttp.readyState === 4 && this.status === 200) {
                    // document.getElementById('info').innerHTML = xmlhttp.responseText;

                    var i = xmlhttp.responseText;
                    var m = i.slice(711,);
                    document.getElementById('info').innerHTML = m;

               }
          }          
          xmlhttp.send();
     }
     
}