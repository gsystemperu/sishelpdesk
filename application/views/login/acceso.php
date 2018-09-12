<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <form action="<?php echo base_url(); ?>login/user_login_process" class="text-left" method="post" accept-charset="utf-8">
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
            <!-- <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button> -->
        </div>
    </form>


</body>

</html>