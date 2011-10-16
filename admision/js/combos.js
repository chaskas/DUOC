jQuery(document).ready(function(){
  jQuery('#escuela').change(function(){
    var selected = jQuery('#escuela').find(':selected').val();
//    alert(selected);
    if(selected == 5){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='143'>Adm. Empresas M. Marketing</option><option value='843'>Adm. Empresas M. Marketing PEV</option><option value='133'>Adm. R.R.H.H</option><option value='833'>Ing. Adm. de R.R.H.H. PEV</option><option value='840'>Administración de Ventas Pev</option><option value='130'>Administración Financiera</option><option value='830'>Administración Financiera Pev</option><option value='142'>Asistente Ejecutivo</option><option value='123'>Auditoría</option><option value='129'>Comercio Exterior</option><option value='829'>Comercio Exterior Pev</option><option value='139'>Conta. Gral. M. Leg. Tribut.</option><option value='839'>Conta. Gral. M. Leg Tribut PEV</option><option value='160'>Ingeniería en Administración</option><option value='164'>Ing. Adm. de R.R.H.H</option><option value='864'>Ing. Adm. de R.R.H.H. PEV</option><option value='860'>Ing en Administración Pev</option><option value='161'>Ingeniería en Comercio Exterio</option><option value='865'>Ing en Gestión Comercial Pev</option><option value='163'>Ingeniería en Gestión Logístic</option><option value='162'>Ingeniería en Marketing</option><option value='862'>Ingeniería en Marketing Pev</option><option value='166'>Técnico en Gestión Logística</option><option value='841'>Tec en Gestión Logística Pev</option><option value='851'>Tec Serv Finan y Bancarios PEV</option><option value='150'>Técnico Jurídico</option><option value='850'>Técnico Jurídico Pev</option>");}
    else if (selected == 2){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='307'>Actuación</option><option value='326'>Animación Digital</option><option value='305'>Comunicación Audiovisual</option><option value='325'>Ingeniería en Sonido</option><option value='226'>Publicidad</option><option value='323'>Publicidad Tec M. Prod Digital</option><option value='302'>RR.PP. M. Marketing</option><option value='322'>Técnico Audiovisual</option><option value='324'>Tecnología en Sonido</option>");}
    else if (selected == 3){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='424'>Dibujo Arquitectónico y Estruc</option><option value='431'>Ingeniería en Construcción</option><option value='440'>Ing en Prevención de Riesgos</option><option value='434'>Restauración Patrimonial</option><option value='222'>Técnico en Construcción</option><option value='404'>Técnico en Instalaciones Eléct</option><option value='429'>Tec. Prevención de Riesgos PEV</option><option value='405'>Técnico Topógrafo</option>");}
    else if (selected == 4){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='228'>Diseño de Ambientes</option><option value='229'>Diseño de Vestuario</option><option value='231'>Diseño Gráfico</option><option value='230'>Diseño Industrial</option><option value='220'>Ilustración Digital</option><option value='217'>Técnico en Diseño Gráfico</option>");}
    else if (selected == 6){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='443'>Admde Redes Computacionales</option><option value='447'>Analista Prog Computacional</option><option value='462'>Ingen Conectividad y Redes</option><option value='892'>Ing. Gestión de TI</option><option value='461'>Ingeniería en Informática</option><option value='893'>Ing. Infra y Plataformas Tec</option><option value='460'>Técnico en Telecomunicaciones</option>");}
    else if (selected == 7){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='465'>Ing. Automatización Proc. Ind.</option><option value='464'>Ing. Electricidad y Eléctrica</option><option value='894'>Ing. Maquinaria y Veh. Pesados</option><option value='463'>Ing. Mec. Auto. y Autotrónica</option><option value='448'>Técnico en Electricidad y Elec</option><option value='899'>Tec E. Renovable Eficiencia E.</option><option value='421'>Tec Instr. Automatización Ind.</option><option value='897'>Tec en Mantenimiento Industria</option><option value='898'>Tec Maq. y Vehículos  Pesados</option><option value='418'>Tec. Mec. Auto. y Autotrónica</option>");}
    else if (selected == 8){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='782'>Ingeniería Agrícola</option><option value='780'>Ingeniería en Acuicultura</option><option value='781'>Ingeniería en Medio Ambiente</option><option value='889'>Técnico Agrícola</option><option value='890'>Técnico Veterinario</option>");}
    else if (selected == 9){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='506'>Fisioterapeuta Deportivo</option><option value='504'>Informática Biomédica</option><option value='507'>Preparador Físico</option><option value='501'>Técnico de Enfermería</option><option value='502'>Tec Lab Clínico y B. de Sangre</option><option value='503'>Tec  Radiodiag. y Radioterapia</option><option value='508'>Técnico en Odontología</option>");}
    else if (selected == 10){jQuery('#select_carr').html("<option value=''>Selecciona Carrera</option><option value='668'>Administración Hotelera</option><option value='676'>Administración Turística</option><option value='680'>Dirección en Adm Hotelera</option><option value='672'>Ecoturismo</option><option value='669'>Gastronomía</option><option value='670'>Gastronomía Internacional</option><option value='673'>Turismo de Aventura</option><option value='677'>Turis. Tec M Empresa Turística</option><option value='678'>Turis Tec M Serv Aerocomercial</option>");}
  });
  jQuery('#select_carr').change(function(){
    var carr = jQuery('#select_carr').find(':selected').val();
//    alert(carr);

    //ESCUELA DE ADMISTRACION Y NEGOCIOS
    if (carr == 143){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-de-empresas-mencion-marketing.html");}
    else if (carr == 843){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/admision/detalle-de-la-carrera/carrera/administracion-de-empresas-mencion-marketing-pev.html");}
    else if (carr == 133){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-de-recursos-humanos.html");}
    else if (carr == 833){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-de-recursos-humanos-pev.html");}
    else if (carr == 840){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-de-ventas-pev.html");}
    else if (carr == 130){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-financiera.html");}
    else if (carr == 830){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-financiera-pev.html");}
    else if (carr == 142){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/asistente-ejecutivo.html");}
    else if (carr == 123){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/auditoria.html");}
    else if (carr == 129){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/comercio-exterior.html");}
    else if (carr == 829){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/comercio-exterior-pev.html");}
    else if (carr == 139){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/contabilidad-general-m-legislacion-tributaria.html");}
    else if (carr == 839){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/contabilidad-general-m-legislacion-tributaria-pev.html");}
    else if (carr == 160){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-administracion.html");}
    else if (carr == 164){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-administracion-de-recursos-humanos.html");}
    else if (carr == 864){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-administracion-de-recursos-humanos-pev.html");}
    else if (carr == 860){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-administracion-pev.html");}
    else if (carr == 161){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-comercio-exterior.html");}
    else if (carr == 865){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-gestion-comercial-pev.html");}
    else if (carr == 163){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-gestion-logistica.html");}
    else if (carr == 162){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-marketing.html");}
    else if (carr == 862){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-marketing-pev.html");}
    else if (carr == 166){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-gestion-logistica.html");}
    else if (carr == 841){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-gestion-logistica-pev.html");}
    else if (carr == 851){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-servicios-financieros-y-bancarios-pev.html");}
    else if (carr == 150){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-juridico.html");}
    else if (carr == 850){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-juridico-pev.html");}
    
    //ESCUELA DE COMUNICACION
    else if (carr == 307){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/actuacion.html");}
    else if (carr == 326){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/animacion-digital.html");}
    else if (carr == 305){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/comunicacion-audiovisual.html");}
    else if (carr == 325){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-sonido.html");}
    else if (carr == 226){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/publicidad.html");}
    else if (carr == 323){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/publicidad-tecnica-mencion-produccion-digital.html");}
    else if (carr == 302){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/relaciones-publicas-mencion-marketing.html");}
    else if (carr == 322){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-audiovisual.html");}
    else if (carr == 324){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnologia-en-sonido.html");}
    
    //ESCUELA DE CONSTRUCCION
    else if (carr == 424){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/dibujo-arquitectonico-y-estructural.html");}
    else if (carr == 431){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-construccion.html");}
    else if (carr == 440){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-prevencion-de-riesgos.html");}
    else if (carr == 434){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/restauracion-patrimonial.html");}
    else if (carr == 222){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-construccion.html");}
    else if (carr == 404){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-instalaciones-electricas.html");}
    else if (carr == 429){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-prevencion-de-riesgos-pev.html");}
    else if (carr == 405){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-topografo.html");}
    
    //ESCUELA DE DISEÑO
    else if (carr == 228){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/diseno-de-ambientes.html");}
    else if (carr == 229){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/diseno-de-vestuario.html");}
    else if (carr == 231){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/diseno-grafico.html");}
    else if (carr == 230){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/diseno-industrial.html");}
    else if (carr == 220){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ilustracion-digital.html");}
    else if (carr == 217){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-diseno-grafico.html");}
    
    //ESCUELA DE INFORMATICA Y TELECOMUNICACIONES
    else if (carr == 443){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-de-redes-computacionales.html");}
    else if (carr == 447){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/analista-programador-computacional.html");}
    else if (carr == 462){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-conectividad-y-redes.html");}
    else if (carr == 892){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-gestion-de-tecnologias-de-informacion.html");}
    else if (carr == 461){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-informatica.html");}
    else if (carr == 893){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-infraestructura-y-plataformas-tecnologicas.html");}
    else if (carr == 460){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-telecomunicaciones.html");}
    
    //ESCUELA DE INGENIERIA
    else if (carr == 465){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-automatizacion-de-procesos-industriales.html");}
    else if (carr == 464){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-electricidad-y-electronica.html");}
    else if (carr == 894){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-maquinaria-y-vehiculos-pesados.html");}
    else if (carr == 463){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-mecanica-automotriz-y-autotronica.html");}
    else if (carr == 448){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-electricidad-y-electronica.html");}
    else if (carr == 899){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-energias-renovables-y-eficiencia-energetica.html");}
    else if (carr == 421){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-instrumentacion-y-automatizacion-industrial.html");}
    else if (carr == 897){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-mantenimiento-industrial.html");}
    else if (carr == 898){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-maquinaria-y-vehiculos-pesados.html");}
    else if (carr == 418){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-mecanica-automotriz-y-autotronica.html");}
    
    //ESCUELA DE RECURSOS NATURALES
    else if (carr == 782){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-agricola.html");}
    else if (carr == 780){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-acuicultura.html");}
    else if (carr == 781){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ingenieria-en-medio-ambiente.html");}
    else if (carr == 889){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-agricola.html");}
    else if (carr == 890){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-veterinario.html");}
    
    //ESCUELA DE SALUD
    else if (carr == 506){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/fisioterapeuta-deportivo.html");}
    else if (carr == 504){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/informatica-biomedica.html");}
    else if (carr == 507){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/preparador-fisico.html");}
    else if (carr == 501){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-de-enfermeria.html");}
    else if (carr == 502){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-de-laboratorio-clinico-y-banco-de-sangre.html");}
    else if (carr == 503){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-de-radiodiagnostico-y-radioterapia.html");}
    else if (carr == 508){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/tecnico-en-odontologia.html");}
    
    //ESCUELA DE TURISMO
    else if (carr == 668){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-hotelera.html");}
    else if (carr == 676){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/administracion-turistica.html");}
    else if (carr == 680){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/direccion-en-administracion-hotelera.html");}
    else if (carr == 672){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/ecoturismo.html");}
    else if (carr == 669){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/gastronomia.html");}
    else if (carr == 670){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/gastronomia-internacional.html");}
    else if (carr == 673){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/turismo-de-aventura.html");}
    else if (carr == 677){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/turismo-tecnico-mencion-en-empresas-turisticas.html");}
    else if (carr == 678){window.location.replace("http://"+jQuery(location).attr("host")+"/admision/detalle-de-la-carrera/carrera/turismo-tecnico-mencion-en-servicios-aerocomerciales.html");}
  });
});
