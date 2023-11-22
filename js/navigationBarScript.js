function selezioneSi(id){
    var x = document.getElementById(id);
    x.style.cursor = "pointer";
    x.style.backgroundColor= 'white';
}
function selezioneNo(id) {
    var x = document.getElementById(id);
    x.style.backgroundColor= '#f6eedd';
}
function go(id) {
    switch (id) {
        case 'user':
        location.href = "./../php/userAdministration.php";
            break;
        // Caso Home
        case 'menu2x':
            location.href = "./../php/esplora.php";
            break;
        case 'menu3x':
            location.href = "./../php/chiesa.php";
            break;
        case 'menu4x':
            location.href = "./../php/letture.php";
            break;
        case 'menu5x':
            location.href = "./../php/stanze.php";
            break;
        case 'menu6x':
            location.href = "./../html/index.html";
            break;

        // Caso noHome
        case 'menuHome':
            location.href = "./../php/home.php";
            break;
        case 'menuEsplora':
            location.href = "./../php/esplora.php";
            break;
        case 'menuInsert':
            location.href = "./../php/insertContent.php";
            break;
        case 'menuChiesa':
            location.href = "./../php/chiesa.php";
            break;
        case 'menuLetture':
            location.href = "./../php/letture.php";
            break;
        case 'menuStanze':
            location.href = "./../php/stanze.php";
            break;
        case 'menuInfo':
            location.href = "./../html/index.html";
            break;
    }
}
