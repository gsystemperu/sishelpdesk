$(document).ready(() => {
    appModule.init()
    //$('#cbx_ps_incidencias, #cbx_ps_categorias, #cbx_ps_clientes, #cbx_ps_usuarios, #cbx_ps_informes, #cbx_ps_miperfil, #cbx_ps_mantenimiento').dropdown()
    $('#chck_ps_incidencias, #chck_ps_categorias, #chck_ps_clientes, #chck_ps_usuarios, #chck_ps_informes, #chck_ps_miperfil, #chck_ps_mantenimiento').checkbox({})

    fn_lista_tipo_usuario()

    $('#btnCrearTipo').click(() => {
        if (!($('#txt_nombretipo').val()).trim()) {
            return swal("Debe completar el campo nombre")
        }
        fn_crear_tipousuario().then(resp => {
            swal({
                icon: 'success',
                text: 'Se guardó correctamente el tipo de usuario.'
            }).then((value) => {
                window.location.href = BASE_URL + "/personal/tipousuario";
            })
            //console.log(resp)
        }).catch(
            err => {
                swal('Hubo un error con el servidor, revisar consola.')
                console.log('========= ERROR ===========')
                console.log(err)
            }
        )
    })




    // EDITAR TIPO DE USUARIO
    let action_type = $('#action_type').val()
    let action_payload = parseInt($('#action_payload').val())

    switch (action_type) {
        case 'edit':
            $('#div_creartipousuario').addClass('loading')
            fn_cargar_data_tipousuario(action_payload)
                .then((resp) => {
                    $('#div_creartipousuario').removeClass('loading')
                })
                .catch((error) => {
                    $('#div_creartipousuario').removeClass('loading')
                })
            break;
    }



})



const fn_cargar_data_tipousuario = (idtipousuario) => {
    return new Promise((resolve, reject) => {
        var _url = BASE_URL + "/personal/listadotipousuario"
        var _data = {
            cache: Math.random() * 999999,
            _id_tipousuario: idtipousuario
        }
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function (resp) {
                let rows = resp.data
                if (rows.length > 0) {
                    console.log(rows)
                    $('#txt_idtipousuario').val(rows[0].id_tipousuario)
                    $('#txt_nombretipo').val(rows[0].nombre)
                    checked_if_true('#chck_ps_incidencias', rows[0].ps_incidencias)
                    checked_if_true('#chck_ps_categorias', rows[0].ps_categorias)
                    checked_if_true('#chck_ps_clientes', rows[0].ps_clientes)
                    checked_if_true('#chck_ps_usuarios', rows[0].ps_usuarios)
                    checked_if_true('#chck_ps_informes', rows[0].ps_informes)
                    checked_if_true('#chck_ps_miperfil', rows[0].ps_miperfil)
                    checked_if_true('#chck_ps_mantenimiento', rows[0].ps_mantenimiento)
                }
                resolve(true)
            })
            .fail(function (error) {
                reject(error)
            })
    })
}

const checked_if_true = (selector, value) => {
    let val = value.toLowerCase()
    if (val == 't' || val == 'true') {
        $(selector).checkbox('check');
    }
}



const fn_crear_tipousuario = () => {
    return new Promise((resolve, reject) => {
        var _url = BASE_URL + "/personal/grabartipousuario"
        var _data = {
            cache: Math.random() * 999999,
            _id_tipousuario: $('#txt_idtipousuario').val(),
            _nombre: $('#txt_nombretipo').val(),
            _ps_incidencias: $('#chck_ps_incidencias').hasClass('checked'),
            _ps_categorias: $('#chck_ps_categorias').hasClass('checked'),
            _ps_clientes: $('#chck_ps_clientes').hasClass('checked'),
            _ps_usuarios: $('#chck_ps_usuarios').hasClass('checked'),
            _ps_informes: $('#chck_ps_informes').hasClass('checked'),
            _ps_miperfil: $('#chck_ps_miperfil').hasClass('checked'),
            _ps_mantenimiento: $('#chck_ps_mantenimiento').hasClass('checked'),
        }
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function (resp) {
                if (parseInt(resp.data[0].id) > 0) {
                    resolve(true)
                }
            })
            .fail(function (error) {
                reject(error)
            })
    })
}


const fn_lista_tipo_usuario = () => {
    return new Promise((resolve, reject) => {
        var _url = BASE_URL + "/personal/listadotipousuario"
        var _data = {
            cache: Math.random() * 999999,
            _id_tipousuario: 0
        }
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function (resp) {
                let rows = resp.data
                let buildHTML = ''
                if (rows.length > 0) {
                    for (let i = 0; i < rows.length; i++) {
                        const elem = rows[i];
                        buildHTML += '<tr data-idtipousuario="' + elem.id_tipousuario + '">' +
                            '<td>' + elem.nombre + '</td>' +
                            '<td>' + elem.estado + '</td>' +
                            '<td><a class="ui mini button" href="' + BASE_URL + 'personal/creartipousuario/edit/' + elem.id_tipousuario + '">Editar</a></td>' +
                            '<td><button class="ui mini button deltipousuario" data-idtipo="' + elem.id_tipousuario + '">Eliminar</button></td>' +
                            '</tr>';
                    }
                    $('#tbl_lista_tipousuario tbody').html(buildHTML)
                }

                $('.deltipousuario').click((sa) => {
                    let elem = sa.currentTarget
                    let codtipo = elem.dataset.idtipo

                    swal({
                        //title: "Are you sure?",
                        text: "¿Seguro de eliminar el tipo de usuario?",
                        buttons: ["No", "Sí"],
                        dangerMode: true,
                        confirm: 'Sí'
                    }).then((willDelete) => {
                            if (willDelete) {
                                fn_eliminar_tipousuario(codtipo)
                                    .then((res) => {
                                        fn_lista_tipo_usuario()
                                    })
                            }
                        })
                })


                resolve(resp)
            })
            .fail(function (error) {
                reject(error)
            })
    })
}


const fn_eliminar_tipousuario = (idtipousuario) => {
    return new Promise((resolve, reject) => {
        var _url = BASE_URL + "/personal/eliminartipousuario"
        var _data = {
            cache: Math.random() * 999999,
            _id_tipousuario: idtipousuario
        }
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function (resp) {
                let rows = resp.data
                if (rows.length > 0) {
                    if (parseInt(rows[0].code) == 200) {
                        swal("Se eliminó correctamente el tipo de usuario", {icon: "success"})
                        resolve(true)
                    } else {
                        swal(rows[0].message, {icon: "error", dangerMode: true})
                    }
                }
                resolve(false)
            })
            .fail(function (error) {
                reject(error)
            })
    })
}
