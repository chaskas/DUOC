<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />		
		<link href="templates/home_portal/css/style_admision.css" rel="stylesheet" type="text/css" />
		<link href="templates/home_portal/css/style_basic.css" rel="stylesheet" type="text/css" />
		<script>
			window.onload = function(){
				var hr = document.getElementsByTagName("a");
				var total = hr.length;

				for (i=0;i<total;i++){
					if (hr[i].href!='javascript:window.print();'){
						hr[i].href='javascript:void(0);';
						hr[i].target='';
					}
				}
			};
		</script>
	</head>

<head>	
	<link href="templates/home_portal/css/style_admision.css" rel="stylesheet" type="text/css" />

	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script>jQuery.noConflict();</script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>		
	<script>
		var img = "&nbsp;<img src='images/publish_x.png' />";	
		jQuery(document).ready(function() { 		
			jQuery("#frmmailto").validate({
				rules: {			
					nombres	: { required:true },
					email	: { required:true, email:true },
					nombre1	: { required:true },
					correo1	: { required:true, email:true },
					/*nombre2	: { required:true },
					correo2	: { required:true, email:true },
					nombre3	: { required:true },
					correo3	: { required:true, email:true },*/
					mensaje	: { required:true }
				},
				messages: {
					nombres	: { required: img },
					email	: { required: img, email: img },
					nombre1	: { required: img },
					correo1	: { required: img, email: img },
					/*nombre2	: { required: img },
					correo2	: { required: img, email: img },
					nombre3	: { required: img },
					correo3	: { required: img, email: img },*/
					mensaje	: { required: img }					
				}		
			});			
		});
	</script>	
</head>
<body>
<div class="thickbox">
	<h2><span>Comparte este enlace con tu amigo.</span></h2><br />
	<form action="enviarCompartir.php" name="frmmailto" id="frmmailto" method="post">

        <div class="campos">
            <table width="316" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="120" height="30" align="right">Tu Nombre</td>
                    <td width="179" height="30" align="right"><input type="text" name="nombres" class="textfield" style="width:147px;"  /></td>
                    <td width="35" height="30" align="center"><label for="nombre" generated="true" class="error"></label> *</td>
                  </tr>

                  <tr>
                    <td height="30" align="right">Tu E-mail</td>
                    <td height="30" align="right"><input type="text" name="email" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center"><label for="email" generated="true" class="error"></label> *</td>
                  </tr>     
                  <tr>
                    <td height="10" align="right">&nbsp;</td>
                    <td height="10" align="right">&nbsp;</td>

                    <td height="10" align="center">&nbsp;</td>
                  </tr>                       <tr>
                    <td height="30" align="right">Nombre Amigo 1<br /></td>
                    <td height="30" align="right"><input type="text" name="nombre1" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center"><label for="nombre1" generated="true" class="error"></label> *</td>
                  </tr>
                  <tr>

                    <td height="30" align="right">E-mail Amigo 1</td>
                    <td height="30" align="right"><input type="text" name="correo1" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center"><label for="correo1" generated="true" class="error"></label> *</td>
                  </tr>
                  <tr>
                    <td height="10" align="right">&nbsp;</td>
                    <td height="10" align="right">&nbsp;</td>

                    <td height="10" align="center">&nbsp;</td>
                  </tr><tr>
                    <td height="30" align="right">Nombre Amigo 2<br /></td>
                    <td height="30" align="right"><input type="text" name="nombre2" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center">&nbsp;</td>
                  </tr>              
                  <tr>
                    <td height="30" align="right">E-mail Amigo 2</td>

                    <td height="30" align="right"><input type="text" name="correo2" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center">&nbsp;</td>
                  </tr>              
                  <tr>
                    <td height="10" align="right">&nbsp;</td>
                    <td height="10" align="right">&nbsp;</td>
                    <td height="10" align="center">&nbsp;</td>
                  </tr>   
                  <tr>                  
                    <td height="30" align="right">Nombre Amigo 3<br /></td>

                    <td height="30" align="right"><input type="text" name="nombre3" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center">&nbsp;</td>
                  </tr>              
                  <tr>
                    <td height="30" align="right">E-mail Amigo 3</td>
                    <td height="30" align="right"><input type="text" name="correo3" class="textfield" style="width:147px;"  /></td>
                    <td height="30" align="center">&nbsp;</td>
                  </tr>                   <tr>

                    <td height="20" colspan="3" align="center">&nbsp;</td>
                  </tr>      
                  
                  <tr>
                    <td height="30" colspan="3" align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="100%" height="18" align="center" valign="bottom">
							<center><input name="button2" type="image" id="button2" value="Enviar" src="templates/home_portal/images/comparte.jpg" /></center>
						</td>
                      </tr>                    </table></td>

                  </tr>                                             
              </table>
		</div>
		<input type="hidden" name="enlace" 	value="<?php echo $_GET['enlace']; ?>" />
		</form>		
</div>      
	
</body>
</html>
