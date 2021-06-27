<?php
date_default_timezone_set('America/Bogota');
include '../lib/sanitizar.php';
require_once '../models/Mrole.php';
require_once '../models/Musuario.php';
require_once '../models/Vusuario.php';

@$action = ($_POST["action"]);
@$id = ($_POST["id"]);
@$record = sanitize($_POST["record"]);
@$nombre = ($_POST["nombre"]);
@$email = ($_POST["email"]);
@$usuario = ($_POST["usuario"]);
@$rol = ($_POST["rol"]);
@$password1 = ($_POST["password1"]);
@$password2 = ($_POST["password2"]);
@$sourcePath = $_FILES['file']['tmp_name'];  // Almacenar ruta de origen del archivo en una variable
@$targetPath = "../dist/img/fotos_usuarios/".$_FILES['file']['name']; // Ruta de destino donde el archivo se va a almacenar
@$tipo_archivo = $_FILES['file']['type'];

@$distribuidora_id = ($_POST["distribuidora_id"]);
@$distribuidora = ($_POST["distribuidora"]);

switch ($action){

	case 'get_roles':
		$data = Mrole::find('all',array('conditions' => array('status=?',1),'order' => 'id desc'));
		$resp  = '';
		if(!empty($data)){
			foreach($data as $rs){
				$resp .= '<option value="'.$rs->id.'">'.$rs->descripcion.'</option>';
			}
			echo $resp;
		 }
	break;

	case 'get_roles_01':
		$data = Mrole::find('all',array('conditions' => array('status=? AND id >=?',1,2),'order' => 'id desc'));
		$resp  = '';
		if(!empty($data)){
			foreach($data as $rs){
				$resp .= '<option value="'.$rs->id.'">'.$rs->descripcion.'</option>';
			}
			echo $resp;
		 }
	break;


	case 'get_distribuidoras':
		$data = Mdistribuidora::find('all',array('conditions' => array('status=?',1),'order' => 'id desc'));
		$resp  = '';
		if(!empty($data)){
			foreach($data as $rs){
				$resp .= '<option value="'.$rs->id.'">'.$rs->nombre.'</option>';
			}
			echo $resp;
		 }
	break;

	case 'search':

		if(!empty($record)){

			//echo $record;
			//exit();

			$data = Musuario::find('all',array('conditions' => array('id=?',$record)));
			$resp  = '';
			if(!empty($data)){

				foreach($data as $rs){

					$resp = array(
									"id"=>$rs->id,
									"rol"=>$rs->mroles_id,
									"usuario"=>$rs->username,
									"nombre"=>$rs->name,
									"email"=>$rs->email,									
									"imagen"=>$rs->imagen,
									"act_email"=>$rs->act_email
								 );
				}

				echo json_encode($resp);
			 }

		}

	break;

	case 'add':

	@$consulta3 = Musuario::find('all',array('conditions' => array('email=? AND status=?',$email,1))); //  email existe para otro id

		if($nombre ==""){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo nombre y apellido vacío..
					</div>';

		}elseif(count($consulta3)!=0){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					El correo ['.$email.'] ya está asociado a otro usuario.
					</div>';

		}elseif($usuario ==""){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo usuario vacío.
					</div>';

		}elseif($password1 ==" "){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo contraseña vacío.
					</div>';

		}elseif($password2 ==" "){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo confirmar contraseña vacío.
					</div>';

		}elseif($password1 != $password2){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					La nueva contraseña y su confirmación son distintas.
					</div>';

		}elseif($password1 == $password2){

			$consulta = Musuario::find('all',array('conditions' => array('username=? AND status=?',strtoupper($usuario),1)));

			if($consulta == null){

					if($rol == 1 || $rol == 4){

						//$distribuidora=1;

						$str_mayusculas = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
						$str_minusculas = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
						$str_numeros = array("1","2","3","4","5","6","7","8","9","0");
						$str_especiales = array("@","#","$","%");


						$str_contraseña_aleatoria = "";
						$p1= array_rand($str_mayusculas, 1);
						$p2= array_rand($str_minusculas, 3);
						$p3= array_rand($str_numeros, 3);
						$p4= array_rand($str_especiales, 1);


						$str_contraseña_aleatoria .= $str_mayusculas[$p1];
						foreach($p2 as $value2)
						{
							$str_contraseña_aleatoria .= $str_minusculas[$value2];
						}
						foreach($p3 as $value3)
						{
							$str_contraseña_aleatoria .= $str_numeros[$value3];
						}
						$str_contraseña_aleatoria .= $str_especiales[$p4];



						//print_r($str_contraseña_aleatoria);
						//exit();

						//@$password = $str_contraseña_aleatoria;

						@$password = 'Uni123456#';//setear fijamente la contraseña

						@$salt = '$DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi$/';

						@$contraseña = md5($salt.$password);

						//print_r('crear contraseña aleatoria y enviar por correo');
						//exit();


					}elseif($rol == 3 || $rol==2  || $rol==5  || $rol==6  || $rol==7){



							$validos = 0;
							$no_validos = 0;
							$mayusculas = 0;
							$minusculas = 0;
							$especiales = 0;
							$numeros = 0;
							$caracterespermitidos = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","@","#","$","%");
							$str_mayusculas = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
							$str_minusculas = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
							$str_numeros = array("1","2","3","4","5","6","7","8","9","0");
							$str_especiales = array("@","#","$","%");

							for($i=0; $i< strlen($password2); $i++){

									if (in_array($password2[$i], $caracterespermitidos,true)){

										if(in_array($password2[$i], $str_mayusculas,true)){
										   $mayusculas++;
										}elseif(in_array($password2[$i], $str_minusculas,true)){
										   $minusculas++;
										}elseif(in_array($password2[$i], $str_numeros,true)){
										   $numeros++;
										}elseif(in_array($password2[$i], $str_especiales,true)){
										   $especiales++;
										}

										 $validos++;

									}else{
									 $no_validos++;
									}
							}


							if((strlen($password2))< 8){

								echo	'<div class="alert alert-danger alert-dismissable">
									<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									<input type="hidden" id="tocon" value="0">
									<h4>
									<i class="icon fa fa-ban"></i>
									Alerta!
									</h4>La nueva clave debe tener por lo menos 8 caracteres.</div>';
								die();

							}elseif($mayusculas < 1){

								echo '<div class="alert alert-danger alert-dismissable">
								<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
								<input type="hidden" id="tocon" value="0">
								<h4>
								<i class="icon fa fa-ban"></i>
								Alerta!
								</h4>La nueva contraseña de contener al menos 1 letra mayúscula.</div>';
								die();

							}elseif($minusculas < 1){

								echo '<div class="alert alert-danger alert-dismissable">
										<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
										<input type="hidden" id="tocon" value="0">
										<h4>
										<i class="icon fa fa-ban"></i>
										Alerta!
										</h4>La nueva contraseña de contener al menos 1 letra minúscula.</div>';

								die();
							}elseif($numeros < 1){

								echo '<div class="alert alert-danger alert-dismissable">
										<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
										<input type="hidden" id="tocon" value="0">
										<h4>
										<i class="icon fa fa-ban"></i>
										Alerta!
										</h4>La nueva contraseña de contener al menos 1 número.</div>';

								die();
							}elseif($especiales < 1){

								echo '<div class="alert alert-danger alert-dismissable">
										<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
										<input type="hidden" id="tocon" value="0">
										<h4>
										<i class="icon fa fa-ban"></i>
										Alerta!
										</h4>La nueva contraseña de contener al menos 1 de los siguientes caracteres especiales @ # $ %</div>';

								die();
							}elseif($no_validos >= 1){

								echo '<div class="alert alert-danger alert-dismissable">
										<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
										<input type="hidden" id="tocon" value="0">
										<h4>
										<i class="icon fa fa-ban"></i>
										Alerta!
										</h4>La nueva clave debe estar compuesta por letras y números o los siguentes caracteres @, #, $, %</div>';

								die();
							}

							@$password = $password1;
							@$salt = '$DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi$/';

							@$contraseña = md5($salt.$password);

						//exit();
					}

				session_start();
				$usuario_id = $_SESSION['idusuariox'];

				$hoy = date("d-m-Y");

				if($sourcePath){//si cargaron el archivo
					if (($tipo_archivo == "image/png") || ($tipo_archivo == "image/jpg") || ($tipo_archivo == "image/jpeg")){
						move_uploaded_file($sourcePath,$targetPath) ; // Mover archivo subido
						@$nombre_imagen = ($_FILES['file']['name']);
					}
				}else{ //si no cargaron nada
					@$nombre_imagen = "";
				}

				//print_r($rol);

				$usr= new Musuario();
				$usr->name = $nombre;
				$usr->email = strtolower($email);
				$usr->username = strtoupper($usuario);
				$usr->password = $contraseña;
				$usr->user_create = $usuario_id;				
				$usr->created = $hoy;
				$usr->mroles_id = $rol;
				$usr->imagen = $nombre_imagen;

				if($usr->save()){
		

					echo'<div class="alert alert-success alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="1">
							<h4>
							<i class="fa fa-check"></i>
							Alerta!
							</h4>
							Usuario ['.$usuario.'] registrado exitosamente...
						</div>';

				}
					
			}else{

				echo'<div class="alert alert-danger alert-dismissable">
						<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
						<input type="hidden" id="tocon" value="0">
						<h4>
						<i class="icon fa fa-ban"></i>
						Alerta!
						</h4>
						El usuario ['.$usuario.'] ya se encuentra registrado.
					</div>';
			}

		}


	break;

	case 'edit':

	$consulta = Musuario::find('all',array('conditions' => array('username=? AND id<>? AND  status=?',strtoupper($usuario),$id,1))); //nombre  usuario existe para otro id
	$consulta2 = Musuario::find('all',array('conditions' => array('email=? AND id<>? AND status=?',$email,$id,1))); //  email existe para otro id

		if(count($consulta)!=0){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					El usuario ['.$usuario.'] ya se encuentra registrado.
					</div>';

		}elseif(count($consulta2)!=0){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					El correo ['.$email.'] ya está asociado a otro usuario.
					</div>';

		}elseif($nombre ==""){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo nombre y apellido vacío..
					</div>';

		}elseif($usuario ==""){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo usuario vacío.
					</div>';

		}elseif($distribuidora ==""){

			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Campo distribuidora vacío.
					</div>';

		}elseif($password1 !="" && $password2 ==""){

			echo	'<div class="alert alert-warning alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-warning"></i>
					Alerta!
					</h4>
					Debe confirmar la contraseña.
					</div>';

		}elseif($password1 !="" && $password2 !=""){


				$validos = 0;
				$no_validos = 0;
				$mayusculas = 0;
				$minusculas = 0;
				$especiales = 0;
				$numeros = 0;
				$caracterespermitidos = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","@","#","$","%");
				$str_mayusculas = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
				$str_minusculas = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
				$str_numeros = array("1","2","3","4","5","6","7","8","9","0");
				$str_especiales = array("@","#","$","%");

				for($i=0; $i< strlen($password2); $i++){

						if (in_array($password2[$i], $caracterespermitidos,true)){

							if(in_array($password2[$i], $str_mayusculas,true)){
							   $mayusculas++;
							}elseif(in_array($password2[$i], $str_minusculas,true)){
							   $minusculas++;
							}elseif(in_array($password2[$i], $str_numeros,true)){
							   $numeros++;
							}elseif(in_array($password2[$i], $str_especiales,true)){
							   $especiales++;
							}

							 $validos++;

						}else{
						 $no_validos++;
						}
				}


				if((strlen($password2))< 8){

					echo	'<div class="alert alert-danger alert-dismissable">
						<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
						<input type="hidden" id="tocon" value="0">
						<h4>
						<i class="icon fa fa-ban"></i>
						Alerta!
						</h4>La nueva clave debe tener por lo menos 8 caracteres.</div>';
					die();

				}elseif($mayusculas < 1){

					echo '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<input type="hidden" id="tocon" value="0">
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>La nueva contraseña de contener al menos 1 letra mayúscula.</div>';
					die();

				}elseif($minusculas < 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="0">
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva contraseña de contener al menos 1 letra minúscula.</div>';

					die();
				}elseif($numeros < 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="0">
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva contraseña de contener al menos 1 número.</div>';

					die();
				}elseif($especiales < 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="0">
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva contraseña de contener al menos 1 de los siguientes caracteres especiales @ # $ %</div>';

					die();
				}elseif($no_validos >= 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="0">
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva clave debe estar compuesta por letras y números o los siguentes caracteres @, #, $, %</div>';

					die();
				}

			//actualiza con nueva contraseña
				@$password = $password1;
				@$salt = '$DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi$/';
				@$contraseña = md5($salt.$password);
				$hoy = date("d-m-Y");

				if($sourcePath){//si cargaron el archivo
					if (($tipo_archivo == "image/png") || ($tipo_archivo == "image/jpg") || ($tipo_archivo == "image/jpeg")){
						move_uploaded_file($sourcePath,$targetPath) ; // Mover archivo subido
						@$nombre_imagen = ($_FILES['file']['name']);
					}
				}else{ //si no cargaron nada
					@$nombre_imagen = "";
				}

				session_start();
				$usuario_id = $_SESSION['idusuariox'];

				$usr= Musuario::find($id);
				$usr->name = $nombre;
				$usr->email = strtolower($email);
				$usr->username = strtoupper($usuario);
				$usr->password = $contraseña;				
				$usr->user_create = $usuario_id;
				$usr->created = $hoy;
				$usr->mroles_id = $rol;
				if(!empty($nombre_imagen)){
					$usr->imagen = $nombre_imagen;
				}
				$usr->user_modify = $usuario_id;
				$usr->updated = $hoy;
				$usr->mroles_id = $rol;

				if($usr->save()){

					echo'<div class="alert alert-success alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="1">
							<h4>
							<i class="fa fa-check"></i>
							Alerta!
							</h4>
							Usuario ['.$usuario.'] actualizado exitosamente...
						</div>';
				}

		}elseif($password1 =="" && $password2 ==""){
			//actualiza todos los campos menos la contraseña
				$hoy = date("d-m-Y");

				if($sourcePath){//si cargaron el archivo
					if (($tipo_archivo == "image/png") || ($tipo_archivo == "image/jpg") || ($tipo_archivo == "image/jpeg")){
						move_uploaded_file($sourcePath,$targetPath) ; // Mover archivo subido
						@$nombre_imagen = ($_FILES['file']['name']);
					}
				}else{ //si no cargaron nada
					@$nombre_imagen = "";
				}

				session_start();
				$usuario_id = $_SESSION['idusuariox'];
				//$rol = $_SESSION['rolx'];


				$usr= Musuario::find($id);

				$usr->name = $nombre;
				$usr->email = strtolower($email);
				$usr->username = strtoupper($usuario);
				$usr->user_create = $usuario_id;				
				$usr->created = $hoy;
				$usr->mroles_id = $rol;
				if(!empty($nombre_imagen)){
					$usr->imagen = $nombre_imagen;
				}
				$usr->user_modify = $usuario_id;
				$usr->updated = $hoy;
				$usr->mroles_id = $rol;

				if($usr->save()){

					echo'<div class="alert alert-success alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<input type="hidden" id="tocon" value="1">
							<h4>
							<i class="fa fa-check"></i>
							Alerta!
							</h4>
							Usuario ['.$usuario.'] actualizado exitosamente...
						</div>';
				}
		}
	break;

	case 'login':

	    if($usuario != "" && $password1 !=""){


				@$password =$password1;
				@$salt = '$DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi$/';
				@$contraseña = md5($salt.$password);

//echo $contraseña;exit();

			@$consulta = Vusuario::find('all',array('conditions' => array('username=? and password =?',strtoupper($usuario),$contraseña)));
			/*echo"<pre>";
			print_r($consulta);
			exit();*/

			if($consulta!=null){

				foreach($consulta as $rs){

					if($rs->act_clave == 0){

						session_start();
						 $xsession_id  = strtoupper(session_id());
						 $xusuario_id  = $rs->id;
						 $_SESSION['idsessionx']=session_id();
						 $_SESSION['idusuariox']=$xusuario_id;
						 $_SESSION['usuariox']= $rs->username;
						 $_SESSION['nombresx']= $rs->name;
						 $_SESSION['rolx']= $rs->mroles_id;
						 $_SESSION['imagen_perfilx']= $rs->imagen;
						 $_SESSION['nombre_rolx']= $rs->descripcion;
						 $_SESSION['creadox']= ($rs->created->format('d-m-Y'));						 

						header("Location: ../views/act_pass/");
						exit();
					}elseif($rs->act_clave != 0){
						 session_start();
						 $xsession_id  = strtoupper(session_id());
						 $xusuario_id  = $rs->id;
						 $_SESSION['idsessionx']=session_id();
						 $_SESSION['idusuariox']=$xusuario_id;
						 $_SESSION['usuariox']= $rs->username;
						 $_SESSION['nombresx']= $rs->name;
						 $_SESSION['rolx']= $rs->mroles_id;
						 $_SESSION['imagen_perfilx']= $rs->imagen;
						 $_SESSION['nombre_rolx']= $rs->descripcion;
						 $_SESSION['creadox']= ($rs->created->format('d-m-Y'));		

					}
				}

				//*****************************************************************************

				if($_SESSION['rolx']== 1  || $_SESSION['rolx']== 4){//ingresa como administrador o programador

					header("Location: ../views/inicio/");

				}elseif($_SESSION['rolx']== 2 ){//entra como usuario

					header("Location: ../views/inicio/");

				}elseif($_SESSION['rolx']== 3){//entra como responsable

					header("Location: ../views/inicio");

				}

				//******************************************************************************

			}else{
					header("Location: ../views/login?stat=failed");
			}

		}else{

			header("Location: ../views/login?stat=failed");
		}
	break;


	case 'delete':
		if(!empty($record)){

			session_start();
			$usuario_id = $_SESSION['idusuariox'];
			$rol = $_SESSION['rolx'];
			$hoy = date("d-m-Y");

			if($usuario_id !="" && $rol <= 2){

					$usr= Musuario::find($record);
					$usr->user_modify = $usuario_id;
					$usr->updated = $hoy;
					$usr->status = 0;
					if($usr->save()){

							echo'<div class="alert alert-success alert-dismissable">
									<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									<h4>
									<i class="fa fa-check"></i>
									Alerta!
									</h4>
									Usuario eliminado exitosamente...
								</div>';

					}else{
						echo	'<div class="alert alert-danger alert-dismissable">
								<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
								<h4>
								<i class="icon fa fa-ban"></i>
								Alerta!
								</h4>
								Disculpe! Ha ocurrido un error al eliminar el registro..
								</div>';

					}

			}else{

						echo	'<div class="alert alert-warning alert-dismissable">
								<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
								<h4>
								<i class="icon fa fa-warning"></i>
								Alerta!
								</h4>
								Disculpe! Usted no puede realizar esta transacción.
								</div>';
			}
		}

	break;


	case 'changepassword':

	  if($password1 ==""){

			echo	'<div class="alert alert-warning alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<h4>
					<i class="icon fa fa-warning"></i>
					Alerta!
					</h4>
					Ingrese la nueva contraseña.
					</div>';

	  }elseif($password2==""){
			echo	'<div class="alert alert-warning alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<h4>
					<i class="icon fa fa-warning"></i>
					Alerta!
					</h4>
					Debe confirmar la contraseña.
					</div>';

	  }else{
			 	session_start();
				$usuario_id = $_SESSION['idusuariox'];

		 if($usuario_id){




				$validos = 0;
				$no_validos = 0;
				$mayusculas = 0;
				$minusculas = 0;
				$especiales = 0;
				$numeros = 0;
				$caracterespermitidos = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","@","#","$","%");
				$str_mayusculas = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
				$str_minusculas = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
				$str_numeros = array("1","2","3","4","5","6","7","8","9","0");
				$str_especiales = array("@","#","$","%");

				for($i=0; $i< strlen($password2); $i++){

						if (in_array($password2[$i], $caracterespermitidos,true)){

							if(in_array($password2[$i], $str_mayusculas,true)){
							   $mayusculas++;
							}elseif(in_array($password2[$i], $str_minusculas,true)){
							   $minusculas++;
							}elseif(in_array($password2[$i], $str_numeros,true)){
							   $numeros++;
							}elseif(in_array($password2[$i], $str_especiales,true)){
							   $especiales++;
							}

							 $validos++;

						}else{
						 $no_validos++;
						}
				}


				if((strlen($password2))< 8){

					echo	'<div class="alert alert-danger alert-dismissable">
						<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
						<h4>
						<i class="icon fa fa-ban"></i>
						Alerta!
						</h4>La nueva clave debe tener por lo menos 8 caracteres.</div>';
					die();

				}elseif($mayusculas < 1){

					echo '<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>La nueva contraseña de contener al menos 1 letra mayúscula.</div>';
					die();

				}elseif($minusculas < 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva contraseña de contener al menos 1 letra minúscula.</div>';

					die();
				}elseif($numeros < 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva contraseña de contener al menos 1 número.</div>';

					die();
				}elseif($especiales < 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva contraseña de contener al menos 1 de los siguientes caracteres especiales @ # $ %</div>';

					die();
				}elseif($no_validos >= 1){

					echo '<div class="alert alert-danger alert-dismissable">
							<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
							<h4>
							<i class="icon fa fa-ban"></i>
							Alerta!
							</h4>La nueva clave debe estar compuesta por letras y números o los siguentes caracteres @, #, $, %</div>';

					die();
				}



				@$password = $password1;
				@$salt = '$DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi$/';
				@$contraseña = md5($salt.$password);

				$hoy = date("d-m-Y");

				$usr= Musuario::find($usuario_id);
				$usr->password = $contraseña;
				$usr->user_modify = $usuario_id;
				$usr->updated = $hoy;
				if($usr->save()){
							echo'<div class="alert alert-success alert-dismissable">
									<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
									<h4>
									<i class="fa fa-check"></i>
									Alerta!
									</h4>
									La contraseña ha sido cambiada exitosamente.
								</div>';
				}

		 }else{
						echo	'<div class="alert alert-warning alert-dismissable">
								<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
								<h4>
								<i class="icon fa fa-warning"></i>
								Alerta!
								</h4>
								Error al actualizar la contraseña.
								</div>';
		 }
	  }
	break;


	case 'find_perfil':

			session_start();
			$usuario_id = $_SESSION['idusuariox'];

			@$data = Vusuario::find('all',array('conditions' => array('id=?',$usuario_id)));

			if(!empty($data)){

				foreach($data as $rs){
					$resp = array(
									"nombrerol"=>$rs->descripcion,
									"usuario"=>$rs->username,
									"nombre"=>$rs->name,
									"email"=>$rs->email,
									"imagen"=>$rs->imagen
								 );
				}

			 }

			 echo json_encode($resp);

	break;

	case 'act_clave':

		if(empty($password1)){
			header("Location: ../views/act_pass/?stat=pass1");
			die();
		}elseif(empty($password2)){
			header("Location: ../views/act_pass/?stat=pass2");
			die();
		}elseif($password1 == " " && $password2 ==" "){
			header("Location: ../views/act_pass/?stat=passnull");
			die();
		}else{

				$validos = 0;
				$no_validos = 0;
				$mayusculas = 0;
				$minusculas = 0;
				$especiales = 0;
				$numeros = 0;
				$caracterespermitidos = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0","@","#","$","%");
				$str_mayusculas = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z");
				$str_minusculas = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
				$str_numeros = array("1","2","3","4","5","6","7","8","9","0");
				$str_especiales = array("@","#","$","%");

				for($i=0; $i< strlen($password2); $i++){

						if (in_array($password2[$i], $caracterespermitidos,true)){

							if(in_array($password2[$i], $str_mayusculas,true)){
							   $mayusculas++;
							}elseif(in_array($password2[$i], $str_minusculas,true)){
							   $minusculas++;
							}elseif(in_array($password2[$i], $str_numeros,true)){
							   $numeros++;
							}elseif(in_array($password2[$i], $str_especiales,true)){
							   $especiales++;
							}

							 $validos++;

						}else{
						 $no_validos++;
						}
				}


				if((strlen($password2))< 8){
					header("Location: ../views/act_pass/?stat=me4");
					die();
				}elseif($mayusculas < 1){
					header("Location: ../views/act_pass/?stat==me5");
					die();
				}elseif($minusculas < 1){
					header("Location: ../views/act_pass/?stat=me6");
					die();
				}elseif($numeros < 1){
					header("Location: ../views/act_pass/?stat=me7");
					die();
				}elseif($especiales < 1){
					header("Location: ../views/act_pass/?stat=me8");
					die();
				}elseif($no_validos >= 1){
					header("Location: ../views/act_pass/?stat=me0");
					die();
				}


				@$salt = '$DYhG93b0qyJfIxfs2guVoUubWwvniR2G0FgaC9mi$/';
				@$contraseña1 = md5($salt.$password1);
				@$contraseña2 = md5($salt.$password2);

				$valor = strcmp($contraseña1,$contraseña2);

				if($valor != 0){
					header("Location: ../views/act_pass/?stat=me2");
					die();
				}else{


						$hoy = date("d-m-Y");
						session_start();
						$usuario_id = $_SESSION['idusuariox'];

						$usr= Musuario::find($usuario_id);
						$usr->password = $contraseña2;
						$usr->user_modify = $usuario_id;
						$usr->updated = $hoy;
						$usr->act_clave = 1;
						$usr->act_email = 1;

						if($usr->save()){

							if($_SESSION['rolx']== 1  || $_SESSION['rolx']== 4){//ingresa como soporte usuario o programador

								header("Location: ../views/inicio/");

							}elseif($_SESSION['rolx']== 2){//entra como administrador

								header("Location: ../views/inicio/");

							}elseif($_SESSION['rolx']== 3){//entra como usuario

								header("Location: ../views/inicio");

							}

						}else{

							header("Location: ../views/act_pass/?stat=me3");
							die();
						}
				}


		}//end else
	break;


}//end switch
?>
