
function checkOrario() {
    var inizio = document.getElementById("oraI").value;
    var fine = document.getElementById("oraF").value;
    if(fine < inizio){
        alert("L'evento non può terminare ancora prima di essere iniziato!");
    }
    if(inizio==fine){
        alert("Il tempo minimo di prenotazione è di 2 ore! Seleziona almeno l'ora seguente");
    }
}