<?php

require 'vendor/autoload.php';
require "../../procesos/conexion.php";


session_start();
$idcliente = $_SESSION['id'];









//obtener el id stripe --------------------------------------------
$query = "SELECT id_stripe FROM cliente WHERE id=$idcliente";
$consulta = mysqli_query($data, $query);
$id_stripe = mysqli_fetch_array($consulta);
////////////////////////////////////////////////////////////////////////// echo $id_stripe[0]; // no descomentar a menos que sea absolutamente necesario
//obtener el id stripe------------------------------------------









// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51Kb6O2Cuu9QiirsWh0AyehvPkwCtDF6VsRUioKEe4l3KmPrBGDucaWIzlti4SuGmlCGMJOrOeIBhFQl86Mz9MYSR00S7t4OSVz');

try {

    $paymentIntent = \Stripe\PaymentIntent::create([
        'amount' =>  $_POST['monto']*100,
        'currency' =>  'MXN',
        'payment_method_types' => [
            $_POST['metodoPago'],
        ],
        'customer' => $id_stripe[0] ?? 'cus_LOTPG1BEiSXxO3',
        'description'=>$_POST["folio"]?? 'publico general',
    ]);

    $output = [
        'clientSecret' => $paymentIntent->client_secret,
    ];

    echo json_encode($output);
} catch (Error $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}