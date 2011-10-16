<%@page import="sun.misc.BASE64Decoder"%>
<%
String nombre=request.getParameter("nombre"); 
String amigo=request.getParameter("amigo");
String link=request.getParameter("link");

String[] parametros = amigo.split("&");
String urlDec = "";

if (parametros.length == 3){
	amigo = parametros[0];	
	nombre = parametros[1];
	String[] arrNombre = nombre.split("=");
	if (arrNombre.length == 2)nombre = arrNombre[1];
	
	link = parametros[2];
	//System.out.println("link:" + link);	
	//link=link.replace("link=","");
	
	
	byte[] arrB =  (new BASE64Decoder()).decodeBuffer(link);
	urlDec = new String(arrB);
	System.out.println("urlDec:" + urlDec);
 }else{
 	byte[] arrB =  (new BASE64Decoder()).decodeBuffer(link);
	urlDec = new String(arrB);
	System.out.println("urlDec:" + urlDec);
 }
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Compartir Enlace - DuocUc</title>
</head>
<body>

<table width="665" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
	<tr>
		<td width="665" height="104"><a href="#"><img src="/admision/referido/mail/images/1_02.jpg" alt="DUOCUC" width="665" height="104" border="0" style="display:block;" /></a></td>
	</tr>
	<tr>
		<td>
			<table width="665" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse;">
				<tr>
					<td width="31" height="174"><img src="/admision/referido/mail/images/1_03.jpg" alt="" width="31" height="174" border="0" style="display:block;"/></td>
					<td width="601" height="174">
						<table width="533" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
							<tr>
								<td width="533">
									<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#106fb4;">Estimado(a) <%=nombre%>:</span> <br><br><br>
									<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; color:#16205e;"><%=amigo%></span> <span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#16205e;"> ha compartido contigo este enlace:</span>
									<!-- <br><br>  <span style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#16205e;">#CARRERA</span><span style="font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; color:#006699;">#ESCUELA</span>--><br><br>
									<span style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#16205e;"> Para revisar lo que ha enviado tu amigo, pincha</span> <a href="/<%=urlDec%>" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#16205e; font-weight:bold;">aqu&iacute;.</a>
								</td>
							</tr>
						</table>
					</td>
					<td width="33" height="174"><img src="/admision/referido/mail/images/1_05.jpg" alt="" width="33" height="174" border="0" style="display:block;" /></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td width="665" height="167"><img src="/admision/referido/mail/images/1_06.jpg" alt="ACREDITADO 7 A&Ntilde;OS / COMISI&Oacute;N NACIONAL DE ACREDITACI&Oacute;N" width="665" height="167" border="0" style="display:block;" /></td>
	</tr>
</table>
</body>
</html>