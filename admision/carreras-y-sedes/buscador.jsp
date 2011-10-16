<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr" >

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
	<script>jQuery.noConflict();</script>
	<script type="text/javascript" src="../js/thickbox.js"></script>
	<link href="../js/thickbox.css" rel="stylesheet" type="text/css" />	
	
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="instituto profesional, educación superior, centro de formación técnica, admisión, universidades chilenas, carreras profesionales, carreras técnicas, carreras, matrícula 2011" />
  <meta name="title" content="Carreras y Sedes - Duoc UC" />
  <meta name="description" content="Duoc UC es el primer instituto profesional acreditado por 7 años. Porque el país necesita personas que lo hagan crecer, ven a Duoc UC. Creces tú, crece Chile." />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>Carreras y Sedes - Duoc UC</title>
  <link href="../templates/buscador_carreras/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="../media/system/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="../components/com_k2/css/k2.css" type="text/css" />
  <link rel="stylesheet" href="../modules/mod_moomenu_CK/assets/moomenuhCK.css" type="text/css" />
  <script type="text/javascript" src="../media/system/js/mootools.js"></script>
  <script type="text/javascript" src="../media/system/js/modal.js"></script>
  <script type="text/javascript" src="../components/com_k2/js/k2.js"></script>
  <script type="text/javascript" src="../modules/mod_accordionmenu/assets/accordionmenu.js"></script>
  <script type="text/javascript" src="../modules/mod_moomenu_CK/assets/moomenuhCK.js"></script>
  
  <script language="JavaScript" type="text/javascript" src="../js/includes/xpath.js"></script>
  <script language="JavaScript" type="text/javascript" src="../js/includes/SpryData.js"></script>
  
  <script type="text/javascript">
  
  		var dsCarreras = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obtenerCarrerasElement&horario=3", "ResultElement/listaElementos");
		var dsSedes = new Spry.Data.XMLDataSet("/admision/carreras.do?accion=obteneSedesElement", "ResultElement/listaElementos");  		
		var dsHorarios = new Spry.Data.XMLDataSet(null, "ResultHorarios/listaHorarios");
  		
		function cargarSedes(){
			var idCarrera = document.getElementById("id_carrera").value;
	    	var sUrl = "/admision/carreras.do?accion=obteneSedesElement&idCarrera=" + idCarrera + "&ms" + new Date().getTime();
	    	dsSedes.setURL(sUrl)
	    	dsSedes.loadData();
		}
		function cargarHorarios(){
			var idCarrera = document.getElementById("id_carrera").value;
			var idSede =  document.getElementById("id_sede").value;
						
			if (idSede == "-1"){
				idSede = "";
				for (i=1;i<document.getElementById("id_sede").length;i++){
					idSede = idSede + document.getElementById("id_sede").options[i].value;
					if (i != (document.getElementById("id_sede").length - 1))idSede = idSede + ",";
				}
			}
			
	    	var sUrl = "/admision/carreras.do?accion=obteneHorarios&idCarrera=" + idCarrera + "&lista_sedes=" + idSede + "&ms" + new Date().getTime();
	    	dsHorarios.setURL(sUrl)
	    	dsHorarios.loadData();
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
  <!--[if IE 7]><link href="../components/com_k2/css/k2_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
  <!--[if lte IE 6]><link href="../components/com_k2/css/k2_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
  

	<link rel="shortcut icon" href="../templates/home_portal/favicon.ico" />
	<link href="../templates/home_portal/css/style_admision.css" rel="stylesheet" type="text/css" />
	<link href="../templates/home_portal/css/style_basic.css" rel="stylesheet" type="text/css" />

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
<div class="dos_columnas"> 
		<div class="sidebar_left">
   		  		<div class="moduletable_menu">
					<h3>Qu&eacute; es Duoc UC</h3>
					
<script type="text/javascript">
	window.addEvent('domready', function(){
	accordionMenu(
		"accordionMenu", // Menu Tag ID (this id is assigned to menu parent ul tag)
		"", //path to image used to expand menu item
		"", //path to image used to collapse menu item
		{duration:400, transition:Fx.Transitions.Quart.easeOut}, // (optional argument) custom accordion options to override defaults, use null if you want to set next argument without changing this
		200, // (optional argument) hover delay in milliseconds over "parent menu item" to open its sublevels, default is 200
		0 // (optional argument) enable/disable opening of submenus on hovering
	);
	
	});
</script>

<ul class="menu" id="accordionMenu"><li class="item12"><a href="/admision/carreras-y-sedes/carreras/carreras.html"><span>Carreras</span></a></li><li class="item114"><a href="/admision/carreras-y-sedes/sedes/sedes.html"><span>Sedes</span></a></li></ul>		</div>
			<div class="moduletable">
					<div class="moduletable_banerleft"><a href="/admision/detalle-de-la-sede/sede/san-joaquin.html"><img src="..//templates/home_portal/images/banner_sedesanjoaquin.jpg" border="0" alt="Nueva Sede San Joaquín" width="144" height="172" /></a></div>		</div>
			<div class="moduletable_banerleft">
					<p><a href="/admision/que-es-duoc-uc/relaciones-internacionales.jsp"><img src="../templates/home_portal/images/banner_conveniosinternacionales.jpg" alt="Conoce nuestros Convenios Internacionales" border="0" height="155" width="144" /></a></p>		</div>
	
            <div class="borrado"></div>  
	</div>
              <div class="content">
				<div class="moduletable_breadcumb">
					<span class="breadcrumbs pathway">
Carreras y Sedes</span>
		</div>
	
		<div class="contenido">     
    <div class="titulo">Carreras y Sedes</div>
	<div class="titulo_dos">Carreras Diurnas y Vespertinas</div>
	<div class="linea"></div>
	<div class="horarios">
		<div class="txt">Para ver los horarios selecciona una carrera y una sede</div>
		<div class="tabla">
			<form action="/admision/carreras-y-sedes/buscador.html" method="post" name="busca_carrera" id="busca_carrera">	
				<input name="id_sedes" id="id_sedes" type="hidden" value="0" />					
				<table width="480" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td height="25" colspan="5">&nbsp;</td>
					</tr>
					<tr>
						<td width="21%" height="25">&nbsp;</td>
						<td width="20%" height="25">Carrera</td>
						<td width="33%" height="25">
							<span spry:region="dsCarreras">
								<select name="id_carrera"  spry:repeatchildren="dsCarreras" id="id_carrera" onchange="cargarSedes();" class="select" style="width:201px; border:#c0c0c0 1px solid;">
									<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
									<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
								</select>
							</span>
						</td>
						<td width="26%" height="25">&nbsp;</td>
					</tr>
					<tr>
						<td height="25">&nbsp;</td>
						<td height="25">Sede</td>
						<td height="25">
							<span spry:region="dsSedes">
								<select name="id_sede"  spry:repeatchildren="dsSedes" id="id_sede" class="select" style="width:201px; border:#c0c0c0 1px solid;">
									<option value="{codigo}" spry:if="{ds_RowNumber} == 0" selected="selected">{descripcion}</option>
									<option value="{codigo}" spry:if="{ds_RowNumber} != 0">{descripcion}</option>
								</select>
							</span>
						</td>
						<td height="25">&nbsp;</td>
					</tr>
					<tr>
						<td height="25" colspan="2">&nbsp;</td>
						<td height="25" colspan="2">&nbsp;</td>
					</tr>
					<tr>
						<td height="25" colspan="4"><table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
						  <tr>
							<td width="195" height="25"></td>
							<td width="124">
								<img onclick="cargarHorarios();" src="../templates/home_portal/images/ver_informacion.jpg" alt="Ver informaci&oacute;n" width="124" height="23" border="0" />
							</td>
							<td width="161">&nbsp;</td>
						  </tr>
						</table></td>
					  </tr>
				</table>
			</form>
		</div>
		<div class="tabla_dos" spry:region="dsHorarios">
			<table width="477" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="155" height="28" align="center"><strong>Carrera</strong></td>
					<td width="174" align="center"><strong>Sede</strong></td>
					<td width="148" align="center"><strong>Horario</strong></td>
				</tr>
				
					<tr  spry:repeat="dsHorarios">
						<td width="155" height="28" align="center"><a href="/admision/carreras.do?accion=obtenerDetalleCarrera&idCarrera={idCarrera}">{nombreCarrera}</a></td>
						<td width="174" align="center"><a href="/admision/carreras.do?accion=obtenerDetalleSede&idSede={idSede}">{nombreSede}</a></td>
						<td width="148" align="center">
							<img spry:if="{horario} != 2" src="../templates/home_portal/images/dia.jpg" width="18" height="18" alt="Diurno" title="Diurno" class="tooltip" style="cursor:pointer;" />
							<img spry:if="{horario} != 1" src="../templates/home_portal/images/noche.jpg" width="11" height="14" alt="Vespertino" title="Vespertino" class="tooltip" style="cursor:pointer;" />							
						</td>
					</tr>				
			</table>
		</div>
	</div>
</div>
<div class="moduletable_blocks">
	<div class="tit">Carreras</div>  
	<div class="content_int">
		<div class="img"><a href="/admision/carreras-y-sedes/carreras/carreras.html"><img src="../templates/home_portal/images/img7.jpg" alt="" width="132" height="92" border="0" /></a></div>  
		<div class="txt">Revisa toda la informaci&oacute;n de las carreras que DuocUC tiene para ti</div> 
		<div class="ver_mas"><a href="/admision/carreras-y-sedes/carreras/carreras.html">ver m&aacute;s ></a></div>
		<div class="borrado"></div>    
	</div>
	<div class="borrado"></div>   
</div>
<div class="moduletable_blocks_dos">
	<div class="tit">Sedes</div>  
	<div class="content_int">
		<div class="img"><a href="/admision/carreras-y-sedes/sedes/carreras.html"><img src="..//templates/home_portal/images/img8.jpg" alt="" width="134" height="93" border="0" /></a></div>  
		<div class="txt">DuoUC tienen 13 sedes  a lo largo de Chile. Conoce tus posibilidades</div> 
		<div class="ver_mas"><a href="/admision/carreras-y-sedes/sedes/sedes.jsp">ver m&aacute;s ></a></div>
		<div class="borrado"></div>
	</div>
	<div class="borrado"></div>
</div>
<script type="text/javascript">
	jQuery(function(){
		xajax_getsedes(0,'getsedes','busca_carrera',0,'width:201px; border:#c0c0c0 1px solid;');
	});
</script>
<script type="text/javascript" src="../components/com_carreras/js/jquery.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script type="text/javascript" src="../components/com_carreras/js/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('img.tooltip').qtip({			
			position: { corner		: { target: 'middle', tooltip: 'bottomLeft' }}, 							
			hide	: { fixed		: true, effect: 'slide' },			
			style	: {	font		: '12px Arial,Helvetica,sans-serif',
						border		: { width: 1, radius: 4 },
						tip			: { corner: 'bottomLeft', size: { x: 10, y : 10 }},
						padding		: '5px 5px 8px 5px',						
						textAlign	: 'left',						
						name 		: 'cream'						
			}			
		});
	});
</script>

		<div class="borrado"></div>   
              </div>
            <div class="borrado"></div> 
        </div>
		<%@ include file="/includes/pie.jsp" %>  
    </div>
    </div>
</body>
</html>
