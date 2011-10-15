<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr" >

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="instituto profesional, educaci&oacute;n superior, centro de formaci&oacute;n t&eacute;cnica, admisi&oacute;n, universidades chilenas, carreras profesionales, carreras t&eacute;cnicas, carreras, matr&iacute;cula 2011" />
  <meta name="title" content="Duoc UC" />
  <meta name="description" content="Duoc UC es el primer instituto profesional acreditado por 7 años. Porque el pa&iacute;s necesita personas que lo hagan crecer, ven a Duoc UC. Creces t&uacute;, crece Chile." />
  <title>Duoc UC</title>
  <link href="/rss.html" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
  <link href="/atom.html" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
  <link href="templates/home_admision/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="components/com_k2/css/k2.css" type="text/css" />
  <link rel="stylesheet" href="modules/mod_moomenu_CK/assets/moomenuhCK.css" type="text/css" />
  
  <script type="text/javascript" src="media/system/js/mootools.js"></script>
  <script type="text/javascript" src="media/system/js/modal.js"></script>
  <script type="text/javascript" src="components/com_k2/js/k2.js"></script>
  <script type="text/javascript" src="media/system/js/caption.js"></script>
  <script type="text/javascript" src="modules/mod_moomenu_CK/assets/moomenuhCK.js"></script>
  
  <script language="JavaScript" type="text/javascript" src="js/includes/xpath.js"></script>
  <script language="JavaScript" type="text/javascript" src="js/includes/SpryData.js"></script>
  
  
  
  <script type="text/javascript">
  		var dsEscuelas = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obtenerEscuelas&ms" + new Date().getTime(), "ResultElement/listaElementos");	
		var dsCarreras = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obtenerCarreras", "ResultElement/listaElementos");
		
		var dsCarrerasSusc = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obtenerCarrerasElement", "ResultElement/listaElementos");
		var dsSedes1 = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obteneSedesElement", "ResultElement/listaElementos");
		var dsSedes2 = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obteneSedesElement", "ResultElement/listaElementos");
		var dsSedes3 = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obteneSedesElement", "ResultElement/listaElementos");
		
		var dsSuscripcion = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obteneSedesElement", "ResultElement/listaElementos");
		function enviarSuscripcion(){			
			var rut = document.getElementById("rut").value;
			var nombre = document.getElementById("nombre").value;
			var ap_paterno = document.getElementById("ap_paterno").value;
			var ap_materno = document.getElementById("ap_materno").value;
			var email = document.getElementById("email").value;
			var celular = document.getElementById("celular").value;
			
			var tipo_solicitud = document.getElementById("tipo_solicitud").value;
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
			sParams  = sParams + "&sedes_op_3=" + sedes_op_3 + "&actividades=" + actividades ;
			
			var sUrl = "/admision/carreras.do?accion=enviarSuscripcion&" + sParams + "&ms" + new Date().getTime();
			dsSuscripcion.setURL(sUrl);
			dsSuscripcion.loadData();
		}
		
		function cargarCarreras(){
			var idEscuela = document.getElementById("id_escuela").value;
	    	var sUrl = "/admision/carreras.do?accion=obtenerCarreras&idEscuela=" + idEscuela + "&ms" + new Date().getTime();
	    	dsCarreras.setURL(sUrl)
	    	dsCarreras.loadData();
		}
		
		function cargarSedes1(){
			var idCarrera = document.getElementById("carrera_op_1").value;
	    	var sUrl = "/admision/carreras.do?accion=obteneSedesElement&idCarrera=" + idCarrera + "&ms" + new Date().getTime();
	    	dsSedes1.setURL(sUrl)
	    	dsSedes1.loadData();
		}
		function cargarSedes2(){
			var idCarrera = document.getElementById("carrera_op_2").value;
	    	var sUrl = "/admision/carreras.do?accion=obteneSedesElement&idCarrera=" + idCarrera + "&ms" + new Date().getTime();
	    	dsSedes2.setURL(sUrl)
	    	dsSedes2.loadData();
		}		
		function cargarSedes3(){
			var idCarrera = document.getElementById("carrera_op_3").value;
	    	var sUrl = "/admision/carreras.do?accion=obteneSedesElement&idCarrera=" + idCarrera + "&ms" + new Date().getTime();
	    	dsSedes3.setURL(sUrl)
	    	dsSedes3.loadData();
		}		
		
		function detalleCarrera(){
			document.getElementById("busca_carrera").action = "carreras.do?accion=obtenerDetalleCarrera"
			document.getElementById("busca_carrera").submit();
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
window.addEvent('domready', function() {new AppliqueStyles($E('#moomenuCK'),{mooTransition : 'Quad', mooEase : 'easeOut', mooDuree : 300, hauteur : '38px', largeur : '198px'})
			   new DropdownMenu($E('#moomenuCK'),{mooTransition : 'Quad', mooEase : 'easeOut', mooDuree : 300, hauteur : '38px', largeur : '198px'})
			   });
  </script>
  <!--[if IE 7]><link href="components/com_k2/css/k2_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if lte IE 6]><link href="components/com_k2/css/k2_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
  
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/swfobject.js"></script>
	<script>jQuery.noConflict();</script>
	<script type="text/javascript" src="js/thickbox.js"></script>
	<link href="js/thickbox.css" rel="stylesheet" type="text/css" />
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
                	</script>		
        </div>
		<div class="moduletable">
					<!-- Google Code for Lista Remarketing Remarketing List -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 997982819;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "666666";
		var google_conversion_label = "6PmWCJ3LoAIQ44Tw2wM";
		var google_conversion_value = 0;
		/* ]]> */
		</script>
		<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
		</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/997982819/?label=6PmWCJ3LoAIQ44Tw2wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>		
</div>
	 
	<div id="contenedor_general">
    	<div class="contenedor_int">
			<%@ include file="/includes/encabezado.jsp" %>
			<%@ include file="/includes/menu.jsp" %>
	
			<div class="borrado"></div>
			<div class="sombra"></div>
			<div class="slider_menu">
						<div class="moduletable_slider">
					<div class="moduletable_slider"><a href="que-es-duoc-uc/acreditacion.html"><img src="images/stories/admision/banner/slider-swf-2.jpg" style="padding-left: 5px;" border="0" /></a></div>		</div>
	
						<div class="moduletable">
					<div class="moduletable_menu">
<ul>
<li><a href="carreras-y-sedes/buscador_diurnas.jsp">Carreras Diurnas</a></li>
<li><a href="carreras-y-sedes/buscador_vespertinas.jsp">Carreras Vespertinas</a></li>
<li><a href="http://www.duoc.cl/taller/talleres.htm" target="_blank" title="Talleres Vocacionales">Talleres Vocacionales</a></li>
</ul>
</div>		</div>
	
				<div class="borrado"></div>  
			</div>
			<div class="centro">
						<div class="moduletable">
					<style>
	#contenedor_general .contenedor_int .centro .moduletable_form .campos .campos_uno .textfield.error { border: 1px solid #FF0000; color:#FF0000; }
	#contenedor_general .contenedor_int .centro .moduletable_form .campos .campos_uno .select.error { border: 1px solid #FF0000; color:#FF0000; }
	#contenedor_general .contenedor_int .centro .moduletable_form .campos_dos .campos_uno .select.error { border: 1px solid #FF0000; color:#FF0000; }	
</style>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.rut.js"></script>
<script type="text/javascript" src="modules/mod_suscripcionduoc/js/valida_suscripcion.js"></script>
<script type="text/javascript">

</script>
<form action="" method="post" name="commentForm" id="commentForm" >
	<div class="moduletable_form" id="modulo_form">
		<div id="form_1">				
			<div class="tit">Reg&iacute;strate para obtener m&aacute;s informaci&oacute;n sobre Duoc UC y sus carreras</div>
			<div class="pasos">			
				<table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td width="49%"><a onclick="javascript:ver_paso(1);" style="cursor:pointer;">Paso 1</a></td>
							<td width="5%">&rlm;<img src="templates/home_portal/images/sep_form.jpg" border="0" height="10" width="3" /></td>
							<td width="46%"><a class="active" onclick="javascript:ver_paso(2);" style="cursor:pointer;">Paso 2</a></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="campos">
				<div class="nombre">* Nombre:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield" style="width: 118px;" name="nombre" type="text" id="nombre" /></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="campos">
				<div class="nombre">* Apellido Paterno:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield" style="width: 118px;" name="ap_paterno" type="text" id="ap_paterno"/></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="campos">
				<div class="nombre">  Apellido Materno:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield" style="width: 118px;" name="ap_materno" type="text" id="ap_materno"/></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="campos">
				<div class="nombre">* RUT:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield rut" style="width: 118px;" name="rut" type="text" id="rut" /></td>								
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!--<div class="campos">
				<div class="nombre">Fecha de Nacimiento:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield" style="width: 118px;" name="fechanac" readonly type="text" id="fechanac"/></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>-->
			<div class="campos">
				<div class="nombre">  Celular:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield" style="width: 118px;" name="celular" id="celular" type="text" /></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="campos">
				<div class="nombre">* E - mail:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121"><input class="textfield" style="width: 118px;" name="email" type="text" id="email"/></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="campos">
				<div class="nombre">* Actividad Actual:</div>
				<div class="campos_uno">
					<table style="width: 121px;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="121">
									<select name="actividades" id="actividades" class="select" style="width: 128px;" >
										<option value="">Seleccione</option>;
								<option value="3">Estudiante 3&deg; Medio</option><option value="4">Estudiante 4&deg; Medio</option><option value="5">Estudiante otra carrera</option><option value="6">Trabajando</option>									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="borrado"></div>
			</div>
			<div class="btn_uno">				
				<img src="templates/home_portal/images/avanzar.jpg" alt="Avanzar &gt;&gt;" width="137" height="18" border="0" onclick="ver_paso(2);" style="cursor:pointer;"/>				
			</div>
		</div>
		
		<div id="form_2" style="display:none">			
			<div class="moduletable_form">
				<div class="tit">Reg&iacute;strate para obtener m&aacute;s informaci&oacute;n sobre DuocUC y sus carreras</div>
				<div class="tit_paso_dos">Ind&iacute;canos las carreras y sedes donde te gustar&iacute;a estudiar </div>
				<div class="pasos_dos">
					<table style="width: 100%;" border="0" cellpadding="0" cellspacing="0">
						<tbody>
							<tr>
								<td width="49%"><a onclick="javascript:ver_paso(1);" style="cursor:pointer;">Paso 1</a></td>
								<td width="5%"><img src="templates/home_portal/images/sep_form.jpg" border="0" height="10" width="3" /></td>
								<td width="46%"><a class="active" onclick="javascript:ver_paso(2);" style="cursor:pointer;">Paso 2</a></td>								
							</tr>
						</tbody>
					</table>
				</div>
				<div class="campos_dos">
					<div class="nombre">Opci&oacute;n 1 *</div>
					<div class="campos_uno">
						<table width="121" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="121">
									<span spry:region="dsCarrerasSusc">	
									<select name="carrera_op_1" id="carrera_op_1" spry:repeatchildren="dsCarrerasSusc" class="select" style="width:177px;" onchange="cargarSedes1();">
  											<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
											<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
					   				</select>						
					   				</span>		
					   			</td>
							</tr>
						</table>
					</div>
					<div class="borrado"></div>      
				</div>
				<div class="campos_dos">
					<div class="nombre">Sede 1 *</div>
					<div class="campos_uno">
						<table width="121" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="121">
								<span spry:region="dsSedes1">
								<select name="sedes_op_1"  spry:repeatchildren="dsSedes1" id="sedes_op_1" class="select" style="width:177px; border:#c0c0c0 1px solid;">
										<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
										<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
								</select>
								</span>
								</td>
							</tr>
						</table>
					</div>
					<div class="borrado"></div>      
				</div>
				<div class="campos_dos">
					<div class="nombre">Opci&oacute;n 2</div>
					<div class="campos_uno">
						<table width="121" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="121">									
					   			<span spry:region="dsCarrerasSusc">	
									<select name="carrera_op_2" id="carrera_op_2" spry:repeatchildren="dsCarrerasSusc" class="select" style="width:177px;" onchange="cargarSedes2();">
   										<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
										<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
					   				</select>						
					   			</span>		
					   			</td>
							</tr>	
						</table>
					</div>
					<div class="borrado"></div>      
				</div>
				<div class="campos_dos">
					<div class="nombre"> Sede 2</div>
					<div class="campos_uno">
						<table width="121" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td width="121">							
							<span spry:region="dsSedes2">
								<select name="sedes_op_2"  spry:repeatchildren="dsSedes2" id="sedes_op_2" class="select" style="width:177px; border:#c0c0c0 1px solid;">
									<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
									<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
								</select>
								</span>
							</td>
						</tr>
						</table>
					</div>
					<div class="borrado"></div>      
				</div>
				<div class="campos_dos">
					<div class="nombre">Opci&oacute;n 3</div>
					<div class="campos_uno">
						<table width="121" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="121">
								<span spry:region="dsCarrerasSusc">	
									<select name="carrera_op_3" id="carrera_op_3" spry:repeatchildren="dsCarrerasSusc" class="select" style="width:177px;" onchange="cargarSedes3();">
										<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
										<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
					   				</select>						
					   			</span>
							</td>
							</tr>
						</table>
					</div>
					<div class="borrado"></div>      
				</div>
				<div class="campos_dos">
					<div class="nombre"> Sede 3</div>
					<div class="campos_uno">
						<table width="121" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="121">
								<span spry:region="dsSedes3">
								<select name="sedes_op_3"  spry:repeatchildren="dsSedes3" id="sedes_op_3" class="select" style="width:177px; border:#c0c0c0 1px solid;">
									<option value="{codigo}">{descripcion}</option>
								</select>
								</span>
								</td>
							</tr>
						</table>
					</div>
					<div class="borrado"></div>      
				</div>
				<div class="txt_paso_dos">Quiero recibir informaci&oacute;n en mi:</div>   
				<div class="tablas">
					<table width="173" border="0" align="center" cellpadding="0" cellspacing="0">
						<tr>
							<td width="42" height="25"><span class="txt_tres">Email</span></td>
							<td width="51" height="25"><input type="checkbox" name="chkemail" id="chkemail" value="1"/><label for="checkbox"></label></td>
							<td width="48" height="25"><span class="txt_tres">Celular</span></td>
							<td width="32" height="25" align="right"><input type="checkbox" name="chkcelular" id="chkcelular" value="1"/><label for="checkbox"></label></td>
						</tr>
					</table>
				</div>
				<div class="btn_dos">
					<span spry:region="dsSuscripcion">
					<div id="btloader" spry:state="ready"><img src="templates/home_portal/images/solicitar_info.jpg" alt="Avanzar &gt;&gt;" width="137" height="18" border="0" style="cursor:pointer;" onclick="enviarSuscripcion();//envia_form();"/></div>
					
					<div id="imgloader"  spry:state="loading"><center><img src="templates/home_portal/images/ajax-loader.gif" width="20" height="20"></center></div>
					</span>				
				</div>
			</div>				
		</div>			
	</div>
	<div class="moduletable_form" id="modulo_mensaje" style="display:none"></div>
	<input type="hidden" name="tipo_solicitud" id="tipo_solicitud" value="91" />
</form>
	<div id="adwords"></div>
        <div id="adfunky"></div>
		</div>
	
						<div class="moduletable">
					<div class="moduletable_buscador">
	<form name="busca_carrera" id="busca_carrera" method="post">
		<div class="tit">Busca la carrera de tu inter&eacute;s</div>
		<table width="417" border="0" align="center" cellpadding="0" cellspacing="0">
			<tr>
				<td align="left">
					<span spry:region="dsEscuelas">
					<select name="id_escuela" id="id_escuela"  onchange="cargarCarreras();" class="select" spry:repeatchildren="dsEscuelas" style="width:201px; border:#c0c0c0 1px solid;">
						<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
						<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
					</select>
					</span>
				</td>
				<td>&nbsp;</td>
				<td align="right">					
					<span spry:region="dsCarreras">
					<select name="idCarrera" id="idCarrera" class="select" spry:repeatchildren="dsCarreras" style="width:201px; border:#c0c0c0 1px solid; " onchange="detalleCarrera();">
						<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
						<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
					</select>
					</span>					
				</td>
			</tr>
		</table>
		<div class="borrado"></div>		
	</form>
</div>
		</div>
	
						<div class="moduletable">
					<div class="moduletable_banner"><a href="noticias/duoc-uc-amplia-su-oferta-de-carreras-para-el-2011.jsp"><img src="images/stories/admision/banner/caluga_admision.jpg" border="0" width="255" height="80" /></a></div>		</div>
	
				<div class="modulos">	
							<div class="moduletable">
					<div class="moduletable_porque">
					<div class="tit">Por qu&eacute; Duoc UC?</div>
					<ul>
					<li>Comprometidos con la educaci&oacute;n de calidad</li>
					<li>Te ayudamos a financiar tus estudios</li>
					<li>Ofrecemos carreras que compatibilizan trabajo y estudios</li>
					</ul>
					</div>		
					</div>
	
							<div class="moduletable">
					<div class="moduletable_testimonios">
<div class="tit">Sede San Joaqu&iacute;n</div>
<div class="image"><img height="97" width="86" src="images/stories/carreras/sede_nueva.jpg" border="0" /></div>
<div class="txt">La nueva sede alojar&aacute; a las Escuelas de Salud e Ingenier&iacute;a. ¡Con&oacute;cela!</div>
<div class="ver_mas"><a href="/admision/carreras.do?accion=obtenerDetalleSede&idSede=16">Ver m&aacute;s</a></div>
</div>		</div>
	 
							<div class="moduletable">
					


<div class="moduletable_noticias">
<div class="tit">Noticias</div>
		<div class="content">

						<div class="image"><a href="noticias/duoc-uc-vuelve-con-todo.html"><img src="media/k2/items/cache/7be335477876db854960134c6e137164_S.jpg" border="0" width="70" height="40" /></a></div>
			<div class="txt_uno">Duoc UC vuelve con todo</div>
			<div class="txt_dos"></div>
			<div class="ver_mas"><a href="noticias/duoc-uc-vuelve-con-todo.html">Ver m&aacute;s</a></div>
			<div class="borrado"></div> 
		</div>
		<div class="content_dos">

						<div class="image"><a href="noticias/juegos-olimpicos-2010.html"><img src="media/k2/items/cache/c10c64c27e0606d1654b81b9bb482558_S.jpg" border="0" width="70" height="40" /></a></div>
			<div class="txt_uno">Juegos Ol&iacute;mpicos 2010</div>
			<div class="txt_dos"></div>
			<div class="ver_mas"><a href="noticias/juegos-olimpicos-2010.html">Ver m&aacute;s</a></div>
			<div class="borrado"></div> 
		</div>
	
	<div class="btn"><a href="noticias.html"><img src="templates/home_portal/images/ver_t_not.jpg" border="0" alt="ver todas las noticias" width="154" height="20" /></a></div>
</div>
		</div>
	
				</div> 				
			</div>
			<div style="margin: 0pt; padding: 0pt; height: 7px;"></div>			
			<%@ include file="/includes/pie.jsp" %>
		</div>
	</div>
</body>
</html>
