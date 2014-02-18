<?php 

//CAP 4
$C4P401 = array(
	'name'	=> 'C4P401',
	'id'	=> 'C4P401',
	'maxlength'	=> 2,
	'class' => 'form-control',
);

$C4P402 = array(
	'name'	=> 'C4P402',
	'id'	=> 'C4P402',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P403 = array(
	'name'	=> 'C4P403',
	'id'	=> 'C4P403',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P403_OBS = array(
	'name'	=> 'C4P403_OBS',
	'id'	=> 'C4P403_OBS',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P404 = array(
	'name'	=> 'C4P404',
	'id'	=> 'C4P404',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P405 = array(
	'name'	=> 'C4P405',
	'id'	=> 'C4P405',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P406 = array(
	'name'	=> 'C4P406',
	'id'	=> 'C4P406',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P407 = array(
	'name'	=> 'C4P407',
	'id'	=> 'C4P407',
	'maxlength'	=> 1,
	'class' => 'form-control',
);

$C4P408 = array(
	'name'	=> 'C4P408',
	'id'	=> 'C4P408',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P409 = array(
	'name'	=> 'C4P409',
	'id'	=> 'C4P409',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4P410 = array(
	'name'	=> 'C4P410',
	'id'	=> 'C4P410',
	'maxlength'	=> 50,
	'class' => 'form-control',
);

$C4_OBS = array(
	'name'	=> 'C4_OBS',
	'id'	=> 'C4_OBS',
	'maxlength'	=> 1000,
	'class' => 'form-control',
);



//400*******************************************************************************************************


$attr = array('class' => 'form-vertical form-auth','id' => 'cap_4');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info row">

	<div class="panel-heading">
		<h5 class="panel-title">400. En los ultimos tres meses, sin considerar a padres y hermanos, mencione a 10 personas con las que ha mantenido mayor comunicación o contacto</h5>
	</div>
	<div class="col-md-12">	
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3">401</th>
					                 <th class="span3">402</th>
					                 <th class="span3">403</th>
					                 <th class="span3">404</th>
					                 <th class="span3">405</th>
					                 <th class="span3">406</th>
					                 <th class="span3">407</th>
					                 <th class="span3">408</th>
					                 <th class="span3">409</th>
					                 <th class="span3">410</th>
					                </tr>					              
					               <tr>
					                 <th class="span3">Nro de Orden</th>
					                 <th class="span3">Nombre</th>
					                 <th class="span3">Tipo de relación</th>
					                 <th class="span3">Es tu compañero en la especialidad que estudias</th>
					                 <th class="span3">Es becario del programa Beca 18</th>
					                 <th class="span3">Sexo</th>
					                 <th class="span3">Vive en el Perú o en el extranjero</th>
					                 <th class="span3">En que Departamento vive?</th>
					                 <th class="span3">En que Provincia vive?</th>
					                 <th class="span3">En que Distrito vive</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>' . form_input($C4P401) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P402) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P403) . '<div class="help-block error">' . form_input($C4P403_OBS) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P404) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P405) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P406) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P407) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P408) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P409) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($C4P410) . '<div class="help-block error"></div></td>
					              </tr>  
			              </tbody>
			           </table>	


	</div>	           
			<div class="col-md-12">
				<label for="">Observaciones</label>
					'.form_textarea($C4_OBS).'										
			</div>	
</div>';


echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>
