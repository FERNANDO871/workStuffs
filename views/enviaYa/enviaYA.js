
document.querySelector('#codigo_postal').addEventListener('change',registra);

function registra(){
    // console.log("post 1");
    // // obtener valores y validar
    // var nombre= document.getElementById("nombre").value;
    // var telefono= document.getElementById("telefono").value;
    // var correo= document.getElementById("correo").value;
    // var comentario= document.getElementById("comentario").value;
    // if(nombre==""){
    //     alert("el nombre es obligatorio"); return;}
    // if(telefono.length!=10){
    //     alert("el telefono debe tener 10 digitos"); return;}
    // if(correo==""){
    //     alert("el correo es obligatorio"); return;}

    console.log("conectando con envia ya...");
    
    var count = "UAPAFOCO";
    // crear peticion 
    var peticion = {
        "enviaya_account": count,
        "carrier_account": null,
        "api_key":"8df122319cfc6c283f613956d598dfad",
          "shipment":{
            "shipment_type":"Package",
            "parcels":[
              {
                "quantity":"1",
                "weight":"3",
                "weight_unit":"kg",
                "length":"10",
                "height":"20",
                "width":"30",
                "dimension_unit":"cm"
              },
            //   {
            //     "quantity":"1",
            //     "weight":"5",
            //     "weight_unit":"kg",
            //     "length":"30",
            //     "height":"400",
            //     "width":"10",
            //     "dimension_unit":"cm"
            //   }
            ]
          },
          "origin_direction":{
            "country_code":"MX",
            "postal_code":"80010"
          },
          "destination_direction":{
            "country_code":"MX",
            "postal_code":document.querySelector('#codigo_postal').value,
          },
          //11550
          //01210
        //   "insured_value":"5000",
        //   "insured_value_currency":"MXN",
        //   "order_total_amount": 60,
        //   "currency":"USD",
        //   "intelligent_filtering":true
      }
    //hacer la conexion con al archivo php

    const image1 = document.createElement('img');
    const image2 = document.createElement('img');


    $.post('https://enviaya.com.mx/api/v1/rates',peticion,
        function(data){
            // obtener resultado de la ejecucion del archivo php
            console.log(data);

            var ups = data['UPS'];
            var fedex = data['FedEx']

            var ups2 = ups[0];
            var fedex2 = fedex[0];

            console.log(fedex2);
            console.log(ups2);

            console.log('fedex'+fedex2['total_amount']);
            console.log('ups'+ups2['total_amount']);
            console.log('fedex'+fedex2['date']);
            console.log('ups'+ups2['date']);
            
            

            image1.src = ups2['carrier_logo_url'];
            image2.src = fedex2['carrier_logo_url_svg'];
            image1.class = 'imageEnviaYa';
            image2.clsss = 'imageEnviaYa'
            
            document.createElement('LI');


            

            const imagenes = document.querySelectorAll('.enviaYaImagen');
            imagenes[0].src=fedex2['carrier_logo_url'];
            imagenes[1].src=ups2['carrier_logo_url'];

            const precios = document.querySelectorAll('.preciosEnviaYA');
            precios[0].textContent=fedex2['currency']+'  '+fedex2['total_amount'];
            precios[1].textContent=ups2['currency']+ '  ' + ups2['total_amount'];
           
            const date = document.querySelectorAll('.dateEnviaYA');
            date[0].textContent=fedex2['date'];
            date[1].textContent=ups2['date'];

            const precio = document.querySelector('#enviaYA');
            
            precio.classList.remove('hidden');

    });

    


    console.log("finish");
}


