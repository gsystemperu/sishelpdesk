

<div>
    
    <div class="ui segments">
        <div class="ui   segment">
            <p>Crear incidencia</p>
        </div>
        <div class="ui green  segment">

            <div class="ui form">
                <div class="inline fields">
                    <label>Fecha</label>
                    <div class="field">
                        <input type="date">
                    </div>
                    <div class="field">
                        <button id="regBtnFiltrar" class="ui button">
                            <i class="search icon"></i>
                            Filtrar
                        </button>
                    </div>
                    <div class="field">
                        <button id="regBtnCrear" class="ui colprimary button">
                            <i class="plus icon"></i>
                            Crear
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <table class="ui celled table">
        <thead>
            <tr>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="ui orange ribbon label">First</div>
                </td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">
                    <div class="ui right floated pagination menu">
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



    <div id="modal_nuevoservicio" class="ui longer modal">

        <div class="header" style="border-bottom: 1px solid #8bbd33;">Registrar servicio</div>
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
            <div id="mdBtnGuardar" class="ui colprimary button">
                Guardar
                <i class="right chevron icon"></i>
            </div>
        </div>

    </div>


</div>


