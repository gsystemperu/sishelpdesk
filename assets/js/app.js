

const appModule = {

  init: () => {

    $.fn.api.settings.api = {
      'autocomplete cliente': BASE_URL + '/clientes/listadoautocompletar?q={query}',
      'autocomplete tecnico': BASE_URL + '/servicios/listartecnico?tbuscar={query}'
    };
    $.fn.search.settings.templates.message = function (message, type) {
      var html = '';
      if (message !== undefined && type !== undefined) {
        html += '' + '<div class="message ' + type + '">';
        // message type
        if (type == 'empty') {
          html += ''
            + '<div class="header">No hay resultados</div class="header">'
            + '<div class="description">' + message + '</div class="description">';
        }
        else {
          html += ' <div class="description">' + message + '</div>';
        }
        html += '</div>';
      }
      return html;
    }

    var isMobileDevice = false
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        // is Mobile
        isMobileDevice = true
    }

    $('#mainSidebar').sidebar({
      dimPage: false,
      closable: false,
      returnScroll: true,
      delaySetup: true,
      duration: 10000,
      overlay: isMobileDevice
    })

    if(isMobileDevice){
      $('#mainSidebar').sidebar('hide')
    }
    /* $('#mainSidebar')
      .sidebar({
        context: '.visible.example .bottom.segment'
      }) */
      
    //.sidebar('hide')


    $('#topmenu_useroptions').dropdown()

    $('#btnCollapseMenu').click(() => {
      console.log('collapsando')
      $('#mainSidebar').sidebar('toggle')
    })




  },

}

/* document.querySelectorAll('input.mask-numeral').forEach(function(el) {
  new Cleave(el, {
    numeral: true,
    numeralThousandsGroupStyle: 'none',
    numeralDecimalScale: 20
  });
});
 */

