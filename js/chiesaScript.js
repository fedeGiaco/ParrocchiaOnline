var chiesaCreata = 0;
function load(){
    var x = setInterval("checkDay()",500);
    document.getElementById("container").style.height = "820px";
}
function createPanche(){
    document.getElementById("divPanca").hidden = false;
    for(var i=1;i<=2;i++){
        for(var j=1;j<=12;j++){
        var panca = document.createElement("div");
        if(i==1)
            panca.setAttribute("class","pancaStyle");
        else
            panca.setAttribute("class","pancaStyle2");
        panca.id = "panca"+i+j;
        panca.onmouseover = evidenziaPanca;
        panca.onmouseleave = NevidenziaPanca;
        document.getElementById("panche").appendChild(panca);
        }
    }
    for(var i=1;i<=6;i++){
        var elemento = document.createElement("div");
    elemento.setAttribute("class","noPanca");
        elemento.id = "elem"+i;
        elemento.onmouseover = evidenziaElem;
        elemento.onmouseleave = NevidenziaElem;
        document.getElementById("panche").appendChild(elemento);
    }

}
function evidenziaPanca(){
    this.style.backgroundColor = "black";
    var pancaImg = document.getElementById("divPanca");
    switch(this.id){
        case "panca11":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-1.jpeg";
            break;
        case "panca12":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-2.jpeg";
            break;
        case "panca13":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-3.jpeg";
            break;
        case "panca14":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-4.jpeg";
            break;
        case "panca15":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-5.jpeg";
            break;
        case "panca16":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-6.jpeg";
            break;
        case "panca17":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-7.jpeg";
            break;
        case "panca18":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-8.jpeg";
            break;
        case "panca19":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-9.jpeg";
            break;
        case "panca110":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-10.jpeg";
            break;
        case "panca111":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-11.jpeg";
            break;
        case "panca112":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/1-12.jpeg";
            break;
        case "panca21":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-1.jpeg";
            break;
        case "panca22":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-2.jpeg";
            break;
        case "panca23":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-3.jpeg";
            break;
        case "panca24":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-4.jpeg";
            break;
        case "panca25":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-5.jpeg";
            break;
        case "panca26":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-6.jpeg";
            break;
        case "panca27":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-7.jpeg";
            break;
        case "panca28":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-8.jpeg";
            break;
        case "panca29":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-9.jpeg";
            break;
        case "panca210":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-10.jpeg";
            break;
        case "panca211":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-11.jpeg";
            break;
        case "panca212":
            pancaImg.src = "./../css/Immagini/Chiesa/Panche/2-12.jpeg";
            break;
        case "altare":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/Altare.jpeg";
            break;        
    }
}
function NevidenziaPanca(){
    this.style.backgroundColor = "rgba(0,0,0,0)";
    this.style.width = "10px";
}
function evidenziaElem(){
    this.style.backgroundColor = "black";
    var pancaImg = document.getElementById("divPanca");
    switch(this.id){
        case "elem1":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/Altare.jpeg";
            break;   
        case "elem2":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/AltareBasso.jpeg";
            break; 
        case "elem3":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/Corridoio.jpeg";
            break;  
        case "elem4":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/Prete.jpeg";
            break;  
        case "elem5":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/Coro.jpeg";
            break; 
        case "elem6":
            pancaImg.src = "./../css/Immagini/Chiesa/Elementi/Fondo.jpeg";
            break;        
    }
}
function NevidenziaElem(){
    this.style.backgroundColor = "rgba(0,0,0,0)";
    this.style.width = "20px";
}
function createChiesa(){
    if (chiesaCreata == 1)
        return;
    chiesaCreata = 1;
    createPanche();
    var chiesa = document.createElement("img");
    chiesa.src = "./../css/Immagini/Chiesa/Chiesa.png";
    chiesa.alt="imgChiesa";
    chiesa.id = "Chiesa";
    document.getElementById("chiesa").appendChild(chiesa);
    document.getElementById("container").style.height = "1250px";
}