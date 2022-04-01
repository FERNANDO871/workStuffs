<?php

use function PHPSTORM_META\type;

    require "vendor/autoload.php";
    require "../../procesos/conexion.php";

	$stripe = new \Stripe\StripeClient(
		'sk_test_51Kb6O2Cuu9QiirsWh0AyehvPkwCtDF6VsRUioKEe4l3KmPrBGDucaWIzlti4SuGmlCGMJOrOeIBhFQl86Mz9MYSR00S7t4OSVz'
	  );


   
    // //seleccciones todos los clientes --------------------------------------------
    $query = "SELECT * FROM cliente";
    $consulta = mysqli_query($data, $query);
  

    
    
    while($row = mysqli_fetch_array($consulta)){
        

        $Customer =  $stripe->customers->create([
                "email"=> $row['email'],
                'name'=> $row['nombre']. ' '.$row['lastname'],
        ]);
        $id=$row['id'];
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo $id;
       
        $idStripe=  $Customer['id'];
        echo $idStripe;
        $query = "UPDATE cliente SET id_stripe='$idStripe' WHERE id=$id";
        mysqli_query($data, $query);
        
    }

	 

      