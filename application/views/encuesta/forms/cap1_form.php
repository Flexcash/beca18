<?php 
// $depArray = NULL;
$depArray = array(-1 => ' -'); 
// foreach($dptos->result() as $d)
// {
// 	$depArray[$d->CCDD]=strtoupper($d->Nombre);
// }

$provArray = array(-1 => ' -'); 
$distArray = array(-1 => ' -'); 

$test = array(
	'name'	=> 'test',
	'id'	=> 'test',
	'maxlength'	=> 200,
	'class' => 'form-control',
);


$attr = array('class' => 'form-vertical form-auth','id' => 'cap_1');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info row">
							<div class="panel-heading">
								<h5 class="panel-title">100. Características de los miembros del hogar de origen y de los hermanos que no son miembros del hogar</h5>
							</div>
	<div class="col-md-12">			


							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="text-align:center;">101</th>
										<th style="text-align:center;">102</th>
										<th style="text-align:center;">103</th>
										<th style="text-align:center;">104</th>
										<th style="text-align:center;">105</th>
										<th style="text-align:center;">106</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nro de Orden</td>
										<td>Cuales son los nombres y apellidos de cada una de las personas que viven permanentemente en tu hogar de origen y de los hermanos que no viven en este hogar?</td>
										<td>Cual es la relacion de parentesco con el postulante?</td>
										<td>Vive permanentemente en tu hogar de origen?</td>
										<td>Sexo</td>
										<td>Qué edad tiene en años cumplidos?</td>
									</tr>
									<tr>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
									</tr>
								</tbody>
							</table>
							<br>
							<br>
							<br>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="text-align:center;"></th>
										<th style="text-align:center;" colspan="2">Para todas las personas de 3 a mas años de edad</th>
										<th style="text-align:center;" colspan="3">Solo para los hermanos de 14 a 23 años de edad</th>
										<th style="text-align:center;" colspan="3">Para todas las personas de 14 a mas años</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th style="text-align:center;"></th>
										<th style="text-align:center;">107</th>
										<th style="text-align:center;">108</th>
										<th style="text-align:center;">109</th>
										<th style="text-align:center;">110</th>
										<th style="text-align:center;">111</th>
										<th style="text-align:center;">112</th>
										<th style="text-align:center;">113</th>
										<th style="text-align:center;">114</th>
									</tr>								
									<tr>
										<td>Nro de Orden</td>
										<td>Cual es el nivel de estudios mas alto que aprobó?</td>
										<td>Cual es el idioma o lengua extranjera que aprendió en su niñez?</td>
										<td>Ha postulado a BECA 18?</td>
										<td>Ha sido aceptado en BECA 18?</td>
										<td>Planea postular a BECA 18?</td>
										<td>Es tu apoderado?</td>
										<td>Te apoya económicamente?</td>
										<td>Con que frecuencia te comunicas con:</td>
									</tr>
									<tr>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
										<td>'.form_input($test).'</td>
									</tr>
								</tbody>
							</table>							

				</div>
</div>

';

echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>



<script type="text/javascript">

$(function(){
$("#cap_1").validate({
		    rules: {  
		    	C0SELECC:{
		    		required:true,
		    	},			    		   			    	    
		    },

		    messages: {   
			//FIN MESSAGES
		    },
		    errorPlacement: function(error, element) {
		        $(element).next().after(error);
		    },
		    invalidHandler: function(form, validator) {
		      var errors = validator.numberOfInvalids();
		      if (errors) {
		        var message = errors == 1
		          ? 'Por favor corrige estos errores:\n'
		          : 'Por favor corrige los ' + errors + ' errores.\n';
		        var errors = "";
		        if (validator.errorList.length > 0) {
		            for (x=0;x<validator.errorList.length;x++) {
		                errors += "\n\u25CF " + validator.errorList[x].message;
		            }
		        }
		        alert(message + errors);
		      }
		      validator.focusInvalid();
		    },
		    submitHandler: function(form) {

				    	var car_data = $("#car_f").serializeArray();
					    car_data.push(
					        {name: 'ajax',value:1}
					    );
						
				        var bcar = $( "#car_f :submit" );
				        bcar.attr("disabled", "disabled");
				        $.ajax({
				            url: CI.site_url + "/consistencia/car",
				            type:'POST',
				            data:car_data,
				            dataType:'json',
				            success:function(json){
								alert(json.msg);
								bcar.removeAttr('disabled');
								$('#PC_A_1_Dep').attr('disabled','disabled');	
								$('#PC_A_2_Prov').attr('disabled','disabled');		
								$('#PC_A_3_Dist').attr('disabled','disabled');									
								if(parseInt($('#PC_C_2_Rfinal_resul').val()) != 3){
									$('#ctab').removeClass('active');
									$('#ctab1 a').trigger('click');
									window.scrollTo(0, 0);
								}
				            }
				        });     			          	
		    }       
}); 



// $('.fechap').datepicker({ dateFormat: 'yy-mm-dd' });

}); 
</script>
