<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Desk</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/libs/semantic-2.3/semantic.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?v=2">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/jquery-3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/semantic-2.3/semantic.min.js"></script>
</head>
<body>

<div id="app">
  <div class="ui bottom attached segment pushable">
    <div class="ui visible inverted left vertical sidebar menu">
      <div class="item">
        <a class="ui logo icon image" href="<?php echo base_url(); ?>">
          <img src="<?php echo base_url(); ?>assets/img/logohelpdesk.png">
        </a>
        <!-- <a href="/"><b>UI Docs</b></a> -->
      </div>
      <a class="item">
        <i class="home icon"></i>
  
        <div class="header">Registro</div>
        <div class="menu">
        <a class="item" href="<?php echo base_url(); ?>registro/registrarnuevo">
              Registrar nuevo
            </a>
        </div>

      </a>
      <a class="item">
        <i class="block layout icon"></i>
        <div class="header">Listado</div>
        <div class="menu">
            <a class="item" href="/introduction/integrations.html">
              Por tipo de incidencia
            </a>
            <a class="item" href="/introduction/integrations.html">
              Por ficha de servicio
            </a>
            <a class="item" href="/introduction/integrations.html">
              Por usuario
            </a>
        </div>
      </a>
      <a class="item">
      <i class="block layout icon"></i>
        <div class="header">Reportes</div>
        <div class="menu">
            <a class="item" href="/introduction/integrations.html">
              Por tipo de servicio
            </a>
            <a class="item" href="/introduction/integrations.html">
              Por tiempo
            </a>
            <a class="item" href="/introduction/integrations.html">
              Por atenciones
            </a>
            <a class="item" href="/introduction/integrations.html">
              Por técnico
            </a>
        </div>
      </a>
    </div>
    <div class="pusher"  style="width: calc(100% - 260px);">
      <div id="container">


        Dashboard


    </div>
  </div>
</div>

  <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/registro.js?v=<?php echo rand(1, 999999); ?>"></script> -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js?v=<?php echo rand(1, 999999); ?>"></script>

</body>
</html>