<div>
    <div class="ui segments">
        <div class="ui clearing  segment">
           <!--  <i class="search icon"></i> <b>Buscar cliente</b> -->
                <!-- <select id="cbx_md_buscarcliente" class="ui search dropdown">
                    <option value="">State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                </select> -->
                <div class="ui small form">
                    <div class="inline fields">
                        
                            <div id="buscadorcliente" class="ui search">
                                <div class="ui left icon  input">
                                    <input class="prompt" placeholder="Buscar cliente..." type="text" style="width: 325px;">
                                    <i class="user circle icon"></i>
                                </div>
                                <div class="results"></div>
                            </div> 
                        
                        <div class="one wide field">
                       
                        </div>

                        <div class="five wide field" style="padding-right: 0px;">
                            <button id="btn_limpiar_newuser" class="ui fluid button">
                                <i class="user icon"></i>
                                Nuevo
                            </button>
                        </div>
                    </div>
                </div>

               <!--  <div id="cbx_md_buscarcliente" class="ui fluid search tiny selection dropdown">
                    <input name="country" type="hidden">
                    <div class="default text">...</div>
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <div class="item" data-value="af">-- Nuevo cliente --</div>
                        <div class="item" data-value="af">Alec Gonzalez</div>
                        <div class="item" data-value="ax">Eddy Erazo</div>
                        <div class="item" data-value="bb">Raul Carrillo</div>
                        <div class="item" data-value="by">Julio Gastelo</div>
                        <div class="item" data-value="be">Herles Gavino</div>

                    </div>
                </div> -->
        </div>
       
    </div>
    <div class="ui segments">
        <div class="ui segment">
            <i class="users icon"></i> <b>Registrar o actualizar</b>
        </div>
        <div class="ui secondary  segment">

            <div id="frm_regcliente" class="ui tiny form">
                <input id="txt_idcliente" type="hidden" >
                <div class="inline fields">
                    <div class="four wide field">
                        <label>DNI :</label>
                    </div>
                    <div class="four wide field">
                        <input id="txt_dni" type="text" placeholder="########" autofocus>
                    </div>
                </div>
                <div class="inline fields">
                    <div class="four wide field">
                        <label>Nombres :</label>
                    </div>
                    <div class="twelve wide field">
                        <input id="txt_nombres"type="text" placeholder="">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="four wide field">
                        <label>Apellido paterno :</label>
                    </div>
                    <div class="twelve wide field">
                        <input id="txt_apepater" type="text" placeholder="">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="four wide field">
                        <label>Apellido materno :</label>
                    </div>
                    <div class="twelve wide field">
                        <input id="txt_apemater" type="text" placeholder="">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="four wide field">
                        <label>Email :</label>
                    </div>
                    <div class="twelve wide field">
                        <input id="txt_email" type="email" placeholder="">
                    </div>
                </div>
                <div class="inline fields">
                    <div class="four wide field">
                        <label>Teléfono :</label>
                    </div>
                    <div class="four wide field">
                        <input id="txt_telefono" type="text" placeholder="">
                    </div>
                    <div class="one wide field">
                    </div>
                    <div class="three wide field">
                        <label>Celular :</label>
                    </div>
                    <div class="four wide field">
                        <input  id="txt_celular" type="text" placeholder="">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>