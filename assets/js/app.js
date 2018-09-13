

const appModule = {

  init: () => {

    $('.visible.example .ui.sidebar')
        .sidebar({
            context: '.visible.example .bottom.segment'
        })
        .sidebar('hide')

    
  },

  addLoader : (elem) => {
    $(elem).prepend()
  },
}

