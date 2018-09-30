<!-- <div class="ui tiny menu" style="margin-top: -16px;"> -->
<div class="ui tiny menu" style="margin-bottom: 0px;">
    <div class="item">
        <div id="btnCollapseMenu" class="ui teal button" style="width: 45px;"><i class="bars icon"></i></div>
    </div>
    <div class="right menu">
        <div id="topmenu_useroptions" class="ui dropdown item">
        <img class="ui right spaced avatar image" src="<?php echo base_url(); ?>assets/img/elliot.jpg">
        <?=$this->session->userdata['logged_in']['nombre_completo']?> <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item">Permisos</a>
                <a class="item">Grupo</a>
                <a class="item">Perfil</a>
            </div>
        </div>
        <div class="item">
            <a class="ui primary button" href="<?php echo base_url(); ?>login/logout">Cerrar sesión</a>
        </div>
    </div>
</div>