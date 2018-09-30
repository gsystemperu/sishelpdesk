

<div>
    <div class="ui segments">
        <div class="ui   segment">
            <p><b>Tipo de usuario</b></p>
        </div>

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
                        <a class="ui colprimary fluid button"  href="<?php echo base_url(); ?>personal/creartipousuario">
                            <i class="plus icon"></i>
                            Crear
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <table id="tbl_lista_tipousuario" class="ui table" style="font-size: 0.8em;">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>


