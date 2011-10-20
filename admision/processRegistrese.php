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
  echo "enviar WS";
}
?>
  <table style="border-collapse: collapse; height: 209px; width: 665px;" border="0" cellspacing="0" cellpadding="0" align="center">
    <tbody>
      <tr>
        <td>
          <table style="border-collapse: collapse; width: 470px;" border="0" cellspacing="0" cellpadding="0" align="center">
            <tbody>
              <tr>
                <td height="174">
                  <table style="border-collapse: collapse; width: 377px;" border="0" cellspacing="0" cellpadding="0" align="center">
                    <tbody>
                      <tr>
                        <td style="text-align: center; font-family: Arial,Helvetica,sans-serif; color: #666666;" width="377">		 
                          <img src="referido/mail/images/icon_thanks.jpg" border="0" width="128" height="128" /><br />
                          <strong>La informaci&oacute;n ha sido enviada.</strong><br/> 
                          <span style="font-size: 12px;">Gracias por visitar DuocUC.cl</span>		
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>

<?php endif; ?>