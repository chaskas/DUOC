<?php
$enlace = base64_decode($_POST['enlace']);
$enlace = substr($enlace,9);
$enlace = "http://".$_SERVER['HTTP_HOST']."/".$enlace;
//echo $enlace."<br/>";

$remitente_nombre = $_POST['nombres'];
$remitente_correo = $_POST['email'];

$amigo1_nombre = $_POST['nombre1'];
$amigo1_correo = $_POST['correo1'];

$amigo2_nombre = $_POST['nombre2'];
$amigo2_correo = $_POST['correo2'];

$amigo3_nombre = $_POST['nombre3'];
$amigo3_correo = $_POST['correo3'];

$destinatarios = array(
    $amigo1_nombre => $amigo1_correo,
    $amigo2_nombre => $amigo2_correo,
    $amigo3_nombre => $amigo3_correo
);

require_once './includes/Swift-4.1.2/lib/swift_required.php';
//ENVIAR CORREO

//Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
  ->setUsername('mr.chaskas@gmail.com')
  ->setPassword('lagoranco1809')
  ;

foreach($destinatarios as $nombre => $correo){

//Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

//Create a message
$message = Swift_Message::newInstance()
  ->setSubject($remitente_nombre." ha compartido este enlace contigo - DuocUC")
  ->setFrom(array($remitente_correo => $remitente_nombre))
  ->setTo(array($correo => $nombre))
  ->setBody(

      '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">'.
      '<html xmlns="http://www.w3.org/1999/xhtml">'.
      '<head>'.
              '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.
              '<title>Compartir Enlace - DuocUc</title>'.
      '</head>'.
      '<body>'.

      '<table width="665" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">'.
              '<tr>'.
                      '<td width="665" height="25"><img src="http://www.duoc.cl/admision/referido/mail/images/1_01.jpg" alt="" width="665" height="25" border="0" style="display:block;" /></td>'.
              '</tr>'.
              '<tr>'.
                      '<td width="665" height="104"><a href="#"><img src="http://www.duoc.cl/admision/referido/mail/images/1_02.jpg" alt="DUOCUC" width="665" height="104" border="0" style="display:block;" /></a></td>'.
              '</tr>'.
              '<tr>'.
                      '<td>'.
                              '<table width="665" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;">'.
                                      '<tr>'.
                                              '<td width="31" height="174"><img src="http://www.duoc.cl/admision/referido/mail/images/1_03.jpg" alt="" width="31" height="174" border="0" style="display:block;"/></td>'.
                                              '<td width="601" height="174">'.
                                                      '<table width="533" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">'.
                                                              '<tr>'.
                                                                      '<td width="533">'.
                                                                              '<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#106fb4;">Estimado(a) '.$nombre.'</span> <br><br><br>'.
                                                                              '<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#16205e;">'.$remitente_nombre.'</span> <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#16205e;"> ha compartido contigo este enlace:</span>'.
                                                                              '<!-- <br><br>  <span style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#16205e;">#CARRERA</span><span style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#006699;">#ESCUELA</span>--><br><br>'.
                                                                              '<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#16205e;"> Para revisar lo que ha enviado tu amigo, pincha</span> <a href="'.$enlace.'" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#16205e; font-weight:bold; target="_blank">aqu&iacute;.</a>'.
                                                                      '</td>'.
                                                              '</tr>'.
                                                      '</table>'.
                                              '</td>'.
                                              '<td width="33" height="174"><img src="http://www.duoc.cl/admision/referido/mail/images/1_05.jpg" alt="" width="33" height="174" border="0" style="display:block;" /></td>'.
                                      '</tr>'.
                              '</table>'.
                      '</td>'.
              '</tr>'.
              '<tr>'.
                      '<td width="665" height="167"><img src="http://www.duoc.cl/admision/referido/mail/images/1_06.jpg" alt="ACREDITADO 7 A&Ntilde;OS / COMISI&Oacute;N NACIONAL DE ACREDITACI&Oacute;N" width="665" height="167" border="0" style="display:block;" /></td>'.
              '</tr>'.
      '</table>'.
      '</body>'.
      '</html>'
          ,'text/html')
  ;

  $headers = $message->getHeaders();
  $headers->addTextHeader('Organization', 'DuocUC');
  $headers->addTextHeader('Reply-To', $nombre.' <'.$correo.'>');
  $headers->addTextHeader('From', $remitente_nombre.' <'.$remitente_correo.'>');
  $headers->addTextHeader('X-Mailer', 'SwiftMailer v4.0.6');


  if (!$mailer->send($message, $failures))
  {
    echo "Failures:";
    print_r($failures);
  }

}

?>
<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-collapse: collapse;">
  <tbody>

  <tr>
    <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
      <tbody><tr>
        <td height="100%"><table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-collapse: collapse;">
          <tbody><tr>
            <td width="100%" style="text-align: center; font-family: Arial,Helvetica,sans-serif; color: rgb(102, 102, 102);">
              <img width="128" height="128" alt="" src="../referido/mail/images/icon_thanks.jpg"><br>
              <strong>La información ha sido compartida. </strong><br>
              <span style="font-size: 12px;">Gracias por visitar DuocUC.cl</span>       </td>
    </tr>
  </tbody>
        </table></td>
        </tr>
    </tbody></table></td>
  </tr>

</tbody></table>