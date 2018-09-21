

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


    $('.visible.example .ui.sidebar')
      .sidebar({
        context: '.visible.example .bottom.segment'
      })
      .sidebar('hide')





  },

  addLoader: (elem) => {
    $(elem).prepend()
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

