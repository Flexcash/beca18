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

// EXTRAS
$pcap1_num = array(
	'name'	=> 'pcap1_num',
	'id'	=> 'pcap1_num',
	'class' => 'form-control',
	'maxlength'	=> 2,
);

$attr = array('class' => 'form-vertical form-auth','id' => 'cap1_f');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info row">
							<div class="panel-heading">
								<h5 class="panel-title">100. Características de los miembros del hogar de origen y de los hermanos que no son miembros del hogar</h5>
							</div>
	<div class="col-md-12">	
							<div class="form-group" style="text-align:center">
							<label for="">Número de miembros del hogar: </label>
							'.form_input($pcap1_num).'<div class="help-block error"></div>
							</div>

							<table class="table table-bordered" id="pcap1_an">
								<thead>
									<tr>
										<th style="text-align:center;">101</th>
										<th colspan="3" style="text-align:center;">102</th>
										<th style="text-align:center;">103</th>
										<th style="text-align:center;">104</th>
										<th style="text-align:center;">105</th>
										<th style="text-align:center;">106</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nro de Orden</td>
										<td colspan="3">Cuales son los nombres y apellidos de cada una de las personas que viven permanentemente en tu hogar de origen y de los hermanos que no viven en este hogar?</td>
										<td>Cual es la relacion de parentesco con el postulante?</td>
										<td>Vive permanentemente en tu hogar de origen?</td>
										<td>Sexo</td>
										<td>Qué edad tiene en años cumplidos?</td>
									</tr>
									<tr>
										<td></td>
										<td>Nombre</td>
										<td>Ap. Paterno</td>
										<td>Ap. Materno</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>									

								</tbody>
							</table>
							<br>
							<br>
							<br>
							<table class="table table-bordered"  id="pcap1_bn">
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



$('#pcap1_num').val((<?php echo $CAP01->num_rows(); ?> > 0) ? <?php echo $CAP01->num_rows(); ?> : '' );

$('#pcap1_num').keyup(function(event) {

$('#pcap1_an tr').remove('.entrev');
$('#pcap1_bn tr').remove('.entrev');

	var ahua = $(this).val();
	if(ahua >= 0 && ahua<=10){
	  for(var i=1; i<=ahua;i++){
	    var asd = '<tr class="entrev">';
	    asd +='<td><input type="text" class="form-control input3 embc' + i + '" maxlength="2" readonly name="C1P101[]" id="C1P101_' + i + '" value="' + i + '" ></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C1P102A[]" id="C1P102A_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C1P102B[]" id="C1P102B_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="50" name="C1P102C[]"  id="C1P102C_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P103[]"  id="C1P103_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P104[]"  id="C1P104_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P105[]"  id="C1P105_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="2" name="C1P106[]"  id="C1P106_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd += '</tr>';
	    $('#pcap1_an > tbody').append(asd);
	  }

	  for(var i=1; i<=ahua;i++){
	    var asd = '<tr class="entrev">';
	    asd +='<td><input type="text" class="form-control input3 embc' + i + '" maxlength="2" readonly name="C1P101x[]" id="C1P101x_' + i + '" value="' + i + '" ></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P107[]" id="C1P107_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P108[]" id="C1P108_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P109[]"  id="C1P109_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P110[]"  id="C1P110_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P111[]"  id="C1P111_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P112[]"  id="C1P112_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P113[]"  id="C1P113_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="form-control embc' + i + '" maxlength="1" name="C1P114[]"  id="C1P114_' + i + '" value="" ><div class="help-block error"></div> - Otro Especifique <div class="help-block error"></div><input type="text" class="form-control input10 embc' + i + '" maxlength="50" name="C1P114_OBS[]" id="C1P114_OBS_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd += '</tr>';
	    $('#pcap1_bn > tbody').append(asd);
	  }

	}else if(ahua==''){
		//
	}else{
		//alert('10 Entrevistas máximo');
	}

	var as = 1;
	$.each( <?php echo json_encode($CAP01->result()); ?>, function(i, data) {
		   $('#C1P101_' +  as).val(data.C1P101);
		   $('#C1P101x_' +  as).val(data.C1P101);
		   $('#C1P102A_' +  as).val(data.C1P102A);
		   $('#C1P102B_' +  as).val(data.C1P102B);
		   $('#C1P102C_' +  as).val(data.C1P102C);
		   $('#C1P103_' +  as).val(data.C1P103);
		   $('#C1P104_' +  as).val(data.C1P104);
		   $('#C1P105_' +  as).val(data.C1P105);
		   $('#C1P106_' +  as).val(data.C1P106);
		   $('#C1P107_' +  as).val(data.C1P107);
		   $('#C1P108_' +  as).val(data.C1P108);
		   $('#C1P109_' +  as).val(data.C1P109);
		   $('#C1P110_' +  as).val(data.C1P110);
		   $('#C1P111_' +  as).val(data.C1P111);
		   $('#C1P112_' +  as).val(data.C1P112);
		   $('#C1P113_' +  as).val(data.C1P113);
		   $('#C1P114_' +  as).val(data.C1P114);
		   $('#C1P114_OBS_' +  as).val(data.C1P114_OBS);
		   as++;
	}); 

});

$('#pcap1_num').trigger('keyup');


$("#cap1_f").validate({
		    rules: {  
		    	pcap1_num:{
		    		range:[1,20],
		    		required:true,
		    	},			    		   			    	    
				'C1P102A[]':{
				    required:true,
				},	       
				'C1P102B[]':{
				    required:true,
				},  		              
				'C1P102C[]':{
				    required: true,			    	
				}, 
				'C1P103[]':{
				    required:true,
				},	       
				'C1P104[]':{
				    required:true,
				},  		              
				'C1P105[]':{
				    required: true,			    	
				}, 		
				'C1P106[]':{
				    required:true,
				},	       
				'C1P107[]':{
				    required:true,
				},  		              
				'C1P108[]':{
				    required: true,			    	
				}, 		
				'C1P109[]':{
				    required: true,			    	
				}, 		
				'C1P110[]':{
				    required:true,
				},  		              
				'C1P111[]':{
				    required: true,			    	
				}, 		
				'C1P112[]':{
				    required: true,			    	
				}, 				
				'C1P113[]':{
				    required:true,
				},  		              
				'C1P114[]':{
				    required: true,			    	
				}, 		
				'C1P114_OBS[]':{		    	
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

				    	var cap1_data = $("#cap1_f").serializeArray();
					    cap1_data.push(
					        {name: 'ajax',value:1}
					    );
						
				        var bcar = $( "#cap1_f :submit" );
				        bcar.attr("disabled", "disabled");
				        $.ajax({
				            url: CI.site_url + "/encuesta/cap1",
				            type:'POST',
				            data:cap1_data,
				            dataType:'json',
				            success:function(json){
								alert(json.msg);
								bcar.removeAttr('disabled');
								$('#ctab1').removeClass('active');
								window.scrollTo(0, 0);
								$('#ctab2 a').trigger('click');								
				            }
				        });     			          	
		    }       
}); 


}); 
</script>