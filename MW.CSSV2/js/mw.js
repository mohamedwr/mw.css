/*global $, window*/

//Collapse

function collapse(name) {
    "use strict";
    
    $(".collapse[data-id=" + name + "]").slideToggle();
    
}

//Dropdown

var Open = 'no';


function Changeopen() {
    "use strict";
    Open = 'yes';
}

function dropdown(name) {
    "use strict";
    
    $(".dp-links[data-id=" + name + "]").show(Changeopen);
    
}


function dpClose() {
    "use strict";
    
    if (Open === 'yes') {
        $(".dp-links").hide();
        Open = 'no';
    }
  
}

window.document.body.setAttribute('onclick', 'dpClose();');


//Nav

function navdp(name) {
    "use strict";
    
    $(".navcontent[data-id=" + name + "]").slideToggle();
    
}