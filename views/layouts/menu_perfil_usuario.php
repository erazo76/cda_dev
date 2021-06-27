
              <li class="dropdown user user-menu">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					
					<?php
						
						@session_start();
						/*
						echo "<pre>";
						print_r($_SESSION);
						echo "</pre>";
						*/
						
						$imagen = "../../dist/img/fotos_usuarios/".$_SESSION['imagen_perfilx'];
						$nombre = $_SESSION['nombresx'];
						$nombre_rol = $_SESSION['nombre_rolx'];
						$creado = $_SESSION['creadox'];
					?>
					
				<?php 
					if(!empty($_SESSION['imagen_perfilx'])){
						
						echo '<img src="'.$imagen.'" class="user-image" alt="User Image"/>';
					}else{
						echo '<img src="../../dist/img/fotos_usuarios/no_user.png" class="user-image" alt="User Image"/>';
					}
					
					echo '<span class="hidden-xs">'.$nombre.'</span>';
                  ?>
                </a>
                <ul class="dropdown-menu">

                  <li class="user-header">
					<?php 
					
					if(!empty($_SESSION['imagen_perfilx'])){  
						echo '<img src="'.$imagen.'" class="img-circle" alt="User Image" />';
                    }else{
						echo '<img src="../../dist/img/fotos_usuarios/no_user.png" class="img-circle" alt="User Image" />';
					}
                    echo'<p>
                      '.$nombre.' - '.$nombre_rol.'
                      <small>Activo desde el '.$creado.'</small>
                    </p>';
                    
                    
                    ?>
                  </li>


                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="../usuarios/perfil" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
