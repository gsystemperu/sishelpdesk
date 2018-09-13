

const UTILS = {
    addLoader : (elem) => {
        ($(elem+' .loader')[0]).parentElement.style.display = "block"
    },
    removeLoader : (elem) => {
        ($(elem+' .loader')[0]).parentElement.style.display = "none"
    }

  }
  
  