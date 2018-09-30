$(document).ready(() => {
    appModule.init()
    $('#regBtnCrear').click(() => {
        getModalRegistrarNuevo()
    })

    $('#regBtnCrear').click();

    $('#regBtnFiltrar').click(() => {
        //UTILS.addLoader('#modal_nuevoservicio')
        fn_listado_incidencias()
    })

    $('#mdBtnCancelarIncidencia').click(() => {
        $('#modal_nuevoservicio').modal('hide')
    })

    $('#mdBtnGuardarIncidencia').click(() => {
        
        //UTILS.removeLoader('#modal_nuevoservicio')
        fn_grabar_incidencia()
            .then(resp => {
                UTILS.loading('#mdBtnGuardarIncidencia',false)
                UTILS.disable(['#mdBtnGuardarIncidencia','#mdBtnCancelarIncidencia'],false)
                //console.log(resp)
            }).catch(
                err => {
                    swal('Hubo un error con el servidor, revisar consola.')
                    console.log('========= ERROR ===========')
                    console.log(err)
                    UTILS.loading('#mdBtnGuardarIncidencia',false)
                    UTILS.disable(['#mdBtnGuardarIncidencia','#mdBtnCancelarIncidencia'],false)
                }
            )

        
    })


    $('#modal_agregarcliente #mdBtnCancelarModalcliente').click(() => {
        $('#modal_agregarcliente').modal('hide')
    })

    $('#modal_agregarcliente #mdBtnGrabarcliente').click(() => {
        fn_grabarCliente()
            .then(resp => {
                let resp_id = parseInt(resp.data[0].id); // Si el id devuelto es mayor a 0, la operación se realizó correctamente
                if (resp_id >= 0) {
                    swal('Datos grabados correctamente')
                    $('#fni_cbx_cliente').dropdown('clear')
                    $('#modal_agregarcliente').modal('hide')
                } else {
                    swal('Hubo un error al grabar los datos')
                }
            })
    })



})

const fn_listado_incidencias = () => {
    return new Promise((resolve, reject) => {
        var _url = BASE_URL + "/servicios/listadoincidencias"
        var _data = { cache: Math.random() * 999999,
            _idincidencia: 0,
            _fecha: '2018-09-10',
        }
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function (resp) {
                setTimeout(() => {
                    let rows = resp.data
                    console.log(rows)
                    let buildTR = ''
                    if(rows.length > 0) {
                        for (let i = 0; i < rows.length; i++) {
                            const elem = rows[i];
                            buildTR += '<tr>'
                                            +'<td>'+elem._iidinsidencia+'</td>'
                                            +'<td>'+elem._nombrecliente+'</td>'
                                            +'<td>'+elem._observaciones+'</td>'
                                            +'<td>'+elem._nombretec+'</td>'
                                            +'<td>'+elem._horasalida+'</td>'
                                            +'<td>'+elem._horallegada+'</td>'
                                            +'<td><a class="ui teal mini tag label">'+elem._descripestado+'</a></td>'
                                            +'<td>'
                                                +'<div class= ui mini buttons">'
                                                    +'<button class="ui blue button">Editar</button>'
                                                    +'<button class="ui teal button">Estado</button>'
                                                +'</div>'
                                            +'</td>'
                                        +'</tr>'
                        }
                    }
                    $('#tbl_lista_incidencias tbody').html(buildTR)
                }, 100);
            })
            .fail(function (error) {
                setTimeout(() => {
                    reject(error)
                }, 3000);
            })
    })
}


const fn_grabar_incidencia = () => {
    return new Promise((resolve, reject) => {

        var tservicios = new Array();
        var boxes = $('#md_acordion_tiposervicio input:checkbox:checked')
            boxes.each(function () {
            if(tservicios.length > 0) {
                tservicios[0] += this.value + '|'
            }else {
                tservicios[0] = this.value + '|'
            }
        }) 
        if(tservicios.length == 0) { 
            swal({
                text: 'Debe seleccionar al menos una categoría',
                icon: 'warning',
            })
            return;
        }

        UTILS.loading('#mdBtnGuardarIncidencia',true)
        UTILS.disable(['#mdBtnGuardarIncidencia','#mdBtnCancelarIncidencia'],true)
        var _url = BASE_URL + "/servicios/grabardatoservicio"
        var _data = { cache: Math.random() * 999999,
            _iidincidencia: $('#form_nuevaincidencia #fni_idregistro').val(),
            _iidcliente: $('#form_nuevaincidencia #fni_cbx_cliente').val(),
            _iidtecnico: $('#form_nuevaincidencia #fni_cbx_tecnico').val(),
            _vperiodo: $('#form_nuevaincidencia #fni_date_fechainicio').val(),
            _imes: $('#form_nuevaincidencia #fni_date_fechainicio').val(),
            _flagprocedimientos: '',
            _flaginterna: '',
            _fechaini: $('#form_nuevaincidencia #fni_date_fechainicio').val(),
            _horasalida: $('#form_nuevaincidencia #fni_txt_horasalida').val(),
            _horallegada: '',
            _horatermino: $('#form_nuevaincidencia #fni_txt_horatermino').val(),
            _horaretorno: '',
            _tiempoatencion: '',
            _observaciones: $('#form_nuevaincidencia #fni_txt_descripcion').val(),
            _vestado: 1, // 1 -> REGISTRADO
            _vusuario: '',
            _vcadena_servicio: tservicios,
            _numficha: $('#form_nuevaincidencia #fni_txt_numero').val(),
            _iidurgencia: $('#form_nuevaincidencia #fni_cbx_urgencia').val(),
            _iidimpacto: $('#form_nuevaincidencia #fni_cbx_impacto').val(),
            _iidprioridad: $('#form_nuevaincidencia #fni_cbx_prioridad').val(),
        }
        $.ajaxSetup({ async: false })

        

        $.post(_url, _data,
            function (resp) {
                setTimeout(() => {
                    let code_incid = parseInt(resp.data[0].tmpiidficha)
                    if(code_incid > 0){
                        $('#mdBtnCancelarIncidencia').click()
                        swal({
                            title: 'Incidencia registrada!',
                            icon: 'success'
                        })
                        resolve(true)
                    }else {
                        swal({
                            text: 'Hubo un error al grabar',
                            icon: 'error',
                            dangerMode: true,
                        })
                    }
                    resolve(false)
                }, 3000);
            })
            .fail(function (error) {
                setTimeout(() => {
                    reject(error)
                }, 3000);
            })

    })
}

const fn_completarmodal_nuevo = () => {
    var _url = BASE_URL + "/servicios/combotiposervicio"
    var _data = { cache: Math.random() * 999999 }
    $.ajaxSetup({ async: false })
    $.get(_url, _data,
        function (resp) {
            //$('#modal_nuevoservicio').html(resp)
            $('#modal_nuevoservicio').modal('show')

            if (resp.data.length > 0) {
                for (let i = 0; i < resp.data.length; i++) {
                    const tserv = resp.data[i]
                    $('#md_acordion_tiposervicio').append('<div class="item"><a class="title"><i class="dropdown icon"></i> ' + tserv._descrip + ' </a></div>');
                }
            }

            setTimeout(() => {
                UTILS.removeLoader('#modal_nuevoservicio')
            }, 1);
        }
    )
}

const cargarTipoServicios = () => {
    var _url = BASE_URL + "/servicios/combotiposervicio"
    var _data = { cache: Math.random() * 999999 }
    $.ajaxSetup({ async: false })
    $.get(_url, _data,
        function (resp) {
            const servs = resp.data
            var itemsHTML = ''
            if (servs.length > 0) {
                var partialItem = ''
                for (let i = 0; i < servs.length; i++) {
                    const elm = servs[i];
                    partialItem = '<div class="item">' +
                        '<a class="title"><i class="dropdown icon"></i>' + elm._descrip + '</a>';

                    if (elm._subtipos.length > 0) {
                        var partialSubtipos = '<div class="content">' +
                            '<div class="ui form">' +
                            '<div class="grouped fields">';
                        for (let j = 0; j < elm._subtipos.length; j++) {
                            const sub = elm._subtipos[j];
                            partialSubtipos += '<div class="field"><div class="ui checkbox"><input name="small" type="checkbox" value="' + sub._id + '"><label>' + sub._descrip + '</label></div></div>'
                        }
                        partialSubtipos += '</div></div></div>'
                        partialItem += partialSubtipos
                    }

                    partialItem += '</div>';
                    itemsHTML += partialItem
                }
            }

            $('#modal_nuevoservicio #md_acordion_tiposervicio').html(itemsHTML)
            //console.log(resp) 
            //const itemHTML = ''

        }
    )
}

const getModalRegistrarNuevo = () => {

    $('.modal.multiplemodal').modal({
        allowMultiple: true
    });

    UTILS.addLoader('#modal_nuevoservicio')
    $('#modal_nuevoservicio #formmodalregnuevo').html('')
    $('#modal_nuevoservicio').modal('show')

    var _url = BASE_URL + "/registro/modalregistrarservicio"
    var _data = { cache: Math.random() * 999999 }
    $.ajaxSetup({ async: false })
    $.get(_url, _data,
        function (resp) {

            setTimeout(() => {
                $('#modal_nuevoservicio #formmodalregnuevo').html(resp)
                $('#modal_nuevoservicio #md_acordion_tiposervicio').accordion()

                //cargarTipoServicios()

                UTILS.removeLoader('#modal_nuevoservicio')


                $('#btn_modal_reg_add_cliente').click(() => {
                    getModalAgregarcliente()
                })


                try { // Cuando cleave no encuentra el elemento, causa error
                    document.querySelectorAll('.cleave-time').forEach(function(el) {
                        new Cleave(el, {
                            time: true,
                            timePattern: ['h', 'm']
                        })
                    })
                }catch { }

                $('#fni_cbx_categoria, #fni_cbx_sub_categoria, #fni_cbx_urgencia, #fni_cbx_impacto, #fni_cbx_estadoincidencia, #fni_cbx_prioridad').dropdown()

                

                //llenarSubCategoria(1)

                var cbx_cliente = $('#fni_cbx_cliente')
                var cbx_tecnico = $('#fni_cbx_tecnico')
                
                cbx_cliente.dropdown({
                    clearable: true,
                    preserveHTML: false,
                    minCharacters: 3,
                    apiSettings: {
                        // this url parses query server side and returns filtered results
                        action: 'autocomplete cliente',
                        cache: false
                    },
                    fields: {
                        remoteValues: 'data',
                        name: 'nombrecompleto',
                        value: 'idcliente',
                    },
                    message: {
                        noResults: 'No hay resultados según el texto ingresado'
                    }
                })

                cbx_tecnico.dropdown({
                    clearable: true,
                    preserveHTML: false,
                    minCharacters: 0,
                    apiSettings: {
                        // this url parses query server side and returns filtered results
                        action: 'autocomplete tecnico',
                        cache: false
                    },
                    fields: {
                        remoteValues: 'data',
                        name: '_descrip',
                        value: '_id',
                    },
                    message: {
                        noResults: 'No hay resultados según el texto ingresado'
                    }
                })

            }, 1)
        }
    )
}

const llenarSubCategoria = (idtiposervicio) => {
    return new Promise((resolve,reject) => {
        var _url = BASE_URL + "/servicios/getlistaservicio"
        var _data = { cache: Math.random() * 999999,
                      _tiposervicio: idtiposervicio}
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function(resp) {
                console.log(resp)
            })
    })
}


const getModalAgregarcliente = () => {
    $('#modal_agregarcliente').modal('show')

    var _url = BASE_URL + "/registro/modalagregarcliente"
    var _data = { cache: Math.random() * 999999 }
    $.ajaxSetup({ async: false })
    $.get(_url, _data,
        function (resp) {
            $('#modal_agregarcliente #formmodalagregarcliente').html(resp)

            var busq_clientes = $('#buscadorcliente.ui.search')
            busq_clientes
                .search({
                    /* apiSettings: {
                        //url: '//api.github.com/search/repositories?q={query}',
                        url: 'http://192.168.2.82:8084/sishelpdesk//clientes/listadoautocompletar?q={query}'
                    }, */

                    fields: {
                        results: 'data',
                        title: 'nombrecompleto'
                    },
                    minCharacters: 3,
                    error: {
                        noResults: 'No se encontraron resultados',
                    },
                    apiSettings: {
                        action: 'autocomplete cliente',

                    },
                    onSelect: function (result, response) {
                        $('#frm_regcliente #txt_idcliente').val(result.idcliente)
                        $('#frm_regcliente #txt_dni').val(result.dni)
                        $('#frm_regcliente #txt_nombres').val(result.nombres)
                        $('#frm_regcliente #txt_apepater').val(result.apepat)
                        $('#frm_regcliente #txt_apemater').val(result.apemat)
                        $('#frm_regcliente #txt_email').val(result.email)
                        $('#frm_regcliente #txt_telefono').val(result.telefono)
                        $('#frm_regcliente #txt_celular').val(result.celular)
                    }
                });

            $('#btn_limpiar_newuser').click(() => {
                busq_clientes.search("set value", "")
                busq_clientes.search("query");
                $('#frm_regcliente #txt_idcliente').val('')
                $('#frm_regcliente #txt_dni').val('')
                $('#frm_regcliente #txt_nombres').val('')
                $('#frm_regcliente #txt_apepater').val('')
                $('#frm_regcliente #txt_apemater').val('')
                $('#frm_regcliente #txt_email').val('')
                $('#frm_regcliente #txt_telefono').val('')
                $('#frm_regcliente #txt_celular').val('')
            })


        }
    )
}

const fn_grabarCliente = () => {
    return new Promise((resolve, reject) => {
        let cliente = {
            'idcliente': $('#frm_regcliente #txt_idcliente').val(),
            'dni': $('#frm_regcliente #txt_dni').val(),
            'nombres': $('#frm_regcliente #txt_nombres').val(),
            'apePaterno': $('#frm_regcliente #txt_apepater').val(),
            'apeMaterno': $('#frm_regcliente #txt_apemater').val(),
            'email': $('#frm_regcliente #txt_email').val(),
            'telefono': $('#frm_regcliente #txt_telefono').val(),
            'celular': $('#frm_regcliente #txt_celular').val()
        }

        var _url = BASE_URL + "/clientes/grabarcliente"
        var _data = {
            cache: Math.random() * 999999,
            //idcliente: cliente.idcliente,
            idcliente: cliente.idcliente,
            dni: cliente.dni,
            nombres: cliente.nombres,
            apepater: cliente.apePaterno,
            apemater: cliente.apeMaterno,
            email: cliente.email,
            telefono: cliente.telefono,
            celular: cliente.celular,
            usuario: '',
        }
        $.ajaxSetup({ async: false })
        $.post(_url, _data,
            function (resp) {
                resolve(resp)
            })
            .fail(function (error) {
                reject(error)
            })

    })
}
