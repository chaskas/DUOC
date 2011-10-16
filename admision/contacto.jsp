<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr" >	
	<head>
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script>jQuery.noConflict();</script>
		<script type="text/javascript" src="js/thickbox.js"></script>
		<link href="js/thickbox.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="instituto profesional, educación superior, centro de formación técnica, admisión, universidades chilenas, carreras profesionales, carreras técnicas, carreras, matrícula 2011" />
  <meta name="title" content="Contacto - Duoc UC" />
  <meta name="description" content="Duoc UC es el primer instituto profesional acreditado por 7 años. Porque el país necesita personas que lo hagan crecer, ven a Duoc UC. Creces tú, crece Chile." />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>Contacto - Duoc UC</title>
  <link href="templates/interior_admision__doscolumnas_/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="components/com_k2/css/k2.css" type="text/css" />
  <link rel="stylesheet" href="modules/mod_moomenu_CK/assets/moomenuhCK.css" type="text/css" />
  <script type="text/javascript" src="media/system/js/mootools.js"></script>
  <script type="text/javascript" src="media/system/js/modal.js"></script>
  <script type="text/javascript" src="components/com_k2/js/k2.js"></script>
  <script type="text/javascript" src="modules/mod_moomenu_CK/assets/moomenuhCK.js"></script>
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
window.addEvent('domready', function() {new AppliqueStyles($E('#moomenuCK'),{mooTransition : 'Quad', mooEase : 'easeOut', mooDuree : 300, hauteur : '38px', largeur : '198px'})
			   new DropdownMenu($E('#moomenuCK'),{mooTransition : 'Quad', mooEase : 'easeOut', mooDuree : 300, hauteur : '38px', largeur : '198px'})
			   });
  </script>
  <!--[if IE 7]><link href="com_k2/css/k2_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if lte IE 6]><link href="components/com_k2/css/k2_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
  	

	
		<link rel="shortcut icon" href="templates/home_portal/favicon.ico" />
		<link href="templates/home_portal/css/style_admision.css" rel="stylesheet" type="text/css" />
		<link href="templates/home_portal/css/style_basic.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="moduletable">
					<script type="text/javascript">

                               var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

                               document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

                </script>

                <script type="text/javascript">

                               var pageTracker = _gat._getTracker("UA-5909572-1");

                               pageTracker._trackPageview();

                </script>		</div>
	 
		<div id="contenedor_general">
			<div class="contenedor_int">
							  
			<%@ include file="/includes/encabezado.jsp" %>
			<%@ include file="/includes/menu.jsp" %>						
					
				<div class="borrado"></div>
				<div class="sombra"></div>
				<div class="borrado"></div>
				
				<div class="dos_columnas_dos"> 			  	
					<div class="content">
								<div class="moduletable_breadcumb">
					<span class="breadcrumbs pathway">
Contacto</span>
		</div>
	
						<style>	
	.on  { display:display; }
	.off { display:none;    }
</style>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.rut.js"></script>
<script type="text/javascript" src="components/com_contacto/js/valida_contacto.js"></script>
<script type="text/javascript">	
	function s_submit(){
		document.getElementById('frmdatos').action 	= "contacto.do?accion=enviarContacto";
		//document.getElementById('frmdatos').target 	= "";
		//document.getElementById('frmdatos').enctype = "";
	}		
</script>
<form name="frmdatos" id="frmdatos" method="post" >
	<div class="titulo">Contacto</div>
	<div class="linea"></div>	
	<div class="contacto">		
		<div class="form" align="center">
			<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td width="130" height="27" align="right">Nombre:</td>
					<td width="200" height="27"><label> &nbsp;&nbsp;<input type="text" name="nombres" id="nombres" value="" class="inputbox" style="width:218px;" /></label></td>
					<td width="10"> *</td>
					<td width="200"><label for="nombres" generated="true" class="error"></label></td>
				</tr>
				<tr>
					<td height="27" align="right">Apellido:</td>
					<td height="27"><label> &nbsp;&nbsp;<input type="text" name="apellidos" id="apellidos" value="" class="inputbox" style="width:218px;" /></label></td>
					<td> *</td>
					<td><label for="apellidos" generated="true" class="error"></label></td>
				</tr>
				<tr>
					<td height="27" align="right">Rut:</td>
					<td height="27">&nbsp;&nbsp;<input type="text" name="rut" id="rut" value=""  class="inputbox rut" maxlength="15" style="width:218px;" /></td>
					<td> *</td>
					<td><label for="rut" generated="true" class="error"></label></td>
				</tr>
				<tr>
					<td height="27" align="right">E-mail:</td>
					<td height="27"><label> &nbsp;&nbsp;<input type="text" name="email" id="email" value="" class="inputbox" style="width:218px;" /></label></td>
					<td> *</td>
					<td><label for="email" generated="true" class="error"></label></td>
				</tr>
				<tr>
					<td height="27" align="right">Tema:</td>
					<td height="27">&nbsp;&nbsp;<select id="asunto" name="asunto" class="inputbox" style="width:224px;">
							<option value="">Seleccione Tema</option>
					<option value='4' selected = 'selected'>Consultas</option>						</select>
					</td>
					<td> *</td>
					<td><label for="asunto" generated="true" class="error"></label></td>
				</tr>							
				<tr>
					<td height="27" align="right" valign="top">Comentario:</td>
					<td height="27" valign="top">&nbsp;&nbsp;<textarea name="mensaje" id="mensaje" class="inputbox" rows="10" cols="40" style="width:218px; height:71px; margin-top:4px;" onchange="limite_car(this.value.length,400)" onkeyup="limite_car(this.value.length,400)" onkeydown="limite_car(this.value.length,400)"></textarea>
						<br /><div style="padding-left:10px;">Usted tiene&nbsp;<input type="text" id="car" value="400" readonly style="border:0;background:none;color:#777;width:28px;font-weight:bold;"/>caracteres restantes.</div>
					</td>
					<td>&nbsp;</td>
					<td><label for="mensaje" generated="true" class="error"></label></td>
				</tr>
				<tr>
					<td height="19" align="right" valign="middle">&nbsp;</td>
					<td height="19" valign="middle">&nbsp;</td>
					<td valign="middle">&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td height="27" align="center" valign="middle">&nbsp;</td>
					<td height="27" valign="top">&nbsp;&nbsp;&nbsp;(*) Campos Obligatorios</td>
					<td valign="middle">&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td height="35" align="right" valign="bottom">&nbsp;</td>
					<td height="35" align="center" valign="bottom">
						&nbsp;&nbsp;
						<input type="image" name="button2" id="button2" value="Enviar" src="templates/home_portal/images/btn_enviar.jpg" onclick="s_submit();" />
					</td>
					<td valign="bottom">&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td height="127" align="right" valign="middle">&nbsp;</td>
					<td height="27" valign="middle">&nbsp;</td>
					<td valign="middle">&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
	</div>
	<input type="hidden" name="option" id="option" value="com_contacto" />		
	<input type="hidden" name="task" id="task" value="enviar" />
	<input type="hidden" name="msg_ok" id="msg_ok" value="" />
	<input type="hidden" name="cat_upload" id="cat_upload" value="4" />
	<input type="hidden" name="sub_archivo" id="sub_archivo" value="0" />	
	<input type="hidden" name="url_arch" id="url_arch" value="" />	
	<input type="hidden" name="ext_arch" id="ext_arch" value="" />	
	<input type="hidden" name="44d74cbdd2b0a48250e877c30a413a2b" value="1" /></form>					
					</div>	
					<div class="sidebar_right">
						<div class="moduletable_banners">					
												
						</div>
					</div>			  
					<div class="borrado"></div> 
				</div>				 
			<%@ include file="/includes/pie.jsp" %>			  
			</div>			
		</div>		
	</body>
</html>
