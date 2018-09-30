<div>
    <div class="ui segments">
        <div class="ui   segment">
            <p><b>Crear tipo de usuario</b></p>
        </div>

    <style>
    .inline.fields:not(:first-child) .field {
        margin-bottom: 10px !important;
    }
    </style>

        <?php if (isset($action)) : ?>
            <input type="hidden" id="action_type" value="<?=$action['type']?>">
            <input type="hidden" id="action_payload" value="<?=$action['payload']?>">
        <?php endif;?>

        <div id="div_creartipousuario" class="ui colprimary  segment">

            <div class="ui form">
                

                <!--
                <div class="inline fields">
                    <div class="three wide field">
                            <label>Incidencias:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_incidencias" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Categorías:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_categorias" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Clientes:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_clientes" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Usuarios:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_usuarios" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Informes:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_informes" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Mi Perfil:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_miperfil" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Mantenimiento:</label>
                    </div>
                    <div class="four wide field">
                        <select id="cbx_ps_mantenimiento" class="ui fluid selection   dropdown">
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                -->
               
                <input id="txt_idtipousuario" type="hidden" value="">

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Nombre: </label>
                    </div>
                    <div class="four wide field">
                        <input id="txt_nombretipo" placeholder="Nombre" type="text">
                    </div>
                </div>

                <div class="inline fields" style="">
                    <div class="three wide field">
                            <label>Incidencias:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_incidencias" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Categorías:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_categorias" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Clientes:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_clientes" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Usuarios:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_usuarios" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Informes:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_informes" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Mi Perfil:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_miperfil" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="inline fields">
                    <div class="three wide field">
                            <label>Mantenimiento:</label>
                    </div>
                    <div class="four wide field">
                        <div id="chck_ps_mantenimiento" class="ui toggle checkbox">
                            <input  type="checkbox">
                        </div>
                    </div>
                </div>


                <div class="inline fields">
                    <div class="two wide field">
                            <button id="btnCrearTipo" class="ui colprimary fluid button">
                                <i class="save icon"></i> Grabar
                            </button>
                    </div>
                </div>

            </div>
        </div>
        


 
        
    </div>


</div>


