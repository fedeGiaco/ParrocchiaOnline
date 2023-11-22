function azioneAttributo(x){
    switch(x){
        case "DataNascita":
            document.getElementById("update").type = "date";
            break;
        default:
            document.getElementById("update").type = "text";
    }
}