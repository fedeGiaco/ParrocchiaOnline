function verificaPassword(){
    var passIns = document.modulo.pass.value;
    var passReIns = document.modulo.verpass.value;
    if(passIns != passReIns){
        alert("Le password non coindidono!");
        document.modulo.verpass.value = "";
        document.modulo.verpass.focus();
    }
}

function begin(){
    document.getElementById('cat2').disabled = true;
    document.getElementById('cat3').disabled = true;
    document.getElementById('cat4').disabled = true;
    document.getElementById('cat5').disabled = true;
    document.getElementById('catS1').disabled = true;
    document.getElementById('catS2').disabled = true;
    document.getElementById('ora').disabled = true;
    document.getElementById('medie').disabled = true;
    document.getElementById('gre').disabled = true;
    document.getElementById('giovanis').disabled = true;

    document.getElementById('XTcat').disabled = true;
    document.getElementById('XTora').disabled = true;
    document.getElementById('XTgiovanis').disabled = true;
    document.getElementById('XTgre').disabled = true;
    document.getElementById('XTgio').disabled = true;
    document.getElementById('XTfam').disabled = true;
    document.getElementById('XTcor').disabled = true;
    document.getElementById('XTextAlt').disabled = true;
    document.getElementById('XTalt').disabled = true;

    document.getElementById('XScat').disabled = true;
    document.getElementById('XSora').disabled = true;
    document.getElementById('XSgiovanis').disabled = true;
    document.getElementById('XSgre').disabled = true;
    document.getElementById('XSalt').disabled = true;
}

function check(id,idS){
    obj = document.getElementById(id);
    if (obj.checked)
        document.getElementById(idS).disabled = false;
    else
        document.getElementById(idS).disabled = true;
 }

function check3(id,idT,idS){
    obj = document.getElementById(id);
    if (obj.checked) {
        document.getElementById(idT).disabled = false;
        document.getElementById(idS).disabled = false;
    }
    else {
        document.getElementById(idT).disabled = true;
        document.getElementById(idS).disabled = true;
    }
}

function check4(id,idT,idText,idS){
    obj = document.getElementById(id);
    if (obj.checked) {
        document.getElementById(idT).disabled = false;
        document.getElementById(idText).disabled = false;
        document.getElementById(idS).disabled = false;
    }
    else {
        document.getElementById(idT).disabled = true;
        document.getElementById(idText).disabled = true;
        document.getElementById(idS).disabled = true;
    }
}