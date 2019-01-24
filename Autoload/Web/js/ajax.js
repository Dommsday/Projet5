//Initialisation de la demande GET
function ajaxGet(url, callback) {

    const req = new XMLHttpRequest();

    req.open("GET", url, true);

    req.addEventListener("load", function () {
        if (req.status >= 200 && req.status < 400) {
            // Appelle la fonction callback en lui passant la réponse de la requête
            callback(req.responseText);
        } else {
            console.error(req.status + " " + req.statusText + " " + url);
        }
    });

    req.addEventListener("error", function () {
        console.error("Erreur réseau avec l'URL " + url);
    });

    req.send(null);
}



var AppleForm = {

    storageAppleForm: window.sessionStorage,
    apple1Index : document.querySelector(".apple1-index"),
    apple2Index : document.querySelector(".apple2-index"),
    apple3Index : document.querySelector(".apple3-index"),
    apple4Index : document.querySelector(".apple4-index"),
    btnApple1Index : document.getElementById("btnApple1"),
    btnApple2Index : document.getElementById("btnApple2"),
    btnApple3Index : document.getElementById("btnApple3"),
    btnApple4Index : document.getElementById("btnApple4"),
    hidden1: 1,

    init: function(){

        AppleForm.refresh();
        AppleForm.hiddenApple1Index();

    },

    hiddenApple1Index: function(){

        let saveHidden = AppleForm.hidden1;

        AppleForm.storageAppleForm.setItem("saveHidden", saveHidden);

        AppleForm.btnApple1Index.addEventListener("click", function(){

            AppleForm.saveHidden = 2;

            AppleForm.storageAppleForm.setItem("saveHidden", AppleForm.saveHidden);

            AppleForm.apple1Index.style.display = "none";

        });

        if(AppleForm.storageAppleForm.getItem("saveHidden") == 2){

            AppleForm.apple1Index.style.display="none";
        }else{

            AppleForm.apple1Index.style.display="block";
        }

    },

    /*hiddenApple2Index: function(){

        let saveHidden = AppleForm.hidden2;

        AppleForm.storageAppleForm.setItem("saveHidden", saveHidden);

        AppleForm.btnApple2Index.addEventListener("click", function(){

            AppleForm.saveHidden = 32;

            AppleForm.storageAppleForm.setItem("saveHidden", AppleForm.saveHidden);

            AppleForm.apple2Index.style.display = "none";

        });

        if(AppleForm.storageAppleForm.getItem("saveHidden") == 32){

            AppleForm.apple2Index.style.display="none";
        }else{

            AppleForm.apple2Index.style.display="block";
        }

    },

    /*hiddenApple3Index: function(){

        let saveHidden = AppleForm.hidden3;

        AppleForm.storageAppleForm.setItem("saveHidden", saveHidden);

        AppleForm.btnApple3Index.addEventListener("click", function(){

            AppleForm.saveHidden = 2

            AppleForm.storageAppleForm.setItem("saveHidden", AppleForm.saveHidden);

            AppleForm.apple3Index.style.display = "none";

        });

        if(AppleForm.storageAppleForm.getItem("saveHidden") == 2){

            AppleForm.apple3Index.style.display="none";
        }else{

            AppleForm.apple3Index.style.display="block";
        }

    //},

    //hiddenApple4Index: function(){

        let saveHidden = AppleForm.hidden4;

        AppleForm.storageAppleForm.setItem("saveHidden", saveHidden);

        AppleForm.btnApple4Index.addEventListener("click", function(){

            AppleForm.saveHidden = 2;

            AppleForm.storageAppleForm.setItem("saveHidden", AppleForm.saveHidden);

            AppleForm.apple4Index.style.display = "none";

        });

        if(AppleForm.storageAppleForm.getItem("saveHidden") == 2){

            AppleForm.apple4Index.style.display="none";
        }else{

            AppleForm.apple4Index.style.display="block";
        }

    },*/

    refresh: function(){

        if(AppleForm.storageAppleForm.length > 0){

            AppleForm.hidden = AppleForm.storageAppleForm.getItem("saveHidden");
        }
    },

    allHiddenApples: function(){

        AppleForm.hiddenApple1Index();
        AppleForm.hiddenApple2Index();
        AppleForm.hiddenApple3Index();
        AppleForm.hiddenApple4Index();
    }

    
}

AppleForm.init();