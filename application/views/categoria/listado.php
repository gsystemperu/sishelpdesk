

<div>
    <div class="ui segments">
        <div class="ui   segment">
            <p><b>Lista de categorías</b></p>
        </div>
    
    <style>
    .ui.colprimary.segment:not(.inverted) {
        border-top: 2px solid #249ADB !important;
    }
    .button.colprimary, .button.colprimary {
    background: #249ADB !important; color: white;
    }
    .button.colprimary:hover {
        background: #1678AE  !important; color: white;
    }
    </style>
        <div class="ui colprimary  segment">

            <div class="ui form">
                <div class="inline fields">
                    <div class="three wide field">
                            <div class="ui action input">
                                <input placeholder="Buscar..." type="text">
                                <button class="ui icon button">
                                    <i class="search icon"></i>
                                </button>
                            </div>
                    </div>
                    <div class="two wide field">
                        <a class="ui colprimary fluid button"  href="<?php echo base_url(); ?>categorias/crear">
                            <i class="plus icon"></i>
                            Crear
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <table id="tbl_lista_incidencias" class="ui celled compact table" style="font-size: 0.8em;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Descripcion</th>
                <th>Técnico</th>
                <th>Salida</th>
                <th>Llegada</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7">
                    <div class="ui right floated pagination menu" style="font-size: 0.8rem;">
                        <a class="icon item">
                            <i class="left chevron icon"></i>
                        </a>
                        <a class="item">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="item">4</a>
                        <a class="icon item">
                            <i class="right chevron icon"></i>
                        </a>
                    </div>
                </th>
            </tr>
        </tfoot>
    </table>

    <div class="ui segments">
        <div class="ui   segment">
            <button class="ui compact labeled icon button">
                <i class="pencil alternate icon"></i>
                Editar
            </button>
            <button class="ui compact labeled icon button">
                <i class="clock outline icon"></i>
                Justificar
            </button>
            <button class="ui compact labeled icon button">
                <i class="lock icon"></i>
                Cerrar
            </button>
            <button class="ui compact labeled icon button">
                <i class="thumbs down icon"></i>
                No conformidad
            </button>
            <button class="ui compact labeled icon button">
                <i class="tasks icon"></i>
                Evaluar
            </button>
            <button class="ui compact labeled icon button">
                <i class="times icon"></i>
                Cancelar
            </button>
        </div>
    </div>

    <div id="div_modalregistrar_nuevo">
    </div>



    <div id="modal_nuevoservicio" class="ui longer modal multiplemodal">

        <div class="header" style="border-bottom: 1px solid #8bbd33;"><i class="edit outline icon"></i> Registrar servicio</div>
        <div class="scrolling content">

            <div class="ui segment">
                <div class="ui active inverted dimmer" style="display:none;">
                    <div class="ui medium loader"></div>
                </div>
    
                <div id="formmodalregnuevo">

                </div>
            </div>
        </div>

        <div class="actions">
            <div id="mdBtnCancelarIncidencia" class="ui button">
                <i class="times icon"></i>Cancelar 
            </div>
            <div id="mdBtnGuardarIncidencia" class="ui colprimary button">
                Guardar
                <i class="right chevron icon"></i>
            </div>
        </div>

    </div>





    
    <div id="modal_agregarcliente" class="ui tiny modal multiplemodal" style="margin-top: auto !important;position: absolute; box-shadow: 1px 3px 30px 14px rgba(0,0,0,.2),1px 3px 15px 2px rgba(0,0,0,.2);">

        <!-- <div class="header" style="border-bottom: 1px solid #8bbd33;"><i class="users icon"></i> Agregar cliente</div> -->
        <div class="scrolling content">

            <div class="ui segment customsg">
                <div class="ui active inverted dimmer" style="display:none;">
                    <div class="ui medium loader"></div>
                </div>

                <div id="formmodalagregarcliente">
                ...
                </div>
            </div>
        </div>

        <div class="actions">
            <div id="mdBtnCancelarModalcliente" class="ui button">
                <i class="times icon"></i>Cancelar 
            </div>
            <div id="mdBtnGrabarcliente" class="ui colprimary button">
                Guardar
                <i class="right chevron icon"></i>
            </div>
        </div>

    </div>


</div>


