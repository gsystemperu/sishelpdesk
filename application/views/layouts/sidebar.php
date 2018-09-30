<div id="mainSidebar" class="ui left vertical inverted labeled visible sidebar menu">
<!-- <div id="mainSidebar" class="ui sidebar inverted vertical menu"> -->
    <div class="item">
        <a class="ui logo icon image" href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url(); ?>assets/img/logohelpdesk.png">
        </a>
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
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por tipo de incidencia
            </a>
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por ficha de servicio
            </a>
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por usuario
            </a>
        </div>
    </a>
    <a class="item">
        <i class="block layout icon"></i>
        <div class="header">Categorías</div>
        <div class="menu">
            <a class="item" href="<?php echo base_url(); ?>categorias/listado">
            Listado de categorías
            </a>
            <a class="item" href="<?php echo base_url(); ?>categorias/subcategorias">
            Listado de subcategorías
            </a>
        </div>
    </a>
    <a class="item">
        <i class="block layout icon"></i>
        <div class="header">Personal</div>
        <div class="menu">
            <a class="item" href="<?php echo base_url(); ?>personal/listausuarios">
            Usuarios
            </a>
            <a class="item" href="<?php echo base_url(); ?>personal/tipousuario">
            Tipo de usuario
            </a>
        </div>
    </a>
    <a class="item">
    <i class="block layout icon"></i>
        <div class="header">Reportes</div>
        <div class="menu">
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por tipo de servicio
            </a>
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por tiempo
            </a>
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por atenciones
            </a>
            <a class="item" href="<?php echo base_url(); ?>otro">
            Por técnico
            </a>
        </div>
    </a> 
</div>