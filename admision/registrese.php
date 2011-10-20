<html lang="es-es" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" dir="ltr">
  <head>

    <meta content="text/html" charset="utf-8" http-equiv="content-type"/>
    <meta content="index, follow" name="robots"/>
    <meta content="instituto profesional, educacion superior, centro de formacion tecnica, admision, universidades chilenas, carreras profesionales, carreras tecnicas, carreras, matricula 2011" name="keywords"/>
    <meta content="Duoc UC" name="title"/>
    <meta content="Duoc UC es el primer instituto profesional acreditado por 7 anos. Porque el pais necesita personas que lo hagan crecer, ven a Duoc UC. Creces tu, crece Chile." name="description">
    <meta content="Joomla! 1.5 - Open Source Content Management" name="generator"/>
    <title>Duoc UC</title>
    <link type="image/x-icon" rel="shortcut icon" href="templates/system/favicon.ico"/>
    <link type="text/css" href="media/system/css/modal.css" rel="stylesheet"/>
    <link type="text/css" href="components/com_k2/css/k2.css" rel="stylesheet"/>
    <script src="media/system/js/mootools.js" type="text/javascript"></script>
    <script src="media/system/js/modal.js" type="text/javascript"></script>
    <script src="components/com_k2/js/k2.js" type="text/javascript"></script>

    <script language="JavaScript" type="text/javascript" src="js/includes/xpath.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/includes/SpryData.js"></script>


    <script type="text/javascript">
      var dsCarrerasSusc = new Spry.Data.XMLDataSet("./carreras.php", "ResultElement/listaElementos");
      var dsSedes1 = new Spry.Data.XMLDataSet("./sedes.php?idCarrera=1", "ResultElement/listaElementos");
      var dsSedes2 = new Spry.Data.XMLDataSet("./sedes.php?idCarrera=1", "ResultElement/listaElementos");
      var dsSedes3 = new Spry.Data.XMLDataSet("./sedes.php?idCarrera=1", "ResultElement/listaElementos");
		
      var dsSuscripcion = new Spry.Data.XMLDataSet(null, "RESULT");
      function enviarSuscripcion(){			
        var rut = document.getElementById("rut").value;
        var nombre = document.getElementById("nombre").value;
        var ap_paterno = document.getElementById("ap_paterno").value;
        var ap_materno = document.getElementById("ap_materno").value;
        var email = document.getElementById("email").value;
        var celular = document.getElementById("celular").value;
			
        var tipo_solicitud = "";//document.getElementById("tipo_solicitud").value;
        var carrera_op_1 = document.getElementById("carrera_op_1").value;
        var carrera_op_2 = document.getElementById("carrera_op_2").value;
        var carrera_op_3 = document.getElementById("carrera_op_3").value;
        var sedes_op_1 = document.getElementById("sedes_op_1").value;
        var sedes_op_2 = document.getElementById("sedes_op_2").value;
        var sedes_op_3 = document.getElementById("sedes_op_3").value;
        var actividades = document.getElementById("actividades").value;
			
        var sParams  = "rut=" + rut + "&nombre=" + nombre + "&ap_paterno=" + ap_paterno + "&ap_materno=" + ap_materno;
        sParams  = sParams + "&email=" + email + "&celular=" + celular + "&tipo_solicitud=" + tipo_solicitud + "&carrera_op_1=" + carrera_op_1;
        sParams  = sParams + "&carrera_op_2=" + carrera_op_2 + "&carrera_op_3=" + carrera_op_3 + "&sedes_op_1=" + sedes_op_1 + "&sedes_op_2=" + sedes_op_2;    
        sParams  = sParams + "&sedes_op_3=" + sedes_op_3 + "&actividades=" + actividades;
						
        var sUrl = "/admision/carreras.do?accion=enviarSuscripcion&" + sParams + "&ms" + new Date().getTime();
        dsSuscripcion.setURL(sUrl);
        dsSuscripcion.loadData();
        document.getElementById("btloader").style.display = 'none';
        //modulo_mensaje
      }
				
      function cargarSedes1(){
        var idCarrera = document.getElementById("carrera_op_1").value;
        var sUrl = "./sedes.php?idCarrera=" + idCarrera;
        dsSedes1.setURL(sUrl)
        dsSedes1.loadData();
      }
      function cargarSedes2(){
        var idCarrera = document.getElementById("carrera_op_2").value;
        var sUrl = "./sedes.php?idCarrera=" + idCarrera;
        dsSedes2.setURL(sUrl)
        dsSedes2.loadData();
      }		
      function cargarSedes3(){
        var idCarrera = document.getElementById("carrera_op_3").value;
        var sUrl = "./sedes.php?idCarrera=" + idCarrera;
        dsSedes3.setURL(sUrl)
        dsSedes3.loadData();
      }	
		
      var myObserver = new Object;
      myObserver.onPostLoad = function(dataSet, data)
      {
        document.getElementById("modulo_form").style.display = 'none';
        document.getElementById("modulo_mensaje").style.display = 'block';
			
        if (dataSet.getData()[0]["STATUS"] == "OK"){
          document.getElementById("status_nok").style.display = 'none';
          document.getElementById("status_ok").style.display = 'block';				
        }else{				
          document.getElementById("status_ok").style.display = 'none';
          document.getElementById("status_nok").style.display = 'block';
        }			
      };
      dsSuscripcion.addObserver(myObserver);	
      function volver(){
        document.getElementById("modulo_form").style.display = 'block';
        document.getElementById("btloader").style.display = 'block';
        document.getElementById("modulo_mensaje").style.display = 'none';
        document.getElementById("img_jcaptcha").src = "/admision/jcaptcha?tm=" + (new Date()).getTime();
        document.getElementById("j_captcha_response").value = ''; 
      }
		
		
      window.addEvent('domready', function() {

        SqueezeBox.initialize({});

        $$('a.modal').each(function(el) {
          el.addEvent('click', function(e) {
            new Event(e).stop();
            SqueezeBox.fromElement(el);
          });
        });
      });
      var K2RatingURL = 'http://duocvr5.vrweb.cl/';
    </script>
    <!--[if IE 7]><link href="components/com_k2/css/k2_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if lte IE 6]><link href="components/com_k2/css/k2_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->


    <link type="text/css" href="templates/system/css/general.css"
          rel="stylesheet">
    <link type="text/css" href="templates/system/css/template.css"
          rel="stylesheet">
    <meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible">		
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="index, follow" name="robots">
    <meta
      content="instituto profesional, educaci�n superior, centro de formaci�n t�cnica, admisi�n, universidades chilenas, carreras profesionales, carreras t�cnicas, carreras, matr�cula 2011"
      name="keywords">
    <meta content="Duoc UC" name="title">
    <meta
      content="Duoc UC es el primer instituto profesional acreditado por 7 a�os. Porque el pa�s necesita personas que lo hagan crecer, ven a Duoc UC. Creces t�, crece Chile."
      name="description">
    <meta content="Joomla! 1.5 - Open Source Content Management"
          name="generator">
    <title>Duoc UC</title>
  </head>
  <body class="contentpane">
    <link type="image/x-icon" rel="shortcut icon"
          href="templates/system/favicon.ico">
    <link type="text/css" href="media/system/css/modal.css"
          rel="stylesheet">
    <link type="text/css"
          href="components/com_k2/css/k2.css"
          rel="stylesheet">
    <script src="media/system/js/mootools.js" type="text/javascript"></script>
    <script src="media/system/js/modal.js" type="text/javascript"></script>
    <script src="components/com_k2/js/k2.js"
    type="text/javascript"></script>
    <script type="text/javascript">

      window.addEvent('domready', function() {

        SqueezeBox.initialize({});

        $$('a.modal').each(function(el) {
          el.addEvent('click', function(e) {
            new Event(e).stop();
            SqueezeBox.fromElement(el);
          });
        });
      });
      var K2RatingURL = 'http://duocvr5.vrweb.cl/';
    </script>
    <!--[if IE 7]><link href="components/com_k2/css/k2_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if lte IE 6]><link href="components/com_k2/css/k2_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

    <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script>jQuery.noConflict();</script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.rut.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="templates/home_portal/css/style_admision.css">
    <script type="text/javascript">
      jQuery(document).ready(function(){
        jQuery("#frmreg").validate({
          rules: {			
            nombre 			: { required: true, minlength: 2 },	
            ap_paterno		: { required: true, minlength: 2 },	
            /*ap_materno		: { required: true, minlength: 2 },*/
            rut				: { required: true },			
            email			: { required: true, email: true },			
            /*celular			: { required: true },*/
            actividades		: { required: true },					
            carrera_op_1	: { required: false},
            sedes_op_1		: { required: false },
            recaptcha_response_field: { required: true }	
            /*j_captcha_response :{ required: true }*/
          },
          messages: {
            nombre 			: { required: "", minlength: "" },
            ap_paterno		: { required: "", minlength:"" },
            /*ap_materno		: { required: "", minlength:"" },*/
            rut				: { required: "" },
            email			: { required: "", email: ""  },			
            /*celular			: { required: "" },*/
            actividades		: { required: "" },
            carrera_op_1	: { required: "" },
            sedes_op_1		: { required: "" },
            recaptcha_response_field: { required: "" }
            /*j_captcha_response: { required: "" , minlength: "" }*/
          }		
        });			
				
        jQuery("#rut").Rut({
          format_on:'change'
        });	
				
        jQuery.validator.addMethod("rut", 
        function(value, element) {
          return this.optional(element) || jQuery.Rut.validar(value);
        }, "");	
      });

      function envia_form(){							
        if (jQuery('#frmreg').valid()){
          jQuery('#frmreg').submit();
        }			
      }
    </script>
    <style>
      .thickbox .textfield.error {
        border: 1px solid #FF0000;
        color: #FF0000;
      }

      .thickbox .select.error {
        border: 1px solid #FF0000;
        color: #FF0000;
      }
    </style>




    <script type="text/javascript">
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript"
    src="http://www.google-analytics.com/ga.js"></script>

    <script type="text/javascript">
      var pageTracker = _gat._getTracker("UA-5909572-1");
      pageTracker._trackPageview();
    </script>

    <script type="text/javascript">
      var RecaptchaOptions = {
        lang : 'es',
        theme : 'custom',  
        custom_theme_widget: 'recaptcha_widget' 
      };
    </script>
    <form method="post" action="processRegistrese.php" id="frmreg" name="frmreg">
      <div id="modulo_form" class="thickbox">
        <div class="campos">
          <table width="316" cellspacing="0" cellpadding="0" border="0">
            <tbody>
              <tr>
                <td height="30" width="102" align="right">
                  Nombre
                </td>
                <td height="30" width="179" align="right">
                  <input type="text" style="width: 147px;" class="textfield"
                         id="nombre" name="nombre">
                </td>
                <td height="30" width="35" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Apellido Paterno
                </td>
                <td height="30" width="179" align="right">
                  <input type="text" style="width: 147px;" class="textfield"
                         id="ap_paterno" name="ap_paterno">
                </td>
                <td height="30" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Apellido Materno
                </td>
                <td height="30" width="179" align="right">
                  <input type="text" style="width: 147px;" class="textfield"
                         id="ap_materno" name="ap_materno">
                </td>
                <td height="30" align="center"></td>
              </tr>
              <tr>
                <td height="30" align="right">
                  RUT
                </td>
                <td height="30" width="179" align="right">
                  <input type="text" style="width: 147px;" class="textfield rut"
                         id="rut" name="rut">
                </td>
                <td height="30" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Celular
                </td>
                <td height="30" width="179" align="right">
                  <input type="text" style="width: 147px;" class="textfield"
                         id="celular" name="celular">
                </td>
                <td height="30" align="center"></td>
              </tr>
              <tr>

                <td height="30" align="right">
                  E-mail
                </td>
                <td height="30" width="179" align="right">
                  <input type="text" style="width: 147px;" class="textfield"
                         id="email" name="email">
                </td>
                <td height="30" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Actividad Actual
                </td>
                <td height="30" width="179" align="right">
                  <select style="width: 153px;" class="select" id="actividades"
                          name="actividades">
                    <option value="">
                      Seleccione
                    </option>
                    <option value="3">
                      Estudiante 3&deg; Medio
                    </option>
                    <option value="4">
                      Estudiante 4&deg; Medio
                    </option>
                    <option value="5">
                      Estudiante otra carrera
                    </option>
                    <option value="6">
                      Trabajando
                    </option>
                  </select>
                </td>
                <td height="30" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="center" colspan="3">
                  Ind&iacute;canos las carreras y sedes donde te gustar&iacute;a estudiar
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Opci&oacute;n 1
                </td>
                <td height="30" width="179" align="right">
                  <br>
                  <span spry:region="dsCarrerasSusc">	
                    <select name="carrera_op_1" id="carrera_op_1" spry:repeatchildren="dsCarrerasSusc" class="select" style="width:177px;" onchange="cargarSedes1();">
                      <option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
                      <option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>

                    </select>						
                  </span>	
                </td>
                <td height="30" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  &nbsp;
                </td>
                <td height="30" width="179" align="right">
                  <span spry:region="dsSedes1"> 
                    <select name="sedes_op_1" spry:repeatchildren="dsSedes1" id="sedes_op_1" class="select"	style="width: 177px; border: #c0c0c0 1px solid;">
                      <option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
                      <option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>											
                    </select> 
                  </span>
                </td>
                <td height="30" align="center">
                  *
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Opci&oacute;n 2
                </td>
                <td height="30" width="179" align="right">
                  <br>									
                  <span spry:region="dsCarrerasSusc">	
                    <select name="carrera_op_2" id="carrera_op_2" spry:repeatchildren="dsCarrerasSusc" class="select" style="width:177px;" onchange="cargarSedes2();">
                      <option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
                      <option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
                    </select>						
                  </span>	
                </td>
                <td height="30" align="center">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  &nbsp;
                </td>
                <td height="30" width="179" align="right">
                  <span spry:region="dsSedes2"> 
                    <select name="sedes_op_2" spry:repeatchildren="dsSedes2" id="sedes_op_2" class="select"	style="width: 177px; border: #c0c0c0 1px solid;">
                      <option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
                      <option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
                    </select> 
                  </span>
                </td>
                <td height="30" align="center">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  Opci&oacute;n 3
                </td>
                <td height="30" width="179" align="right">
                  <br>
                  <span spry:region="dsCarrerasSusc">	
                    <select name="carrera_op_3" id="carrera_op_3" spry:repeatchildren="dsCarrerasSusc" class="select" style="width:177px;" onchange="cargarSedes3();">
                      <option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
                      <option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
                    </select>						
                  </span>
                </td>
                <td height="30" align="center">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td height="30" align="right">
                  &nbsp;
                </td>
                <td height="30" width="179" align="right">
                  <span spry:region="dsSedes3"> 
                    <select name="sedes_op_3" spry:repeatchildren="dsSedes3" id="sedes_op_3" class="select"	style="width: 177px; border: #c0c0c0 1px solid;">
                      <option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
                      <option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
                    </select> 
                  </span>
                </td>
                <td height="30" align="center">
                  &nbsp;
                </td>
              </tr>
              <tr>
                <td height="30" align="center" colspan="3">
                  Quiero recibir informaci&oacute;n en mi:
                </td>
              </tr>
              <tr>
                <td height="30" align="center" colspan="3">
                  <table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                      <tr>
                        <td height="25" width="34%" align="right">
                          E-mail
                        </td>
                        <td width="3%" align="right">
                          &nbsp;
                        </td>
                        <td height="25" width="10%">
                          <input type="checkbox"
                                 onclick="if (this.value == 0){ this.value=1;} else {this.value=0;}"
                                 value="0" id="chkemail" name="chkemail">
                          <label for="checkbox"></label>
                        </td>
                        <td height="25" width="22%" align="right">
                          Celular
                        </td>
                        <td width="2%" align="right">
                          &nbsp;
                        </td>
                        <td height="25" width="29%">
                          <input type="checkbox"
                                 onclick="if (this.value == 0){ this.value=1;} else {this.value=0;}"
                                 value="0" id="chkcelular" name="chkcelular">
                          <label for="checkbox"></label>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="6">

                          <div id="recaptcha_widget" style="display:none">
                            <center>

                            <div id="recaptcha_image"></div>
                            <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>

                            <span class="recaptcha_only_if_image">Escriba las 2 palabras:</span>
                            <span class="recaptcha_only_if_audio">Ingrese los n&uacute;meros:</span>

                            <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

                            <div><a href="javascript:Recaptcha.reload()">Obt&eacute;n un nuevo CAPTCHA</a></div>
                            </center>

                          </div>

                          <script type="text/javascript"
                                  src="http://www.google.com/recaptcha/api/challenge?k=6LeCKckSAAAAAJr1AE478GzjftXZqdOSg4q39egr">
                          </script>
                          <noscript>
                          <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeCKckSAAAAAJr1AE478GzjftXZqdOSg4q39egr"
                                  height="300" width="500" frameborder="0"></iframe>

                          <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                          </textarea>
                          <input type="hidden" name="recaptcha_response_field"
                                 value="manual_challenge">
                          </noscript>

                        </td>
                      </tr>

                      <tr>
                        <td height="30" valign="bottom" align="center" colspan="6">

                          <div id="btloader">														
                            <center>
                              <img height="18" width="146" border="0"
                                   style="cursor: pointer;"
                                   onclick="envia_form()"
                                   alt="Solicita Informacion"
                                   src="templates/home_portal/images/solicita.jpg"/>
                            </center>
                          </div>
                          <span spry:region="dsSuscripcion">
                            <div id="imgloader" spry:state="loading">
                              <center>
                                <img src="templates/home_portal/images/ajax-loader.gif">
                              </center>
                            </div>
                          </span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- 
      <div style="display: none;" id="modulo_mensaje" class="moduletable_form">
      
      </div>
      -->

      <div style="display: none;" id="modulo_mensaje" class="moduletable_form">
        <link type="text/css" rel="stylesheet" href="templates/home_portal/css/style_basic.css">			
        <table width="665" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse: collapse;">
          <tbody><tr>
              <td>
                <table width="470" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse: collapse;">
                  <tbody><tr>
                      <td height="174"><table width="377" cellspacing="0" cellpadding="0" border="0" align="center" style="border-collapse: collapse;">
                          <tbody><tr>
                              <td width="377" style="text-align: center; font-family: Arial,Helvetica,sans-serif; color: rgb(102, 102, 102);">
                                <div id="status_ok" style="display: none">
                                  <img height="128" width="128" src="referido/mail/images/icon_thanks.jpg" alt=""><br><strong>Gracias por solicitar informaci&oacute;n.</strong><br>
                                  <span style="font-size: 12px;">Te contactaremos con novedades respecto a las carreras y sedes de tu inter&eacute;s</span>
                                </div>   
                                <div id="status_nok" style="display: none">
                                  <img width="50" height="50" src="templates/home_portal/images/notice-alert.png" alt="">
                                  <br/><br/><strong>C&oacute;digo de verificaci&oacute;n incorrecto .</strong><br/>
                                  <span style="font-size: 12px;">Favor ingresar nuevamente</span><br/>
                                  <img id="button2" src="templates/home_portal/images/volver.jpg" onclick="volver();" />
                                </div>   														    
                              </td>
                            </tr>											
                          </tbody></table>
                      </td>							
                    </tr>						  
                  </tbody></table>		
              </td></tr></tbody></table>
      </div>			

      <input type="hidden" value="92" name="tipo_solicitud">
    </form>
    <div id="sbox-overlay"
         style="display: none; z-index: 65555; position: fixed; top: 0px; left: 0px; visibility: hidden; opacity: 0;"></div>
    <div id="sbox-window"
         style="display: none; z-index: 65557; position: fixed; top: 50%; left: 50%;">
      <a id="sbox-btn-close" href="#"></a>
      <div id="sbox-content" style="visibility: hidden; opacity: 0;"></div>
    </div>
  </body>
</html>
