<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>:: CDA| Tecnilalo ::</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="../plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />    

    <link href="../css/log_eff_1.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="../js/html5shiv.min.js"></script>
        <script src="../js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body  class="container-fluid">
    
    <div class="login-box">

		<?php

		if(@$_GET['stat']== 'failed'){
			echo	'<div class="alert alert-danger alert-dismissable">
					<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
					<h4>
					<i class="icon fa fa-ban"></i>
					Alerta!
					</h4>
					Usuario o Contraseña incorrecta. Intente de nuevo.
					</div>';
		}
		?>
      <div class="login-logo" style="margin: 0 auto -45px auto; z-index:2;position: relative;" >
       <!-- <a href="#"><b>Admin</b>LTE</a>-->
        <a href="#"><img src="../dist/img/logo_cda.png" class="img-responsive" style="margin: 0 auto;" alt="CDA Tecnilalo" height="100" width="200"></a>
      </div><!-- /.login-logo -->

      <div class="login-box-body container">
        <h6><p class="login-box-msg">Inicia sesión para entrar en el sistema</p></h6>

       <form action="../controllers/musuarios_controller" method="post" autocomplete="off" novalidate>

	      <input id="action" name="action" type="hidden" value="login" />

          <div class="form-group has-feedback">
            <input id="usuario" name="usuario" type="text" class="form-control"  placeholder="Usuario" autocomplete="new-text"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input id="password1" name="password1" type="password" class="form-control" placeholder="Contraseña" autocomplete="new-password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

              <button type="submit" >Entrar</button>

        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- prefixfree -->
   
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional,
        });
      });
    </script>
  </body>
</html>
