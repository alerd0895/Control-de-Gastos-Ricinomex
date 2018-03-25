<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Login | Sistema Inventarios</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="RICINOMEX Inventario">
    <meta name="author" content="Alejandro Rodriguez Delgado alerd453@outlook.es" />
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico" />
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="login-page bg-login">
	<div class="login-box">
      <div style="color:#3c8dbc" class="login-logo">
        <img style="margin-top:-12px" src="<?php echo base_url(); ?>images/ricinomex_logo.png" alt="RICINOMEX" height="150" width="250">
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Iniciar Sesión</p>
        <?php if($this->session->flashdata("error")):?>
          <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Error</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" type="button" data-widget="remove">
                  <i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <?php echo $this->session->flashdata("error");?>
            </div>
          </div>
        <?php endif;?>
        <?php //echo hash_hmac("sha256", "035372", "RICINOMEX") ?>
        <br/>
        <form action="<?php echo base_url();?>auth/login" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="on" required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Ingresar" />
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>