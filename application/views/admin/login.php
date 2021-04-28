<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Goversearch | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- base_url() = http://localhost/ventas_ci/-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/font-awesome/css/font-awesome.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/template/dist/css/AdminLTE.min.css">

</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h2>Goversearch 1.0</h2>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">En caso de no contar con cuenta</p>
            <?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata("error")?></p>
              </div>
            <?php endif; ?>
            
            <form action="<?php echo base_url();?>auth/login" method="post">
                
                <div class="col-md-12">
                        <a href="<?php echo base_url();?>001_Registrar/cRegistrar" class="btn btn-primary btn-flat col-md-6" > <span class="fa fa-plus"></span> Suscribirse </a>
                        <a href="<?php echo base_url();?>002_Demo/cDemo" class="btn btn-primary btn-flat col-md-6" > <span class="fa fa-caret-square-o-left"></span> DEMO </a>                    
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
                    </div>
                    <!-- /.col -->
                </div>
                <br>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Usuario" name="Usuario">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="Contrasena">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                
            </form>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
