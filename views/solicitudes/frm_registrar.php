<?php

include("../../lib/validar_session.php");

ValidaSession("../login");
//VerificarAdmin($_SESSION['rolx']);

?>

<?php include("../layouts/constantes.php")?>
<?php include_once("../layouts/cabezera.php") ?>

<div class="message"></div>

<form id="form" role="form" enctype="multipart/form-data">

<div class="base">

	<ul>
 		<li id="uno"> <!--################################## Información General del Evento ##################################  -->

			<!--<div class="col-md-4">
				<div class="box-header with-border" tabindex="-1">
					 	<h3 class="box-title">Información General del Evento</h3>
				</div> 
			</div>-->

			<div class="col-md-4">
				<div class="box-header with-border" tabindex="-1">
					 	<h3 class="box-title">Información General del Evento</h3>
				</div><!-- /.box-header -->
		  		<div class="box box-primary">
						<input type="hidden" id="distribuidora" value="<?php echo intval($_SESSION['distribuidora']); ?>">
						<input type="hidden" id="region">
						<input type="hidden" id="lata" value=6.12>
						<input type="hidden" id="longa" value=-67.39>
						<input type="hidden" id="ideado">
						<input type="hidden" id="trans" value=0>
						<input type="hidden" id="aloja" value=0>
						<input type="hidden" id="arutaval" value=0>
						<input type="hidden" id="apircval" value=0>
						<input type="hidden" id="v_terr" value=0>
						<input type="hidden" id="v_naci" value=0>
						<input type="hidden" id="v_func" value=0>
						<input type="hidden" id="v_supe" value=0>
				
						
						<div class="box-body">

						 	<div class="form-group-sm">
							  <label for="n_accion">Nro. de Evento</label>
							  <input type="text" class="form-control bbb" id="n_accion" placeholder="Indique numero de evento"  onpaste="return false" tabindex="1" disabled>
							</div>

							<div class="form-group-sm">
							  <label for="nombre">Nombre del Evento</label>
							  <input type="text" class="form-control bbb" id="nombre" placeholder="Ingrese nombre de la actividad"  onpaste="return false" tabindex="2" onkeypress="return esnombre(event);"  onblur="alsalir(this.id)"  autocomplete="off" >
							  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_nombre' class="aaa"><p></p></div>
							</div>
									
							<div class="form-group-sm">
								<label for="fecha1">Fecha y hora de la solicitud</label>
								<div class="input-group">	
												  
									<input class="form-control bbb" id="fecha1" data-date-format="dd-mm-yyyy" placeholder="dia-mes-año" type="text" onpaste="return false" tabindex="3" disabled="true">
										<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
									<input class="form-control bbb" id="hsoli" type="time" disabled="true">														  
								</div>								
							</div>

							<div class="form-group-sm">
								<label>Dirección Territorial</label>
								<select name="depar" id="departamento" class="form-control bbb" tabindex="4">
								<option></option>
								</select>
							</div>

							<div class="form-group-sm">
							  <label for="depa">Departamento</label>
							  <input type="text" class="form-control bbb" id="depa" placeholder="Departamento"  onpaste="return false" tabindex="5" disabled="true">
							</div>

							<div class="form-group-sm">
								<label>Municipio</label>
								<select name="munir" id="municipio" class="form-control bbb" tabindex="6">
								<option></option>
								</select>
							</div>

							<div class="form-group-sm">
								<label>Centro Poblado</label>
								<select id="cpoblado" class="form-control bbb" tabindex="7">
								<option></option>
								</select>
							</div>



					</div>
						 
		  		</div>
				  <div class="box-header with-border" tabindex="-1">
				<h3 class="box-title">Ubicación del Evento</h3>
			</div><!-- /.box-header -->		  

		 	 <div class="box box-primary">
				<div class="box-body">
					<div class="form-group-sm">
							<label >Dirección</label>
							
								<div class = "input-group">

									<span class="input-group-btn">
										<select id="a_primario" class="btn-sm"  tabindex="8"  >
											<option value="0">Avenida</option>
											<option value="1">Calle</option>
											<option value="2">Carrera</option>
											<option value="3">Vereda</option>
											<option value="4">Callejón</option>
											<option value="5">Carretera</option>
											<option value="6">Autopista</option>
										</select>
									</span>
										<input type="text" id="acceso1" class="form-control bbb" placeholder="Principal"  onpaste="return false" tabindex="9" onkeypress="return esacceso1(event);" onblur="alsalir(this.id)">
									
								</div>
								
						

								<div class="input-group">
									<span class="input-group-addon"><span class="fa fa-slack"></span></span>
									<input type="text" id="acceso2" class="form-control bbb" placeholder="Secundario"  onpaste="return false" tabindex="10" onkeypress="return esacceso1(event);" onblur="alsalir(this.id)">
									<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
									<span class="input-group-addon"><span class="fa fa-minus"></span></span>
									<span><input type="text" id="num_dir" class="form-control bbb" placeholder="Numero"  onpaste="return false" tabindex="11" onkeypress="return esnumdir(event);" onblur="alsalir(this.id)">
										
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_acceso1' class="aaa"><p></p></div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_acceso2' class="aaa"><p></p></div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_num_dir' class="aaa"><p></p></div>
					</div>

					<div class="form-group-sm">
							<label >Referencia</label>
								<div class = "input-group">
									<span class="input-group-btn">
										<select id="a_referencia" class="btn-sm"  tabindex="12"  >
											<option value="0">Al lado</option>
											<option value="1">Cerca</option>
											<option value="2">Frente</option>
											<option value="3">Diagonal</option>
											<option value="4">Detras</option>
											<option value="5">Via</option>
											<option value="6">Dentro</option>
										</select>
									</span>
									<input type="text" class="form-control bbb" id="referencia" placeholder="Ingrese una referencia"  onpaste="return false" tabindex="13" onkeypress="return esreferencia(event);" onblur="alsalir(this.id)">
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_referencia' class="aaa"><p></p></div>
					</div>				

				</div>
			</div>	
			</div>

		  <div class="col-md-4">



			<div class="box-header with-border">
					<h3 class="box-title">Inicio y Final del Evento</h3>
			</div><!-- /.box-header -->	

			<div class="box box-primary">
			  <div class="box-body">
				<div class="form-group-sm">
						  
					<div class="row">

						<div class="col-sm-6">
							
								<label for="fecha2">Fecha Inicio</label>
								<input class="form-control bbb" id="fecha2" data-date-format="dd-mm-yyyy" placeholder="dia-mes-año" type="text" onpaste="return false" tabindex="14">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_fecha2' class="aaa"><p></p></div>
													
						</div>

						<div class="col-sm-6">
							
								<label for="fecha3">Fecha Final</label>
								<input class="form-control bbb" id="fecha3" data-date-format="dd-mm-yyyy" placeholder="dia-mes-año" type="text" onpaste="return false" tabindex="15">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_fecha3' class="aaa"><p></p></div>
													
						</div>
					</div>							   
					
				</div>

				<div class="form-group-sm">
						  
					<div class="row">

						<div class="col-sm-6">
							
								<label for="hora1">Hora Inicio</label>
								<input class="form-control bbb" id="hora1" type="time" onpaste="return false" tabindex="16" min="05:00" max="22:00">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_hora1' class="aaa"><p></p></div>
													
						</div>

						<div class="col-sm-6">
							
								<label for="hora2">Hora Final</label>
								<input class="form-control bbb" id="hora2" type="time" onpaste="return false" tabindex="17" min="05:00" max="22:00">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_hora2' class="aaa"><p></p></div>
													
						</div>
					</div>							   
					
				</div>
			  </div>
			</div>

				<div class="box-header with-border">
					<h3 class="box-title">Responsable nacional</h3>
				</div><!-- /.box-header -->	

				<div class="box box-primary">

					<div class="box-body">
					
							<label>Nombres</label>
							<div class="input-group">
								<input type="text" class="form-control ddd" id="rn_nombre1" placeholder="1er nombre"  onpaste="return false" tabindex="260" onkeypress="return esnombre3(event);"  onblur="alsalir(this.id)" autocomplete="off">
								<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
								<input type="text" class="form-control" id="rn_nombre2" placeholder="2do. nombre"  onpaste="return false" tabindex="270" onkeypress="return esnombre3(event);" autocomplete="off">
							</div>
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rn_nombre1' class="aaa"><p></p></div>
							
							<label>Apellidos</label>
							<div class="input-group">
								<input type="text" class="form-control ddd" id="rn_apellido1" placeholder="1er. apellido"  onpaste="return false" tabindex="280" onkeypress="return esapellido2(event);"  onblur="alsalir(this.id)"  autocomplete="off">
								<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
								<input type="text" class="form-control" id="rn_apellido2" placeholder="2do. apellido"  onpaste="return false" tabindex="290" onkeypress="return esapellido2(event);" autocomplete="off">
							</div>
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rn_apellido1' class="aaa"><p></p></div>
							
							
							<div class="form-group-sm">
								<label >Documento de Identidad</label>
									<div class = "input-group">

										<span class="input-group-btn">
											<select id="rn_tdoc" class="btn-sm"  tabindex="300"  >
												<option value="0">CC</option>
												<option value="1">CE</option>
												<option value="2">PA</option>
											</select>
										</span>

										<input type="text" class="form-control ddd" id="rn_num_doc" placeholder="Ingrese el numero del documento"  onpaste="return false" tabindex="310" onkeypress="return escedula2(event);" onblur="alsalira(this.id)">
									</div>
									<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rn_num_doc' class="aaa"><p></p></div>
							</div>	

							<div class="form-group-sm">
							<label for="tele2">Teléfono de contacto</label>
							<input type="text" class="form-control ddd" id="tele2" placeholder="Ingrese un número telefónico"  onpaste="return false" tabindex="320" onkeypress="return estele2(event);" onblur="alsalir2(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_tele2' class="aaa"></div>
							</div>

								<div id="confirma_telefono2">
									<ul><li id="conf_tel2" style="color:#fff;text-align:center" ></li></ul>
								</div>

							<div class="form-group-sm">
							<label for="correo2">Correo electrónico</label>
							<input type="text" class="form-control ddd" id="correo2" placeholder="Ingrese un correo electrónico"  onpaste="return false" tabindex="330" onkeypress="return escorreo2(event);" onblur="alsalir2(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_correo2' class="aaa"></div>
							</div>

								<div id="confirma_correo2">
									<ul><li id="conf_cor2" style="color:#fff;text-align:center" ></li></ul>
								</div>		

							<div class="focusguard" id="guardia1" tabindex="36"></div>							
					</div>
				</div>	





		  </div>

		  <div class="col-md-4">
	
		 		<div class="box-header with-border">
					<h3 class="box-title">Responsable Territorial</h3>
				</div><!-- /.box-header -->	

				<div class="box box-primary">

					<div class="box-body">
						<label>Nombres</label>
						<div class="input-group">
							<input type="text" class="form-control bbb" id="rt_nombre1" placeholder="Primer nombre"  onpaste="return false" tabindex="18" onkeypress="return esnombre2(event);"  onblur="alsalir(this.id)"  autocomplete="off">
							<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
							<input type="text" class="form-control" id="rt_nombre2" placeholder="Segundo nombre"  onpaste="return false" tabindex="19" onkeypress="return esnombre2(event);"   autocomplete="off">
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rt_nombre1' class="aaa"><p></p></div>
						
						<label>Apellidos</label>
						<div class="input-group">
							<input type="text" class="form-control bbb" id="rt_apellido1" placeholder="Primer apellido"  onpaste="return false" tabindex="20" onkeypress="return esapellido1(event);" onblur="alsalir(this.id)" autocomplete="off">
							<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
							<input type="text" class="form-control" id="rt_apellido2" placeholder="Segundo apellido"  onpaste="return false" tabindex="21" onkeypress="return esapellido1(event);" autocomplete="off" >
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rt_apellido1' class="aaa"><p></p></div>
													
						<div class="form-group-sm">
							<label >Documento de Identidad</label>
								<div class = "input-group">

									<span class="input-group-btn">
										<select id="rt_tdoc" class="btn-sm"  tabindex="22"  >
											<option value="0">CC</option>
											<option value="1">CE</option>
											<option value="2">PA</option>
										</select>
									</span>

									<input type="text" class="form-control bbb" id="rt_num_doc" placeholder="Ingrese el numero del documento"  onpaste="return false" tabindex="23" onkeypress="return escedula1(event);" onblur="alsalira(this.id)" autocomplete="off">
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rt_num_doc' class="aaa"><p></p></div>
						</div>	

						<div class="form-group-sm">
						<label for="tele1">Teléfono de contacto</label>
						<input type="text" class="form-control bbb" id="tele1" placeholder="Ingrese un número telefónico"  onpaste="return false" tabindex="24" onkeypress="return estele1(event);" onblur="alsalir2(this.id)" autocomplete="off">
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_tele1' class="aaa"></div>
						</div>

							<div id="confirma_telefono">
								<ul><li id="conf_tel" style="color:#fff;text-align:center" ></li></ul>
							</div>

						<div class="form-group-sm">
						<label for="correo1">Correo electrónico</label>
						<input type="text" class="form-control bbb" id="correo1" placeholder="Ingrese un correo electrónico"  onpaste="return false" tabindex="25" onkeypress="return escorreo1(event);" onblur="alsalir2(this.id)" autocomplete="off">
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_correo1' class="aaa"></div>
						</div>

							<div id="confirma_correo">
								<ul><li id="conf_cor" style="color:#fff;text-align:center" ></li></ul>
							</div>
							


							<div class="focusguard" id="guardia1" tabindex="36"></div>							
					</div>
				</div>
				<div class="box-header with-border">
					<h3 class="box-title">Grupo/Área/Equipo/Dependencia</h3>
				</div><!-- /.box-header -->	
				<div class="box box-primary">

					<div class="box-body">
						<div class="form-group-sm">									
									<select id="grupo" class="form-control bbb" tabindex="35">
									<option></option>
									</select>
								</div>
						</div>
				</div>

			</div>
		</li>

		<li id="dos"> <!--################################## INFORMACIÓN RELACIONADA CON EL TIPO DE ACTIVIDAD ##################################  -->

			<div class="col-md-4">

				<div class="box-header with-border">
					 	<h3 class="box-title" id="guardia78" tabindex="0">Tipo de Evento</h3>
				</div><!-- /.box-header -->

		  		<div class="box box-primary">
						<!-- form start -->
						<div class="box-body" >
								<select id="activity" class="form-control" tabindex="0">
									<option value="" selected disabled hidden>Indique el tipo de evento:</option>
									<option value="0">INDIVIDUAL</option>
									<option value="1">RETORNOS Y REUBICACIONES</option>
									<option value="2">COLECTIVA</option>
								</select>
						<div class="box-body" id="actv_1" style="border-width:1px;border-style:solid; border-color: #ecf0f5; display:none">
							<div class="form-group-sm" >
								<label ></label></br>
								<select id="tipo1" class="form-control" tabindex="0">
									
									<option value="0">Jornada Diferencial</option>
									<option value="1">Feria de Servicios</option>
									<option value="2">Conmemoración</option>
									<option value="3">Iniciativa Local de Memoria</option>
									<option value="4">Acto de Reconocimiento u Orden Judicial</option>
									<option value="5">Taller por Linea de Inversion</option>
									<option value="6">Entrega digna de cadáveres</option>
									<option value="7">Charla de educación financiera </option>	
									<option value="8">Otro</option>		
									<option value="9" selected hidden>Indique si el evento corresponde a:</option>						
								</select>
								
							</div>
								<div id="otro1a" style='display:none;'>
								<div class="form-group-sm">								
									<label for="Otro1">Otro</label>
							  		<input type="text" class="form-control" id="otro1" placeholder="Indique otro tipo de actividad"  onpaste="return false" tabindex="0" onkeypress="return esotro1(event);" onblur="return alsalir(this.id)" autocomplete="off">
							  		<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_otro1' ></div>
								</div>
							</div>
						</div>
						
						<div class="box-body" id="actv_2" style="border-width:1px;border-style:solid; border-color: #ecf0f5; display:none">
							<div class="form-group-sm">
								<label class="guardia80" tabindex="0"></label></br>
								<select id="tipo2" class="form-control"  tabindex="0">
								
									<option value="0">Integración Comunitaria</option>
									<option value="1">Retorno</option>
									<option value="2">Reubicacion</option>
									<option value="3">Esquemas Especiales de Acompañamiento</option>
									<option value="4">Casos Emblemáticos</option>
									<option value="5">Seguimiento procesos Retornos y Reubicaciones</option>
									<option value="6" selected hidden>Indique si el evento corresponde a:</option>
								</select>
							</div>
						</div>	

						<div class="box-body" id="actv_3" style="border-width:1px;border-style:solid; border-color: #ecf0f5; display:none">
							<label>COLECTIVA</label></br>
						<div class="box-body" style="border-width:1px;border-style:solid; border-color: #bdd3ff; background-color: #E8F0FF">	
							<div class="form-group-sm">

								<label>Pertenencia étnica comunitaria</label></br>

								<select id="tipo3" class="form-control" tabindex="0">
									
									<option value="0">Comunidad</option>
									<option value="1">Comunidad Campesina</option>
									<option value="2">Grupo</option>
									<option value="3">Organizaciones</option>
									<option value="4">Organización de Mujeres</option>
									<option value="5" selected  hidden>Indique el sujeto "no étnico" </option>
								</select>

								<select id="tipo4" class="form-control" tabindex="0">
									<option value="" selected disabled hidden>Indique el sujeto "étnico" </option>
									<option value="0">Indígena</option>
									<option value="1">Ancestral</option>
									<option value="2">RROM o Gitano</option>
									<option value="3">Afrocolombiana</option>
									<option value="4">Negra</option>
									<option value="5" selected hidden>Indique el sujeto "étnico" </option>
								</select>								
							</div>

						    <div class="form-group-sm">
							  <label>Actividad de ruta</label>
	                            <div class = "input-group">
								      <span class = "input-group-addon">
	                                     <input type = "checkbox" tabindex="0" id="aruta">
									  </span>
									  <input type="text" class="form-control " id="afase" placeholder="Indique la fase en que se ecuentra"  onpaste="return false" tabindex="0" onkeypress="return esafase(event);" onblur="return alsalir(this.id);" disabled>
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_afase' ></div>
							</div>
						</div>
						<div class="box-body" style="border-width:1px;border-style:solid; border-color: #bdd3ff; background-color: #E8F0FF">
							<label>ID del Sujeto de Reparación</label></br>
						    <div class="form-group-sm">
							  <label>Implementación del PIRC aprobado</label>
	                            <div class = "input-group">
								      <span class = "input-group-addon">
	                                     <input type = "checkbox" tabindex="0" id="apirc">
									  </span>
									  <input type="text" class="form-control " id="amedida" placeholder="Indique el tipo de medida"  onpaste="return false" tabindex="0" onkeypress="return esamedida(event);" onblur="return alsalir(this.id);" disabled>
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_amedida' ></div>
									<div>
										<label class="guardia79" tabindex="0" style="color: #E8F0FF">.</label>
									</div>
									<div id="idacc" style='display:none;'>
										<label for="idaccion" class="guardia77" tabindex="0">Id Acción</label>
										<input type="text" class="form-control " id="idaccion" placeholder="Indique Id de la accion"  onpaste="return false" tabindex="0" onkeypress="return esidaccion(event);" onblur="return alsalir(this.id);" >
										<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_idaccion' ></div>
									</div>							
							</div>
						</div>	
						</div>
						</div><!-- /.box-body -->
				 </div><!-- /.box -->
				 
				 <div class="box-header with-border">
					 	<h3 class="box-title">Descripción de la actividad</h3>
				</div><!-- /.box-header -->

				<div class="box box-primary">
						<!-- form start -->
						<div class="box-body">
						<div class="form-group-sm">
							
								<label>Entidades participantes</label>
								<input type="text" class="form-control ccc" id="entidad" placeholder="Indique las entidades participantes"  onpaste="return false" tabindex="0" onkeypress="return esentidad(event);"  onblur="alsalir(this.id);"  autocomplete="off">
							
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_entidad' class="aaa"><p></p></div>
							
							
								<label>Número de víctimas participantes</label>
								<input type="text" class="form-control ccc" id="num_vic" placeholder="Indique el número de víctimas"  onpaste="return false" tabindex="0" onkeypress="return esvictimas(event);"  onblur="alsalir(this.id);"  autocomplete="off">
							
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_num_vic' class="aaa"><p></p></div>
														
							
    							<label for="descripcion">Descripción breve</label>
    							<textarea class="form-control ccc" id="descripcion" rows="4" placeholder="Redacte una breve descripción de la actividad a realizar"  onpaste="return false" tabindex="0" onkeypress="return esdescri(event);"  onblur="alsalir(this.id);"  autocomplete="off"></textarea>
  							
							  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_descripcion' class="aaa"><p></p></div>
							   
							    <label>Focalización</label>								
								<div class="form-group-sm">
										<select id="foca"   class="form-control" >
											<option value="" selected disabled hidden>Indique tipo de focalización </option>
											<option value="0">Asistencia</option>
											<option value="1">Atención</option>
											<option value="2">Prevención</option>
											<option value="3">Protección</option>
											<option value="4">Reparación Integral</option>
											<option value="5">Verdad</option>
											<option value="6">Justicia</option>
										</select>
								</div>

						</div>
						</div><!-- /.box-body -->



				 </div><!-- /.box -->	

				 <div class="box-header with-border">
					 	<h3 class="box-title">Aprobaciones</h3>
				</div><!-- /.box-header -->

				<div class="box box-primary">
						<!-- form start -->
						<div class="box-body">
							<div class="form-group-sm">
							

								<label>Nivel territorial</label>
								<div class="input-group" >
									<span class="input-group-addon" >
										<input disabled type="checkbox" id="a_terr">
									</span>
									<input disabled type="text" class="form-control ccc" id="a_terro" placeholder="Observación"  onpaste="return false" tabindex="0" autocomplete="off">
								</div>								
							
								<label>Nivel nacional</label>
								<div class="input-group" >
									<span class="input-group-addon">
										<input disabled type="checkbox" id="a_naci">
									</span>
									<input disabled type="text" class="form-control ccc" id="a_nacio" placeholder="Observación"  onpaste="return false" tabindex="0"  autocomplete="off">
								</div>								
								<label>Nivel Funcionario</label>
								<div class="input-group" >
									<span class="input-group-addon" >
										<input disabled type="checkbox" id="a_func">
									</span>
									<input disabled type="text" class="form-control ccc" id="a_funco" placeholder="Observación"  onpaste="return false" tabindex="0"  autocomplete="off">
								</div>

								<label>Nivel supervisor</label>
								<div class="input-group" >
									<span class="input-group-addon" >
										<input type="checkbox" id="a_supe">
									</span>
									<input type="text" class="form-control ccc" id="a_supeo" placeholder="Observación"  onpaste="return false" tabindex="0"  autocomplete="off">
								</div>								
																													

						</div>
						</div><!-- /.box-body -->
				 </div><!-- /.box -->	

			</div>

			<div class="col-md-4">


				 <div class="box-header with-border">
					 	<h3 id="jump1" tabindex="0" class="box-title">Participantes del evento</h3>
				</div><!-- /.box-header -->

				<div class="box box-primary" >			
					<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
							<table id="tabla2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th></th>
										<th>Nombre</th>
										<th>Nro. Documento</th>
										<th>Correo-e</th>
										<th>Teléfono </th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
					</div>
				
					<div class="box-footer">
						<button id="agregar2" type="button" class="btn btn-primary sm" tabindex="49"><i class="fa fa-fw fa-plus"></i>Agregar</button>
						<!--<button id="quitar2" type="button" class="btn btn-danger sm pull-right"><i class="fa fa-fw fa-minus"></i>Quitar</button>-->
					</div>
				</div>				

				<div class="box-header with-border">
					<h3 id="jump3" tabindex="0" class="box-title">Detalle especifico del requerimiento</h3>
				</div><!-- /.box-header -->

				<div class="box box-primary" >			
					<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
							<table id="tabla" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th></th>
										<th>Tipo</th>
										<th>Concepto</th>
										<th>Cantidad</th>
										<th>Medida</th>
										<th>Costo Unitario</th>
										<th>Observaciones</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
					</div>
				
					<div class="box-footer">
						<button id="agregar" type="button" class="btn btn-primary sm" tabindex="49"><i class="fa fa-fw fa-plus"></i>Agregar</button>
						<!--<button id="quitar" type="button" class="btn btn-danger sm pull-right"><i class="fa fa-fw fa-minus"></i>Quitar</button>-->
					</div>
				</div>	


			</div>

			<div class="col-md-4">



				<div class="box-header with-border">
					 	<h3 class="box-title">Alojamiento y Transporte</h3>
				</div><!-- /.box-header -->

		  		<div class="box box-primary">

						<!-- form start -->
						<div class="box-body">

								<label>Requerimiento de Alojamiento</label>
	                            <div class = "input-group">
								      <span class = "input-group-addon">
	                                     <input type = "checkbox" tabindex="50" id="alojamiento">
									  </span>
									  <input type="text" class="form-control" id="msg_aloja" value="No requiere Alojamiento" disabled>
								</div>
								
								<label>Requerimiento de Transporte</label>
	                            <div class = "input-group">
								      <span class = "input-group-addon">
	                                     <input type = "checkbox" tabindex="51" id="transporte">
									  </span>
									  <input type="text" class="form-control" id="msg_trans" value="No requiere transporte" disabled>
								</div>

								<div class="form-group" id="noveo" style="display:none;">
									<label id="jump2"  tabindex="52">Tipo de transporte </label></br>
									<select id="t_trans" class="form-control" multiple="multiple" tabindex="53">
										<option value="0">Aéreo</option>
										<option value="1">Terrestre/fluvial intermunicipal</option>
										<option value="2">Terrestre urbano</option>
									</select>
								</div>								
									<button id="a_tra" type="button" class="btn btn-primary " tabindex="53" style="width: 100%;display: none;" disabled><i  class="fa fa-fw  fa-hotel"></i>|<i  class="fa fa-fw  fa-plane"></i>Asignación transporte/alojamiento</button>
									
								<label class="guardia81" tabindex="0" style="color: #FFF">.</label>
							
						
						</div><!-- /.box-body -->

				 </div><!-- /.box -->
				 
				 <div class="box-header with-border">
					<h3 class="box-title">Resumen de costo presupuestal</h3>
				</div><!-- /.box-header -->
				<div class="box box-primary">
				
					<div class="box-body">	

						<label>Componente presupuestal</label>
						<div class="form-group-sm">
								<select id="presup"   class="form-control" >
									<option value="" selected disabled hidden>Indique componente presupuestal </option>
									<option value="0">CDP</option>
									<option value="1">Soporte de anticipos</option>
									<option value="2">Soportes de excedentes</option>
								</select>
						</div>

						<label>Total</label>
						<div class="form-group-sm">
							<input type="text" class="form-control pesos" id="totalite" disabled>
						</div>


					</div>
				</div>

				 <div class="box box-primary">

					<div class="box-body">

					<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
						<!--<label for="tabla">Soportes adjuntos</label>-->
								<table id="tabla30" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Id</th>										
											<th>Anexo</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
						</div>
						

					</div>

					<div class="box-footer">
						<button id="save" type="button" class="btn btn-success " tabindex="54" style="width: 97px;" ><i class="fa fa-fw fa-save" ></i>Guardar</button>
						<button id="anex" type="button" class="btn btn-success " tabindex="55" style="width: 97px;"><i class="fa fa-fw fa-plus" ></i>Anexo</button>
						<button id="exit" type="button" class="btn btn-primary " tabindex="56" style="width: 103px;"><i class="fa fa-fw fa-reply"></i>Regresar</button>
						<!--<button id="cancelar" type="button" class="btn btn-primary" tabindex="-1"><i class="fa fa-fw fa-times"></i>Cancelar</button>-->
					</div>				
					<div class="focusguard" id="guardia2" tabindex="57"></div>
				</div><!-- /.box-body -->


			</div>
		</li>

		<li id="tres"><!--################################## DATOS ALOJAMIENTO Y TRANSPORTE ##################################  -->

			<div class="col-md-4" style="display: none;">
				<div class="box-header with-border">
					<h3 class="box-title">Datos del personal</h3>
				</div><!-- /.box-header -->
				<div class="box box-primary">
					<div class="box-body">			
					
						<div class="form-group-sm">
							<label>Nombre del personal</label>
							<input type="text" class="form-control" id="nomb_p" placeholder="Nombre completo"  onpaste="return false" tabindex="550" onkeypress="return esnombre5(event);"  onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_nomb_p'><p></p></div>
						</div>
						
						<div class="form-group-sm">
							<label >Documento de Identidad</label>
								<div class = "input-group">

									<span class="input-group-btn">
										<select id="t_doc_p" class="btn-sm"  tabindex="555"  >
											<option value="0">CC</option>
											<option value="1">CE</option>
											<option value="2">PA</option>
										</select>
									</span>

									<input type="text" class="form-control" id="num_doc_p" placeholder="Ingrese el numero del documento"  onpaste="return false" tabindex="560" onkeypress="return escedula5(event);" onblur="alsalira(this.id)">
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_num_doc_p'><p></p></div>
						</div>	

						<div class="form-group-sm">
							<label for="tele22">Teléfono de contacto</label>
							<input type="text" class="form-control" id="tele5" placeholder="Ingrese un número telefónico"  onpaste="return false" tabindex="565" onkeypress="return estele5(event);" onblur="alsalir2(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_tele5' class="aaa"></div>
						</div>

							<div id="confirma_telefono5">
								<ul><li id="conf_tel5" style="color:#fff;text-align:center" ></li></ul>
							</div>	

							<div class="form-group-sm">
							  <label for="depa2">Departamento</label>
							  <input type="text" class="form-control" id="depa2" placeholder="Departamento"  onpaste="return false" disabled="true">
							</div>

							<div class="form-group-sm">
							  <label for="muni2">Municipio</label>
							  <input type="text" class="form-control" id="muni2" placeholder="Municipio"  onpaste="return false" disabled="true">
							</div>

					</div>
				</div>

				<div class="box-header with-border">
					<h3 class="box-title">Lista de personal</h3>
				</div><!-- /.box-header -->

				<div class="box box-primary" >			
					<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
							<table id="tabla5" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th></th>
										<th>Nombre y apellido </th>
										<th>Nro. Documento</th>
										<th>teléfono</th>
										<th>Correo-e</th>
										<th>Departamento</th>
										<th>Municipio</th>
										<th>Ruta aérea</th>
										<th>Costo aéreo</th>
										<th>Ruta T./F. intermunicipal</th>
										<th>Costo T./F intermunicipal</th>
										<th>Ruta T. urbana </th>																		
										<th>Costo T. urbana</th>
										<th>Alojamiento</th>
										<th>Costo Alojamiento</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
					</div>
				
					<div class="box-footer">
						<button id="quitar5" type="button" class="btn btn-danger sm pull-right"><i class="fa fa-fw fa-minus"></i>Quitar</button>
					</div>
				</div>
			</div>

			<div class="col-md-4" id="t_oculto" style="display: none;">
				<div class="box-header with-border">
					<h3 class="box-title">Transporte</h3>
				</div><!-- /.box-header -->
				<div class="box box-primary">
					<div class="box-body">

					<div id="ta_dido" style="display:none;">	
						<div class="form-group-sm">
							<label>Ruta Aérea</label>
							<input type="text" class="form-control" id="r_aereo" placeholder="Ruta aérea"  onpaste="return false" tabindex="570" onkeypress="return esruta3(event);"  onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_r_aereo'><p></p></div>
						</div>

						<label>Salida y llegada</label>
						<div class="input-group">
							<input class="form-control" id="f_ida" data-date-format="dd-mm-yyyy" placeholder="Fecha de salida" type="text" onpaste="return false" tabindex="575">	
							<span class="input-group-btn" tabindex="-1" style="width:40px;"></span>
							<input class="form-control" id="h_ida" type="time" onpaste="return false" tabindex="576" min="05:00" max="22:00">
						</div>
						<div class="input-group">
							<input class="form-control" id="f_vuelta" data-date-format="dd-mm-yyyy" placeholder="Fecha de llegada" type="text" onpaste="return false" tabindex="580">
							<span class="input-group-btn" tabindex="-1" style="width:40px;"></span>
							<input class="form-control" id="h_vuelta" type="time" onpaste="return false" tabindex="582" min="05:00" max="22:00">
						</div>

						<label>Costo ida/vuelta</label>
						<div class="input-group">
							<input type="text" class="form-control pesos" id="a_ida" placeholder="Costo de ida"  onpaste="return false" tabindex="583" onblur="alsalir(this.id)" autocomplete="off">
								<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
							<input type="text" class="form-control pesos" id="a_vuelta" placeholder="Costo de vuelta"  onpaste="return false" tabindex="584" onblur="alsalir(this.id)" autocomplete="off">
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_a_ida'><p></p></div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_a_vuelta'><p></p></div>				
						<div class="form-group-sm">

							<label>Costo transporte aéreo</label>
							<input type="text" class="form-control pesos" id="a_total" placeholder="Costo Total"  onpaste="return false" tabindex="585" onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_a_total'><p></p></div>
						</div>
					</div>

					<div id="tm_dido" style="display:none;">	
						<div class="form-group-sm">
							<label>Ruta terrestre/fluvial intermunicipal</label>
							<input type="text" class="form-control" id="r_terrestre" placeholder="Ruta terreste o fluvial"  onpaste="return false" tabindex="670" onkeypress="return esruta1(event);"  onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_nomb_p'><p></p></div>
						</div>

						<label>Costo ida/vuelta</label>
						<div class="input-group">
							<input type="text" class="form-control pesos" id="r_ida" placeholder="Costo de ida"  onpaste="return false" tabindex="675" onblur="alsalir(this.id)" autocomplete="off">
								<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
							<input type="text" class="form-control pesos" id="r_vuelta" placeholder="Costo de vuelta"  onpaste="return false" tabindex="680" onblur="alsalir(this.id)" autocomplete="off">
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_r_ida'><p></p></div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_r_vuelta'><p></p></div>
					
						<div class="form-group-sm">
							<label>Costo transporte terrestre/fluvial</label>
							<input type="text" class="form-control pesos" id="r_total" placeholder="Costo Total"  onpaste="return false" tabindex="685" onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_r_total'><p></p></div>
						</div>
					</div>

					<div id="tu_dido" style="display:none;">	
						<div class="form-group-sm">
							<label>Ruta terrestre urbana</label>
							<input type="text" class="form-control" id="u_terrestre" placeholder="Ruta urbana"  onpaste="return false" tabindex="870" onkeypress="return esruta2(event);"  onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_u_terrestre'><p></p></div>
						</div>

						<label>Costo ida/vuelta</label>
						<div class="input-group">
							<input type="text" class="form-control pesos" id="u_ida" placeholder="Costo de ida"  onpaste="return false" tabindex="875" onblur="alsalir(this.id)" autocomplete="off">
							<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
							<input type="text" class="form-control pesos" id="u_vuelta" placeholder="Costo de vuelta"  onpaste="return false" tabindex="880" onblur="alsalir(this.id)" autocomplete="off">
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_u_ida'><p></p></div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_u_vuelta'><p></p></div>
						
						<div class="form-group-sm">
							<label>Costo transporte urbano</label>
							<input type="text" class="form-control pesos" id="u_total" placeholder="Costo Total"  onpaste="return false" tabindex="885" onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_u_total'><p></p></div>
						</div>
					</div>
					<button id="t_guarda1" type="button" class="btn btn-success t_ocu1 t_guarda1"><i class="fa fa-fw fa-save"></i>Agregar</button>
					<button id="t_ocul" type="button" class="btn btn-primary pull-right t_ocu1"><i class="fa fa-fw fa-reply"></i>Regresar</button>
											
					</div>
				</div>
			</div>

		 	

			<div class="col-md-4" style="display: none;">
				<div id="a_oculto" style="display: none;">
				<div class="box-header with-border">
					<h3 class="box-title">Alojamiento</h3>
				</div><!-- /.box-header -->
				<div class="box box-primary">


					<div class="box-body">		

						<label>Arribo/Nro. de Noches </label>
						<div class="input-group">
							<input class="form-control" id="f_aloja" data-date-format="dd-mm-yyyy" placeholder="Fecha de arribo" type="text" onpaste="return false" tabindex="900">	
								<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
							<input type="text" class="form-control" id="n_aloja" placeholder="Nro. de noches"  onpaste="return false" tabindex="905" onblur="alsalir(this.id)" autocomplete="off">
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_n_aloja'><p></p></div>


						<div class="form-group-sm">
							<label>Costo de alojamiento</label>
							<input type="text" class="form-control pesos" id="aloja_total" placeholder="Costo Total"  onpaste="return false" tabindex="910" onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_aloja_total'><p></p></div>
						</div>

					<button id="t_guarda2" type="button" class="btn btn-success t_guarda1"><i class="fa fa-fw fa-save"></i>Agregar</button>
					<button id="t_ocu2" type="button" class="btn btn-primary pull-right"><i class="fa fa-fw fa-reply"></i>Regresar</button>		
					</div>
				</div>
				</div>
				<div class="box-header with-border">
					<h3 class="box-title">Resumen de costo</h3>
				</div><!-- /.box-header -->
				<div class="box box-primary">
					<div class="box-body">	

						<label>Personal</label>
						<div class="form-group-sm">
							<input type="text" class="form-control pesos" id="total_total1" disabled>
						</div>
						<label>Sub-total Transporte </label>
						<div class="form-group-sm">
							<input type="text" class="form-control pesos" id="total_t" disabled>
						</div>

						<label>Sub-total alojamiento </label>
						<div class="form-group-sm">
							<input type="text" class="form-control pesos" id="total_a" disabled>
						</div>

						<label>Total</label>
						<div class="form-group-sm">
							<input type="text" class="form-control pesos" id="total_total" disabled>
						</div>

					</div>
				</div>
			</div>		 

	    </li>
	</ul>
</div>

</form>

<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
<form id="form" role="form" enctype="multipart/form-data" >
  <div class="modal-dialog modal-lm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="contenido-modal">
         <h4 class="modal-title" id="myModalLabel1">Detalle especifico del requerimiento</h4>
			<div class="message1"></div>
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">

					<div class="box-header with-border"></div><!-- /.box-header -->
					<!-- form start -->
					  <div class="box-body">

							<div class="form-group-sm">
								<label>Tipo</label>
								<select id="d_tipo"   class="form-control" >
									<option value="" selected disabled hidden>Indique tipo de requerimiento </option>
									<option value="0">Salones</option>
									<option value="1">Alimentación</option>
									<option value="2">Materiales</option>
									<option value="3">Cotizables</option>
									<option value="4">Personal</option>
									<option value="5">Tiquetes aéreos</option>
									<option value="6">Reembolso de transporte</option>
								</select>
							</div>

							<div class="form-group-sm">
								<label>Concepto</label>
								<input type="text"  class="form-control" id="d_concepto"  placeholder="Describa el concepto"  onpaste="return false" onkeypress="return esdconcepto(event);" onblur="alsalir(this.id)" autocomplete="off">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_d_concepto' ></div>
							</div>

							<div class="form-group-sm">
								<label>Cantidad</label>
								<input type="text"  class="form-control" id="d_cantidad"  placeholder="Indique la cantidad"  onpaste="return false" onkeypress="return esdcantidad(event);" onblur="alsalir(this.id)" autocomplete="off">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_d_cantidad' ></div>
							</div>

							<div class="form-group-sm">
								<label>Medida</label>
								<select id="d_medida"   class="form-control" >
									<option value="" selected disabled hidden>Indique tipo de medida </option>
									<option value="0">Metros</option>
									<option value="1">Unidades</option>
									<option value="2">Kilogramos</option>
									<option value="3">Gramos</option>
									<option value="4">Centimetros</option>
									<option value="5">Pulgadas</option>
									<option value="6">Libras</option>
									<option value="7">Litros</option>
									<option value="8">Galones</option>
								</select>
							</div>

							<div class="form-group-sm">
								<label>Costo unitario</label>
								<input type="text"  class="form-control" id="d_costo"  placeholder="Indique el costo"  onpaste="return false" onkeypress="return esdcantidad2(event);" onblur="alsalir(this.id)" autocomplete="off">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_d_costo' ></div>
							</div>

							<div class="form-group-sm">
							  <label>Observaciones</label>
							  <textarea class="form-control" id="d_obs" rows="4" placeholder="Redacte un resumen de características"  onpaste="return false" onkeypress="return esdobs(event);"  onblur="alsalir(this.id);"  autocomplete="off"></textarea>
  							  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_d_obs' class="aaa"><p></p></div>
							</div>

					  </div><!-- /.box-body -->

				  </div><!-- /.box -->

				</div>
			</div>
							      <div class="modal-footer">
							      		<button id="close1" type="button" class="btn btn-success" ><i class="fa fa-fw fa-save"></i>Incluir</button>
							      		<button id="cancelar2" type="button" class="btn btn-primary  pull-right"><i class="fa fa-fw fa-times"></i>Cancelar</button>

							      </div>
        </div>
      </div>
    </div>
  </div>
</form>                   
</div>

<!-- Modal 2 -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
<form id="form" role="form" enctype="multipart/form-data" >
  <div class="modal-dialog modal-lm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="contenido-modal">
         <h4 class="modal-title" id="myModalLabel1">Participantes del evento</h4>
			<div class="message1"></div>
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">

					<div class="box-header with-border"></div><!-- /.box-header -->
					<!-- form start -->
					  <div class="box-body">

					 	 <div class="form-group-sm">
					 	 	<label>Nombre del participante</label>
							<input type="text" class="form-control" id="nombre2" placeholder="Nombre completo"  onpaste="return false" tabindex="260" onkeypress="return esnombre4(event);"  onblur="alsalir(this.id)" autocomplete="off">
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_nombre2'><p></p></div>
					 	 </div>
							
							
							<div class="form-group-sm">
								<label >Documento de Identidad</label>
									<div class = "input-group">

										<span class="input-group-btn">
											<select id="t_doc2" class="btn-sm"  tabindex="300"  >
												<option value="0">CC</option>
												<option value="1">CE</option>
												<option value="2">PA</option>
											</select>
										</span>

										<input type="text" class="form-control" id="num_doc2" placeholder="Ingrese el numero del documento"  onpaste="return false" tabindex="310" onkeypress="return escedula3(event);" onblur="alsalira(this.id)">
									</div>
									<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_num_doc2'><p></p></div>
							</div>	

							<div class="form-group-sm">
								<label for="tele3">Teléfono de contacto</label>
								<input type="text" class="form-control" id="tele3" placeholder="Ingrese un número telefónico"  onpaste="return false" tabindex="320" onkeypress="return estele3(event);" onblur="alsalir2(this.id)" autocomplete="off">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_tele3' class="aaa"></div>
							</div>

								<div id="confirma_telefono3">
									<ul><li id="conf_tel3" style="color:#fff;text-align:center" ></li></ul>
								</div>

							<div class="form-group-sm">
								<label for="correo3">Correo electrónico</label>
								<input type="text" class="form-control" id="correo3" placeholder="Ingrese un correo electrónico"  onpaste="return false" tabindex="330" onkeypress="return escorreo3(event);" onblur="alsalir2(this.id)" autocomplete="off">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_correo3' class="aaa"></div>
							</div>

								<div id="confirma_correo3">
									<ul><li id="conf_cor3" style="color:#fff;text-align:center" ></li></ul>
								</div>			

					  </div><!-- /.box-body -->

				  </div><!-- /.box -->

				</div>
			</div>
							      <div class="modal-footer">
							      		<button id="close2" type="button" class="btn btn-success" ><i class="fa fa-fw fa-save"></i>Incluir</button>
							      		<button id="cancelar3" type="button" class="btn btn-primary  pull-right"><i class="fa fa-fw fa-times"></i>Cancelar</button>

							      </div>
        </div>
      </div>
    </div>
  </div>
</form>                   
</div>

<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
<form id="form" role="form" enctype="multipart/form-data" >
  <div class="modal-dialog modal-lm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="contenido-modal">
         <h4 class="modal-title" id="myModalLabel1">Anexos</h4>
			<div class="message1"></div>
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">

					<div class="box-header with-border"></div><!-- /.box-header -->
					<!-- form start -->
					  <div class="box-body">


						<div class="form-group">
							<img class="imgusr" alt="" src="#" id="file_url" width="100%" height="300%">
							
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Adjuntar archivo  no mayor a 1 Mb.</label>
							<input type="file" id="InputFile" tabindex="900">
						</div>

					  </div><!-- /.box-body -->

				  </div><!-- /.box -->

				</div>
			</div>
							      <div class="modal-footer">
										<button id="close11" type="button" class="btn btn-success" ><i class="fa fa-fw fa-save"></i>Adjuntar</button>
										
							      		<button id="cancelar22" type="button" class="btn btn-primary  pull-right"><i class="fa fa-fw fa-times"></i>Cancelar</button>

							      </div>
        </div>
      </div>
    </div>
  </div>
</form>                   
</div>


						  <div class="box-footer">
							<button id="izquierda" type="button" class="btn btn-primary" disabled tabindex="-1"><i class="fa fa-arrow-left"></i>Anterior</button>
							
							<button id="derecha" type="button" class="btn btn-primary pull-right" tabindex="-1">Siguiente<i class="fa fa-arrow-right"></i></button>
						  </div>

<script language="JavaScript" src="../../plugins/maxLength/maxLength.js"></script>
<script type="text/javascript" src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../plugins/datepicker/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
<script src="../../plugins/unslider/unslider-min.js"></script>
<script type="text/javascript" src="../../js/bootstrap-multiselect.js"></script>
<script language="JavaScript" src="../../plugins/mask/jquery.mask.min.js"></script>
<script type="text/javascript" src="../../plugins/confirma/jquery-confirm.min.js"></script>
<script src="../../plugins/balloon/jquery.balloon.min.js"></script>
<script src="../../plugins/leaflet/leaflet.js"></script>
<script src="../../plugins/leaflet/leaflet.label.js"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq8g7WPAx_OtQaQNzYPvexnbbV50CDf0o" async defer></script>
<script src="../../plugins/leaflet/gmaps.js"></script>

<script src="../../plugins/leaflet/Leaflet.GoogleMutant.js"></script>-->

<script src="../../plugins/select3/bootstrap-select.min.js"></script>
<script src="../../plugins/select3/i18n/defaults-es_ES.min.js"></script>

<link rel="stylesheet" href="../../plugins/confirma/jquery-confirm.min.css" type="text/css"/>
<link rel="stylesheet" href="../../css/style_format_pass.css" type="text/css"/>
<link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css" type="text/css"/>
<link rel="stylesheet" href="../../plugins/unslider/unslider.css">
<link rel="stylesheet" href="../../plugins/leaflet/leaflet.css"/>

<link rel="stylesheet" href="../../plugins/select3/bootstrap-select.min.css">

 <script type="text/javascript">

$(document).ready(function() {
	var ahora = new Date();
	var hora = ahora.getHours() + ':' + ahora.getMinutes();
	//alert(hora);
              $('#hsoli').val(hora);
//alert( $('#hsoli').val());
/*	$.post( "../../controllers/mdetalles_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
	$.post( "../../controllers/mvictimas_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
	$.post( "../../controllers/madjuntos_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
*/
setTimeout(function() {	
	$.post( "../../controllers/msolicitudes_controller", { action: "contar_id"}).done(function( data ) {
		var parsedJson = $.parseJSON(data);
		var numstring=parsedJson.toString();
		var res = numstring.padStart(4, 0);
		
//alert(parsedJson);
		$("#n_accion").val( res );
		$("#ideado").val( numstring );
	},"json");

}, 2500);

setTimeout(function() {	
var ideco=$("#ideado").val();
	$.post( "../../controllers/mdetalles_controller", { action: "sumar_costo", ideco:ideco}).done(function( data ) {
		var parsedJson = $.parseJSON(data);
		var cos_tot=parsedJson;
		$("#totalite").val( cos_tot );
	},"json");
}, 3000);
	var desh=<?php echo $_SESSION['rolx'];  ?>;//verifica el rol del usuario
//alert(desh);
		switch (desh) {

		case 4:	document.getElementById("a_terr").disabled=false;document.getElementById("a_terro").disabled=false;
				document.getElementById("a_naci").disabled=false;document.getElementById("a_nacio").disabled=false;
				document.getElementById("a_func").disabled=false;document.getElementById("a_funco").disabled=false;
				document.getElementById("a_supe").disabled=false;document.getElementById("a_supeo").disabled=false;
			    break;					
		case 2:	document.getElementById("a_terr").disabled=false;document.getElementById("a_terro").disabled=false;
				document.getElementById("a_naci").disabled=true;document.getElementById("a_nacio").disabled=false;
				document.getElementById("a_func").disabled=true;document.getElementById("a_funco").disabled=false;
				document.getElementById("a_supe").disabled=true;document.getElementById("a_supeo").disabled=false;		
			    break;
		case 3:	document.getElementById("a_terr").disabled=true;document.getElementById("a_terro").disabled=false;
				document.getElementById("a_naci").disabled=true;document.getElementById("a_nacio").disabled=false;
				document.getElementById("a_func").disabled=true;document.getElementById("a_funco").disabled=false;
				document.getElementById("a_supe").disabled=true;document.getElementById("a_supeo").disabled=false;
				break;	
		case 5:	document.getElementById("a_terr").disabled=true;document.getElementById("a_terro").disabled=false;
				document.getElementById("a_naci").disabled=false;document.getElementById("a_nacio").disabled=false;
				document.getElementById("a_func").disabled=true;document.getElementById("a_funco").disabled=false;
				document.getElementById("a_supe").disabled=true;document.getElementById("a_supeo").disabled=false;
				break;			
		case 6:	document.getElementById("a_terr").disabled=true;document.getElementById("a_terro").disabled=false;
				document.getElementById("a_naci").disabled=true;document.getElementById("a_nacio").disabled=false;
				document.getElementById("a_func").disabled=false;document.getElementById("a_funco").disabled=false;
				document.getElementById("a_supe").disabled=true;document.getElementById("a_supeo").disabled=false;
				break;
		case 7:	document.getElementById("a_terr").disabled=true;document.getElementById("a_terro").disabled=false;
				document.getElementById("a_naci").disabled=true;document.getElementById("a_nacio").disabled=false;
				document.getElementById("a_func").disabled=true;document.getElementById("a_funco").disabled=false;
				document.getElementById("a_supe").disabled=false;document.getElementById("a_supeo").disabled=false;
				break;
	}

});



//MASCARAS DE VALIDACION ########################################

$('.pesos').mask('#.##0,00', {reverse: true});

$('#tele1').mask('A00-000-0000', {

    	translation: {

    		 'A': {

        			pattern: /[03]/, optional: false

     		        }

    	  },

    	

  });

  $('#tele3').mask('A00-000-0000', {

translation: {

	 'A': {

			pattern: /[03]/, optional: false

			 }

  },



});

$('#tele2').mask('A00-000-0000', {

    	translation: {

    		 'A': {

        			pattern: /[03]/, optional: false

     		        }

    	  },

    	

  });


var tick=0;

$("#derecha" ).click(function() {

	if(tick==0){

		var cont_alert =$('.bbb').filter(function() { return $(this).val() == ""; }).size();
		//var cont_alert = $('.aaa p:contains("") ').size();
//alert(cont_alert);
			document.getElementById('derecha').disabled = true;
			$("#derecha").css("display", "none");
		//if(cont_alert!=0){
			if(cont_alert > 30){	
			//alert('existen campos vacios');

						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});			

		}else{

			
			$('.base').unslider('animate:1');
			tick=1;
			document.getElementById('izquierda').disabled = false;
			$("#izquierda").css("display", "block");
			

			setTimeout(function() {
				document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
			}, 800);

		}

	}else if(tick==1){

		var cont_alert3 =$('.ccc').filter(function() { return $(this).val() == ""; }).size();
		//var cont_alert = $('.aaa p:contains("") ').size();

		//if(cont_alert3!=0){
			if(cont_alert3 > 50){
						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});	

		}else{

			//$('.base').unslider('animate:2');
			
			//tick=2;
			document.getElementById('derecha').disabled = false;
			$("#derecha").css("display", "block");
			setTimeout(function() {
				document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
			}, 800);			

		}

	}

});

$("#izquierda" ).click(function() {

	if(tick==1){
		
		$('.base').unslider('animate:0');
		tick=0;
		document.getElementById('izquierda').disabled = true;
		$("#izquierda").css("display", "none");
		document.getElementById('derecha').disabled = false;
		$("#derecha").css("display", "block");
		setTimeout(function() {
			document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
		}, 800);

	}else if(tick==2){
		
		$('.base').unslider('animate:1');
		tick=1;
		document.getElementById('derecha').disabled = false;
		$("#derecha").css("display", "block");
		setTimeout(function() {
			document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
		}, 800);

	}

});


		$('#tele1').keyup(function() {
			// set password variable
			var telefo = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar1",telefono:telefo}).done(function( data ) {
			 $("#conf_tel").html( data );

			});

		}).focus(function() {
			$('#confirma_telefono').show();
		}).blur(function() {
			$('#confirma_telefono').hide();
		});

		$('#tele2').keyup(function() {
			// set password variable
			var telefo = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar2",telefono:telefo}).done(function( data ) {
			 $("#conf_tel2").html( data );

			});

		}).focus(function() {
			$('#confirma_telefono2').show();
		}).blur(function() {
			$('#confirma_telefono2').hide();
		});


		$('#tele3').keyup(function() {
			// set password variable
			var telefo = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar22",telefono:telefo}).done(function( data ) {
			 $("#conf_tel3").html( data );

			});

		}).focus(function() {
			$('#confirma_telefono3').show();
		}).blur(function() {
			$('#confirma_telefono3').hide();
		});



		$('#propietario').keyup(function() {
			// set password variable
			var nombreso = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar4",nombre:nombreso}).done(function( data ) {
			 $("#conf_nom").html( data );

			});

		}).focus(function() {
			$('#confirma_nombre ').show();
		}).blur(function() {
			$('#confirma_nombre').hide();
		});

		$('#correo1').keyup(function() {
			// set password variable
			var corre = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar3",correo:corre}).done(function( data ) {
			 $("#conf_cor").html( data );

			});

		}).focus(function() {
			$('#confirma_correo').show();
		}).blur(function() {
			$('#confirma_correo').hide();
		});

		$('#correo2').keyup(function() {
			// set password variable
			var corre = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar5",correo:corre}).done(function( data ) {
			 $("#conf_cor2").html( data );

			});

		}).focus(function() {
			$('#confirma_correo2').show();
		}).blur(function() {
			$('#confirma_correo2').hide();
		});		


		$('#correo3').keyup(function() {
			// set password variable
			var corre = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar55",correo:corre}).done(function( data ) {
			 $("#conf_cor3").html( data );

			});

		}).focus(function() {
			$('#confirma_correo3').show();
		}).blur(function() {
			$('#confirma_correo3').hide();
		});		


		$('.base').unslider({

			keys: false,
			nav: false,
			arrows: false

		});


		$("#fecha1").datepicker("setDate", new Date());
		
		$('#fecha2').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});

		$('#fecha3').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});


		$('#f_ida').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});

		$('#f_vuelta').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});

		$('#f_aloja').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});
	
		$("#InputFile").change(function(){
		    readURL(this);
		});

		$('#guardia1').on('focus', function() {
			$('#pertenencia').focus();
				var cont_alert2 =$('.bbb').filter(function() { return $(this).val() == ""; }).size();
				//var cont_alert = $('.aaa p:contains("") ').size();
		//alert(cont_alert2);
				//if(cont_alert2!=0){
					if(cont_alert2  > 30 ){
						
						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});						

				}else{

					$('.base').unslider('animate:1');

					

				    setTimeout(function() {
				
						document.getElementById('izquierda').disabled = false;
						$("#izquierda").css("display", "block");
						document.getElementById('derecha').disabled = true;
						$("#derecha").css("display", "none");
				    	tick=1;
						$('#guardia78').focus();
						//document.getElementById("tipo1").focus();
						document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
				    }, 800);					

				}	

		});


		$('.guardia77').on('focus', function() {
				$('#idaccion').focus();
		});

		$('#jump1').on('focus', function() {
				$('#agregar2').focus();
		});

		$('#jump2').on('focus', function() {
				$('#t_trans').focus();
		});
		
		$('#jump3').on('focus', function() {
				$('#agregar').focus();
		});

		$('.guardia79').on('focus', function() {
				$('#entidad').focus();
		});

		$('.guardia80').on('focus', function() {
			$('#tipo2').dropdown('toggle');
		});

		$('.guardia81').on('focus', function() {
			$('#guardia2').dropdown('toggle');
		});

		$('#guardia2').on('focus', function() {
				$('#entidad' ).focus();
				var cont_alert4 =$('.ccc').filter(function() { return $(this).val() == ""; }).size();
				//var cont_alert = $('.aaa p:contains("") ').size();

				//if(cont_alert4!=0){
					if(cont_alert4 >50){
						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});	

				}else{


					//$('.base').unslider('animate:2');
				    setTimeout(function() {

						
				    	$('#prueba').focus();
				    	document.getElementById('derecha').disabled = true;
						$("#derecha").css("display", "none");
				    	tick=2;
						document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
				    }, 800);					

				}

		});

		

		$('#t_trans').multiselect({

			enableClickableOptGroups: true,
			enableCollapsibleOptGroups: false,
			onChange: function(element, checked, option) {
				var selecto=(element.val());
				if(checked === true) {

					//if(selecto==0){$('#ta_dido').css('display','block');}
				//	if(selecto==1){$('#tm_dido').css('display','block');}
				//	if(selecto==2){$('#tu_dido').css('display','block');}

				}else if(checked === false){

					if(selecto==0){$('#ta_dido').css('display','none');}
					if(selecto==1){$('#tm_dido').css('display','none');}
					if(selecto==2){$('#tu_dido').css('display','none');}

				}

			},
			maxHeight: 180,
			inheritClass: true,
			nonSelectedText: 'Seleccione tipo de transporte',
			buttonWidth: '100%'

		});


		
		$('#tipo1').on('change', function () {

     		var selectVal = $("#tipo1 option:selected").val();
			
			 if(selectVal==8){
				//alert(selectVal);
				$("#otro1a").css("display", "block");
				
				$("#otro1").focus();

			}else{

				$("#otro1a").css("display", "none");		
				$("#otro1").val("");

			}
		});

		$('#activity').on('change', function () {

			var selectVal = $("#activity option:selected").val();

			if(selectVal==0){

					$("#actv_1").css("display", "block");
					$("#actv_2").css("display", "none");
					$("#actv_3").css("display", "none");

			}else if(selectVal==1){

				    $("#actv_1").css("display", "none");
					$("#actv_2").css("display", "block");
					$("#actv_3").css("display", "none");

			}else{

					$("#actv_1").css("display", "none");
					$("#actv_2").css("display", "none");
					$("#actv_3").css("display", "block");

			}
		
		});

		$("#exit" ).click(function() {

						$.confirm({
						    title: '¡Esta acción lo llevará al listado de requerimientos y borrará los datos no registrados!.¿Desea continuar?',
						    content:false,
						    confirmButton: 'Si',
						    cancelButton: 'No',
						    confirmButtonClass: 'btn-primary',
    						    cancelButtonClass: 'btn-success',

						    confirm: function(){
								var idea4=$("#ideado").val();
								
								$.post( "../../controllers/msolicitudes_controller", {action: "del_temp",regis4:idea4}).done(function(data){},"json");

						    	setTimeout(function(){

						                  $(location).attr('href','../solicitudes/');
                  
						        }, 1000);
							},

						    cancel: function(){

							}
						});				
			
		});

		// ********************************************************************************************




		$("#a_tra" ).click(function(){

			if($('#transporte').prop('checked')== true && $('#t_trans option:selected').length==0){
				
				$.alert({
						    title: 'Debe indicar al menos un tipo de transporte!',
						    content: false,
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success'
						});
			}else{
				$('.base').unslider('animate:2');
				document.getElementById('izquierda').disabled = true;
				$("#izquierda").css("display", "none");
			}

		});

		$("#t_ocul" ).click(function(){

			$.confirm({
						    title: '¡Esta acción borrará los datos no registrados!.¿Desea continuar?',
						    content:false,
						    confirmButton: 'Si',
						    cancelButton: 'No',
						    confirmButtonClass: 'btn-primary',
    						    cancelButtonClass: 'btn-success',

						    confirm: function(){
								$('.base').unslider('animate:1');
								document.getElementById('izquierda').disabled = false;
								$("#izquierda").css("display", "block");
								$('#ta_dido').css('display','none');
								$('#tm_dido').css('display','none');
								$('#tu_dido').css('display','none');
								document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
								$('#t_trans').multiselect('deselect', ['0']);
								$('#t_trans').multiselect('deselect', ['1']);
								$('#t_trans').multiselect('deselect', ['2']);
							},

						    cancel: function(){

							}
			});	
		});


		$("#t_ocu2" ).click(function(){
			$.confirm({
						    title: '¡Esta acción borrará los datos no registrados!.¿Desea continuar?',
						    content:false,
						    confirmButton: 'Si',
						    cancelButton: 'No',
						    confirmButtonClass: 'btn-primary',
    						    cancelButtonClass: 'btn-success',

						    confirm: function(){
								$('.base').unslider('animate:1');
								document.getElementById('izquierda').disabled = false;
								$("#izquierda").css("display", "block");
								$('#ta_dido').css('display','none');
								$('#tm_dido').css('display','none');
								$('#tu_dido').css('display','none');
								document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
								$('#t_trans').multiselect('deselect', ['0']);
								$('#t_trans').multiselect('deselect', ['1']);
								$('#t_trans').multiselect('deselect', ['2']);
							},

						    cancel: function(){

							}
			});	

		});

		$("#transporte") .change(function() {

			if( $('#transporte').prop('checked')== true ) {

				$("#msg_trans").val("Requiere transporte");
				$("#trans").val(1);
				$("#noveo").css("display", "block");
				//document.getElementById("a_tra").disabled=false;
				$("#t_oculto").css("display", "block");
				
				

			}else{

				$("#msg_trans").val("No requiere transporte");
				$("#trans").val(0);
				$("#noveo").css("display", "none");
				$('#t_trans').multiselect('deselect', ['0']);
				$('#t_trans').multiselect('deselect', ['1']);
				$('#t_trans').multiselect('deselect', ['2']);
				$("#t_oculto").css("display", "none");
					if ($('#alojamiento').prop('checked')== true){	
						//document.getElementById("a_tra").disabled=false;
						
						
					}else{
						//document.getElementById("a_tra").disabled=true;
						
					}

			}


		});

		$("#alojamiento") .change(function() {

			if( $('#alojamiento').prop('checked')== true ) {

				$("#msg_aloja").val("Requiere alojamiento");
				$("#aloja").val(1);
				//document.getElementById("a_tra").disabled=false;
				$("#a_oculto").css("display", "block");
				$(".t_ocu1").css("display", "none");
			}else{ 

				$("#msg_aloja").val("No requiere alojamiento");
				$("#aloja").val(0);				
				$("#a_oculto").css("display", "none");
					if ($('#transporte').prop('checked')== true ){		
					//	document.getElementById("a_tra").disabled=false;
						
					}else{
						//document.getElementById("a_tra").disabled=true;
						
					}
				$(".t_ocu1").css("display", "block");	
			}

		});

		$("#a_terr" ).change(function() {
			if( $('#a_terr').prop('checked')== true ) {
				$("#v_terr").val(1);  
			}else{
				$("#v_terr").val(0); 
			}
		});

		$("#a_naci" ).change(function() {
			if( $('#a_naci').prop('checked')== true ) {
				$("#v_naci").val(1);  
			}else{
				$("#v_naci").val(0); 
			}
		});

		$("#a_func" ).change(function() {
			if( $('#a_func').prop('checked')== true ) {
				$("#v_func").val(1);  
			}else{
				$("#v_func").val(0); 
			}
		});

		$("#a_supe" ).change(function() {
			if( $('#a_supe').prop('checked')== true ) {
				$("#v_supe").val(1);  
			}else{
				$("#v_supe").val(0); 
			}
		});				

		$("#aruta" ).change(function() {

			if( $('#aruta').prop('checked')== true ) {

			   	document.getElementById("afase").disabled = false;
				   $("#arutaval").val(1);  

			}else{

			 	document.getElementById("afase").disabled = true;
				 $("#afase").val("");
				 $("#arutaval").val(0); 
			}

		});

		$("#apirc" ).change(function() {

			if( $('#apirc').prop('checked')== true ) {

				document.getElementById("amedida").disabled = false;
				$("#idacc").css("display", "block");
				$(".guardia79").css("display", "none");		
				$("#apircval").val(1); 	
			}else{

				document.getElementById("amedida").disabled = true;
				$("#idacc").css("display", "none");	
				$(".guardia79").css("display", "block");	
				$("#idaccion").val("");
				$("#amedida").val("");
				$("#apircval").val(0);  
				
			}
			
		});


		$("#a_propio" ).change(function() {

			if( $('#a_propio').prop('checked')== true ) {

			   	 $("#lab_propio").val(1);
			   	 $('#modal1').modal({backdrop: 'static',keyboard: false});
			   	
			}else{

			 	$("#lab_propio").val(0);
			}

		});
		
	



		$("#close1").click(function() {
			var ideco2=$("#ideado").val();
				$.post( "../../controllers/mdetalles_controller", {

					action: "temporal",
					idea:$('#ideado').val(),
					tipo: $('#d_tipo').val(),
					concepto: $('#d_concepto').val(),
					cantidad: $('#d_cantidad').val(),
					medida: $('#d_medida').val(),
					costo: $('#d_costo').val(),
					observaciones: $('#d_obs').val()

				}).done(function(data){

					var parsedJson = $.parseJSON(data);
					$(".message1").html(parsedJson.mensaje);

					if(parsedJson.resultado != 'error'){

						
					    setTimeout(function(){

							$("#d_tipo").val(null);
							$("#d_concepto").val(null);
							$("#d_cantidad").val(null);
							$("#d_medida").val(null);
							$("#d_obs").val(null);
							$("#d_costo").val(null);

							//$('#tabla').DataTable().ajax.reload();
 							$(".alert").alert('close');
					      	$('#modal1').modal('toggle');
							$("#agregar").focus();

							$.post( "../../controllers/mdetalles_controller", { action: "sumar_costo",ideco:ideco2}).done(function( data ) {
								var parsedJson = $.parseJSON(data);
								var cos_tot=parsedJson;
								$("#totalite").val( cos_tot );
							},"json");

					    }, 3000);

					}else{

					}

				},"json");
		    //$('#activo').focus();
			setTimeout(function(){
				$('#tabla').DataTable().ajax.reload();
			}, 3000);
		});

		$(".t_guarda1").click(function() {

					$.post( "../../controllers/mtransportes_controller", {

						action: "temporal",
						nomb_p: $('#nomb_p').val(),
						t_doc_p: $('#t_doc_p').val(),
						num_doc_p: $('#num_doc_p').val(),
						tele5: $('#tele5').val(),
						depa2: $('#depa2').val(),
						muni2: $('#muni2').val(),

						r_aereo: $('#r_aereo').val(),
						f_ida: $('#f_ida').val(),
						h_ida: $('#h_ida').val(),
						f_vuelta: $('#f_vuelta').val(),
						h_vuelta: $('#h_vuelta').val(),
						a_ida: $('#a_ida').val(),
						a_vuelta: $('#a_vuelta').val(),
						a_total: $('#a_total').val(),

						r_terrestre: $('#r_terrestre').val(),						
						r_ida: $('#r_ida').val(),						
						r_vuelta: $('#r_vuelta').val(),						
						r_total: $('#r_total').val(),	

						u_terrestre: $('#u_terrestre').val(),
						u_ida: $('#u_ida').val(),						
						u_vuelta: $('#u_vuelta').val(),						
						u_total: $('#u_total').val(),

						f_aloja: $('#f_aloja').val(),						
						n_aloja: $('#n_aloja').val(),						
						aloja_total: $('#aloja_total').val()
						

					}).done(function(data){

						var parsedJson = $.parseJSON(data);
						$(".message").html(parsedJson.mensaje);

						if(parsedJson.resultado != 'error'){

							
							setTimeout(function(){

								$('#nomb_p').val(null);
								$('#t_doc_p').val(0);
								$('#num_doc_p').val(null);
								$('#tele5').val(null);

								$('#r_aereo').val(null);
								$('#f_ida').val(null);
								$('#h_ida').val(null);
								$('#f_vuelta').val(null);
								$('#h_vuelta').val(null);
								$('#a_ida').val(0);
								$('#a_vuelta').val(0);
								$('#a_total').val(0);

								$('#r_terrestre').val(null);						
								$('#r_ida').val(0);						
								$('#r_vuelta').val(0);						
								$('#r_total').val(0);	

								$('#u_terrestre').val(null);
								$('#u_ida').val(0);						
								$('#u_vuelta').val(0);						
								$('#u_total').val(0);

								$('#f_aloja').val(null);						
								$('#n_aloja').val(0);						
								$('#aloja_total').val(0);

								$('#tabla5').DataTable().ajax.reload();
								$(".alert").alert('close');
								$("#nomb_p").focus();

							}, 2000);

						}else{

						}

					},"json");
					//$('#activo').focus();

		});	


		$("#close2").click(function() {

			$.post( "../../controllers/mvictimas_controller", {

				action: "temporal",
				idea:$('#ideado').val(),
				nombre2: $('#nombre2').val(),
				t_doc2: $('#t_doc2').val(),
				num_doc2: $('#num_doc2').val(),
				tele3: $('#tele3').val(),
				correo3: $('#correo3').val()

			}).done(function(data){

				var parsedJson = $.parseJSON(data);
				$(".message1").html(parsedJson.mensaje);

				if(parsedJson.resultado != 'error'){

					
					setTimeout(function(){

						$("#nombre2").val(null);
						$("#t_doc2").val(0);
						$("#num_doc2").val(null);
						$("#tele3").val(null);
						$("#correo3").val(null);
						
						$(".alert").alert('close');
						$('#modal2').modal('toggle');
						$("#agregar2").focus();

					}, 3000);

				}else{

				}

			},"json");
			//$('#activo').focus();
			setTimeout(function(){
				$('#tabla2').DataTable().ajax.reload();
			}, 3000);	

		});	

		$("#close11").click(function() {
			
			var formData = new FormData();
			formData.append('file', $('input[type=file]')[0].files[0]);
			formData.append('action', 'temporal_reg');
			formData.append('idea', $("#ideado").val());

			$.ajax({
				url: "../../controllers/madjuntos_controller",
				type: "POST",
				data: formData,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data)
				{
						
					$(".message1").html(data);

							$('#modal3').scrollTop(0);
								
							setTimeout(function(){

								$("#InputFile").val(null);
								$("#file_url").attr('src', '');

								$(".alert").alert('close');
								$('#modal3').modal('toggle');
								$("#anex").focus();
							}, 2500);

				}
			});

			setTimeout(function(){
				$('#tabla30').DataTable().ajax.reload();
			}, 3000);

		});		


		setTimeout(function() {	
								var este = document.getElementById("ideado").value;

								
										var table = $('#tabla').dataTable({
										  	
											  //"destroy": true,
	
											  "ajax": {
												"url": "../../data_json/data_mdetalles?este="+este,
												"dataSrc": ""
											  },
	
											  "fnRowCallback": function(nRow, mData, iDisplayIndex ) {
	
												$('td:eq(0)', nRow).css('opacity','0');
		
												return nRow;
												},
											  "scrollX": true,
											  "scrollY": "130px",
											  "columns": [
													{ "data": "id" },
													{ "data": "tipo" },
													{ "data": "concepto" },
													{ "data": "cantidad" },
													{ "data": "medida" },
													{ "data": "costo" },
													{ "data": "observaciones" }
													
													
												],
											//"order": [[ 0, "asc" ]],
											"bPaginate": false,
											"info":     false,
											"bFilter": false
	
											  //"aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]
										});
	
	
								$('#tabla tbody').on( 'click', 'tr', function () {
	
									if ( $(this).hasClass('selected') ) {
										$(this).removeClass('selected');
									}
									else {
										table.$('tr.selected').removeClass('selected');
										$(this).addClass('selected');
									}
								});
					
								
											var table2 = $('#tabla2').dataTable({
												  
												  //"destroy": true,
		
												  "ajax": {
													"url": "../../data_json/data_mvictimas?este="+este,
													"dataSrc": ""
												  },
												  "fnRowCallback": function(nRow, mData, iDisplayIndex ) {
	
															$('td:eq(0)', nRow).css('opacity','0');
	
															return nRow;
															},
												  "scrollX": true,
												  "scrollY": "130px",
												  "columns": [
														{ "data": "id" },
														{ "data": "nombre" },
														{ "data": "documento" },
														{ "data": "correo" },
														{ "data": "telefono" }
														
													],
												//"order": [[ 0, "asc" ]],
												"bPaginate": false,
												"info":     false,
												"bFilter": false
		
												  //"aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]
											});
		
		
									$('#tabla2 tbody').on( 'click', 'tr', function () {
		
										if ( $(this).hasClass('selected') ) {
											$(this).removeClass('selected');
										}
										else {
											table.$('tr.selected').removeClass('selected');
											$(this).addClass('selected');
										}
									});


									var table = $('#tabla30').dataTable({
										  
										  //"destroy": true,

										  "ajax": {
											"url": "../../data_json/data_mequiposo?este="+este,
											"dataSrc": ""
										  },
										  "scrollX": true,
										  "scrollY": "120px",
										  "columns": [
												{ "data": "id" },	
												{ "data": "anexo" }						
											],
											"aoColumnDefs": [
											{
												"width": "20px",
												"aTargets": [0]
											}
										],
										//"order": [[ 0, "asc" ]],
										"bPaginate": false,
										"info":     false,
										"bFilter": false

										  //"aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]
									});
										

							$('#tabla30 tbody').on( 'click', 'tr', function () {

								if ( $(this).hasClass('selected') ) {
									$(this).removeClass('selected');
								}
								else {
									table.$('tr.selected').removeClass('selected');
									$(this).addClass('selected');
								}
							});

							}, 3000);

			$('#quitar').click( function () {

				var value= table.$('tr.selected').children('td:first').text();
				//alert(value);
				if(!value){

						$.alert({
						    title: '!Seleccione el item a desincorporar!',
						    content: false,
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success'
						});

				}else{

						$.confirm({

								    title: '¿Desea desincorporar este item?!',
								    content:false,
								    confirmButton: 'Si',
								    cancelButton: 'No',
								    confirmButtonClass: 'btn-primary',
		    						    cancelButtonClass: 'btn-success',

						    		confirm: function(){

										$.post( "../../controllers/mdetalles_controller", {action:"delete",record:value}).done(function( data ) {
											//$(".message").html(data);
											var parsedJson = $.parseJSON(data);
											$(".message").html(parsedJson.mensaje);

									    	setTimeout(function(){

												$(".alert").alert('close');
												//$('#tabla').dataTable();
												 

													  	$.post( "../../controllers/mdetalles_controller", { action: "search_act"}).done(function( data ) {
																
																var parsedJson = $.parseJSON(data);

																		if(parsedJson == 'si'){
																		
																			$('#tabla').DataTable().ajax.reload();

																		}else{

																			$('#tabla').DataTable().ajax.reload();
																		}

														},"json");	

									        }, 3000);
										});		

									},

								 	cancel: function(){

									}
						});

				}
			});		

			$('#quitar2').click( function () {

				var value2= table2.$('tr.selected').children('td:first').text();
				//alert(value);
				if(!value2){

						$.alert({
							title: '!Seleccione el participante a retirar!',
							content: false,
							confirmButton: true, // hides the confirm button.
							closeIcon: false,
							confirmButton: 'cerrar',
							confirmButtonClass: 'btn-success'
						});

				}else{

						$.confirm({

									title: '¿Desea retirar a este participante?!',
									content:false,
									confirmButton: 'Si',
									cancelButton: 'No',
									confirmButtonClass: 'btn-primary',
										cancelButtonClass: 'btn-success',

									confirm: function(){

										$.post( "../../controllers/mvictimas_controller", {action:"delete",record:value2}).done(function( data ) {
											//$(".message").html(data);
											var parsedJson = $.parseJSON(data);
											$(".message").html(parsedJson.mensaje);

											setTimeout(function(){

												$(".alert").alert('close');
												//$('#tabla').dataTable();
												

														$.post( "../../controllers/mvictimas_controller", { action: "search_act"}).done(function( data ) {
																
																var parsedJson = $.parseJSON(data);

																		if(parsedJson == 'si'){
																		
																			$('#tabla2').DataTable().ajax.reload();

																		}else{

																			$('#tabla2').DataTable().ajax.reload();
																		}

														},"json");	

											}, 3000);
										});		

									},

									cancel: function(){

									}
						});

				}
			});		


		$("#cancelar2").click(function() {

			$('#modal1').modal('toggle');
			$("#alojamiento").focus();

			$("#d_tipo").val(null);
			$("#d_concepto").val(null);
			$("#d_cantidad").val(null);
			$("#d_medida").val(null);
			$("#d_costo").val(null);
			$("#d_obs").val(null);

		});

		$("#cancelar22").click(function() {

			$('#modal3').modal('toggle');
			$("#InputFile").val(null);
			$("#file_url").attr('src', '');
			$("#anex").focus();

		});

		$("#cancelar3").click(function() {

			$('#modal2').modal('toggle');
			$("#agregar2").focus();

			$("#nombre2").val(null);
			$("#t_doc2").val(0);
			$("#num_doc2").val(null);
			$("#tele3").val(null);
			$("#correo3").val(null);

		});


		const formatterPeso = new Intl.NumberFormat('es-CO', {
			style: 'currency',
			currency: 'COP',
			minimumFractionDigits: 0
    	 });

		$("#agregar").click(function() {
			$('#modal1').modal({backdrop: 'static',keyboard: false});
			
		});


		$("#agregar2").click(function() {
			$('#modal2').modal({backdrop: 'static',keyboard: false});
			
		});

		$("#anex").click(function() {
			$('#modal3').modal({backdrop: 'static',keyboard: false});
			
		});
// para consultar y cargar los datos geograficos ***********************************************************

		$.post( "../../controllers/mgeograficas_controller", { action: "get_departamentos"}).done(function( data ) {
			 $("#departamento" ).html( data );
			

		});

		$.post( "../../controllers/mgeograficas_controller", { action: "get_municipios"}).done(function( data ) {
			 $("#municipio" ).html( data );

		});

		$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias"}).done(function( data ) {
			 $("#cpoblado" ).html( data );

		});	

		$('#departamento').change(function(event) {
			
			
			$("#depa" ).val($('select[name="depar"] option:selected').text());
			$("#depa2" ).val($('select[name="depar"] option:selected').text());
				
				$.post( "../../controllers/mgeograficas_controller", { action: "get_municipios",departamento: $("#departamento").val()}).done(function( data ) {
					 $("#municipio" ).html( data );

				});

				$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias"}).done(function( data ) {
					 $("#cpoblado" ).html( data );

				});	

				$.post( "../../controllers/mregiones_controller", { action: "get_regi",departamento:$("#departamento").val()}).done(function( data ) {
					 var parsedJson = $.parseJSON(data);
					
					 $("#region").val( parsedJson );	
		
					// alert($("#region").val());

				});				
				
		});


		$('#municipio').change(function(event) {
			$("#muni2" ).val($('select[name="munir"] option:selected').text());
				$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias",municipio: $("#municipio").val()}).done(function( data ) {
					 $("#cpoblado" ).html( data );

				});

				$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias"}).done(function( data ) {
					 $("#cpoblado" ).html( data );

				});	

		});


// para consultar y cargar los segmentos ***********************************************************
		$.post( "../../controllers/msegmentos_controller", { action: "get_segmentos"}).done(function( data ) {
			 $("#segmento" ).html( data );

		});

// para consultar y cargar los territorios ***********************************************************

//alert($('#distribuidora').val());
		$.post( "../../controllers/mterritorios_controller", { action: "get_territorios",modulo: $("#zona").val(),distribuidora: $("#distribuidora").val()}).done(function( data ) {
			 $("#territorio_g" ).html( data );

		});

		$('#zona').change(function(event) {
			
					$.post( "../../controllers/mterritorios_controller", { action: "get_territorios",modulo: $("#zona").val(),distribuidora: $("#distribuidora").val()}).done(function( data ) {
					 $("#territorio_g" ).html( data );

				});
		});

		$.post( "../../controllers/mterritorios_controller", { action: "get_gterritorios",distribuidoras: $("#distribuidora").val()}).done(function( data ) {
			 $("#territorio" ).html( data );

		});

		$.post( "../../controllers/grupos_controller", { action: "get_marcas"}).done(function( data ) {
			 $("#grupo" ).html( data );

		});

		/*$.post( "../../controllers/mdistribuidoras_controller", { action: "get_distri"}).done(function( data ) {
			 $("#distribuidora" ).html( data );

		});*/

		/*$.post( "../../controllers/mregiones_controller", { action: "get_regi",departamento:$("#departamento").val()}).done(function( data ) {
			 $("#region" ).html( data );
				alert( $("#region" ).val());
		});*/

		//** enviar los datos al controlador ***********************************************************
		$("#save" ).click(function() {
				//alert($("#t_trans").val());
				
				$.post( "../../controllers/msolicitudes_controller", {

					action: "add",
					id:	$("#ideado").val(),
					nombre: $("#nombre").val(),
					fecha1: $("#fecha1").val(),
					hsoli: $("#hsoli").val(),
					departamento: $("#departamento").val(),
					municipio: $("#municipio").val(),
					cpoblado: $("#cpoblado").val(),

					a_primario: $("#a_primario").val(),
					acceso1: $("#acceso1").val(),
					acceso2: $("#acceso2").val(),
					num_dir: $("#num_dir").val(),
					a_referencia: $("#a_referencia").val(),
					referencia: $("#referencia").val(),

					fecha2: $("#fecha2").val(),
					fecha3: $("#fecha3").val(),
					hora1: $("#hora1").val(),
					hora2: $("#hora2").val(),

					rt_nombre1: $("#rt_nombre1").val(),
					rt_nombre2: $("#rt_nombre2").val(),
					rt_apellido1: $("#rt_apellido1").val(),
					rt_apellido2: $("#rt_apellido2").val(),
					rt_tdoc: $("#rt_tdoc").val(),
					rt_num_doc: $("#rt_num_doc").val(),
					tele1: $("#tele1").val(),
					correo1: $("#correo1").val(),
					grupo: $("#grupo").val(),
					otro1: $("#otro1").val(),

					rn_nombre1: $("#rn_nombre1").val(),
					rn_nombre2: $("#rn_nombre2").val(),
					rn_apellido1: $("#rn_apellido1").val(),
					rn_apellido2: $("#rn_apellido2").val(),
					rn_tdoc: $("#rn_tdoc").val(),
					rn_num_doc: $("#rn_num_doc").val(),
					tele2: $("#tele2").val(),
					correo2: $("#correo2").val(),

					tipo1: $("#tipo1").val(),
					tipo2: $("#tipo2").val(),
					tipo3: $("#tipo3").val(),
					tipo4: $("#tipo4").val(),
					foca: $("#foca").val(),
					
					v_terr: $("#v_terr").val(),
					v_naci: $("#v_naci").val(),
					v_func: $("#v_func").val(),
					v_supe: $("#v_supe").val(),	
					a_terro: $("#a_terro").val(),
					a_nacio: $("#a_nacio").val(),
					a_funco: $("#a_funco").val(),
					a_supeo: $("#a_supeo").val(),	

					arutaval: $("#arutaval").val(),
					apircval: $("#apircval").val(),
					afase: $("#afase").val(),
					amedida: $("#amedida").val(),
					idaccion: $("#idaccion").val(),
					entidad: $("#entidad").val(),
					num_vic: $("#num_vic").val(),
					descripcion: $("#descripcion").val(),
					aloja: $("#aloja").val(),
					trans: $("#trans").val(),
					t_trans: $("#t_trans").val(),					
					to_total:$("#totalite").val(),
					presup:$("#presup").val(),
					region: $("#region").val()

				}).done(function(data){

					var parsedJson = $.parseJSON(data);
					$(".message").html(parsedJson.mensaje);

					switch(parsedJson.deslizador){

						case "1":
							$('.base').unslider('animate:0');
							tick=0;
							document.getElementById('izquierda').disabled = true;
							$("#izquierda").css("display", "none");
							document.getElementById('derecha').disabled = false;
							$("#derecha").css("display", "block");
						break;

						case "2":
							$('.base').unslider('animate:1');
							tick=1;
							document.getElementById('izquierda').disabled = false;
							$("#izquierda").css("display", "block");
							document.getElementById('derecha').disabled = true;
							$("#derecha").css("display", "none");
						break;

					}

					if(parsedJson.resultado != 'error'){

					/*$.post( "../../controllers/mdetalles_controller", { action: "definitivo2",recordado:$("#ideado").val()}).done(function( data ) {
						$.post( "../../controllers/mdetalles_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
					});

					$.post( "../../controllers/mvictimas_controller", { action: "definitivo2",recordado:$("#ideado").val()}).done(function( data ) {
						$.post( "../../controllers/mvictimas_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
					});		

					$.post( "../../controllers/madjuntos_controller", { action: "definitivo2",recordado:$("#ideado").val()}).done(function( data ) {
						$.post( "../../controllers/madjuntos_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
					});		*/		

						$('.base').unslider('animate:0');
							valore=$("#ideado").val();
							//alert(valore);
					    	setTimeout(function(){

					                //  $(location).attr('href','../requerimientos/frm_registrar');
					                 //$('#nombre').focus();
								   $(location).attr('href','frm_reportar?record='+valore);

					              }, 1500);

					}

				},"json");

		});//end save


//################################  VALIDACIONES############################################



//############################################################################

function cajas_obj(){

	var totales=document.getElementById('caja_t').value;
	var propias=document.getElementById('caja_p').value;
	var objetivo= totales-propias;

	document.getElementById('caja_o').value=objetivo;
}


function menor(){
	var totales2=document.getElementById('caja_t').value;
	var propias2=document.getElementById('caja_p').value;

		if(propias2 <= totales2){


		}else{

			document.getElementById('ms_caja_p').innerHTML = 'Debe ser menor o igual a "Total de Cajas"';

		}
}
//################################  VALIDACIONES############################################

          //****longitud de campos********************************************

	$(function(){
		$('#tele3').maxLength(15);
		$("#nombre").maxLength(200);
		$("#acceso1").maxLength(100);
		$("#acceso2").maxLength(100);
		$("#num_dir").maxLength(10);		
		$("#referencia").maxLength(100);
		$("#rt_nombre1").maxLength(100);
		$("#rt_nombre2").maxLength(100);
		$("#rt_apellido1").maxLength(100);
		$("#rt_apellido2").maxLength(100);		
		$("#rt_num_doc").maxLength(20);
		$("#tele1").maxLength(15);
		$("#correo1").maxLength(150);		
		$("#otro1").maxLength(100);
		$("#rn_nombre1").maxLength(100);
		$("#rn_nombre2").maxLength(100);
		$("#rn_apellido1").maxLength(100);
		$("#rn_apellido2").maxLength(100);
		$("#rn_num_doc").maxLength(20);
		$("#tele2").maxLength(15);
		$("#correo2").maxLength(150);
		$("#afase").maxLength(100);
		$("#amedida").maxLength(100);
		$("#idaccion").maxLength(100);
		$("#entidad").maxLength(100);
		$("#num_vic").maxLength(5);
		$("#descripcion").maxLength(200);
		$("#d_concepto").maxLength(150);
		$("#d_cantidad").maxLength(8);
		$("#d_costo").maxLength(15);
		$("#d_obs").maxLength(200);
		$("#num_doc2").maxLength(20);
		$("#correo3").maxLength(150);
		$("#nombre2").maxLength(100);

	});

            function alsaliro4(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 4){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 4 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsaliro(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 5){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 5 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalira(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 7){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 7 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalira2(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 9){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 9 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalira3(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 9){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 9 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalir(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 2){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 2 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalir2(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 12){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 12 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

             function alsalir3(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 12){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 13 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

              function alsalir4(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 1){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 1 número';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }



function esnombre(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_nombre').style.display = 'block';
                       	document.getElementById("ms_nombre").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_nombre").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esrazon(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_razon').style.display = 'block';
                       	document.getElementById("ms_razon").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_razon").innerHTML = '';
                       	return patron.test(n);

                    }

}

function escedula1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_rt_num_doc').style.display = 'block';
                       	document.getElementById("ms_rt_num_doc").innerHTML = 'Use solo números';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_rt_num_doc").innerHTML = '';
                       	return patron.test(n);

                    }

}

function escedula2(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_rn_num_doc').style.display = 'block';
					   document.getElementById("ms_rn_num_doc").innerHTML = 'Use solo números';
						return patron.test(n);

				}else{

					   document.getElementById("ms_rn_num_doc").innerHTML = '';
					   return patron.test(n);

				}

}

function escedula3(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[0-9]$/;
		n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_num_doc2').style.display = 'block';
						document.getElementById("ms_num_doc2").innerHTML = 'Use solo números';
							return patron.test(n);

					}else{

						document.getElementById("ms_num_doc2").innerHTML = '';
						return patron.test(n);

					}

}

function esacceso1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ ]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_acceso1').style.display = 'block';
                       	document.getElementById("ms_acceso1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_acceso1").innerHTML = '';
                       	return patron.test(n);

                    }

}


function esacceso2(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ ]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_acceso2').style.display = 'block';
                       	document.getElementById("ms_acceso2").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_acceso2").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esreferencia(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_referencia').style.display = 'block';
                       	document.getElementById("ms_referencia").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_referencia").innerHTML = '';
                       	return patron.test(n);

                    }

}



function estele1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[0-9\-\(\)]/;
	n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_tele1').style.display = 'block';
					   document.getElementById("ms_tele1").innerHTML = 'Use solo números y "-"';
						return patron.test(n);

				}else{

					   document.getElementById("ms_tele1").innerHTML = '';
					   return patron.test(n);

				}

}

function esnumdir(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[0-9]/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_num_dir').style.display = 'block';
                       	document.getElementById("ms_num_dir").innerHTML = 'Use solo números';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_num_dir").innerHTML = '';
                       	return patron.test(n);

                    }

}

function estele2(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[0-9\-\(\)]/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_tele2').style.display = 'block';
                       	document.getElementById("ms_tele2").innerHTML = 'Use solo números y "-"';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_tele2").innerHTML = '';
                       	return patron.test(n);

                    }

}

function estele3(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /[0-9\-\(\)]/;
		n = String.fromCharCode(k);

						if(patron.test(n)==''){

							document.getElementById('ms_tele3').style.display = 'block';
							document.getElementById("ms_tele3").innerHTML = 'Use solo números y "-"';
								return patron.test(n);

						}else{

							document.getElementById("ms_tele3").innerHTML = '';
							return patron.test(n);

						}

}

function escorreo1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[A-ZÑ0-9\_\-\.\+\@\ ]/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_correo1').style.display = 'block';
                       	document.getElementById("ms_correo1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_correo1").innerHTML = '';
                       	return patron.test(n);

                    }

}

function escorreo2(e) {

k = (document.all) ? e.keyCode : e.which;
if (k==8 || k==0 || k==13) return true;
patron = /[A-ZÑ0-9\_\-\.\+\@\ ]/;
n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_correo2').style.display = 'block';
					   document.getElementById("ms_correo2").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					   document.getElementById("ms_correo2").innerHTML = '';
					   return patron.test(n);

				}

}

function escorreo3(e) {

k = (document.all) ? e.keyCode : e.which;
if (k==8 || k==0 || k==13) return true;
patron = /[A-ZÑ0-9\_\-\.\+\@\ ]/;
n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_correo3').style.display = 'block';
					   document.getElementById("ms_correo3").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					   document.getElementById("ms_correo3").innerHTML = '';
					   return patron.test(n);

				}

}

function esdescri(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_descripcion').style.display = 'block';
                       	document.getElementById("ms_descripcion").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_descripcion").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esdobs(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_d_obs').style.display = 'block';
						document.getElementById("ms_d_obs").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
							return patron.test(n);

					}else{

						document.getElementById("ms_d_obs").innerHTML = '';
						return patron.test(n);

					}

}

function esdconcepto(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_d_concepto').style.display = 'block';
                       	document.getElementById("ms_d_concepto").innerHTML = 'Use mayusculas y no incluya caractéres especiales ni espacios';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_d_concepto").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esdcantidad(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_d_cantidad').style.display = 'block';
                       	document.getElementById("ms_d_cantidad").innerHTML = 'Use solo nuúmeros';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_d_cantidad").innerHTML = '';
                       	return patron.test(n);

                    }

}


function esdcantidad2(e) {

k = (document.all) ? e.keyCode : e.which;
if (k==8 || k==0 || k==13) return true;
patron = /^[0-9\.]$/;
n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_d_costo').style.display = 'block';
					   document.getElementById("ms_d_costo").innerHTML = 'Use solo nuúmeros y punto decimal';
						return patron.test(n);

				}else{

					   document.getElementById("ms_d_costo").innerHTML = '';
					   return patron.test(n);

				}

}


function esa_comodato(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9\.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_a_comodato').style.display = 'block';
                       	document.getElementById("ms_a_comodato").innerHTML = 'Use solo números y no incluya caractéres especiales ni espacios';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_a_comodato").innerHTML = '';
                       	return patron.test(n);

                    }

}


function sig_1(){

	var vuelta=document.getElementById("caja_p");
	vuelta.focus();

}



function sig_2(){

	var vuelta33=document.getElementById("aviso");
	vuelta33.focus();

}

//************************************************************************/

			function esnombre2(e) {

					k = (document.all) ? e.keyCode : e.which;
					if (k==8 || k==0 || k==13) return true;
					patron = /^[A-ZÑ0-9\ \.\-]$/;
					n = String.fromCharCode(k);

							if(patron.test(n)==''){

								document.getElementById('ms_rt_nombre1').style.display = 'block';
								document.getElementById("ms_rt_nombre1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
									return patron.test(n);

							}else{

								document.getElementById("ms_rt_nombre1").innerHTML = '';
								return patron.test(n);

							}

			}


//************************************************************************/

function esnombre4(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_nombre2').style.display = 'block';
					document.getElementById("ms_nombre2").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					document.getElementById("ms_nombre2").innerHTML = '';
					return patron.test(n);

				}

}
//************************************************************************



			function esentidad(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_entidad').style.display = 'block';
						document.getElementById("ms_entidad").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
							return patron.test(n);

					}else{

						document.getElementById("ms_entidad").innerHTML = '';
						return patron.test(n);

					}

			}


//************************************************************************/


function esvictimas(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_num_vic').style.display = 'block';
                       	document.getElementById("ms_num_vic").innerHTML = 'Use solo números';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_num_vic").innerHTML = '';
                       	return patron.test(n);

                    }

}


//************************************************************************/

			function esnombre2(e) {

					k = (document.all) ? e.keyCode : e.which;
					if (k==8 || k==0 || k==13) return true;
					patron = /^[A-ZÑ0-9\ \.\-]$/;
					n = String.fromCharCode(k);

							if(patron.test(n)==''){

								document.getElementById('ms_rt_nombre1').style.display = 'block';
								document.getElementById("ms_rt_nombre1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
									return patron.test(n);

							}else{

								document.getElementById("ms_rt_nombre1").innerHTML = '';
								return patron.test(n);

							}

			}

//************************************************************************

			function esapellido1(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_rt_apellido1').style.display = 'block';
						document.getElementById("ms_rt_apellido1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
							return patron.test(n);

					}else{

						document.getElementById("ms_rt_apellido1").innerHTML = '';
						return patron.test(n);

					}

			}

			//************************************************************************/

			function esnombre3(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

						if(patron.test(n)==''){

							document.getElementById('ms_rn_nombre1').style.display = 'block';
							document.getElementById("ms_rn_nombre1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
								return patron.test(n);

						}else{

							document.getElementById("ms_rn_nombre1").innerHTML = '';
							return patron.test(n);

						}

			}

//************************************************************************

		function esapellido2(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_rn_apellido1').style.display = 'block';
					document.getElementById("ms_rn_apellido1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					document.getElementById("ms_rn_apellido1").innerHTML = '';
					return patron.test(n);

				}

		}
//************************************************************************
function esotro1(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_otro1').style.display = 'block';
			document.getElementById("ms_otro1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_otro1").innerHTML = '';
			return patron.test(n);

		}

}

//************************************************************************/
function esafase(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_afase').style.display = 'block';
			document.getElementById("ms_afase").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_afase").innerHTML = '';
			return patron.test(n);

		}

}


//************************************************************************
function esamedida(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_amedida').style.display = 'block';
			document.getElementById("ms_amedida").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_amedida").innerHTML = '';
			return patron.test(n);

		}

}
//************************************************************************/
function esidaccion(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_idaccion').style.display = 'block';
			document.getElementById("ms_idaccion").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_idaccion").innerHTML = '';
			return patron.test(n);

		}

}
//************************************************************************/

			function readURL(input) {

				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#file_url').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

 </script>
 <?php include_once("../layouts/pie.php") ?>