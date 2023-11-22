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
        case 'menu1':
            location.href = "./../home.php";
            break;
        case 'menu2':
            location.href = "./../insertContent.php";
            break;
        case 'menu3':
            location.href = "./../../html/index.html";
            break;
    }
}
