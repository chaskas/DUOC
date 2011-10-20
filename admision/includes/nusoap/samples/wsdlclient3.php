<?php

/*
 * 	$Id: wsdlclient3.php,v 1.4 2007/11/06 14:48:49 snichol Exp $
 *
 * 	WSDL client sample.
 *
 * 	Service: WSDL
 * 	Payload: rpc/encoded
 * 	Transport: http
 * 	Authentication: none
 */
require_once('../lib/nusoap.php');

$client = new nusoap_client('http://siadi.duoc.cl/siadi3/funciones/webservices.php', false);

$err = $client->getError();
if ($err) {
  echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}

$datos = array(
 'cod_tipo' => 'Willi',
 'des_nombre' => 22,
 'des_apepri' => 'male',
 'des_apeseg' => '',
 'des_email' => '',
 'cod_alurut' => '',
    
 
 'preferencias' => 
    array(
        'preferencia' => array(
            'cod_carrera' => '',
            'cod_sede' => ''
        ),
        'preferencia' => array(
            'cod_carrera' => '',
            'cod_sede' => ''
        ),
        'preferencia' => array(
            'cod_carrera' => '',
            'cod_sede' => ''
        )
    ),
    
 'des_celular' => '',
 'cod_ocupacion' => ''

);


$call = 'setDatos';


$result = $client->call($call, array('datos' => $datos));
// Check for a fault
if ($client->fault) {
  echo '<h2>Fault</h2><pre>';
  print_r($result);
  echo '</pre>';
} else {
  // Check for errors
  $err = $client->getError();
  if ($err) {
    // Display the error
    echo '<h2>Error</h2><pre>' . $err . '</pre>';
  } else {
    // Display the result
    echo '<h2>Result</h2><pre>';
    print_r($result);
    echo '</pre>';
  }
}
echo '<h2>Request</h2><pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2><pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>