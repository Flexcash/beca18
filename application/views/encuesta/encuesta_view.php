<?php 

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// CARATULA
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
$test = array(
	'name'	=> 'test',
	'id'	=> 'test',
	'maxlength'	=> 200,
	'class' => 'form-control',
);



$departamento = array(
	'name'	=> 'departamento',
	'id'	=> 'departamento',
	'maxlength'	=> 200,
	'class' => 'input200',
);

$provincia = array(
	'name'	=> 'provincia',
	'id'	=> 'provincia',
	'maxlength'	=> 200,
	'class' => 'input200',
);

// $distrito = array(
// 	'name'	=> 'distrito',
// 	'id'	=> 'distrito',
// 	'maxlength'	=> 200,
// 	'class' => 'input200',
// );


// $depArray = NULL;
$depArray = array(-1 => ' -'); 
// foreach($dptos->result() as $d)
// {
// 	$depArray[$d->CCDD]=strtoupper($d->Nombre);
// }

$provArray = array(-1 => ' -'); 
$distArray = array(-1 => ' -'); 


$PC_A_4_CentroP = array(
	'name'	=> 'PC_A_4_CentroP',
	'id'	=> 'PC_A_4_CentroP',
	'maxlength'	=> 200,
	'class' => 'input200',
);

$PC_A_5_NucleoUrb = array(
	'name'	=> 'PC_A_5_NucleoUrb',
	'id'	=> 'PC_A_5_NucleoUrb',
	'maxlength'	=> 200,
	'class' => 'input200',
);

$PC_A_6_Ugel = array(
	'name'	=> 'PC_A_6_Ugel',
	'id'	=> 'PC_A_6_Ugel',
	'maxlength'	=> 200,
	'class' => 'input200',
);

$PC_A_7Dir_1_Tvia = array(
	'name'	=> 'PC_A_7Dir_1_Tvia',
	'id'	=> 'PC_A_7Dir_1_Tvia',
	'maxlength'	=> 1,
	'class' => 'input1 form-control',	
);

$PC_A_7Dir_2_Nomb = array(
	'name'	=> 'PC_A_7Dir_2_Nomb',
	'id'	=> 'PC_A_7Dir_2_Nomb',
	'maxlength'	=> 200,
	'class' => 'form-control',	
	'width' => 300,
);

$PC_A_7Dir_3_Nro = array(
	'name'	=> 'PC_A_7Dir_3_Nro',
	'id'	=> 'PC_A_7Dir_3_Nro',
	'maxlength'	=> 4,
	'class' => 'input4 form-control',
);

$PC_A_7Dir_4_Piso = array(
	'name'	=> 'PC_A_7Dir_4_Piso',
	'id'	=> 'PC_A_7Dir_4_Piso',
	'maxlength'	=> 2,
	'class' => 'input3 form-control',
);

$PC_A_7Dir_5_Mz = array(
	'name'	=> 'PC_A_7Dir_5_Mz',
	'id'	=> 'PC_A_7Dir_5_Mz',
	'maxlength'	=> 3,
	'class' => 'input3 form-control',
);

$PC_A_7Dir_6_Lt = array(
	'name'	=> 'PC_A_7Dir_6_Lt',
	'id'	=> 'PC_A_7Dir_6_Lt',
	'maxlength'	=> 3,
	'class' => 'input3 form-control',
);

$PC_A_7Dir_7_Sect = array(
	'name'	=> 'PC_A_7Dir_7_Sect',
	'id'	=> 'PC_A_7Dir_7_Sect',
	'maxlength'	=> 3,
	'class' => 'input3 form-control',
);

$PC_A_7Dir_8_Zona = array(
	'name'	=> 'PC_A_7Dir_8_Zona',
	'id'	=> 'PC_A_7Dir_8_Zona',
	'maxlength'	=> 3,
	'class' => 'input3 form-control',
);

$PC_A_7Dir_9_Et = array(
	'name'	=> 'PC_A_7Dir_9_Et',
	'id'	=> 'PC_A_7Dir_9_Et',
	'maxlength'	=> 3,
	'class' => 'input3 form-control',
);

$PC_A_7Dir_10_Km = array(
	'name'	=> 'PC_A_7Dir_10_Km',
	'id'	=> 'PC_A_7Dir_10_Km',
	'maxlength'	=> 3,
	'class' => 'input3 form-control',
);

$PC_A_8_DirVerif = array(
	'name'	=> 'PC_A_8_DirVerif',
	'id'	=> 'PC_A_8_DirVerif',
	'maxlength'	=> 1,
	'class' => 'input1',
);

$PC_A_9_RefDir = array(
	'name'	=> 'PC_A_9_RefDir',
	'id'	=> 'PC_A_9_RefDir',
	'maxlength'	=> 200,
	'class' => 'input200',
);

$PC_B_1_CodLocal = array(
	'name'	=> 'PC_B_1_CodLocal',
	'id'	=> 'PC_B_1_CodLocal',
	'class' => 'input6',
	'maxlength'	=> 6,
	// 'disabled' => 'disabled',
);

$PC_B_2_CantEv = array(
	'name'	=> 'PC_B_2_CantEv',
	'id'	=> 'PC_B_2_CantEv',
	'maxlength'	=> 2,
	'class' => 'input2',	
);


// DETALLE - Sección C: Entrevista y Supervision

$PC_C_2_Rfinal_fecha = array(
	'name'	=> 'PC_C_2_Rfinal_fecha',
	'id'	=> 'PC_C_2_Rfinal_fecha',
	'maxlength'	=> 10,
	'class' => 'input10 fechap',
	'onKeyUp' => "javascript:this.value=formateafecha(this.value);",
);

// FIN DETALLE - Sección C: Entrevista y Supervision

$PC_C_1_NroVis = array(
	'name'	=> 'PC_C_1_NroVis',
	'id'	=> 'PC_C_1_NroVis',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Fecha = array(
	'name'	=> 'PC_C_1_Et_Fecha',
	'id'	=> 'PC_C_1_Et_Fecha',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Hini = array(
	'name'	=> 'PC_C_1_Et_Hini',
	'id'	=> 'PC_C_1_Et_Hini',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Hfin = array(
	'name'	=> 'PC_C_1_Et_Hfin',
	'id'	=> 'PC_C_1_Et_Hfin',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Fecha_Prox = array(
	'name'	=> 'PC_C_1_Et_Fecha_Prox',
	'id'	=> 'PC_C_1_Et_Fecha_Prox',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Hora_Prox = array(
	'name'	=> 'PC_C_1_Et_Hora_Prox',
	'id'	=> 'PC_C_1_Et_Hora_Prox',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Res = array(
	'name'	=> 'PC_C_1_Et_Res',
	'id'	=> 'PC_C_1_Et_Res',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Et_Res_O = array(
	'name'	=> 'PC_C_1_Et_Res_O',
	'id'	=> 'PC_C_1_Et_Res_O',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Jb_Fecha = array(
	'name'	=> 'PC_C_1_Jb_Fecha',
	'id'	=> 'PC_C_1_Jb_Fecha',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Jb_Hini = array(
	'name'	=> 'PC_C_1_Jb_Hini',
	'id'	=> 'PC_C_1_Jb_Hini',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Jb_Hfin = array(
	'name'	=> 'PC_C_1_Jb_Hfin',
	'id'	=> 'PC_C_1_Jb_Hfin',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Jb_Res = array(
	'name'	=> 'PC_C_1_Jb_Res',
	'id'	=> 'PC_C_1_Jb_Res',
	'maxlength'	=> 200,
	'width' => 300,
);

$PC_C_1_Jb_Res_O = array(
	'name'	=> 'PC_C_1_Jb_Res_O',
	'id'	=> 'PC_C_1_Jb_Res_O',
	'maxlength'	=> 200,
	'width' => 300,
);


///////////////////////////////////////////

$PC_C_2_Rfinal_resul = array(
	'name'	=> 'PC_C_2_Rfinal_resul',
	'id'	=> 'PC_C_2_Rfinal_resul',
	'class' => 'input1',
);

$PC_C_2_Rfinal_resul_O = array(
	'name'	=> 'PC_C_2_Rfinal_resul_O',
	'id'	=> 'PC_C_2_Rfinal_resul_O',
	'maxlength'	=> 200,
	'width' => 300,
	'disabled' => 'disabled',
);

$PC_D_EvT_dni = array(
	'name'	=> 'PC_D_EvT_dni',
	'id'	=> 'PC_D_EvT_dni',
	'maxlength'	=> 8,
	'class' => 'input8 dnic',
);

$PC_D_EvT_Nomb = array(
	'name'	=> 'PC_D_EvT_Nomb',
	'id'	=> 'PC_D_EvT_Nomb',
	'maxlength'	=> 200,
	'width' => 300,
	//'readonly' => true,
);

$PC_D_JBri_dni = array(
	'name'	=> 'PC_D_JBri_dni',
	'id'	=> 'PC_D_JBri_dni',
	'maxlength'	=> 8,
	'class' => 'input8 dnic',
);

$PC_D_JBri_Nomb = array(
	'name'	=> 'PC_D_JBri_Nomb',
	'id'	=> 'PC_D_JBri_Nomb',
	'maxlength'	=> 200,
	'width' => 300,
	//'readonly' => true,
);

$PC_D_CProv_dni = array(
	'name'	=> 'PC_D_CProv_dni',
	'id'	=> 'PC_D_CProv_dni',
	'maxlength'	=> 8,
	'class' => 'input8 dnic',
);

$PC_D_CProv_Nomb = array(
	'name'	=> 'PC_D_CProv_Nomb',
	'id'	=> 'PC_D_CProv_Nomb',
	'maxlength'	=> 200,
	'width' => 300,
	//'readonly' => true,
);

$PC_D_CDep_dni = array(
	'name'	=> 'PC_D_CDep_dni',
	'id'	=> 'PC_D_CDep_dni',
	'maxlength'	=> 8,
	'class' => 'input8 dnic',
);

$PC_D_CDep_Nomb = array(
	'name'	=> 'PC_D_CDep_Nomb',
	'id'	=> 'PC_D_CDep_Nomb',
	'maxlength'	=> 200,
	'width' => 300,
	//'readonly' => true,
);

$PC_D_SupN_dni = array(
	'name'	=> 'PC_D_SupN_dni',
	'id'	=> 'PC_D_SupN_dni',
	'maxlength'	=> 8,
	'class' => 'input8 dnic',
);

$PC_D_SupN_Nomb = array(
	'name'	=> 'PC_D_SupN_Nomb',
	'id'	=> 'PC_D_SupN_Nomb',
	'maxlength'	=> 200,
	'width' => 300,
	//'readonly' => true,
);

/////////////////

// EXTRAS
$pcar_num = array(
	'name'	=> 'pcar_num',
	'id'	=> 'pcar_num',
	'class' => 'input2',
	'maxlength'	=> 2,
);

$pr = 1;
$boss_p_ct = ($pr!=1)? 'hide' : '';

////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// CARATULA
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
$attr = array('class' => 'form-vertical form-auth','id' => 'car_f');

echo form_open($this->uri->uri_string(),$attr); 


echo '
<h2>ENCUESTA DE EVALUACIÓN DEL IMPACTO DEL PROGRAMA BECA18</h2>
<div class="panel panel-info row">
		
			<div class="col-md-2">		
						<div class="form-group">
							 <label for="">Nro Seleccion del Postulante</label>
							 ' . form_input($test) . '<div class="help-block error"></div>
						</div>

			</div>

			<div class="col-md-4">
						<div class="form-group">
							 <label for="">Es un postulante de reemplazo?</label>
							 ' . form_input($test) . '<div class="help-block error"></div>

							 <label for="">Anote el Nro de seleccion del postulante de reemplazo</label>
							 ' . form_input($test) . '<div class="help-block error"></div>

						</div>
			</div>	

			<div class="col-md-3">
						<div class="form-group">
							 <label for="">Accedio a la beca?</label>
							 ' . form_input($test) . '<div class="help-block error"></div>
						</div>			


			</div>	

			<div class="col-md-3">
						<div class="form-group">
							 <label for="">Cuestionario Nro</label>
							 ' . form_input($test) . '<div class="help-block error"></div>
						</div>					
			</div>

</div>

';







echo '

<div class="panel panel-info row">
		
			<div class="col-md-6">		
							<div class="form-group">
								<h4 class="panel-title">Ubicación Geográfica</h4>
							</div>	

							<ul class="list-group">
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">1. Departamento </div> '. form_dropdown('PC_A_1_Dep', $depArray, FALSE,'class="input200" id="PC_A_1_Dep"') .' </li>
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">2. Provincia </div> '. form_dropdown('PC_A_2_Prov', $provArray, FALSE,'class="input200" id="PC_A_2_Prov"') .' <div class="help-block error"></div></li>
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">3. Distrito </div> '. form_dropdown('PC_A_3_Dist', $distArray, FALSE,'class="input200" id="PC_A_3_Dist"') .' <div class="help-block error"></div></li>
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">4. Centro Poblado </div> '.form_input($PC_A_4_CentroP).'<div class="help-block error"></div></li>
							</ul>
			</div>

			<div class="col-md-6">
							<div class="panel-heading">
								<h4 class="panel-title">Ubicación Muestral</h4>
							</div>	

							<ul class="list-group">
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">5. Zona Nro </div> '. form_input($PC_A_4_CentroP) .' </li>
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">6. Manzana Nro </div> '. form_input($PC_A_4_CentroP) .' <div class="help-block error"></div></li>
									<li class="list-group-item"><div style="width:150px; margin-left:10px; float:left;">7. Aer Nro </div> '. form_input($PC_A_4_CentroP) .' <div class="help-block error"></div></li>
							</ul>
			</div>	

</div>

';


echo '
<div class="panel panel-info row">
	<div class="col-md-12">	
				<h4 class="panel-title">8. Dirección actual donde vive actualmente el postulante</h4>
				<div class="form-group">
					<label class="">Tipo de Vía</label>
						'.form_input($test).' <div class="help-block error"></div> 1. Avenida , 2. Jiron , 3. Calle , 4. Pasaje , 5. Carretera, 6. Autopista , 7. Otro
					
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
												<thead>
													<tr>
														<th>Nombre de la via</th>
														<th>N° de Puerta</th>
														<th>Piso</th>
														<th>Mz.</th>
														<th>Lote</th>
														<th>Sector</th>
														<th>Zona</th>
														<th>Etapa</th>
														<th>Km</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>'.form_input($PC_A_7Dir_2_Nomb).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_3_Nro).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_4_Piso).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_5_Mz).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_6_Lt).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_7_Sect).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_8_Zona).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_9_Et).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_10_Km).'<div class="help-block error"></div></td>
													</tr>
												</tbody>
					</table>
				</div>
				
				<div class="form-group">
						<label for="">Teléfono</label>
						' . form_input($test) . '
				</div>		
	</div>			
</div>

';


echo '

';

echo '

<div class="panel panel-info row">
	<div class="col-md-6">	
				<div class="form-group">
						<label for="">9. Nombres y Apellidos del Postulate BECA18</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	

	</div>	
	<div class="col-md-6">	
				<div class="form-group">
						<label for="">10. Nro DNI</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	
	</div>							
</div>

';

echo '

<div class="panel panel-info row">
	<div class="col-md-6">	
				<div class="form-group">
						<label for="">11. Correo Electrónico</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	

	</div>	
	<div class="col-md-6">	
				<div class="form-group">
						<label for="">12. Teléfono Celular</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	
	</div>							
</div>

';

echo '

<div class="panel panel-info row">
	<div class="col-md-12">	
				<div class="form-group">
						<label for="">13. La vivienda en la que vives actualmente es tu vivienda de origen?</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	

	</div>						
</div>

';


echo '
<div class="panel panel-info row">
	<div class="col-md-12">	
				<h4 class="panel-title">14. Dirección de la vivienda de origen del postulante</h4>
				<div class="form-group">
					<label class="">Tipo de Vía</label>
						'.form_input($test).' <div class="help-block error"></div> 1. Avenida , 2. Jiron , 3. Calle , 4. Pasaje , 5. Carretera, 6. Autopista , 7. Otro
					
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
												<thead>
													<tr>
														<th>Nombre de la via</th>
														<th>N° de Puerta</th>
														<th>Piso</th>
														<th>Mz.</th>
														<th>Lote</th>
														<th>Sector</th>
														<th>Zona</th>
														<th>Etapa</th>
														<th>Km</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>'.form_input($PC_A_7Dir_2_Nomb).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_3_Nro).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_4_Piso).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_5_Mz).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_6_Lt).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_7_Sect).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_8_Zona).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_9_Et).'<div class="help-block error"></div></td>
														<td>'.form_input($PC_A_7Dir_10_Km).'<div class="help-block error"></div></td>
													</tr>
												</tbody>
					</table>
				</div>
				
				<div class="form-group">
						<label for="">Teléfono</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>		
			
	</div>	
				<div class="col-md-4">
						<label for="">15. Departamento</label>
						' . form_input($test) . '<div class="help-block error"></div>		
				</div>		

				<div class="col-md-4">
						<label for="">16. Provincia</label>
						' . form_input($test) . '<div class="help-block error"></div>					
				</div>	


				<div class="col-md-4">
						<label for="">17. Distrito</label>
						' . form_input($test) . '<div class="help-block error"></div>					
				</div>	
</div>

';


echo '

<div class="panel panel-info row">
	<div class="col-md-12">	
				<div class="form-group">
						<label for="">18. La Encuesta se realizó en</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	

	</div>						
</div>

';


echo '

<div class="panel panel-info">
							<div class="panel-heading">
								<h5 class="panel-title">19. Entrevista y Supervision</h5> 
							</div>

							<div>Número de visitas: '.form_input($pcar_num).'<div class="help-block error"></div></div>

							<h6>1. Evaluación y Supervisión</h6>

							<table class="table table-bordered"  id="pcar_c_n">
								<thead>

									<tr>
										<th style="text-align:center;vertical-align:middle;" rowspan="3">Visitas</th>

										<th style="text-align:center;" colspan="6">Encuestador/a</th>
										<!-- <th>Piso</th> -->
										<!-- <th>Mz.</th>
										<th>Lote</th>
										<th>Sector</th>
										<th>Zona</th> -->
										<th style="text-align:center;" colspan="4">Jefe/a de Brigada</th>
									</tr>
									<tr>

										<th style="text-align:center;vertical-align:middle;" rowspan="2">Fecha</th>
										<th style="text-align:center;" colspan="2">Hora</th>
										<th style="text-align:center;" colspan="2">Próxima Visita</th>
										<th style="text-align:center;vertical-align:middle;" rowspan="2">Resultado de la visita (*)</th>
										<th style="text-align:center;vertical-align:middle;" rowspan="2">Fecha</th>
										<th style="text-align:center;" colspan="2">Hora</th>
										<th style="text-align:center;vertical-align:middle;" rowspan="2">Resultado de la visita (*)</th>

									</tr>

									<tr>

										<th style="text-align:center;">De</th>
										<th style="text-align:center;">A</th>
										<th style="text-align:center;">Fecha</th>
										<th style="text-align:center;">Hora</th>
										<th style="text-align:center;">De</th>
										<th style="text-align:center;">A</th>

									</tr>

								</thead>
								<tbody>

								</tbody>
							</table>

							<table class="table table-bordered">
								<thead>
									<tr>
										<th colspan="2">20. Resultado final de la evaluacion tecnica</th>
										<th style="text-align:center;">(*) Codigos de Resultado</th>
									</tr>								
								</thead>
								<tbody>
									<tr>
										<td>Fecha: </td>
										<td>'.form_input($PC_C_2_Rfinal_fecha).'<div class="help-block error"></div></td>
										<td rowspan="2">
											<ul>
												<li>1. Completa</li>
												<li>2. Incompleta</li>
												<li>3. Rechazo</li>
												<li>4. Ausente</li>
												<li>5. Vivienda Desocupada</li>
												<li>6. No se inició la entrevista</li>
												<li>7. Otro'.form_input($test).'</li>
											</ul>
										</td>
									</tr>
									<tr>
										<td>Resultado: </td>
										<td>'.form_input($PC_C_2_Rfinal_resul).' - Especifique '.form_input($PC_C_2_Rfinal_resul_O).'<div class="help-block error"></div></td>
									</tr>
								</tbody>
							</table>
						</div>

';


echo '

<div class="panel panel-info">
							<div class="panel-heading">
								<h5 class="panel-title">21. Funcionarios de la Encuesta</h5>
							</div>

							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="text-align:center;">Cargo</th>
										<th style="text-align:center;">DNI</th>
										<th style="text-align:center;">Nombres y Apellidos</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Encuestador/a</td>
										<td>'.form_input($PC_D_EvT_dni).' <div class="help-block error"></div></td>
										<td>'.form_input($PC_D_EvT_Nomb).'<div class="help-block error"></div></td>
									</tr>

									<tr>
										<td>Jefe/a de Brigada</td>
										<td>'.form_input($PC_D_JBri_dni).' <div class="help-block error"></div></td>
										<td>'.form_input($PC_D_JBri_Nomb).'</td>
									</tr>

									<tr>
										<td>Coordinador/a Departamental</td>
										<td>'.form_input($PC_D_CDep_dni).' <div class="help-block error"></div></td>
										<td>'.form_input($PC_D_CDep_Nomb).'</td>
									</tr>

								</tbody>
							</table>

						</div>

';



echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>
<br>
<br>
<br>
<br>
<?php 
$attr = array('class' => 'form-vertical form-auth','id' => 'cap_1');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info">
							<div class="panel-heading">
								<h5 class="panel-title">100. Características de los miembros del hogar de origen y de los hermanos que no son miembros del hogar</h5>
							</div>

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

';

echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>
<br>
<br>
<br>
<br>
<?php 
$attr = array('class' => 'form-vertical form-auth','id' => 'cap_2');

echo form_open($this->uri->uri_string(),$attr); 



echo '

<div class="panel panel-info row">

	<div class="panel-heading">
		<h5 class="panel-title">200. Características de la Postulación a BECA 18</h5>
	</div>

	<div class="col-md-6">	
				<div class="form-group">
						<label for="">201. La Institución con la que postulaste a BECA 18 fue tu primera opción?</label>
						' . form_input($test) . '<div class="help-block error"></div>
				</div>	

				<div class="form-group">
						<label for="">202. En que institución educativa te hubiera gustado estudiar?</label>
						' . form_input($test) . '
						<label for="">... Es una?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
				</div>	

				<div class="form-group">
						<label for="">203. La carrera con la que postulaste a BECA 18 fue tu primera opción?</label>
						' . form_input($test) . '<div class="help-block error"></div>					
				</div>	

				<div class="form-group">
						<label for="">204. Qué carrera te hubiera gustado estudiar como primera opción?</label>
						' . form_input($test) . '<div class="help-block error"></div>					
				</div>	

				<div class="form-group">
						<label for="">205. Cómo te enteraste del programa BECA 18?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Colegio</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>Medios de Comunicación(periódico, radio, TV)</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>Gobierno Regional/Local</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Familiares/Amigos</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Postulantes de BECA 18</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Pagina web PRONABEC</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Redes Sociales (Facebook, Twitter)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					               <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					               </tr>			               				               					                					                						               				               					               					               
			              </tbody>
			           </table>					
				</div>	

				<div class="form-group">
						<label for="">206. Antes de conocer el programa BECA 18. Qué pensabas hacer acabando el colegio?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Dedicarme a Trabajar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>Prepararme para ingresar a la Universidad/Instituto</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>Apoyar a un familiar en su negocio chacra</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Labores del hogar (trabajo no remunerado)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Inscribirme al servicio militar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					               <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					               </tr>			               				               					                					                						               				               					               					               
			              </tbody>
			           </table>					
				</div>

				<div class="form-group">
						<label for="">207. Bajo que modalidad postulaste a la institución educativa a la cual ingresaste para BECA 18?</label>
						' . form_input($test) . '
						<label for="">Especifique</label>
						' . form_input($test) . '<div class="help-block error"></div>						
				</div>	
	</div>	







	<div class="col-md-6">	
				<h4>Preparación Academica</h4>
				<div class="form-group">
						<label for="">208. Cómo te preparaste para postular a la institución educativa para BECA 18?</label>
						' . form_input($test) . '
						<label for="">Especifique</label>
						' . form_input($test) . '<div class="help-block error"></div>							
				</div>	


				<div class="form-group">
						<label for="">209. Cuanto tiempo te estuviste preparando?</label>
						<div class="row">
							<div class="col-md-6">	
								<p>Años</p>
								' . form_input($test) . '<div class="help-block error"></div>	
							</div>		
							<div class="col-md-6">	
								<p>Meses</p>
								' . form_input($test) . '<div class="help-block error"></div>
							</div>			
						</div>													
				</div>	

				<div class="form-group">
						<label for="">210. Consideras que la preparación que tuviste fue suficiente para el examen de admisión?</label>
						' . form_input($test) . '						
				</div>	


				<h4>Orientación o Asistencia Vocacional</h4>

				<div class="form-group">
						<label for="">211. Recibiste algún tipo de orientación o asistencia para elegir la carrera a la que ingresaste para BECA 18?</label>
						' . form_input($test) . '						
				</div>	

				<div class="form-group">
						<label for="">212. Quién te brindo orientación o asistencia?</label>
						' . form_input($test) . '
						<label for="">Especifique</label>
						' . form_input($test) . '<div class="help-block error"></div>							
				</div>	

				<h4>Hábitos de Estudio</h4>

				<div class="form-group">
						<label for="">213. Cuando estabas en 5to de Secundaria. Cuántas horas le dedicabas al estudio de lunes a viernes? (No considere las horas de clase)</label>
						' . form_input($test) . '	Número de horas <div class="help-block error"></div>			
				</div>	

				<div class="form-group">
						<label for="">214. Cuando estabas en 5to de secundaria. Cuántas horas le dedicabas al estudio los sábados y domingos? (No considere las horas de clase)</label>
						' . form_input($test) . '	Número de horas	<div class="help-block error"></div>				
				</div>					
	</div>							
</div>

';



echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>
<br>
<br>
<br>
<br>


<?php 
$attr = array('class' => 'form-vertical form-auth','id' => 'cap_3');

echo form_open($this->uri->uri_string(),$attr); 

echo '

<div class="panel panel-info row">

	<div class="panel-heading">
		<h5 class="panel-title">300. Matricula y Desempeño de la institución educativa Superior</h5>
	</div>

	<div class="col-md-6">	

			<div class="form-group">
				<label for="">301. Actualmente. Te encuentras matriculado en alguna institución de educación superior</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>		

			<div class="form-group">
				<label for="">302. La Institución donde te encuentras matriculado es una(un)...</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	


			<div class="form-group">
				<label for="">303. Cual es el nombre de la (del)...</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">304. En que departamento, provincia y distrito se encuentra el local donde estudias?</label>
				<p>Departamento</p>
				' . form_input($test) . '<div class="help-block error"></div>			
				<p>Provincia</p>
				' . form_input($test) . '<div class="help-block error"></div>	
				<p>Distrito</p>
				' . form_input($test) . '<div class="help-block error"></div>												
			</div>	

			<div class="form-group">
				<label for="">305. En que carrera o especialidad te encuentras matriculado?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">306. Desde el año 2013. En qué semestres estuviste matriculado?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">307. En que ciclo y en cuantos cursos te encuentras actualmente matriculado?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	
	</div>

	<div class="col-md-6">	
			<div class="form-group">
				<label for="">308. En el año 2013. Estuviste matriculado en alguna institución de educación superior?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>		

			<div class="form-group">
				<label for="">309. Cual es la razón por la que no estas estudiando actualmente?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Servicio militar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>Tenia que trabajar por necesidad económica</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>No podia financiar mi carrera</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Deseaba trabajar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>No me gustó la carrera</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Me fue mal académicamente (malas notas)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Por motivos familiares (paternidad/maternidad/matrimonio)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Por motivos de salud (accidente/enfermedad)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>			               				               					                					                						               				               					               					               
			              </tbody>
			           </table>						
			</div>	

			<div class="form-group">
				<label for="">310. Tienes planes de retomar tus estudios</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>


				<div class="form-group">
						<label for="">311. Dentro de cuánto tiempo tienes planeado retomar tus estudios</label>
						<div class="row">
							<div class="col-md-6">	
								<p>Años</p>
								' . form_input($test) . '<div class="help-block error"></div>	
							</div>		
							<div class="col-md-6">	
								<p>Meses</p>
								' . form_input($test) . '<div class="help-block error"></div>
							</div>			
						</div>													
				</div>		

			<div class="form-group">
				<label for="">312. La institución educativa donde te encontrabas matriculado es una(un)</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">313. Cuál es el nombre de la (del)...</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>		






	</div>

</div>';


///2 cara

echo '

<div class="panel panel-info row">

	<div class="col-md-6">	

			<div class="form-group">
				<label for="">314. En que departamento, provincia y distrito se encuentra el local donde estudiabas?</label>
				<p>Departamento</p>
				' . form_input($test) . '<div class="help-block error"></div>			
				<p>Provincia</p>
				' . form_input($test) . '<div class="help-block error"></div>	
				<p>Distrito</p>
				' . form_input($test) . '<div class="help-block error"></div>												
			</div>	

			<div class="form-group">
				<label for="">315. En qué carrera o especialidad te matriculaste?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">316. Durante el 2013. En que semestre estuviste matriculado?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">317. Cual fué el último ciclo completo que cursaste y en cuantos cursos estuviste matriculado?</label>

						<table class="table table-condensed" id="emb_table">
					              <thead>
						               <tr>
						                 <th class="span3">Ciclo</th>
						                 <th class="span1">Nro de Cursos</th>
						                </tr>
					             </thead>
					              <tbody>
							              <tr>
							                 <td>1</td>
							                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
							              </tr>  
							               <tr>
							                 <td>2</td>
							                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
							               </tr> 
							              <tr>
							                 <td>3</td>
							                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
							               </tr>
							              <tr>
							                 <td>4</td>
							                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
							               </tr>		               				               					                					                						               				               					               					               
			              		</tbody>
			           </table>	

				<p>No completo ningún ciclo?</p>
						' . form_input($test) . '<div class="help-block error"></div>				           
			</div>	



			<div class="form-group">
				<label for="">318. Cual es la razón por la que hasta el momento no te has matriculado en ninguna institución de educación superior</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Servicio militar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>Tenia que trabajar por necesidad económica</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>No podia financiar mi carrera</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Deseaba trabajar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>No me gustó la carrera</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Me fue mal académicamente (malas notas)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Por motivos familiares (paternidad/maternidad/matrimonio)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Por motivos de salud (accidente/enfermedad)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>			               				               					                					                						               				               					               					               
			              </tbody>
			           </table>								
			</div>

			<div class="form-group">
				<label for="">319. Tienes planes de estudiar en alguna institución de educación superior en el futuro?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

	</div>

	<div class="col-md-6">	
			<div class="form-group">
				<label for="">320. Dentro de qué plazo planeas matricularte en alguna institución de educación superior?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<h4>Asistencia Médica</h4>
			<div class="form-group">
				<label for="">321. Durante el último ciclo cursado completo. Ha dejado de asistir a clases porque:</label>		
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span3"></th>
					                 <th class="span1">322. Cuantos días dejaste de asistir</th>
					                </tr>
					             </thead>
					              <tbody>
					               <tr>
					                 <th class="span1"></th>
					                 <th class="span1">Si/No</th>
					                 <th class="span1">De 1 a 5 días / Más de 5 días</th>
					                </tr>
					              <tr>
					                 <td>Estaba enfermo?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>No tenía para pasaje o para cubrir gastos?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>No quiso asistir?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>Tuvo que hacer trámites relacionados con BECA 18?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>Tenía problemas socioemoconales(falta de aprecio, extrañaba a sus Padres, etc)?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					              <tr>
					                 <td>Prefería estudiar para otro curso?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
						          <tr>
					                 <td>Otra razón?... Especifique ' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  				              


			              </tbody>
			           </table>								
			</div>	

			<h4>Rendimiento / Desempeño Académico</h4>
			<div class="form-group">
				<label for="">322. Durante el último ciclo cursado completo. en cuántos cursos te matriculaste?</label>
						<p>Número de cursos</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">323. Durante el último ciclo cursado completo. en cuántos créditos te matriculaste?</label>
						<p>Número de créditos</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

	</div>

</div>';

//3 cara

echo '

<div class="panel panel-info row">

	<div class="col-md-6">	

			<div class="form-group">
				<label for="">324. Durante el último ciclo cursado completo. Cual fue el número regular de créditos en los que deberias haberte matriculado?</label>
						<p>Número de créditos</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>	

			<div class="form-group">
				<label for="">325. Cuál es la nota mínima para aprobar un curso en la universidad / instituto en donde te matriculaste?</label>
						<p>Nota mínima</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">326. Durante el último ciclo cursado completo. Cuántos cursos aprobaste con...?</label>
						<p>Número de cursos aprobados</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">327. Durante el último ciclo cursado completo. Cuántos cursos aprobaste con una nota mayor a...?</label>
						<p>Número de cursos aprobados</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">328. Durante el último ciclo cursado completo. Cuántos cursos desaprobaste?</label>
						<p>Número de cursos desaprobados</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">329. Cuál es la principal razón por la que no aprobaste esos cursos?</label>
						' . form_input($test) . '<div class="help-block error"></div>
						<p>Especifique</p>
						' . form_input($test) . '<div class="help-block error"></div>	
			</div>

	</div>	




	<div class="col-md-6">	

			<div class="form-group">
				<label for="">330. Durante el último ciclo cursado completo. Cuál fue tu promedio ponderado?</label>
						<p>Promedio Ponderado</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">331. Durante el último ciclo cursado completo. Cuál fue tu promedio ponderado acumulado?</label>
						<p>Promedio Ponderado acumulado</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">332. En toda tu carrera. Cuantos cursos desaprobaste más de una vez?</label>
						<p>Número de cursos desaprobados más de una vez</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>


			<h4>Expectativas Académicas</h4>

			<div class="form-group">
				<label for="">333. En cuánto tiempo esperas acabar tu carrera?</label>
						<p>Número de años</p>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">334. Crees que terminarás la carrera sin haber desaprobado algún curso?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">335. Crees que tendrás que interrumpir tus estudios en algún momento?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">336. Por qué razones crees que dejarías de estudiar?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Servicio militar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>Tenia que trabajar por necesidad económica</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>No podia financiar mi carrera</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Deseaba trabajar</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>No me gustó la carrera</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Me fue mal académicamente (malas notas)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Por motivos familiares (paternidad/maternidad/matrimonio)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Por motivos de salud (accidente/enfermedad)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>			               				               					                					                						               				               					               					               
			              </tbody>
			           </table>						
			</div>



	</div>	

</div>';

//4 cara

echo '

<div class="panel panel-info row">
	
	<div class="col-md-6">	

			<h4>Tutorias</h4>

			<div class="form-group">
				<label for="">337. En algún momento desde que ingresaste a la institución educativa superior has recibido servicio de tutorías?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">338. Quién te brindó el servicio de tutorías?</label>
						' . form_input($test) . '<div class="help-block error"></div>
						<p>Especifique</p>
						' . form_input($test) . '<div class="help-block error"></div>	
			</div>


			<div class="form-group">
					<label for="">339. Durante el último ciclo cursado completo. Cuántas sesiones de tutorias individuales o grupales has tenido?</label>
					<p>Consignar número de tutorías</p>
					<div class="row">
							<div class="col-md-6">	
								<p>Individual</p>
								' . form_input($test) . '<div class="help-block error"></div>	
							</div>		
							<div class="col-md-6">	
								<p>Grupal</p>
								' . form_input($test) . '<div class="help-block error"></div>
							</div>			
					</div>													
			</div>		


			<div class="form-group">
				<label for="">340. Cuáles son los medios que tienes disponibles para comunicarte con tu tutor/es?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Teléfono</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>Correo Electrónico</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>			

					              <tr>
					                 <td>Ninguno</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

			              </tbody>
			           </table>	

			</div>

			<div class="form-group">
				<label for="">341. Con qué frecuencia te reunes con tu tutor?</label>
						' . form_input($test) . '
						<p>Especifique</p>
						' . form_input($test) . '<div class="help-block error"></div>	
			</div>






	</div>	

	<div class="col-md-6">	

			<div class="form-group">
				<label for="">342. Cuán satisfecho te encuentras con el servicio de tutorías</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1">Individual / Grupal</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>a. Muy satisfecho?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>b. Satisfecho?</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>c. Algo satisfecho?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>d. Nada satisfecho</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

			              </tbody>
			           </table>	

			</div>


			<div class="form-group">
				<label for="">343. Cuánto crees que te han ayudado las tutorías para</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1">Ayudó Mucho / Ayudo algo / No ayudo en nada</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>a. Realizar una selección ordenada de cursos y créditos?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>b. Mejorar mi rendimiento académico?</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>c. Orientarme sobre los servicios académicos que brinda mi institución?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>d. Mejorar mis habilidades sociales y a nivel personal?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>e. Orientarme mejor en mi carrera?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>f. Resolver dudas académicas?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>g. Integrarme mejor a la Institucion Educativa Superior?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>h. Otros</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>	

			              </tbody>
			           </table>	

			</div>


	</div>	

</div>';



//5 cara
echo '

<div class="panel panel-info row">
	

	<div class="col-md-12">	
				<label for="">344. Las estrategias para el desarrollo de las tutorías fueron</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3" colspan="2"></th>
					                 <th class="span3">345. Se trató en forma</th>
					                 <th class="span3">346. Cómo evaluarias las estrategias utilizadas?</th>
					                </tr>					              
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span3">Si / No</th>
					                 <th class="span3">Individual? / Grupal?</th>
					                 <th class="span1">1. Nada efectivo / 2. Algo efectivo / 3. Efectivo? / 4. Muy efectivo?</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>1. Charlas dictadas por el tutor?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>2. Talleres participativos?</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>3. Exposiciones?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>4. Material Audiovisual</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>5. Otro</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>	

			              </tbody>
			           </table>		
	</div>


</div>';

echo '

<div class="panel panel-info row">
	

	<div class="col-md-12">	
				<label for="">347. Los temas que se trataron en las sesiones de tutorias fueron:</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3" colspan="2"></th>
					                 <th class="span3">348. Cómo evaluarías el apoyo de tu tutor en la asistencia individual?</th>
					                 <th class="span3">349. Cómo evaluarias el apoyo de tu tutor en la asistencia grupal?</th>
					                </tr>					              
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span3">Si / No</th>
					                 <th class="span3">1. Nada efectivo / 2. Poco efectivo / 3. Efectivo? / 4. Muy efectivo?</th>
					                 <th class="span1">1. Nada efectivo / 2. Algo efectivo / 3. Efectivo? / 4. Muy efectivo?</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>1. Orientación en metodologías y técnicas de estudio?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                 <td>2. Apoyo académico?</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>3. Soporte emocional?</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>4. Orientación vocacional</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>5. Orientación en servicios académicos</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>		
					              <tr>
					                 <td>6. Resolver dudas académicas</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>	
					              <tr>
					                 <td>7. Diagnosticar las dificultades y realizar las acciones pertinentes para resolverlas</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>	

			              </tbody>
			           </table>		
	</div>


</div>';


echo '

<div class="panel panel-info row">
	
	<div class="col-md-6">	
			<div class="form-group">
				<label for="">350. Alguien te ayuda con tus tareas?</label>
						' . form_input($test) . '<div class="help-block error"></div>						
			</div>

			<div class="form-group">
				<label for="">351. Quién te ayuda con tus tareas?</label>
						' . form_input($test) . '<div class="help-block error"></div>
						<p>Especifique</p>
						' . form_input($test) . '<div class="help-block error"></div>												
			</div>			
	</div>

	<div class="col-md-6">	

			<h4>Ciclo de Nivelación</h4>

			<div class="form-group">
				<label for="">352. Durante el año 2013. Has llevado curos de Nivelación?</label>
						' . form_input($test) . '						
			</div>

			<div class="form-group">
				<label for="">353.en que materias recibió curso de Nivelación?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3">Materias</th>
					                 <th class="span1">Total de días</th>
					                 <th class="span1">Horas por día</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

			              </tbody>
			           </table>						
			</div>


	</div>

</div>';

//6 cara

echo '

<div class="panel panel-info row">
	
	<div class="col-md-6">	

			<div class="form-group">
				<label for="">354. Algunos de los cursos de Nivelación los has llevado dentro de la Institución donde estudias?</label>
						' . form_input($test) . '<div class="help-block error"></div>					
			</div>

			<div class="form-group">
				<label for="">355. Con qué frecuencia participas de los eventos organizados por tu institución? (Días culturales, Exposiciones, Eventos, etc.)</label>
						' . form_input($test) . '<div class="help-block error"></div>
						<p>Especifique</p>
						' . form_input($test) . '<div class="help-block error"></div>												
			</div>	

	</div>

	<div class="col-md-6">	

			<div class="form-group">
				<label for="">356. En cuántas actividades extra académicas te has inscrito desde que ingresaste a la institución educativa superior? (Fútbol, taller de escritura, etc)</label>
						' . form_input($test) . '<div class="help-block error"></div>					
			</div>

			<div class="form-group">
				<label for="">357. Cuál es la razón principal por la que no te has inscrito en ninguna actividad extra académica?</label>
						' . form_input($test) . '<div class="help-block error"></div>
						<p>Especifique</p>
						' . form_input($test) . '<div class="help-block error"></div>												
			</div>	

			<div class="form-group">
				<label for="">358. Alguna vez has sido delegado de algún curso?</label>
						' . form_input($test) . '<div class="help-block error"></div>					
			</div>

	</div>

</div>';


echo '

<div class="panel panel-info row">
	
	<div class="col-md-12">	
				<h4>Financiamiento y Distribución de los gastos de estudio</h4>

				<p>Solo para postulantes que no accedieron a la Beca</p>

				<label for="">359. Cómo estabas financiando tus estudios?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3"></th>
					                 <th class="span1"></th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Trabajando<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                  <td>Financiamiento de familiares<div class="help-block error"></div></td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>Financiamiento o préstamo bancario<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>Beca de la Institución<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                 <td>Otros<div class="help-block error"></div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>	

			              </tbody>
			           </table>		


				<p>Solo para postulantes que accedieron a la Beca (Beneficiarios de Beca 18)</p>

				<label for="">360. Cómo distribuyes mensualmente los gastos de la manutención recibida por Beca 18?</label>
						<table class="table table-condensed" id="emb_table">
					              <thead>
					               <tr>
					                 <th class="span3">Rubro</th>
					                 <th class="span1">Monto S/.</th>
					                </tr>
					             </thead>
					              <tbody>
					              <tr>
					                 <td>Gasto en vivienda</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>  
					               <tr>
					                  <td>Gasto en Alimentación</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>Gasto en pasajes</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>Gasto en fotocopias y material educativo</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					               <tr>
					                  <td>Gasto en actividades recreativas</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr> 
					              <tr>
					                 <td>Gasto en vestimenta</div></td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>			

					              <tr>
					                 <td>Gasto en comunicación (tarjetas para celular, teléfono, etc)</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>

					              <tr>
					                 <td>Otros</td>
					                 <td>' . form_input($test) . '<div class="help-block error"></div></td>
					               </tr>
					              <tr>
					                  <td>' . form_input($test) . '<div class="help-block error"></div>Especifique</td>
					                  <td></td>
					              </tr>	
					              <tr>
					                  <td>Gasto total mensual de la manutención</td>
					                  <td>' . form_input($test) . '<div class="help-block error"></div></td>
					              </tr>	
			              </tbody>
			           </table>		


	</div>

</div>';






echo form_submit('send', 'Guardar','style="margin-bottom:30px" class="btn btn-primary pull-right"');
echo form_close(); 
?>
<br>
<br>
<br>
<br>






<script type="text/javascript">

$(function(){


// $('#pcar_num').val((<?php //echo $car_n->num_rows(); ?> > 0) ? <?php //echo $car_n->num_rows(); ?> : '' );

$('#pcar_num').keyup(function(event) {

$('#pcar_c_n tr').remove('.entrev');
	var ahua = $(this).val();
	if(ahua >= 0 && ahua<=10){
	  for(var i=1; i<=ahua;i++){
	    var asd = '<tr class="entrev">';
	    asd +='<td><input type="text" class="input1 embc' + i + '" maxlength="1" readonly name="PC_C_1_NroVis[]" id="PC_C_1_NroVis_' + i + '" value="' + i + '" ></td>';
	    asd +='<td><input type="text" class="input10 embc' + i + ' fechap" onKeyUp="javascript:this.value=formateafecha(this.value);"  maxlength="10" name="PC_C_1_Et_Fecha[]" id="PC_C_1_Et_Fecha_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input5 embc' + i + '" maxlength="5" name="PC_C_1_Et_Hini[]" onKeyUp="javascript:this.value=makehour(this.value);" id="PC_C_1_Et_Hini_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input5 embc' + i + '" maxlength="5" name="PC_C_1_Et_Hfin[]" onKeyUp="javascript:this.value=makehour(this.value);" id="PC_C_1_Et_Hfin_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input10 embc' + i + ' fechap caraaf" onKeyUp="javascript:this.value=formateafecha(this.value);" maxlength="10" name="PC_C_1_Et_Fecha_Prox[]" id="PC_C_1_Et_Fecha_Prox_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input5 embc' + i + '" maxlength="5" name="PC_C_1_Et_Hora_Prox[]" onKeyUp="javascript:this.value=makehour(this.value);" id="PC_C_1_Et_Hora_Prox_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input1 embc' + i + ' car_res" maxlength="1" name="PC_C_1_Et_Res[]" id="PC_C_1_Et_Res_' + i + '" value="" > - Especifique <div class="help-block error"></div><input type="text" class="input10 embc' + i + '" readonly maxlength="80" name="PC_C_1_Et_Res_O[]" id="PC_C_1_Et_Res_O' + '_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input10 embc' + i + ' fechap carbbf" onKeyUp="javascript:this.value=formateafecha(this.value);" maxlength="10" name="PC_C_1_Jb_Fecha[]" id="PC_C_1_Jb_Fecha_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input5 embe' + i + '" maxlength="5" name="PC_C_1_Jb_Hini[]" onKeyUp="javascript:this.value=makehour(this.value);" id="PC_C_1_Jb_Hini_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input5 embe' + i + '" maxlength="5" name="PC_C_1_Jb_Hfin[]" onKeyUp="javascript:this.value=makehour(this.value);" id="PC_C_1_Jb_Hfin_' + i + '" value="" ><div class="help-block error"></div></td>';
	    asd +='<td><input type="text" class="input1 embc' + i + ' car_res" maxlength="1" name="PC_C_1_Jb_Res[]" id="PC_C_1_Jb_Res_' + i + '" value="" > - Especifique <div class="help-block error"></div><input type="text" class="input10 embc' + i + '" readonly maxlength="80" name="PC_C_1_Jb_Res_O[]" id="PC_C_1_Jb_Res_O' + '_' + i + '" value="" ></div></td>';
	    asd += '</tr>';
	    $('#pcar_c_n > tbody').append(asd);
	  }
	}else if(ahua==''){
		//
	}else{
		//alert('10 Entrevistas máximo');
	}


// var as = 1;
// $.each( <?php //echo json_encode($car_n->result()); ?>, function(i, data) {
// 	   $('#PC_C_1_Et_Fecha_' +  as).val(makeday(data.PC_C_1_Et_Fecha));
// 	   $('#PC_C_1_Et_Hini_' +  as).val(data.PC_C_1_Et_Hini);
// 	   $('#PC_C_1_Et_Hfin_' +  as).val(data.PC_C_1_Et_Hfin);
// 	   $('#PC_C_1_Et_Fecha_Prox_' +  as).val(makeday(data.PC_C_1_Et_Fecha_Prox));
// 	   $('#PC_C_1_Et_Hora_Prox_' +  as).val(data.PC_C_1_Et_Hora_Prox);
// 	   $('#PC_C_1_Et_Res_' +  as).val(data.PC_C_1_Et_Res);
// 	   $('#PC_C_1_Et_Res_' +  as).trigger('change');
// 	   $('#PC_C_1_Et_Res_O_' +  as).val(data.PC_C_1_Et_Res_O);
// 	   $('#PC_C_1_Jb_Res_' +  as).val(data.PC_C_1_Jb_Res);
// 	   $('#PC_C_1_Jb_Res_' +  as).trigger('change');
// 	   $('#PC_C_1_Jb_Res_O_' +  as).val(data.PC_C_1_Jb_Res_O);
// 	   $('#PC_C_1_Jb_Fecha_' +  as).val(makeday(data.PC_C_1_Jb_Fecha));
// 	   $('#PC_C_1_Jb_Hini_' +  as).val(data.PC_C_1_Jb_Hini);
// 	   $('#PC_C_1_Jb_Hfin_' +  as).val(data.PC_C_1_Jb_Hfin);
// 	   as++;
// }); 
// $('.fechap').datepicker({ dateFormat: 'yy-mm-dd' });
});

// $('#pcar_num').trigger('keyup');
// $('#pcar_num').trigger('change');

$("#car_f").validate({
		    rules: {  
		    	PC_A_2_Prov:{
		    		valueNotEquals:'-1',
		    	},
		    	PC_A_3_Dist:{
		    		valueNotEquals:'-1',
		    	},
		    	PC_A_7Dir_2_Nomb:{
					letnum: true,
		    		required:true,
		    	},
		    	PC_A_9_RefDir:{
					letnum: true,
		    		required:true,
		    	},
		    	PC_A_6_Ugel:{
					letnum: true,
		    		required:true,
		    	},
				PC_A_4_CentroP: {
						letnum: true,
						required:true,
			        },  	
			    PC_A_5_NucleoUrb:{
						letnum: true,
						required:true,
			       },
				PC_A_7Dir_1_Tvia: {
			    		valrango: [1,7,9],
			    		required: true,
			        },  				    	
				PC_A_8_DirVerif: {
			    		valrango: [1,2,9],
			    		required: true,
			        },  			                     			         		         		         		                  	         		         	         	          		                                                                             		    	
				PC_C_2_Rfinal_resul: {
			    		range: [1,5],
						valcaresu: ['PC_C_1_Et_Res_', 'pcar_num'],
			    		required: true,
			        },  	
				PC_C_2_Rfinal_resul_O:{
			    		requeridodis: true,
				},		        	   
			    PC_A_7Dir_4_Piso: {
			    		range: [0,10],
			    		required: true,
			    },             			
			    PC_B_2_CantEv:{
			    		range: [1,99],
			    		required: true,
			    },
			    pcar_num:{
			    	required: true,
			    	range:[1,10],
			    },
			    PC_A_7Dir_3_Nro:{
			    	letnum:true,
			    	required: true,
			    },    		         	
			    'PC_C_1_Et_Fecha[]':{
			    	carperuDate:true,
			    	required:true,
			    },	       
			    'PC_C_1_Et_Fecha_Prox[]':{
			    	carperuDate:true,
			    	//required:true,
			    },  		              
			    'PC_C_1_Et_Res[]':{
			    		range: [1,5],
			    		required: true,			    	
			    }, 		       	   
			    'PC_C_1_Jb_Res[]':{
			    		range: [1,5],
			    		// required: true,			    	
			    },                    	
			    PC_E_2_TPred_NoCol:{
			    	required: true,
			    },
				PC_D_EvT_dni: {
			    		digits: true,
			    		required: true,
			        },  
				PC_D_EvT_Nomb: {
			    		required: true,
			        },  			        
				PC_D_JBri_dni: {
			    		digits: true,
			    	},  
			    PC_D_CProv_dni: {
			    		digits: true,
			    	},  
			    PC_D_CDep_dni: {
			    		digits: true,
			    	},  
			    PC_D_SupN_dni: {
			    		digits: true,
			    	},  
			    'PC_C_1_Et_Hini[]':{
			    		hora: true,
			    },  
			    'PC_C_1_Et_Hfin[]':{
			    		hora: true,
			    },  
			    'PC_C_1_Et_Hora_Prox[]':{
			    		hora: true,
			    }, 
			    'PC_C_1_Jb_Hini[]':{
			    		hora: true,
			    }, 
			    'PC_C_1_Jb_Hfin[]':{
			    		hora: true,
			    }, 			    
			    'PC_C_1_Et_Res_O[]':{
			    	requeridodis:true,
			    },
			    'PC_C_1_Jb_Fecha[]':{
			    	peruDate:true,
			    },
			    PC_C_2_Rfinal_fecha:{
			    	carperuDate:true,
			    	valcaresu: ['PC_C_1_Et_Fecha_', 'pcar_num'],
			    },
			    PC_E_1_TPred:{
			    	range:[1,30],
			    	required:true,
			    },
			    PC_E_2_TPred_NoCol:{
			    	range:[0,20],
			    	required:true,
			    },
			    PC_E_3_TEdif:{
			    	range:[0,62],
			    	required:true,
			    },
			    PC_E_4_TPat:{
			    	range:[0,62],
			    	required:true,
			    },
			    PC_E_5_TLosa:{
			    	range:[0,62],
			    	required:true,
			    },		
			    PC_E_6_TCist:{
			    	range:[0,62],
			    	required:true,
			    },	
			    PC_E_7_TMurCon:{
			    	range:[0,62],
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
					        {name: 'ajax',value:1},
					        {name: 'id_local',value:$("input[name='id_local']").val()},      
					        {name: 'Nro_Pred',value:$("input[name='Nro_Pred']").val()},      
					        {name: 'user_id',value:parseInt($("input[name='user_id']").val())}      
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