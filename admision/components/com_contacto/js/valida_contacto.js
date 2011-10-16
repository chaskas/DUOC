var color = "#FF0000; font-size:11px";
jQuery(document).ready(function(){ 		
	jQuery("#frmdatos").validate({
		rules: {			
			nombres 		: { required: true, minlength: 2 },
			apellidos		: { required: true, minlength: 2 },						
			rut				: { required: true },
			email			: { required: true, email: true },
			asunto			: { required: true },
			j_captcha_response			: { required: true }
		},
		messages: {
			nombres 		: { required: "<span style='color:"+color+";'>Debe ingresar sus nombres.</span>", minlength: "<span style='color:"+color+";'>El nombre ingresado no es v&aacute;lido.</span>" },
			apellidos		: { required: "<span style='color:"+color+";'>Debe ingresar sus apellidos.</span>", minlength: "<span style='color:"+color+";'>El apellido ingresado no es v&aacute;lido.</span>" },						
			rut				: { required: "<span style='color:"+color+";'>Debe ingresar su rut.</span>" },
			email			: { required: "<span style='color:"+color+";'>Debe ingresar su email.</span>", email: "<span style='color:"+color+";'>Email inv&aacute;lido.</span>"  },
			asunto			: { required: "<span style='color:"+color+";'>Debe seleccionar un tema.</span>" },
			mensaje			: { required: "<span style='color:"+color+";'>Debe escribir un mensaje.</span>" },
			j_captcha_response			: { required: "<span style='color:"+color+";'>Debe ingresar c&oacute;digo.</span>" }
		}		
	});	
	
	jQuery("#rut").Rut({
		format_on:'change'
	});	
	
	jQuery.validator.addMethod("rut", 
		function(value, element) {
			return this.optional(element) || jQuery.Rut.validar(value);
		}, "<span style='color:"+color+";'>El rut ingresado es inv&aacute;lido.</span>");	
});

function limite_car(valor, total){
	var tot = total - valor;	
	var car = document.getElementById('car');
	var area = document.getElementById('mensaje');
	if (tot <= total && tot > 0){
		car.value = tot;		
	} else {
		area.value = area.value.substring(0,total);
		car.value = 0;
	}	
}