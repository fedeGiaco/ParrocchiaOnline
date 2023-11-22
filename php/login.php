<?php

require_once "./gestioneDB/DBmanager.php";
require_once "./gestioneDB/sessionUtil.php";

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $entra = login($user, $pass);


    if ($entra === null)
        header('location: ./home.php');
    else
        header('location: ./../index.php?errorMessage=' . $entra);

    function login($user, $pass)
    {
		if ($user != null && $pass == null){
			return "Male";
		}
        if ($user != null && $pass != null) {
            $userId = autentica($user, $pass);
            if ($userId > 0) {
                session_start();
                setSession($user);
                return null;
            }
        }
        else{
            session_start();
            setSession("Ospite");
            return null;
        }
        return "Male";
    }

    function autentica($user, $pass)
    {
        global $UserDb;
        $user = $UserDb->sqlInjectionFilter($user);
        $pass = md5($UserDb->sqlInjectionFilter($pass));

        $queryText = "select * from Utente where Username='" . $user . "' AND Password='" . $pass . "'";

        $result = $UserDb->performQuery($queryText);
        $numRow = mysqli_num_rows($result);
        if ($numRow != 1)
            return -1;

        $UserDb->closeConnection();
        $userRow = $result->fetch_assoc();
        return 1;
    }