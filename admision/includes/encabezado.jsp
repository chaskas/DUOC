<div class="header">
	<div class="moduletable_funcional_admision">
		<ul class="menu">
			<li class="item118">
				<a
					href="/admision/index2.jsp?option=com_registrate&amp;view=registrate&amp;keepThis=true&amp;TB_iframe=true&amp;height=500&amp;width=600"
					title="Regístrate" class="thickbox"><span>Regístrate</span>
				</a>
			</li>
			<li class="item116">
				<a href="/admision/contacto.jsp"><span>Contacto</span>
				</a>
			</li>
			<li class="item119">
				<a href="/admision/mapa-del-sitio.jsp"><span>Mapa del Sitio</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="borrado"></div>
	<div class="moduletable">


		<div class="moduletable_menu">
			<ul>
				<li>
					<a href='http://www.duoc.cl/'>Inicio</a>
				</li>
				<li>
					<a href='/admision/index.jsp' class='active'>Admisión</a>
				</li>
				<li>
					<a href='http://portal.duoc.cl'>Alumnos</a>
				</li>
				<li>
					<a href='http://exalumnos.duoc.cl/portal/index.php'>Ex Alumnos</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="moduletable">
		<div class="logo">
			<h1>
				<a href="/admision/index.php"><span>DUOC UC</span>
				</a>
			</h1>
		</div>
	</div>

	<div class="titulos">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="81" align="center" valign="bottom">
					<img src="/admision/templates/home_portal/images/admision.png" width="121"
						height="44" alt="admisión" />
				</td>
			</tr>
		</table>
	</div>
	<div class="menu_buscador_redes">
		<div class="moduletable">
			<div class="moduletable_buscador">
				<form action="/admision/buscador_google.jsp" name="buscar_box"
					id="cse-search-box">
					<input name="option" id="option" type="hidden" value="com_buscador" />
					<input name="Itemid" id="Itemid" type="hidden" value="153" />
					<input type="hidden" name="cx"
						value="001971600665330202120:hisn12zxq-4" />
					<input type="hidden" name="cof" value="FORID:10" />
					<input type="hidden" name="ie" value="UTF-8" />
					<div style="padding-left: 10px;">
						<input type="text" name="q" id="q" class="inputbox_buscador"
							value="Buscar palabra o frase"
							onkeypress="if (event.keyCode == 13 && document.buscar_box.q.value.trim().length == 0){ return false};" />
						<input type="image" src="/admision/templates/home_portal/images/lupa.jpg"
							alt="Buscar" onclick="javascript:validar_buscar();"
							style="cursor: pointer;">
					</div>
					<!-------- Esto despliega un mensaje al no ingresar nada -------->
					<label id="msj_buscar" style="display: none">
						Ingrese palabra o frase para buscar.
					</label>
				</form>
			</div>
			<script type="text/javascript"
				src="http://www.google.com/cse/brand?form=cse-search-box&lang=es"></script>
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
</script>
		</div>

		<div class="borrado"></div>
		<div class="moduletable">
			<div class="moduletable_redes">
				<table border="0" cellspacing="0" cellpadding="0" width="130"
					align="right">
					<tbody>
						<tr>
							<td width="20" align="right">
								<a href="http://www.facebook.com/DuocUC" target="_blank"><img
										src="/admision/templates/home_portal/images/f.jpg" border="0"
										alt="facebook" width="21" height="20" />
								</a>
							</td>
							<td width="20" align="right">
								<a href="http://twitter.com/DuocUC" target="_blank"><img
										src="/admision/templates/home_portal/images/t.jpg" border="0"
										alt="twitter" width="21" height="20" />
								</a>
							</td>
							<td width="20" align="right">
								<a href="http://www.youtube.com/DuocUCvideos" target="_blank"><img
										src="/admision/templates/home_portal/images/yt.jpg" border="0"
										alt="youtube" width="21" height="20" />
								</a>
							</td>
							<!--td width="20" align="right"><a href="#" mce_href="#"><img src="templates/home_portal/images/linkedin.jpg" mce_src="templates/home_portal/images/linkedin.jpg" border="0" alt="linkedin" width="21" height="20" /></a></td-->
							<td width="20" align="right">
								<a href="http://www.flickr.com/DuocUC" target="_blank"><img
										src="/admision/templates/home_portal/images/flickr.png" border="0"
										alt="flickr" width="21" height="20" />
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="borrado"></div>
	</div>
</div>