function altezzaGioco(valore) {
    if(valore == 1)
        document.getElementById("GiocoBadia").style.marginTop = 170 + "px"; //Abbassa
    else if(valore == 0){
        document.getElementById("GiocoBadia").style.marginTop = 40 + "px"; //Normale
    }
}
function changeStyle(valore) {
    if(valore == 1){
        document.getElementsByClassName("listaMenu").className = "listaMenuSelezionata";
    }
}

var elem = document.getElementById('mydiv');
var attiva = false;

function set() {
    document.onkeydown = onKeyHandler;
    setInterval('checkDay()',100);
}

function onKeyHandler(e) {
    e = (!e) ? window.event : e; 			//Explorer -> !e
    var key = (e.which != null) ? e.which : e.keyCode;      //Firefox -> e.which
    switch (key){
        case 65: move(-5, 0); break;         // left
        case 87: move(0, -5); break;         // up
        case 68: move(5,  0); break;         // right
        case 83: move(0,  5); break;         // down
        }
}

function move(dx,dy) {
    //Controllo che si muova dentro l'immagine

    //Controllo SX
    if(parseInt(elem.style.left)==-135){
        if(dx>0)
            elem.style.left = parseInt(elem.style.left) + dx + "px";
        else
            elem.style.left = parseInt(elem.style.left) - dx + "px";
        elem.style.top  = parseInt(elem.style.top) + dy + "px";
        return;
    }

    //Controllo DX
    if(parseInt(elem.style.left)==1035){
        if(dx<0)
            elem.style.left = parseInt(elem.style.left) + dx + "px";
        else
            elem.style.left = parseInt(elem.style.left) - dx + "px";
        elem.style.top  = parseInt(elem.style.top) + dy + "px";
        return;
    }

    //Controllo SU
    if(parseInt(elem.style.top)==-255){
        if(dy<0)
            elem.style.top = parseInt(elem.style.top) - dy + "px";
        else
            elem.style.top = parseInt(elem.style.top) + dy + "px";
        elem.style.left = parseInt(elem.style.left) + dx + "px";
        return;
    }

    //Controllo GIU
    if(parseInt(elem.style.top)==280){
        if(dy>0)
            elem.style.top = parseInt(elem.style.top) - dy + "px";
        else
            elem.style.top = parseInt(elem.style.top) + dy + "px";
        elem.style.left = parseInt(elem.style.left) + dx + "px";
        return;
    }

    elem.style.left = parseInt(elem.style.left) + dx + "px";
    elem.style.top  = parseInt(elem.style.top) + dy + "px";
    check(parseInt(elem.style.left),parseInt(elem.style.top));
}

function check(dx,dy) {

    var tempo = document.getElementById("tImg").value;

    if(attiva)
        return;

    var infoBox = document.createElement("div");
    var count = 0;

    if(((dx > 70)&&(dx < 80)) &&  ((dy > 65)&&(dy < 75))){
        attiva = true;
        var textInfo = document.createTextNode("Area verde");
        var imgInfo = new Image(640,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/Verde.jpeg";
        imgInfo.alt = "imgGiocoVerde";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "info";
        infoBox.id = "infoBox-Verde";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-Verde");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }

    if(((dx > 55)&&(dx < 65)) &&  ((dy > -220)&&(dy < -210))){
        attiva = true;
        var textInfo = document.createTextNode("Stanza parrocchiale");
        var imgInfo = new Image(640,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/StanzaNuova.JPG";
        imgInfo.alt = "imgGiocoStanzaNuova";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "info";
        infoBox.id = "infoBox-StanzaNuova";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-StanzaNuova");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
    if(((dx > 220)&&(dx < 230)) &&  ((dy > -95)&&(dy < -85))){
        attiva = true;
        var textInfo = document.createTextNode("Area giochi");
        var imgInfo = new Image(640,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/Giochini.jpeg";
        imgInfo.alt = "imgGiocoGiochini";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "info";
        infoBox.id = "infoBox-Giochini";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-Giochini");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
    if(((dx > 270)&&(dx < 280)) &&  ((dy > -95)&&(dy < -85))){
        attiva = true;
        var textInfo = document.createTextNode("Accesso alla chiesa");
        var imgInfo = new Image(320,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/Scale.jpeg";
        imgInfo.alt = "imgGiocoScale";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "infoVer";
        infoBox.id = "infoBox-Scale";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-Scale");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
    if(((dx > 360)&&(dx < 370)) &&  ((dy > -95)&&(dy < -85))){
        attiva = true;
        var textInfo = document.createTextNode("Chiesa");
        var imgInfo = new Image(320,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/Chiesa.jpeg";
        imgInfo.alt = "imgGiocoChiesa";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "infoVer";
        infoBox.id = "infoBox-Chiesa";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-Chiesa");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
    if(((dx > 270)&&(dx < 280)) &&  ((dy > -205)&&(dy < -195))){
        attiva = true;
        var textInfo = document.createTextNode("Stanza parrocchiale (comprende 2 stanze)");
        var imgInfo = new Image(640,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/StanzaVecchia.jpeg";
        imgInfo.alt = "imgGiocoStanzaVecchia";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "info";
        infoBox.id = "infoBox-StanzaVecchia";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-StanzaVecchia");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
    if(((dx > 910)&&(dx < 920)) &&  ((dy > 235)&&(dy < 245))){
        attiva = true;
        var textInfo = document.createTextNode("Campino - Vista strada");
        var imgInfo = new Image(640,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/CampinoStrada.jpeg";
        imgInfo.alt = "imgGiocoCampinoStrada";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "info";
        infoBox.id = "infoBox-CampinoStrada";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-CampinoStrada");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
    if(((dx > 965)&&(dx < 975)) &&  ((dy > -200)&&(dy < -190))){
        attiva = true;
        var textInfo = document.createTextNode("Campino - Vista dal fondo");
        var imgInfo = new Image(640,480);
        imgInfo.src = "./../css/Immagini/Gioco/Luoghi/CampinoFondo.jpeg";
        imgInfo.alt = "imgGiocoCampinoFondo";
        imgInfo.className = "imgDiv";
        infoBox.appendChild(textInfo);
        infoBox.appendChild(imgInfo);
        infoBox.className = "info";
        infoBox.id = "infoBox-CampinoFondo";
        var myTimer = setInterval(function () {
            document.getElementById("GiocoBadia").appendChild(infoBox);
            count++;
            if (count==tempo*10){
                clearInterval(myTimer);
                var box = document.getElementById("infoBox-CampinoFondo");
                box.parentNode.removeChild(box);
                attiva = false;
            }
        },100);
    }
}