<?php
  require_once('./includes/ReCaptcha/recaptchalib.php');
  $privatekey = "6LeCKckSAAAAALT3EOByDZqsg5AvxGhVsbU7oK2O";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-es" lang="es-es" dir="ltr" >

  <head>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>     <script type="text/javascript" src="js/combos.js"></script>
    <script>jQuery.noConflict();</script>
    <script type="text/javascript" src="js/thickbox.js"></script>
    <link href="js/thickbox.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <!--<base href="" />-->
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

    <script language="JavaScript" type="text/javascript" src="js/includes/xpath.js"></script>
    <script language="JavaScript" type="text/javascript" src="js/includes/SpryData.js"></script>


    <script type="text/javascript">
      var dsCap = new Spry.Data.XMLDataSet(null, "RESULT");
		
      function validaCap(){
        var a = document.getElementById("j_captcha_response").value;
        var sUrl = "/admision/contacto.do?accion=validaCaptcha&j_captcha_response=" + a + "&ms" + new Date().getTime();
        dsCap.setURL(sUrl)
        dsCap.loadData();
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
        <div class="header">
          <div class="moduletable_funcional_admision">
            <ul class="menu"><li class="item118"><a href="registrese.html?option=com_registrate&amp;view=registrate&amp;keepThis=true&amp;TB_iframe=true&amp;height=500&amp;width=600" title="Regístrate" class="thickbox"><span>Regístrate</span></a></li><li id="current" class="active item116"><a href="contacto.php"><span>Contacto</span></a></li><li class="item119"><a href="mapa-del-sitio.html"><span>Mapa del Sitio</span></a></li></ul>		</div>

          <div class="borrado"></div>
          <div class="moduletable">


            <div class="moduletable_menu">
              <ul>
                <li><a href='http://www.duoc.cl/'>Inicio</a></li><li><a href='index.html' class='active' >Admisión</a></li><li><a href='http://portal.duoc.cl'>Alumnos</a></li><li><a href='http://exalumnos.duoc.cl/portal/index.php'>Ex Alumnos</a></li>	</ul>
            </div>
          </div>

          <div class="moduletable">
            <div class="logo">
              <h1><a href="index.html"><span>DUOC UC</span></a></h1>
            </div>		</div>

          <div class="titulos">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="81" align="center" valign="bottom"><img src="templates/home_portal/images/admision.png" width="121" height="44" alt="admisi�n" /></td>
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
        <div class="borrado"></div>

        <div class="dos_columnas_dos"> 			  	
          <div class="content">
            <?php if (!$resp->is_valid) : ?>

              El codigo reCAPTCHA ingresado no es v&aacute;lido.

            <?php else : ?>

                "Muy bien"

            <?php endif; ?>				
          </div>	
          <div class="sidebar_right">
            <div class="moduletable_banners">					

            </div>
          </div>			  
          <div class="borrado"></div> 
        </div>				 
        <div class="footer">

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



