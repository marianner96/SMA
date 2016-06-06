function getXhr(){
    var xhr = null ;
    if(window.XMLHttpRequest) // Firefox et autres
        xhr = new XMLHttpRequest() ;
    else if(window.ActiveXObject){ // Internet Explorer< 7
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP") ;
        } catch (e) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP") ;
        }
        }               
    else { // XMLHttpRequest non support´e par le navigateur
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...") ;
        xhr = false ;
    }
    return xhr ;
}

function lancer () {
	xhr = getXhr();
    nbagents = document.forms.val.nbagents.value;
    nbobjets = document.forms.val.nbobjets.value;
    nbevo = document.forms.val.nbevo.value;
    xhr.onreadystatechange = function () {
        if (xhr.readyState ==4 && xhr.status == 200) {
            document.getElementById("graphique").innerHTML = xhr.responseText;
        };
    }
    xhr.open("GET", "faisgraphique.php?nbagents=" + nbagents + "&nbobjets=" + nbobjets + "&nbevo=" + nbevo, true);
    xhr.send();
}