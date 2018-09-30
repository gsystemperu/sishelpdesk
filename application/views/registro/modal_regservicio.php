<div class="ui grid">

    <!-- <div class="five wide column">
        <div id="md_acordion_tiposervicio" class="ui vertical fluid accordion menu">
            <div class="item">
                <a class="title"><i class="dropdown icon"></i> ... </a>
                <div class="content">
                    <div class="ui form">
                        <div class="grouped fields">
                            <div class="field">
                                <div class="ui checkbox">
                                    <input name="small" type="checkbox">
                                    <label>... 1</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <input name="medium" type="checkbox">
                                    <label>... 2</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <input name="large" type="checkbox">
                                    <label>... 3</label>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui checkbox">
                                    <input name="x-large" type="checkbox">
                                    <label>... 4</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> -->

    <div class="sixteen wide column">
        <div id="form_nuevaincidencia" class="ui form">
            <input id="fni_idregistro" type="hidden" >
            
            <!-- <div class="inline fields">
                <div class="three wide field">
                    <label>Número</label>
                </div>
                <div class="four wide field">
                    <input id="fni_txt_numero" placeholder="####" type="text">
                </div>
            </div> -->
            <div class="inline fields">
                <div class="three wide field" >
                    <label>Cliente / Empresa</label>
                </div>
                <div class="five wide field" >
                    <select id="fni_cbx_cliente" name="skills"  class="ui fluid search selection dropdown">
                    <option value="">Escribir nombre...</option>
                    </select>
                </div>
                <div class="two wide field">
                    <button id="btn_modal_reg_add_cliente" class="fluid ui button">
                        Agregar
                    </button>
                </div>

                <div class="one wide field">
                </div>
                <div class="two wide field">
                    <label>Anexo / Celular</label>
                </div>
                <div class="three wide field">
                    <input  id="txt_anexo_celular" type="text">
                </div>
            </div>
            <!-- <div class="inline fields">
                <div class="three wide field">
                    <label>Fecha inicio</label>
                </div>
                <div class="five wide field">
                    <input  id="fni_date_fechainicio" type="date">
                </div>
            </div> -->
            <!-- <div class="inline fields">
                <div class="three wide field">
                    <label>Hora salida</label>
                </div>
                <div class="four wide field">
                    <input id="fni_txt_horasalida" class="cleave-time" placeholder="HH:MM" type="text">
                </div>
                <div class="two wide field">
                </div>
                <div class="three wide field">
                    <label>Hora termino</label>
                </div>
                <div class="four wide field">
                <input id="fni_txt_horatermino" class="cleave-time" placeholder="HH:MM" type="text">
                </div>
            </div> -->

            <div class="inline fields">
                <div class="three wide field">
                    <label>Ubicación</label>
                </div>
                <div class="thirteen wide field">
                    <input  id="txt_ubicacion" type="text">
                </div>
            </div>

            <div class="inline fields">
                <div class="three wide field">
                    <label>Categoría</label>
                </div>
                <div class="four wide field">
                    <?php uiSelectSemantic('fni_cbx_categoria', $lista_tiposervicio, 'fluid'); ?>
                </div>
                <div class="two wide field">
                </div>
                <div class="three wide field">
                    <label>Subcategoría</label>
                </div>
                <div class="four wide field">
                    <select id="fni_cbx_sub_categoria" class="ui fluid dropdown">
                        
                    </select>
                </div>
            </div>

            <div class="inline fields">
                <div class="three wide field">
                    <label>Técnico</label>
                </div>
                <div class="thirteen wide field">
                    <select id="fni_cbx_tecnico" class="ui fluid search selection dropdown">
                    </select>
                </div>
            </div>

            <div class="inline fields">
                <div class="three wide field">
                    <label>Urgencia</label>
                </div>
                <div class="four wide field">
                    <?php uiSelectSemantic('fni_cbx_urgencia', $lista_urgencia, 'fluid'); ?>
                </div>
                <div class="two wide field">
                </div>
                <div class="three wide field">
                    <label>Impacto</label>
                </div>
                <div class="four wide field">
                    <?php uiSelectSemantic('fni_cbx_impacto', $lista_impacto, 'fluid'); ?>
                </div>
            </div>

            <div class="inline fields">
                <div class="three wide field">
                    <label>Estado</label>
                </div>
                <div class="four wide field">
                    <?php uiSelectSemantic('fni_cbx_estadoincidencia', $lista_estadoincidencia, 'fluid'); ?>
                </div>
                <div class="two wide field">
                </div>
                <div class="three wide field">
                    <label>Prioridad</label>
                </div>
                <div class="four wide field">
                    <?php uiSelectSemantic('fni_cbx_prioridad', $lista_prioridad, 'fluid'); ?>
                </div>
            </div>

            <div class="inline fields">
                <div class="three wide field">
                    <label>Asunto</label>
                </div>
                <div class="thirteen wide field">
                    <input  id="txt_asunto" type="text">
                </div>
            </div>

            <div class="inline fields">
                <div class="three wide field">
                    <label>Descripción del problema</label>
                </div>
                <div class="thirteen wide field">
                    <textarea id="fni_txt_descripcion" rows="2"></textarea>
                </div>
            </div>
        </form>
    </div>

</div>

