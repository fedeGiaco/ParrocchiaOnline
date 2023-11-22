function ins(n) {
    if(n == 0)
        document.getElementById("imgImg").hidden = false;
    else
        document.getElementById("imgImg").hidden = true;
    if(document.getElementById("File1")) {
        document.getElementById("areaInput").remove();
        var newDiv = document.createElement("div");
        newDiv.id = "areaInput";
        document.getElementById("riquadro2").appendChild(newDiv);
    }
    for(i=1;i<=n;i++) {
        var x = document.createElement("INPUT");
        x.setAttribute("type", "file");
        x.id = "File"+i;
        x.className = "File";
        var posizione = document.getElementById("areaInput");
        posizione.appendChild(x);
    }
    for (i=1;i<=n;i++){
        document.getElementById("File"+i).setAttribute("name","File"+i);
    }
}
function abilitaGruppi(x) {
    var possibilita = [];
    for(var i=0;i<3;i++)
        possibilita[i] = document.getElementById("possibilita" + (i+1));
    if(x == "all" || x == "allB"){
        document.getElementById("allGroups").style.visibility = "hidden";
        document.getElementById("preGroups").style.marginTop = "50px";
        document.getElementById("imgGroup").hidden = false;
        for(var i=0;i<3;i++){
            possibilita[i].style.fontSize = "22px";
        }
    }
    else {
        document.getElementById("allGroups").style.visibility= "visible";
        document.getElementById("preGroups").style.marginTop = "50px";
        document.getElementById("imgGroup").hidden = true;
        for(var i=0;i<3;i++){
            possibilita[i].style.fontSize = "18px";
        }
    }
}