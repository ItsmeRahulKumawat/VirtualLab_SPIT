var page;
function confirmLeave(page) {
    let confirmAction = confirm("Do you want to leave ?\nYour will lose your code written below in simulator...");

    if (confirmAction && page =='mp') {
      window.location = "/mp_neuron";
    } 
    else if(confirmAction && page =='prolog') {
        window.location = "/prolog";
    }
    else if(confirmAction && page =='pnn') {
        window.location = "/pnn";
    }
    else if(confirmAction && page =='anfis') {
        window.location = "/anfis";
    }
    else if(confirmAction && page =='bnn') {
        window.location = "/bnn";
    }
    else if(confirmAction && page =='cnn') {
        window.location = "/cnn";
    }
    else if(confirmAction && page =='fuzzycont') {
        window.location = "/fuzzycont";
    }
    else if(confirmAction && page =='fuzzysets') {
        window.location = "/fuzzysets";
    }
    else if(confirmAction && page =='genetic') {
        window.location = "/genetic";
    }
    else if(confirmAction && page =='morgan') {
        window.location = "/morgan";
    }
    else if(confirmAction && page =='supervised_nn') {
        window.location = "/supervised_nn";
    }
    else if(confirmAction && page =='morgan') {
        window.location = "/morgan";
    }
    else
    {
    }
  }