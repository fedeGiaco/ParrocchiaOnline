function zoomIn(x){
    switch (x){
        case "piuLettura":
            var testoInteressato = document.getElementById('testoLettura');
            var divInteressato = document.getElementById('Lettura');
            var fontInteressato = document.getElementById('dimFontLettura');
            break;
        case "piuVangelo":
            var testoInteressato = document.getElementById('testoVangelo');
            var divInteressato = document.getElementById('Vangelo');
            var fontInteressato = document.getElementById('dimFontVangelo');
            break;
    }
    var style = window.getComputedStyle(testoInteressato, null).getPropertyValue('font-size');
    var fontSize = parseFloat(style); 

    var styleDiv = window.getComputedStyle(testoInteressato, null).getPropertyValue('height');
    var heightDiv = parseFloat(styleDiv); 

    if(fontSize <= 24){
        divInteressato.style.height = (heightDiv + 20) + 'px';
    }
    if(fontSize==28)
        return;
    fontInteressato.textContent = "Dimensione carattere: "+(fontSize+1);
    testoInteressato.style.fontSize = (fontSize + 1) + 'px';
}

function zoomOut(x){
    
    switch (x){
        case "menoLettura":
            var testoInteressato = document.getElementById('testoLettura');
            var divInteressato = document.getElementById('Lettura');
            var fontInteressato = document.getElementById('dimFontLettura');
            break;
        case "menoVangelo":
            var testoInteressato = document.getElementById('testoVangelo');
            var divInteressato = document.getElementById('Vangelo');
            var fontInteressato = document.getElementById('dimFontVangelo');
            break;
    }
    var style = window.getComputedStyle(testoInteressato, null).getPropertyValue('font-size');
    var fontSize = parseFloat(style); 
    var styleDiv = window.getComputedStyle(testoInteressato, null).getPropertyValue('height');
    var heightDiv = parseFloat(styleDiv); 
    if(fontSize > 16 && fontSize <= 24){
        divInteressato.style.height = (heightDiv - 10) + 'px';
    }
    if(fontSize==14)
        return;
    fontInteressato.textContent = "Dimensione carattere: "+(fontSize-1);
    testoInteressato.style.fontSize = (fontSize - 1) + 'px';
}