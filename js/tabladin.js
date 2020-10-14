"use strict";
function iniciarPagina (){ 

 let carga_inicial = [{"zona" : "Centro", 
                     "val1": "2400", 
                     "val2": "2650", 
                     "val3":"2850"
                    },
                     {
                    "zona" : "Av. Brasil",
                    "val1": "1165", 
                    "val2": "1340", 
                    "val3":"1820"
                    }, 
                    {
                    "zona" : "Av. Bolivar", 
                    "val1": "1370",
                    "val2": "1780",
                    "val3":"2150"
                    }];
 let arreglo_Inic = [];
 
 copiarArreglo(carga_inicial);
 crearTablas(arreglo_Inic);
  

    function crearTablas(arr){
      let padredeTabla= document.getElementById("PadredeTabla"); /* carga el Header*/
      let tHeader = document.createElement("thead");
      let tr= document.createElement("tr");
      let th1 = document.createElement("th");
      let th2 = document.createElement("th");
      let th3 = document.createElement("th");
      let th4 = document.createElement("th");

      th1.innerText = "Zona";
      th2.innerText = "Fideicomiso Inmob.";
      th3.innerText = "Departamentos al Pozo";
      th4.innerText = "Venta por Modulos";

      tr.appendChild(th1);
      tr.appendChild(th2);
      tr.appendChild(th3);
      tr.appendChild(th4);
      console.log(tHeader);
      tHeader.appendChild(tr);
      document.getElementById("PadredeTabla").appendChild(tHeader);      
        
     let tBody = document.createElement("tbody");/* crea el cuerpo de la tabla*/
         for (let i = 0; i < arr.length; i++) {
         let tr= document.createElement("tr");
         let td1 = document.createElement("td");
         let td2 = document.createElement("td");
         let td3 = document.createElement("td");
         let td4 = document.createElement("td");

         td1.innerText = "U$S " + arr[i].zona;
         td2.innerText = "U$S " + arr[i].val1;
         td3.innerText = "U$S " + arr[i].val2;
         td4.innerText = "U$S " + arr[i].val3;

         tr.appendChild(td1);
         tr.appendChild(td2);
         tr.appendChild(td3);
         tr.appendChild(td4);
         console.log(tBody);
         tBody.appendChild(tr);
         console.log(tBody)
         }
         document.getElementById("PadredeTabla").appendChild(tBody);      
}



 let crearTres = document.getElementById("ingresarTres");
 crearTres.addEventListener("click",function (){ cargarArreglo(carga_inicial); borrarTabla(); crearTablas(arreglo_Inic)});

 function cargarArreglo(arr){
    for( let i=0; i<3; i++){
        /*console.log(arreglo_Inic);*/
        let inversiones = {
            "zona" : arr[i].zona, 
            "val1": arr[i].val1, 
            "val2": arr[i].val2, 
            "val3": arr[i].val3,
        } 
        arreglo_Inic.push(inversiones);
    }
  }

  function copiarArreglo(arr){
      for( let i=0; i< arr.length; i++){
       /*console.log(arr);*/

       let inversiones = {
          "zona" : arr[i].zona, 
          "val1": arr[i].val1, 
          "val2": arr[i].val2, 
          "val3": arr[i].val3,
       } 
    arreglo_Inic.push(inversiones);
      }
   }

 
 let BorrarTabla = document.getElementById("borrarTabla");
 BorrarTabla.addEventListener("click",function (){ borrarTabla();borrarArreglo(arreglo_Inic);crearTablas(arreglo_Inic); });
 
 function borrarArreglo(arr){
    /*console.log("Borro el Arregloooo");*/
    arr.splice(0,arr.length);
};

 function borrarTabla(){
   /* console.log("Borro toda la tabla ");*/
    let tablaABorrar = document.getElementById("PadredeTabla").firstChild;
    let padre1=document.getElementById("PadredeTabla");
    /*console.log("tnodo padre",padre1.nodeName);*/
    if (tablaABorrar != null) {
      let padre = tablaABorrar.parentNode;
     /* console.log("nodo padre",padre);*/
       while (padre.firstChild) {
         padre.removeChild(padre.firstChild);
      }
    }
 };

 let ingresarDatos = document.getElementById("Ingresar");
 ingresarDatos.addEventListener("click",function (){agregarUno(arreglo_Inic); borrarTabla(); crearTablas(arreglo_Inic)});

 
 function agregarUno(arr){
    let ingZona = document.getElementById("zonaName");
    let ingFidei = document.getElementById("fideicomisoName");
    let ingPozo = document.getElementById("pozoName");
    let ingModulo = document.getElementById("moduloName");
    let inversiones = {
        "zona" : ingZona.value, 
        "val1": ingFidei.value, 
        "val2": ingPozo.value, 
        "val3": ingModulo.value,
    } 
    document.getElementById("zonaName").focus();
    document.getElementById("zonaName").value="";
    document.getElementById("fideicomisoName").value="";
    document.getElementById("pozoName").value="";
    document.getElementById("moduloName").value="";
    arreglo_Inic.push(inversiones);
    
 }

}
document.addEventListener("DOMContentLoaded",iniciarPagina);