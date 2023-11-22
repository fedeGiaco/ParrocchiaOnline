function adjustNumber(n) {
    switch (n) {
        case 0: n = "00"
            break;
        case 1: n = "01"
            break;
        case 2: n = "02"
            break;
        case 3: n = "03"
            break;
        case 4: n = "04"
            break;
        case 5: n = "05"
            break;
        case 6: n = "06"
            break;
        case 7: n = "07"
            break;
        case 8: n = "08"
            break;
        case 9: n = "09"
            break;
    }
    return n;
}

function checkDay() {
    var Data = document.getElementById("Data");

    var x = new Date();
    var nGiorno = x.getDay();
    var nMese = x.getMonth();

    var Ore = x.getHours();
    var Minuti = x.getMinutes();
    var Secondi = x.getSeconds();

    var Giorno;
    var Mese;
    var giornoMese = x.getDate();
    var Anno = x.getFullYear();

    switch (nGiorno) {
        case 0: Giorno = "Domenica"
            break;
        case 1: Giorno = "Lunedì"
            break;
        case 2: Giorno = "Martedì"
            break;
        case 3: Giorno = "Mercoledì"
            break;
        case 4: Giorno = "Giovedì"
            break;
        case 5: Giorno = "Venerdì"
            break;
        case 6: Giorno = "Sabato"
            break;
        default: Giorno = "Giorno";
    }

    switch (nMese) {
        case 0: Mese = "Gennaio"
            break;
        case 1: Mese = "Febbraio"
            break;
        case 2: Mese = "Marzo"
            break;
        case 3: Mese = "Aprile"
            break;
        case 4: Mese = "Maggio"
            break;
        case 5: Mese = "Giugno"
            break;
        case 6: Mese = "Luglio"
            break;
        case 7: Mese = "Agosto"
            break;
        case 8: Mese = "Settembre"
            break;
        case 9: Mese = "Ottobre"
            break;
        case 10: Mese = "Novembre"
            break;
        case 11: Mese = "Dicembre"
            break;
        default: Mese= "Mese";
    }

    Secondi = adjustNumber(Secondi);
    Minuti = adjustNumber(Minuti);
    Ore = adjustNumber(Ore);

    Data.textContent = Giorno + " " + giornoMese + " " + Mese + " " + Anno + " - " +  Ore + ":" + Minuti;
}
function modScelta(scelta){
    if(scelta=="titolo")
        document.getElementById("search").placeholder = "Inserisci una parte di un titolo";
    if(scelta=="testo")
        document.getElementById("search").placeholder = "Inserisci una parte di un testo";
}
function showResult(str) {
    if (str.length==0) {
        document.getElementById("search").value ="";
        document.getElementById("risultatiRicerca").hidden = true;
        document.getElementById("stop").hidden = true;
        document.getElementById("main").hidden = false;
        return;
    }
    document.getElementById("stop").hidden = false;
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("risultatiRicerca").innerHTML=this.responseText;
        document.getElementById("main").hidden = true;
        document.getElementById("risultatiRicerca").hidden = false;
      }
    }
    xmlhttp.open("GET","searchGo.php?q="+str,true);
    xmlhttp.send();
}
function evidenzia(idInteressato,scelta){
    var linkInteressato = document.getElementById(idInteressato);
    if(scelta==1){
        linkInteressato.style.color = "red";
    }
    else
        linkInteressato.style.color = "black";
}