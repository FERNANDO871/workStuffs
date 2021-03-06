// This is your test publishable API key.
const stripe = Stripe("pk_test_51Kb6O2Cuu9QiirsWFCOOAIhyPiMRouhxrSUVNntXt5JrYXtW9U94rIhDHruzdy0MiNINvbwIoY8ojIzmmcvpYepL00ZhWHzJH3");


// objeto para enviar payment.php y pueda general el objeto pago de Stripe correctamente
peticion={
  "metodoPago":"card",
  "monto": document.querySelector("#monto").textContent,
  "facturacion":0,
  "paqueteria":'hola ',
};

// path para pasarle a la funcion de confirmar pago de Stripe con las variables nesesarias por metodo GET
var path = "http://localhost/tiendaweb/views/payment/completed_payment.php?"
+"id_pedido="+peticion["folio"]
;

//aqui se pueden crear mas variables
// +"&monto="+peticion["monto"] // en completed_payment.php se pide como $_GET['monto'];
;

// variable de creacion del elemento payment para Stripe
let elements;

// si se hace click en el boton de pago ejecutar la funcion handleSubmit la cual confirma el pago y redirecciona a completed_payment.php
document.querySelector("#payment-form").addEventListener("submit", handleSubmit);


// setear la variable para saber si el cliente quiere o no facturacion
document.querySelector('#flexCheckDefault').addEventListener('click',()=>{
  peticion['facturacion']=peticion['facturacion']==0 ? 1: 0;
  console.log(peticion['facturacion']);
});
















// generar el pago-------------------------------------------------------------------
const metodoPago = document.querySelectorAll('input[name="pago[pago]"]');
metodoPago.forEach(input => input.addEventListener('click',mostrarPago))
// console.log(metodoPago);

//funcion de seleccion de metodo de pago
function mostrarPago(e){
  console.log(e.target.value);
  peticion['metodoPago']=e.target.value;
  
  // visualizar o esconder el pago de paypal 
  if(peticion['metodoPago']=='paypal'){
    document.querySelector('#paypal1417').classList.remove('hidden');
    document.querySelector('#payment-form').classList.add('hidden');
  }else{
    document.querySelector('#payment-form').classList.remove('hidden');
    document.querySelector('#paypal1417').classList.add('hidden');
  }
  
  // llamar al payment.php por metodo POST
  initialize();
  // checar status del pago asincronamente
  checkStatus();
}
    
// generar el pago-------------------------------------------------------------------
    
    























// envia ya --------------------------------------------------------------------------------------------------
var upsTotal;
var fedexTotal;
const imageUps = document.createElement('img');
const imageFedex = document.createElement('img');
const i = document.createElement('img');
i.classList.add('enviaYaImagen');
const T = document.querySelectorAll('.enviaYaTotal');
var totalCuenta = document.getElementById('monto');
var montoTotal = parseInt(totalCuenta.textContent);
var src = [];
var totalCuenta;
var fedexCurrency;
var upsCurrency;



function registra(){
        console.log("conectando con envia ya...");
        
        var count = "2O5VZOY4";
        // crear peticion 
        var pet = {
          "enviaya_account": count,
          "carrier_account": null,
          "api_key":"9d233dd92dd1d117ff70fe586a6729b0",
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
      
      $.post('https://enviaya.com.mx/api/v1/rates',pet,
      function(data){
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
        
        
        src[0] = ups2['carrier_logo_url']
        src[1] = fedex2['carrier_logo_url']
        imageUps.src = ups2['carrier_logo_url'];
        imageFedex.src = fedex2['carrier_logo_url_svg'];
        imageUps.classList.add('enviaYaImagen');
        imageFedex.classList.add('enviaYaImagen');
        
        upsTotal = ups2['total_amount'];
        fedexTotal =fedex2['total_amount'] ;
        upsCurrency=ups2['currency'];
        fedexCurrency=fedex2['currency'];
        
        const imagenes = document.querySelectorAll('.enviaYaImagen');
        imagenes[0].appendChild(imageFedex);
        imagenes[1].appendChild(imageUps);
        
        const precios = document.querySelectorAll('.preciosEnviaYA');
        precios[0].textContent=fedexTotal+' '+fedexCurrency;
        precios[1].textContent=upsTotal+' '+upsCurrency;
        
        const date = document.querySelectorAll('.dateEnviaYA');
        date[0].textContent=fedex2['date'].substring(0,10);
        date[1].textContent=ups2['date'].substring(0,10);
        console.log(fedex2['date']);
        console.log(typeof(fedex2['date']));
        
        const precio = document.querySelector('#enviaYA');
        
            precio.classList.remove('hidden');


    });
  }


  const paqueteria = document.querySelectorAll('input[name="paqueteria[paqueteria]"]');
  // console.log(paqueteria);
  paqueteria.forEach(input => input.addEventListener('click',(e)=>{
    peticion['paqueteria']=e.target.value;

        //codigo para mostrar el total sumandole la paqueteria------------------------------------------------------------

        if(T[0].contains(i)) T[0].removeChild(i);
        // visualizar o esconder el pago de paypal 
        if(e.target.value=='fedex'){
          i.src = src[1];
          T[1].textContent=fedexCurrency+' '+ fedexTotal;
          totalCuenta.textContent = fedexTotal+montoTotal;
          
          //agregando el nuevo monto al path de completd payment
          peticion['monto']=fedexTotal+montoTotal;


        }else{
          i.src = src[0];
          T[1].textContent=upsCurrency+' '+ upsTotal;
          totalCuenta.textContent = upsTotal+montoTotal;

          //agregando el nuevo monto al path de completd payment
          peticion['monto']=upsTotal+montoTotal;


        }
        T[0].appendChild(i);
        document.querySelector('#muestraEnviaYa').classList.remove('hidden');
        //codigo para mostrar el total sumandole la paqueteria------------------------------------------------------------
  

  }));
// envia ya --------------------------------------------------------------------------------------------------
    
    














    
    
    
    
    
    
    
    // desabilitar y habilitar el boton de pago de stripe-------------------------------------------------------------------------
    document.querySelector("#submit").disabled = true;


    
    // escuchar por un cambio en el formulario para ejecutar la funcion de habilitar el boton si estan llenos los campos
    document.querySelector("#codigo_postal").addEventListener("change", ()=>{stateHandle();registra()});
    document.querySelector("#telefono").addEventListener("change", stateHandle);
    document.querySelector("#correo").addEventListener("change", stateHandle);
    document.querySelector("#cuidad").addEventListener("change", stateHandle);
    document.querySelector("#derreccion").addEventListener("change", stateHandle);
    document.querySelector("#apellido").addEventListener("change", stateHandle);
    document.querySelector("#nombre").addEventListener("change", stateHandle);
    document.querySelector("#submit").addEventListener("change", stateHandle);
    
    // validar que esten llenos los campos del formulario para habilitar el boton de la api
    function stateHandle() {  
      if (document.querySelector("#telefono").value === "" ||
      document.querySelector("#correo").value==="" ||
        document.querySelector("#codigo_postal").value==="" ||
        document.querySelector("#cuidad").value==="" ||
        document.querySelector("#derreccion").value==="" ||
        document.querySelector("#apellido").value==="" ||
        document.querySelector("#nombre").value===""  ) {
          document.querySelector("#submit").disabled = true;
        } else {
          document.querySelector("#submit").disabled = false;
    }
    
  }
  // desabilitar y habilitar el boton de pago de stripe-----------------------------------------------------------------------
  
  
  

  
  
  












  
  //renderizar los botones de paypal-----------------------------------------------------------------------------------
  
        // usuario de prueba
        // sb-n43olc15488311@personal.example.com -->
        // 93!C|xXC 
paypal.Buttons({
      style: {
        layout: 'vertical',
        color:  'black',
        shape:  'rect',
        label:  'paypal'
      },
      
      createOrder: (data, actions) => {
        // Set up the transaction
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: peticion['monto'],
            }
            }]
        });
    },

    onApprove: (data, actions)=>{
        return actions.order.capture().then(function(detalles){
            location.href=
              path
              +"&facturacion="+peticion["facturacion"]
              +"&metodoPago="+peticion["metodoPago"]
              +"&paqueteria="+peticion["paqueteria"]
              +"&monto="+peticion["monto"]
              ;
        })
    },
    onCancel: function(data){
        alert("pago cancelado");
        console.log(data);
    },
        
}).render('#paypal1417');
  //renderizar los botones de paypal-----------------------------------------------------------------------------------
  
  
  
  
  









  
  
  
  

// funcion para llamar el id del pago que se creo en el documento payment.php ------------------------------------------

async function initialize() {

    setLoading(true);
    //hacer la conexion con al archivo payment.php
    const resultado = await $.post('http://localhost/tiendaweb/views/payment/payment.php',peticion,
        function(data){ 
          // console.log(data);
              var crear = JSON.parse(data);
              // console.log(data);
              // console.log(crear);
              elements = stripe.elements( {"clientSecret":crear.clientSecret} );
              const paymentElement = elements.create("payment");
              console.log(paymentElement);
              paymentElement.mount("#payment-element");

        });
      setLoading(false);         
        
}
// funcion para llamar el id del pago que se creo en el documento payment.php -----------------------------------------
      















//// confirmar el pago -------------------------------------------------------------------------------------------------
async function handleSubmit(e) {
  e.preventDefault();
  setLoading(true);

  const { error } = await stripe.confirmPayment({
    elements,
    confirmParams: {return_url: 
      path
      +"&facturacion="+peticion["facturacion"]
      +"&metodoPago="+peticion["metodoPago"]
      +"&paqueteria="+peticion["paqueteria"]
      +"&monto="+peticion["monto"]
      ,},
  });

// si hay un error pasara a esta parte
  if (error.type === "card_error" || error.type === "validation_error") {
    showMessage(error.message);
  } else {
    showMessage("An unexpected error occured.");
  }

  setLoading(false);
}
      
async function checkStatus() {

  const clientSecret = new URLSearchParams(window.location.search).get(
    "payment_intent_client_secret"
    );
    
    if (!clientSecret) {
      return;
    }

    const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);
    
    switch (paymentIntent.status) {
      case "succeeded":
        showMessage("Payment succeeded!");
        break;
        case "processing":
          showMessage("Your payment is processing.");
          break;
          case "requires_payment_method":
            showMessage("Your payment was not successful, please try again.");
            break;
            default:
              showMessage("Something went wrong.");
              break;
    }
}
//// confirmar el pago -------------------------------------------------------------------------------------------------






















                
//// animaciones para que se vea bonito -------------------------------------------------------------------------------- 
        function showMessage(messageText) {
          setLoading(true);
        const messageContainer = document.querySelector("#mensaje");
        messageContainer.classList.add("hidden");
        
        messageContainer.textContent = messageText;
      
        setTimeout(function () {
          messageContainer.classList.remove("hidden");
          messageText.textContent = "";
          setLoading(false);
        }, 4000);
      }
      
      // Show a spinner on payment submission
      function setLoading(isLoading) {
        if (isLoading) {
          // Disable the button and show a spinner
          document.querySelector("#submit").disabled = true;
          document.querySelector("#spinner").classList.remove("hidden");
          document.querySelector("#button-text").classList.add("hidden");
          document.querySelector("#payment-element").classList.add("hidden");
        } else {
          document.querySelector("#submit").disabled = false;
          document.querySelector("#spinner").classList.add("hidden");
          document.querySelector("#button-text").classList.remove("hidden");
          document.querySelector("#payment-element").classList.remove("hidden");
        }
      }
//// animaciones para que se vea bonito -------------------------------------------------------------------------------- 
 