

const UTILS = {
    addLoader: (elem) => {
        ($(elem + ' .loader')[0]).parentElement.style.display = "block"
    },
    removeLoader: (elem) => {
        ($(elem + ' .loader')[0]).parentElement.style.display = "none"
    },
    loading: (elem, status = false) => {
        switch (typeof elem) {
            case 'string':
                if(status) {
                    $(elem).addClass('loading')
                } else {
                    $(elem).removeClass('loading')
                }
                break
            case 'object':
                if (Array.isArray(elem)) {
                    elem.forEach((item) => {
                        if(status) {
                            $(item).addClass('loading')
                        } else {
                            $(item).removeClass('loading')
                        }
                    })
                }
                break
        }
    },
    disable: (elem, status = false) => {
        switch (typeof elem) {
            case 'string':
                if(status) {
                    $(elem).addClass('disabled')
                } else {
                    $(elem).removeClass('disabled')
                }
                break
            case 'object':
                if (Array.isArray(elem)) {
                    elem.forEach((item) => {
                        if(status) {
                            $(item).addClass('disabled')
                        } else {
                            $(item).removeClass('disabled')
                        }
                    })
                }
                break
        }
    }

}

