// This is your test publishable API key.
const stripe = Stripe("pk_test_51Kb6O2Cuu9QiirsWFCOOAIhyPiMRouhxrSUVNntXt5JrYXtW9U94rIhDHruzdy0MiNINvbwIoY8ojIzmmcvpYepL00ZhWHzJH3");






// objeto para enviar payment.php y pueda general el objeto pago de Stripe correctamente
peticion={
  "metodoPago":"card",
  "folio":document.querySelector("#folio").value,
  "monto": document.querySelector("#monto").value,
  "facturacion":'2',
};



// path para pasarle a la funcion de confirmar pago de Stripe con las variables nesesarias por metodo GET
var path = "http://localhost:/tiendaweb/views/payment/completed_payment.php?"
+"id_pedido="+peticion["folio"]

//aqui se pueden crear mas variables
// +"&monto="+peticion["monto"] // en completed_payment.php se pide como $_GET['monto'];
;

// variable de creacion del elemento payment para Stripe
let elements;

// si se hace click en el boton de pago ejecutar la funcion handleSubmit la cual confirma el pago y redirecciona a completed_payment.php
document.querySelector("#payment-form").addEventListener("submit", handleSubmit);











// setear la variable para saber si el cliente quiere o no facturacion
document.querySelector('#flexCheckDefault').addEventListener('click',()=>{
  peticion['facturacion']=peticion['facturacion']==1 ? 2: 1;
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // desabilitar y habilitar el boton de pago de stripe-------------------------------------------------------------------------
    // document.querySelector("#submit").disabled = true;
    
    // escuchar por un cambio en el formulario para ejecutar la funcion de habilitar el boton si estan llenos los campos
    document.querySelector("#telefono").addEventListener("change", stateHandle);
    
    
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
                value: '100',
            }
            }]
        });
    },

    onApprove: (data, actions)=>{
        return actions.order.capture().then(function(detalles){
            console.log(detalles);
            alert('pago exitoso')
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

  
      showMessage("");
  

    //hacer la conexion con al archivo php
    $.post('http://localhost/tiendaweb/views/payment/payment.php',peticion,
        function(data){ 
              
              var crear = JSON.parse(data);
              console.log(data);
              console.log(crear);
              elements = stripe.elements( {"clientSecret":crear.clientSecret} );
              const paymentElement = elements.create("payment");
              console.log(paymentElement);
              paymentElement.mount("#payment-element");

        });

           
        
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
        const messageContainer = document.querySelector("#payment-element");
      
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
        } else {
          document.querySelector("#submit").disabled = false;
          document.querySelector("#spinner").classList.add("hidden");
          document.querySelector("#button-text").classList.remove("hidden");
        }
      }
//// animaciones para que se vea bonito -------------------------------------------------------------------------------- 
 