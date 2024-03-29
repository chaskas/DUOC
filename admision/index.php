<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr" >

  <head>
    <!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->
    <!--<base href="" />-->

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="instituto profesional, educación superior, centro de formación técnica, admisión, universidades chilenas, carreras profesionales, carreras técnicas, carreras, matrícula 2011" />
    <meta name="title" content="Duoc UC" />
    <meta name="description" content="Duoc UC es el primer instituto profesional acreditado por 7 años. Porque el país necesita personas que lo hagan crecer, ven a Duoc UC. Creces tú, crece Chile." />
    <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
    <title>Duoc UC :.</title>
    <link href="rss.html" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
    <link href="atom.html" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
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
      

//    var dsEscuelas = new Spry.Data.XMLDataSet("./carreras.php", "ResultElement/listaElementos");
                var dsCarreras = new Spry.Data.XMLDataSet("./carreras.php", "ResultElement/listaElementos");

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
                        sParams  = sParams + "&sedes_op_3=" + sedes_op_3 + "&actividades=" + actividades;

                        var sUrl = "./processFormIndex.php?" + sParams;
                        dsSuscripcion.setURL(sUrl);
                        dsSuscripcion.loadData();
                        document.getElementById("btloader").style.display = 'none';
                }

                function cargarCarreras(){
                        var idEscuela = document.getElementById("id_escuela").value;
                var sUrl = "./carreras.php";
                dsCarreras.setURL(sUrl)
                dsCarreras.loadData();
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

                function detalleCarrera(){
                        document.getElementById("busca_carrera").action = "carreras.do?accion=obtenerDetalleCarrera"
                        document.getElementById("busca_carrera").submit();
                }

                var myObserver = new Object;
                myObserver.onPostLoad = function(dataSet, data)
                {
                        document.getElementById("modulo_form").style.display = 'none';
                        document.getElementById("modulo_mensaje").style.display = 'block';

                        if (dataSet.getData()[0]["STATUS"] == "OK"){
                                document.getElementById("msg_status").innerHTML = "<h4>Gracias por solicitar informaci&oacute;n.<br>Te contactaremos con novedades respecto a las carreras y sedes de tu inter&eacute;s</h4>";
                                document.getElementById("img_status").innerHTML = '<img height="25" width="26" alt="" src="templates/home_portal/images/visto.png" />';

                        }else{
                                document.getElementById("msg_status").innerHTML = '<h4>C&oacute;digo de Verificaci&oacute;n incorrecto.<br>Vuela a ingresarlo</h4><br><img id="button6" src="templates/home_portal/images/volver.jpg" onclick="volverCap();" />';
                                document.getElementById("img_status").innerHTML = '<img height="25" width="26" alt="" src="templates/home_portal/images/notice-alert.png" />';
                        }
                };
                dsSuscripcion.addObserver(myObserver);

                function volverCap(){
                        document.getElementById("modulo_mensaje").style.display = 'none';
                        document.getElementById("modulo_form").style.display = 'block';
                        document.getElementById("btloader").style.display = 'block';
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
      
      var K2RatingURL = '#';
      window.addEvent('domready', function() {new AppliqueStyles($E('#moomenuCK'),{mooTransition : 'Quad', mooEase : 'easeOut', mooDuree : 300, hauteur : '38px', largeur : '198px'})
        new DropdownMenu($E('#moomenuCK'),{mooTransition : 'Quad', mooEase : 'easeOut', mooDuree : 300, hauteur : '38px', largeur : '198px'})
      });
    </script>
    <!--[if IE 7]><link href="components/com_k2/css/k2_ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--[if lte IE 6]><link href="components/com_k2/css/k2_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/combos.js"></script>
    <script type="text/javascript" src="js/swfobject.js"></script>
    <script>jQuery.noConflict();</script>

    <script type="text/javascript" src="js/thickbox.js"></script>
    <link href="js/thickbox.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="templates/home_portal/favicon.ico" />
    <link href="templates/home_portal/css/style_admision.css" rel="stylesheet" type="text/css" />
    <link href="templates/home_portal/css/style_basic.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <script type="text/javascript">
      function redireccionar_banner(){
        //alert('entro');
        window.locationf="http://admision.duoc.cl/admision/noticias/duoc-uc-amplia-su-oferta-de-carreras-para-el-2011.html";
      }
    </script>
    <div class="moduletable">
      <script type="text/javascript">

        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

      </script>

      <script type="text/javascript">

        var pageTracker = _gat._getTracker("UA-5909572-1");

        pageTracker._trackPageview();

      </script>		</div>
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
      </noscript>		</div>

    <div id="contenedor_general">
      <div class="contenedor_int">
        <div class="header">
          <div class="moduletable_funcional_admision">
            <ul class="menu"><li class="item118"><a href="registrese.php?option=com_registrate&amp;view=registrate&amp;keepThis=true&amp;TB_iframe=true&amp;height=500&amp;width=600" title="Regístrate" class="thickbox"><span>Regístrate</span></a></li><li class="item116"><a href="contacto.php"><span>Contacto</span></a></li><li class="item119"><a href="mapa-del-sitio.html"><span>Mapa del Sitio</span></a></li></ul>		</div>

          <div class="borrado"></div>
          <div class="moduletable">


            <div class="moduletable_menu">
              <ul>
                <li><a href='http://www.duoc.cl/'>Inicio</a></li><li><a href='index.php' class='active' >Admisión</a></li><li><a href='http://portal.duoc.cl'>Alumnos</a></li><li><a href='http://exalumnos.duoc.cl/portal/index.php'>Ex Alumnos</a></li>	</ul>
            </div>
          </div>

          <div class="moduletable">
            <div class="logo">
              <h1><a href="index.php"><span>DUOC UC</span></a></h1>
            </div>		</div>

          <div class="titulos">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="81" align="center" valign="bottom"><img src="templates/home_portal/images/admision.png" width="121" height="44" alt="admisión" /></td>
              </tr>
            </table>
          </div>
          <div class="menu_buscador_redes">
            <div class="moduletable">
              <div class="moduletable_buscador">
                <form action="/admision/buscador_google.html" name="buscar_box" id="cse-search-box">
                  <input name="option" id="option"  type="hidden" value="com_buscador" />
                  <input name="Itemid" id="Itemid"  type="hidden" value="153" />
                  <input type="hidden" name="cx" value="001971600665330202120:hisn12zxq-4" />
                  <input type="hidden" name="cof" value="FORID:10" />
                  <input type="hidden" name="ie" value="UTF-8" />
                  <div style="padding-left:10px;">
                    <input type="text" name="q" id="q" class="inputbox_buscador" value="Buscar palabra o frase" onkeypress="if (event.keyCode == 13 && document.buscar_box.q.value.trim().length == 0){ return false};" />
                    <input type="image" src="templates/home_portal/images/lupa.jpg" alt="Buscar" onclick="javascript:validar_buscar();" style="cursor:pointer;">
                  </div>
                  <!-------- Esto despliega un mensaje al no ingresar nada -------->
                  <label id="msj_buscar" style="display:none">Ingrese palabra o frase para buscar.</label>
                </form>
              </div>
              <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=es"></script>
              <script type="text/javascript">
                function validar_buscar(){
                  if (document.getElementById('q').value.length == 0){
                    document.getElementById('msj_buscar').style.display = "block";
                  } else {
                    document.buscar_box.submit();
                  }
                }

                (function() {
                  var f = document.getElementById('cse-search-box');
                  if (!f) {
                    f = document.getElementById('searchbox_demo');
                  }
                  if (f && f.q){
                    var q = f.q;
                    var n = navigator;
                    var l = location;
                    var su = function () {
                      var u = document.createElement('input');
                      var v = document.location.toString();
                      var existingSiteurl = /(?:[?&]siteurl=)([^&#]*)/.exec(v);
                      if (existingSiteurl) {
                        v = decodeURI(existingSiteurl[1]);
                      }
                      var delimIndex = v.indexOf('://');
                      if (delimIndex >= 0) {
                        v = v.substring(delimIndex + '://'.length, v.length);
                      }
                      u.name = 'siteurl';
                      u.value = v;
                      u.type = 'hidden';
                      f.appendChild(u);
                    };
                    if (n.appName == 'Microsoft Internet Explorer'){
                      var s = f.parentNode.childNodes;
                      for (var i = 0; i < s.length; i++){
                        if (s[i].nodeName == 'SCRIPT' && s[i].attributes['src'] && s[i].attributes['src'].nodeValue == unescape('http:\x2F\x2Fwww.google.com.ar\x2Fcoop\x2Fcse\x2Fbrand?form=cse-search-box\x26amp\x3Blang=es')){
                          su();
                          break;
                        }
                      }
                    } else {
                      su();
                    }
                    if (n.platform == 'Win32'){
                      q.style.cssText = '1px solid #AC8752;';
                    }
                    if (window.history.navigationMode){
                      window.history.navigationMode = 'compatible';
                    }
                    var b = function(){
                      if (q.value == '') {
                        //q.style.background = '#3E0507';
                        if (q.value == '') {
                          q.value='Buscar palabra o frase';
                          document.getElementById('msj_buscar').style.display="none";
                        }
                      }
                    };
                    var f = function(){
                      //q.style.background = '#3E0507';
                      q.value='';
                      document.getElementById('msj_buscar').style.display="none";
                    };
                    q.onfocus = f;
                    q.onblur = b;
                    if (!/[&?]q=[^&]/.test(l.search)){
                      b();
                    }
                  }
                })();
              </script>		</div>

            <div class="borrado"></div>
            <div class="moduletable">
              <div class="moduletable_redes">
                <table border="0" cellspacing="0" cellpadding="0" width="130" align="right">
                  <tbody>
                    <tr>
                      <td width="20" align="right"><a href="http://www.facebook.com/DuocUC" target="_blank"><img src="templates/home_portal/images/f.jpg" border="0" alt="facebook" width="21" height="20" /></a></td>
                      <td width="20" align="right"><a href="http://twitter.com/DuocUC" target="_blank"><img src="templates/home_portal/images/t.jpg" border="0" alt="twitter" width="21" height="20" /></a></td>
                      <td width="20" align="right"><a href="http://www.youtube.com/DuocUCvideos" target="_blank"><img src="templates/home_portal/images/yt.jpg" border="0" alt="youtube" width="21" height="20" /></a></td>
                      <!--td width="20" align="right"><a href="#" mce_href="#"><img src="/templates/home_portal/images/linkedin.jpg" mce_src="/templates/home_portal/images/linkedin.jpg" border="0" alt="linkedin" width="21" height="20" /></a></td-->
                      <td width="20" align="right"><a href="http://www.flickr.com/DuocUC" target="_blank"><img src="templates/home_portal/images/flickr.png" border="0" alt="flickr" width="21" height="20" /></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>		</div>

            <div class="borrado"></div>
          </div>
        </div>
        <div class="moduletable_admision_menuprincipal">
          <div id="menuCK">
            <ul class="menumenu" id="moomenuCK"><li class="parent item125"><a href="que-es-duoc-uc.html"><span>Qué es Duoc UC</span></a><ul><li class="item134"><a href="que-es-duoc-uc/por-que-estudiar-en-duoc.html"><span>¿Por qué estudiar en Duoc?</span></a></li><li class="item135"><a href="que-es-duoc-uc/acreditacion.html"><span>Acreditación</span></a></li><li class="item136"><a href="http://www.duoc.cl/ae/" target="_blank"><span>La vida en Duoc UC</span></a></li><li class="item137"><a href="http://exalumnos.duoc.cl/portal/index.php" target="_blank"><span>Ex Alumnos</span></a></li><li class="item138"><a href="que-es-duoc-uc/modelo-educativo.html"><span>Modelo Educativo</span></a></li><li class="item139"><a href="que-es-duoc/relaciones-internacionales.html"><span>Relaciones Internacionales</span></a></li></ul></li><li class="parent item8"><a href="carreras-y-sedes/buscador.html"><span>Carreras y Sedes</span></a><ul><li class="parent item12"><a href="carreras-y-sedes/carreras/carreras.html"><span>Carreras</span></a></li><li class="parent item114"><a href="carreras-y-sedes/sedes/sedes.html"><span>Sedes</span></a></li></ul></li><li class="item126"><a href="proceso-de-admision/proceso-de-admision.html"><span>Proceso de Admisión</span></a></li><li class="parent item123"><a href="financiamiento.html"><span>Financiamiento</span></a><ul><li class="item23"><a href="financiamiento/becas-duoc.html"><span>Becas Duoc UC</span></a></li><li class="item24"><a href="financiamiento/becas-publicas.html"><span>Becas públicas</span></a></li><li class="item25"><a href="financiamiento/coordinadores-de-asistencia-financiera.html"><span>Coordinadores de Asistencia Financiera</span></a></li></ul></li><li class="item10"><a href="preguntas-frecuentes.html"><span>Preguntas Frecuentes</span></a></li></ul></div>
        </div>

        <div class="borrado"></div>
        <div class="sombra"></div>
        
        <div class="moduletable_menu-inicio">
        
        <iframe src="http://www.duoc.cl/noticias/admision/noticias-modulos.html" scrolling="no" frameborder="0" width="256" height="554"></iframe>
        
        </div>
        
        <div class="slider_menu-inicio">
        	<iframe src="http://www.duoc.cl/noticias/admision/slide/" scrolling="no" frameborder="0" width="716" height="182"></iframe>
        </div>
        <div class="centro">
          <div class="moduletable-inicio">
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

            <script type="text/javascript">
              var RecaptchaOptions = {
                lang : 'es',
                theme : 'custom',  
                custom_theme_widget: 'recaptcha_widget' 
              };
            </script>

            <form action="processRegistrese.php" method="post" name="commentForm" id="commentForm" >
              <div class="moduletable_form" id="modulo_form">
                <div id="form_1">
                  <div class="tit">Regístrate para obtener más información sobre Duoc UC y sus carreras</div>
                  <div class="pasos">
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
                      <img src="templates/home_portal/images/avanzar.jpg" alt="Avanzar &gt;&gt;" width="137" height="18" border="0" onclick="ver_paso(3);" style="cursor:pointer;"/>
                    </div>
                  </div>
                </div>

                <div id="form_3" style="display:none;">
                  <div class="tit">Regístrate para obtener más información sobre Duoc UC y sus carreras</div>
                  <div class="pasos">
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
                  <div class="campos">

                    <div id="recaptcha_widget" style="display:none">


                      <div id="recaptcha_image"></div>
                      <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrecto</div>

                      <span class="recaptcha_only_if_image recaptcha">Escriba las 2 palabras:</span>
                      <span class="recaptcha_only_if_audio recaptcha">Ingrese los n&uacute;meros:</span>

                      <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" />

                      <div><a href="javascript:Recaptcha.reload()" class="recaptcha">Obt&eacute;n un nuevo CAPTCHA</a></div>


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
                    <div class="borrado"></div>
                  </div>
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  <br/>
                  <br/>

                  <div class="btn_tres">
                    <div id="btloader">
                      <center>
                        <img
                          src="templates/home_portal/images/solicitar_info.jpg"
                          alt="Avanzar &gt;&gt;" width="137" height="18" border="0"
                          style="cursor: pointer;" onclick="envia_form();" />
                      </center>
                    </div>
                  </div>
                </div>
              </div>

              <div class="moduletable_form" id="modulo_mensaje" style="display: none">

                <table width="250" cellspacing="0" cellpadding="0" border="0" align="center" style="font-size:12px;">
                  <tbody>
                    <tr><td height="136">&nbsp;</td></tr>
                    <tr>
                      <td height="50">
                        <table width="28" cellspacing="0" cellpadding="0" border="0" align="center">
                          <tbody>
                            <tr>
                              <td width="28">
                                <span id="img_status">
                                        <!-- <img height="25" width="26" alt="" src="templates/home_portal/images/visto.png"  />-->
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td height="20" align="center">
                        <span id="msg_status">
                          <h4>Gracias por solicitar información.<br>Te contactaremos con novedades respecto a las carreras y sedes de tu interés</h4>
                        </span>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>

              <input type="hidden" name="tipo_solicitud" id="tipo_solicitud" value="91" />
            </form>
            <div id="adwords"></div>
            <div id="adfunky"></div>
          
          <div class="moduletable">
            <div class="moduletable_buscador">
              <div class="tit">Busca la carrera de tu inter&eacute;s</div>
              <table width="417" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="left">
                    <select id="escuela" name="escuela" class="select" style="width:201px; border:#c0c0c0 1px solid;">
                      <option value="">Seleccione Escuela</option>
                      <option value ='5'>Administración y Negocios</option>
                      <option value ='2'>Comunicación</option>
                      <option value ='3'>Construcción</option>
                      <option value ='4'>Diseño</option>
                      <option value ='6'>Informática y Telecomunicaciones</option>
                      <option value ='7'>Ingeniería</option>
                      <option value ='8'>Recursos Naturales</option>
                      <option value ='9'>Salud</option>
                      <option value ='10'>Turismo</option>
                    </select>
                  </td>
                  <td>&nbsp;</td>
                  <td align="right">
                    <div id="Result_carreras">
                      <select name="select_carr" id="select_carr" class="select" style="width:201px; border:#c0c0c0 1px solid; ">
                        <option value="">Selecciona Carrera</option>
                      </select>
                    </div>
                  </td>
                </tr>
              </table>
              <div class="modulos">
                
                <iframe src="http://www.duoc.cl/noticias/admision/modulos.html" scrolling="no" frameborder="0" width="437" height="246"></iframe>
                
                </div>
              
              <div class="borrado"></div>
            </div>
          </div>

          

         
        </div>
        </div>
        <div style="margin: 0pt; padding: 0pt; height: 7px;"></div>
        <div class="footer">
          <div class="moduletable_menu">
            <ul class="menu"><li class="parent item125"><a href="que-es-duoc-uc.html"><span>Qué es Duoc UC</span></a></li><li class="parent item8"><a href="carreras-y-sedes/buscador.html"><span>Carreras y Sedes</span></a></li><li class="item126"><a href="proceso-de-admision/proceso-de-admision.html"><span>Proceso de Admisión</span></a></li><li class="parent item123"><a href="financiamiento.html"><span>Financiamiento</span></a></li><li class="item10"><a href="preguntas-frecuentes.html"><span>Preguntas Frecuentes</span></a></li></ul>		</div>

          <div class="moduletable">
            <div class="txts">
              <div class="txt_uno">Informaciones 800 215001<br /> DuocUC ® Instituto Profesional y Centro<br /> de Formación Técnica DuocUC.</div>
              <div class="txt_dos">
                <table style="width: 445px;" align="center" border="0" cellpadding="0" cellspacing="0">
                  <tbody>
                    <tr>
                      <td width="98"><img src="templates/home_portal/images/logo_acreditacion.jpg" alt="Comisión Nacional de acreditación" border="0" height="55" width="85" /></td>
                      <td width="170">
                        <p align="left"><strong>Instituto Profesional Duoc UC </strong><br /> Acreditado desde agosto 2010 <br /> hasta agosto 2017<br /> Docencia de Pregrado<br />Gestión Institucional</p>
                      </td>
                      <td width="10"><img src="templates/home_portal/images/bg_sep.png" alt="Comisión Nacional de acreditación" border="0" height="78" width="1" /></td>
                      <td width="177">
                        <p><strong>Centro de Formación</strong></p>
                        <p><strong>Técnica Duoc UC <br /> </strong>Acreditado desde octubre 2005 <br /> hasta octubre 2011<br /> Docencia Conducente a Título<br />Gestión Institucional</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="txt_tres">Políticas de Privacidad<br />Condiciones de Uso<br />DuocUC 2010 Todos los Derechos Reservados</div>
            </div>
            <div style="position: absolute; left: -10000px; top: 0px; width: 1px; height: 1px; overflow: hidden;" id="_mcePaste">nstituo Profesional Duoc</div>		</div>

          <div class="borrado"></div>
        </div>
      </div>
    </div>
  </body>
</html>
