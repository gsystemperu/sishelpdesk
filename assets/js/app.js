

const appModule = {

  init: () => {

    $('.visible.example .ui.sidebar')
        .sidebar({
            context: '.visible.example .bottom.segment'
        })
        .sidebar('hide')

    $('.ui.accordion').accordion()
    $('.ui.dropdown').dropdown({ allowAdditions: true });
  }



}

