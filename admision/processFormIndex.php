<?php
require_once('./includes/ReCaptcha/recaptchalib.php');
$privatekey = "6LeCKckSAAAAALT3EOByDZqsg5AvxGhVsbU7oK2O";
$resp = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
?>

<?php if (!$resp->is_valid) : ?>

  El codigo reCAPTCHA ingresado no es v&aacute;lido.

<?php else : ?>
<?php


require_once('./includes/nusoap/lib/nusoap.php');
$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';
$useCURL = isset($_POST['usecurl']) ? $_POST['usecurl'] : '0';
$client = new nusoap_client("http://siadi.duoc.cl/siadi3/funciones/webservices.php", false,
						$proxyhost, $proxyport, $proxyusername, $proxypassword);
$err = $client->getError();
if ($err) {
	echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
	echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';
	exit();
} else {
  echo $_GET['param'];
}


?>
 
  

<?php endif; ?>