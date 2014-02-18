
<div class="row-fluid" id="bec_tabs" style="margin-top:10px">
	<div class="span12" id="insidetabs" style="text-align:center">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  <ul id='nav_capit2' class="nav nav-tabs fix_navcap">
		    <li id="ctab" class="active"><a href="#tabc" data-toggle="tab">Carátula</a></li>
		    <li id="ctab1"><a href="#tab1" data-toggle="tab">Capítulo I</a></li>
		    <li id="ctab2"><a href="#tab2" data-toggle="tab">Capítulo II</a></li>
		    <li id="ctab3"><a href="#tab3" data-toggle="tab">Capítulo III</a></li>
		    <li id="ctab4"><a href="#tab4" data-toggle="tab">Capítulo IV</a></li>
		    <li id="ctab5"><a href="#tab5" data-toggle="tab">Capítulo IV B</a></li>
		    <li id="ctab6"><a href="#tab6" data-toggle="tab">Capítulo V</a></li>
		    <li id="ctab7"><a href="#tab7" data-toggle="tab">Capítulo VI</a></li>
		    <li id="ctab8"><a href="#tab8" data-toggle="tab">Capítulo VII</a></li>
		  </ul>
		  <div class="tab-content fix_tabcontent">
		    <div class="tab-pane active" id="tabc">
		      <p><?php $this->load->view('encuesta/forms/car_form'); ?></p>
		    </div>	

		    <div class="tab-pane" id="tab1">
		      <p><?php $this->load->view('encuesta/forms/cap1_form'); ?></p>
		    </div>	

		    <div class="tab-pane" id="tab2">
		      <p><?php $this->load->view('encuesta/forms/cap2_form'); ?></p>
		    </div>

		    <div class="tab-pane" id="tab3">
		      <p><?php $this->load->view('encuesta/forms/cap3_form'); ?></p>
		    </div>

		    <div class="tab-pane" id="tab4">
		      <p><?php $this->load->view('encuesta/forms/cap4_form'); ?></p>
		    </div>

		    <div class="tab-pane" id="tab5">
		      <p><?php $this->load->view('encuesta/forms/cap4B_form'); ?></p>
		    </div>

		    <div class="tab-pane" id="tab6">
		      <p><?php $this->load->view('encuesta/forms/cap5_form'); ?></p>
		    </div>

		    <div class="tab-pane" id="tab7">
		      <p><?php $this->load->view('encuesta/forms/cap6_form'); ?></p>
		    </div>

		    <div class="tab-pane" id="tab8">
		      <p><?php $this->load->view('encuesta/forms/cap7_form'); ?></p>
		    </div>

		  </div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){


$(document).on("keyup",'.btn-primary',function(e) {    
      var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
      if(key == 13)
      $(this).trigger('click');
   }); 



  $(window).keydown(function(event){
      if(event.keyCode == 13) {
          event.preventDefault();
          return false;
      }
  });


  // $('input,select,textarea').keydown( function(e) {
$(document).on("keyup",'input,select,textarea',function(e) {    
      var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
      if(key == 13)
      $(this).trigger('change');
   }); 




// $('input,select,textarea').keyup( function(e) {
$(document).on("keyup",'input,select,textarea',function(e) {

    var key = e.charCode ? e.charCode : e.keyCode ? e.keyCode : 0;
    var inputs = $(this).closest('form').find(":input:not(:disabled, [readonly='readonly'],:hidden)");
    if(key == 13) {
      inputs.eq( inputs.index(this)+1).focus(); 
      
    }
    else if (key == 27) {
      inputs.eq( inputs.index(this)-1).focus(); 
    }
  }); 



$.extend(jQuery.validator.messages, {
     required: "Campo obligatorio",
    // remote: "Please fix this field.",
     email: "Ingrese un email válido",
    // url: "Please enter a valid URL.",
     date: "Ingrese una fecha válida",
    // dateISO: "Please enter a valid date (ISO).",
     number: "Solo se permiten números",
     digits: "Solo se permiten números",
    range: jQuery.validator.format("Por favor ingrese un valor  entre {0} y {1}."),
    // creditcard: "Please enter a valid credit card number.",
    // equalTo: "Please enter the same value again.",
    // accept: "Please enter a value with a valid extension.",
    // maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    // minlength: jQuery.validator.format("Please enter at least {0} characters."),
    // rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
    // range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    // max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    // min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});

$.validator.addMethod("menorque", function(value, element, arg) {
    flag = false;
    if(value == '' || parseInt($('#' + arg[0] + element.id.substring(18,19)).val()) >= parseInt(value) ){
      flag = true;
    }
    return flag;
}, "El numero de aulas debe ser menor al numero de alumnos");


$.validator.addMethod("hora", function(value, element, arg) {
    var regeX = /^([01]\d|2[0-3]):?([0-5]\d)$/;
    flag = false;
    if(value == '' || regeX.test(value.trim())){
      flag = true;
    }
    return flag;
}, "Ingrese la hora correctamente");

$.validator.addMethod("letnum", function(value, element, param) {
  return value.match(new RegExp("^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$"));
}, "Caracteres no permitidos");

$.validator.addMethod("telef", function(value, element, param) {
  return value.match(new RegExp("^[0-9#*]*$"));
}, "Ingrese un telefono valido");

$.validator.addMethod("requeridodis", function(value, element, arg) {
    flag = false;
    if(value != '' || element.disabled || element.readOnly){
      flag = true;
    }
    return flag;
}, "El campo es requerido");

$.validator.addMethod("minor", function(value, element, arg) {
    flag = false;
    if(parseInt(value) <= parseInt($('#' + arg[0]).val())){
      flag = true;
    }
    return flag;
}, "Debe ser menor que la pregunta {1}");
$.validator.addMethod("year", function(value, element, param) {
    return this.optional(element) || ( (value > 1950 && value <= CI.year) || value == 9999 ) ;
}, "Ingrese un año válido");

$.validator.addMethod("valueEquals", function (value, element, param) {
    return param == value;
}, "Acepta la declaración de veracidad?");

$.validator.addMethod("peruDate",function(value, element) {
    var regeX = /^\d\d?\/\d\d?\/\d\d\d\d$/;
    flag = false;
    if(value == '' || regeX.test(value.trim())){
      flag = true;
    }
    return flag;
}, "Ingrese fecha: dd/mm/yyyy");

$.validator.addMethod("carperuDate",function(value, element) {
    var regeX = /^\d\d?\/\d\d?\/\d\d\d\d$/;
    flag = false;
    reus = value.split("/");
    if(value == '' || (regeX.test(value.trim()) && parseInt(reus[1]) >= 9 && parseInt(reus[1]) <= 12 &&  parseInt(reus[2]) == 2013 )  ){
      flag = true;
    }
    return flag;
}, "Ingrese fecha: dd/mm/yyyy");

$.validator.addMethod("valcaresu", function(value, element, arg){
    flag = false;
    var nro = $('#' + arg[1]).val();
    var cox = $('#' + arg[0] + nro).val()
    if( cox.localeCompare(value) == 0){
      flag = true;
    }
    return flag;
 }, "El resultado final debe coincidir con el resultado de la ultima visita");  



 $.validator.addMethod("validName", function(value, element) {
    return this.optional(element) || /^[a-zA-ZàáâäãåąćęèéêëìíîïłńòóôöõøùúûüÿýżźñçčšžÀÁÂÄÃÅĄĆĘÈÉÊËÌÍÎÏŁŃÒÓÔÖÕØÙÚÛÜŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/.test(value);
}, "Caracteres no permitidos"); 

 $.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Solo se permiten letras"); 

 $.validator.addMethod("exactlength", function(value, element, param) {
    return this.optional(element) || value.length == param;
}, jQuery.format("Ingrese {0} caracteres."));

 $.validator.addMethod("valueNotEquals", function(value, element, arg){
    return arg != value;
}, "Seleccione un valor");

 $.validator.addMethod("val3", function(value, element,arg){
    var length = arg.length;
    var flag = false;
    for(var i = 0; i < length; i++) {
        if(arg[i] == value)
          flag = true;
    }
   return flag;
}, "Seleccione un valor entre {0}, {1} y {2}");

 $.validator.addMethod("valdia", function(value, element){
    var dias = new Array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','99')
    var length = dias.length;
    var flag = false;
    for(var i = 0; i < length; i++) {
        if(dias[i] == value)
          flag = true;
    }
   return flag;
}, "Seleccione un día válido");


 $.validator.addMethod("valmes", function(value, element){
    var dias = new Array('01','02','03','04','05','06','07','08','09','10','11','12','99');
    var length = dias.length;
    var flag = false;
    for(var i = 0; i < length; i++) {
        if(dias[i] == value)
          flag = true;
    }
   return flag;
}, "Seleccione un mes válido");


 $.validator.addMethod("valmescen", function(value, element){
    var dias = new Array('08','09');
    var length = dias.length;
    var flag = false;
    for(var i = 0; i < length; i++) {
        if(dias[i] == value)
          flag = true;
    }
   return flag;
}, "Seleccione un mes válido(08,09)");

$.validator.addMethod("valnone", function(value, element, arg){
    var flag = true;
    if(value == 1){
        for(var i = 0; i<=arg.length; i++){
            if($('#' + arg[i]).val() == 1)
              flag = false;
        }
    }
    return flag;
 }, "Si ya selecciono una alternativa no debe seleccionar este item");  


$.validator.addMethod("valzero", function(value, element, arg){
    flag = false;
    if(value == 0 && (!element.readOnly)){
        for(var i = 0; i<=arg.length; i++){
               if($('#' + arg[i]).val() == 1 || $('#' + arg[i]).val() == 9)
               flag = true;
        }
    }else{
      flag = true;
    }
    return flag;
 }, "Debe ingresar al menos una opción, no pueden ser 0 todas las opciones.");  


$.validator.addMethod("valnueves", function(value, element, arg){
    flag = true;
    contador = 0;
    if((!element.readOnly)){
        for(var i = 0; i<=arg.length; i++){
              if($('#' + arg[i]).val() == 9) 
                contador += 1;
        }
        if( contador > 0 && contador < arg.length ){
            flag = false;
        }          
    }
    return flag;
 }, "Existe 9, Todas las opciones deben ser omisión.");


$.validator.addMethod("valninguno", function(value, element, arg){
    flag = true;
    if(value == 1){
        for(var i = 0; i<=arg.length; i++){
               if($('#' + arg[i]).val() == 1 || $('#' + arg[i]).val() == 9)
               flag = false;
        }
    }else{
      flag = true;
    }
    return flag;
 }, "Selecciono la opción ( NINGUNO / NO TIENE ), todas las opciones anteriores deben ser 0."); 


$.validator.addMethod("valzerototal", function(value, element, arg){
    flag = false;
    if(value == 0 && (!element.readOnly)){
        for(var i = 0; i<=arg.length; i++){
               if($('#' + arg[i]).val() > 0)
               flag = true;
        }
    }else{
      flag = true;
    }
    return flag;
 }, "Debe ingresar al menos una opción, no pueden ser 0 todas las opciones.");  

$.validator.addMethod("valningunototal", function(value, element, arg){
    flag = true;
    if(value == 1){
        for(var i = 0; i<=arg.length; i++){
               if($('#' + arg[i]).val() > 0)
               flag = false;
        }
    }else{
      flag = true;
    }
    return flag;
 }, "Selecciono la opción ( NINGUNO / NO TIENE ), todas las opciones anteriores deben ser 0."); 


 $.validator.addMethod("valrango", function(value, element,arg){
    var flag = false;
        if(((value >= arg[0] && value<=arg[1]) || value == arg[2]) || value=='')
          flag = true;
   return flag;
}, "Seleccione un valor entre {0}, {1} o {2}");


 $.validator.addMethod("valjango", function(value, element,arg){
    var flag = false;
        if((value >= arg[0] && value<=arg[1]) || value == arg[2])
          flag = true;
   return flag;
}, "Seleccione un valor entre {0}, {1} o {2}");


 $.validator.addMethod("valrucc", function(value, element,arg){
    var flag = false;
        if((value >= arg[0] && value<=arg[1]) || value == arg[2] || value == arg[3] || value == arg[4] && value!='')
          flag = true;
   return flag;
}, "Seleccione un valor entre {0}, {1} o {2}, {3}, {4}");

$.validator.addMethod("valtexto", function(value, element,arg){
   var flag = false;
       if(value.toUpperCase() == arg[0] || value.toUpperCase() == arg[1] || value.toUpperCase() == arg[2] || value.toUpperCase() == arg[3] || value.toUpperCase() == arg[4])
         flag = true;
  return flag;
}, "Seleccione un valor entre {0}, {1} o {2}, {3}, {4}");


});

</script>