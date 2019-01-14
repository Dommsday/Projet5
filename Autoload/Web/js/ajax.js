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