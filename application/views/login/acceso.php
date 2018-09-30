<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Helpdesk - Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/semantic-2.4/semantic.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?v=2">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/<?php echo ('login/login.css' . '?v='. rand(1, 999999) ); ?>">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/jquery-3.1.1/jquery.min.js"></script>
</head>

<body>


    <div class="page-login" >
        
        <div class="ui centered grid container">
            <div class="nine wide column">
                <div class="ui icon warning message" style="display:none;">
                    <i class="lock icon"></i>
                    <div class="content">
                        <div class="header">
                            Login failed!
                        </div>
                        <p>You might have misspelled your username or password!</p>
                    </div>
                </div>
                <div class="ui fluid card">
                    <div class="content">
                        <div style="text-align: center;"><img src="<?php echo base_url(); ?>assets/img/logohelpdesk.png" style="width: 200px;"></div>
                        <form action="<?php echo base_url(); ?>login/user_login_process" class="ui form" method="post" accept-charset="utf-8">
                            <div class="field">
                                <label>Usuario</label>
                                <input type="text" name="username" value="" id="username" class="form-control" placeholder="Usuario" autocomplete="off" />
                            </div>
                            <div class="field">
                                <label>Contraseña</label>
                                <input type="password" name="password" value="" class="form-control" placeholder="Contraseña" autocomplete="off" />
                            </div>
                            <button class="ui colprimary labeled icon button" type="submit">
                                <i class="unlock alternate icon"></i>
                                Ingresar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--  <form action="<?php echo base_url(); ?>login/user_login_process" class="text-left" method="post" accept-charset="utf-8">
        <div class="login-form-main-message"></div>
        <div class="main-login-form">
            <div class="login-group">
                <div class="form-group">
                    <input type="text" name="username" value="" id="username" class="form-control" placeholder="usuario" autocomplete="off" />
                </div>
                <div class="form-group">
                    <input type="password" name="password" value="" class="form-control" placeholder="contraseña" autocomplete="off" />
                </div>
                <input type="submit" name="botonSubmit" value="Submit" class="login-button" />
            </div>
        </div>
    </form>
 -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/<?php echo ('login_js/login.module.js' . '?v='. rand(1, 999999) ); ?>"></script>

</body>

</html>