


$(document).ready(() => {

    appModule.init()

    

    console.log('asdfazzZZZZZ')
 
     /* saludar()   */

    $('#regBtnCrear').click(() => {
        getModalRegistrarNuevo()
    })

    $('#regBtnFiltrar').click(() => {
        //UTILS.addLoader('#modal_nuevoservicio')
    })

    $('#mdBtnGuardar').click(() => {
        //UTILS.removeLoader('#modal_nuevoservicio')
    })

    

   // $('#regBtnCrear').click()

    cargarTipoServicio()

    



})

const fn_completarmodal_nuevo = () => {
    var _url = BASE_URL + "/servicios/combotiposervicio"
	var _data = { cache: Math.random() * 999999 }
	$.ajaxSetup({async:false})
	$.get(_url, _data,
		function(resp){
            //$('#modal_nuevoservicio').html(resp)
            $('#modal_nuevoservicio').modal('show')
            
            if(resp.data.length > 0){
                for (let i = 0; i < resp.data.length; i++) {
                    const tserv = resp.data[i]
                    $('#md_acordion_tiposervicio').append('<div class="item"><a class="title"><i class="dropdown icon"></i> '+ tserv._descrip +' </a></div>');
                }
            }

            setTimeout(() => {
                UTILS.removeLoader('#modal_nuevoservicio')
            }, 1000);
        }
    )
}

const cargarTipoServicio = () => {
    console.log('carnaodbocmbosssx2')
}

const getModalRegistrarNuevo = () => {
    UTILS.addLoader('#modal_nuevoservicio')
    $('#modal_nuevoservicio #formmodalregnuevo').html('')
    $('#modal_nuevoservicio').modal('show')
    var _url = BASE_URL + "/registro/modalregistrarservicio"
	var _data = { cache: Math.random() * 999999 }
	$.ajaxSetup({async:false})
	$.get(_url, _data,
		function(resp){

            setTimeout(() => {
                $('#modal_nuevoservicio #formmodalregnuevo').html(resp)
                $('#modal_nuevoservicio .ui.accordion').accordion()
                $('#modal_nuevoservicio .ui.dropdown').dropdown({ allowAdditions: true });
                UTILS.removeLoader('#modal_nuevoservicio')
            }, 2500);  
        }
    )
}