<?php
//setSession: set $_SESSION properly
function setSession($user){
    $_SESSION['user'] = $user;
}

//isLogged: check if user has logged in and if true returns the user id
function isLogged(){
    if(isset($_SESSION['user']))
        return $_SESSION['user'];
    else
        return false;
}

function aggiustaNomi(&$gruppo){
    switch($gruppo){
        
        case "GruppoMedie":
            $gruppo = "Gruppo Medie";
        break;
        case "GruppoGiovanissimi":
            $gruppo = "Gruppo Giovanissimi";
        break;
        case "GruppoGiovani":
            $gruppo = "Gruppo Giovani";
        break;
        case "GruppoGREST":
            $gruppo = "Gruppo GREST";
        break;
        case "GruppoPresepeVivente":
            $gruppo = "Gruppo Presepe vivente";
        break;


        case "Oratorio(nonAttuale)":
            $gruppo = "Oratorio (non attuale)";
        break;
        case "GruppoGiovanissimi(nonAttuale)":
            $gruppo = "Gruppo Giovanissimi (non attuale)";
        break;
        case "GruppoGREST(nonAttuale)":
            $gruppo = "Gruppo GREST (non attuale)";
        break;
        case "GruppoGiovani(nonAttuale)":
            $gruppo = "Gruppo Giovani (non attuale)";
        break;
        case "GruppoFamiglia":
            $gruppo = "Gruppo Famiglia (non attuale)";
        break;
        case "GruppoCoro":
            $gruppo = "Gruppo Coro";  
        break;
    }

}

function aggiustaData(&$dataInteressata){
    $primo = explode(" ",$dataInteressata);
    $data0 = explode("-", $primo[0]);
    $dataInteressata = $data0[2]."/".$data0[1]."/".$data0[0];
}