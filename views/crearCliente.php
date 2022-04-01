<?php

require 'payment/vendor/autoload.php';
require 'conexion.php';

$select = "SELECT * FROM cliente";
$returnEmail=mysqli_query($data,$select);


while($row2 =mysqli_fetch_array($returnEmail)){ 
   echo $row2['id'];
   echo '<br>';
   echo $row2['email'];
   echo '<br>';
}


$stripe = new \Stripe\StripeClient(
    'sk_test_51Kb6O2Cuu9QiirsWh0AyehvPkwCtDF6VsRUioKEe4l3KmPrBGDucaWIzlti4SuGmlCGMJOrOeIBhFQl86Mz9MYSR00S7t4OSVz'
  );


// crear un cliente en el perfil de la llave secreta que se envio


 $Customer =  $stripe->customers->create([

    "email"=> 'damian@damian.com',
    'description' => 'ozonium',
    "phone"=> '6677819230',
    'name'=> 'Damian benitez rendon',
  ]);



  echo '<br>';
  echo $Customer['id'];
  echo '<br>';
  echo $Customer['name'];
  echo '<br>';
  echo $Customer['email'];
  echo '<br>';
  echo $Customer['description'];
  echo '<br>';

  
// regresar un cliente del perfil de la llave secreta que se envio
// $Customer = $stripe->customers->retrieve(
//     'cus_LLnPBxE5drBdJY',
// );

if (!isset($Customer['id'])){

    echo 'no esta seteado';
  

}

  
  

// "id": "cus_LLmeSk7M01T9Ve",
//   "object": "customer",
//   "address": null,
//   "balance": 0,
//   "created": 1647707090,
//   "currency": "mxn",
//   "default_source": null,
//   "delinquent": false,
//   "description": "My First Test Customer (created for API docs)",
//   "discount": null,
//   "email": null,
//   "invoice_prefix": "CC5DAF4",
//   "invoice_settings": {
//     "custom_fields": null,
//     "default_payment_method": null,
//     "footer": null
//   },
//   "livemode": false,
//   "metadata": {},
//   "name": null,
//   "next_invoice_sequence": 1,
//   "phone": null,
//   "preferred_locales": [],
//   "shipping": null,
//   "tax_exempt": "none",
//   "test_clock": null
?>