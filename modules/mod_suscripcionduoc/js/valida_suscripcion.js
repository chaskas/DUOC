jQuery(document).ready(function(){
	//jQuery("#fechanac").date_input(); 		
	jQuery("#commentForm").validate({
		rules: {			
			nombre 			: { required: true, minlength: 2 },
			ap_paterno		: { required: true, minlength: 2 },			
			rut				: { required: true },			
			email			: { required: true, email: true },	
			actividades		: { required: true }
			
		},
		messages: {
			nombre 			: { required: "", minlength: "" },
			ap_paterno		: { required: "", minlength:"" },			
			rut				: { required: "" },
			email			: { required: "", email: ""  },
			actividades		: { required: "" }
			
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

function ver_paso(num){	

	if (num == 1){
		document.getElementById('form_2').style.display = "none";
		document.getElementById('form_3').style.display = "none";
		jQuery('#carrera_op_1').rules("remove");
		jQuery('#sedes_op_1').rules("remove");	
		jQuery('#j_captcha_response').rules("remove");
		document.getElementById('form_'+num).style.display = "block";	
	} 
	if (num == 2){
		if (jQuery("#commentForm").valid()==true){
			document.getElementById('form_1').style.display = "none";
			document.getElementById('form_3').style.display = "none";
			
			jQuery('#carrera_op_1').rules("add", { required: true, messages: { required: "" }});
			jQuery('#sedes_op_1').rules("add", { required: true, messages: { required: "" }});
			//jQuery('#j_captcha_response').rules("add", { required: true, messages: { required: "" }});	
			document.getElementById('form_'+num).style.display = "block";	
		}
	}	
	if (num == 3){			
		if (jQuery("#commentForm").valid()==true){
			document.getElementById('form_1').style.display = "none";
			document.getElementById('form_2').style.display = "none";
			jQuery('#carrera_op_1').rules("remove");
			jQuery('#sedes_op_1').rules("remove");				
			jQuery('#j_captcha_response').rules("add", { required: true, messages: { required: "" }});	
			document.getElementById('form_'+num).style.display = "block";
		}	
	}		
}

function envia_form(){
		jQuery("#imgloader").css("display", "block");
		jQuery("#btloader").css("display", "none");		
	if (jQuery('#commentForm').valid()){
		enviarSuscripcion();	
	}else{
		jQuery("#imgloader").css("display", "none");
		jQuery("#btloader").css("display", "block");
	}			


}

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
