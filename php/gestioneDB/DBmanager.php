<?php

$dbHostname = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "GIACOMELLI_Utenti";
$UserDb = new UserDbManager();
$CalendarioDB = new CalendarioDBManager();

class UserDbManager{
    private $mysqli_conn = null;

    function UserDbManager(){
        $this->openConnection();
    }


    function openConnection(){
        if(!$this->isOpened()){
            global $dbHostname;
            global $dbUsername;
            global $dbPassword;
            global $dbName;
            $this->mysqli_conn = new mysqli($dbHostname,$dbUsername,$dbPassword);
            if($this->mysqli_conn->connect_error)
                die('Errore di connessione ('.$this->mysqli_conn->connect_errno.')'.$this->mysqli_conn->connect_error);
            $this->mysqli_conn->select_db($dbName);
        }
    }

    function isOpened(){
        return ($this->mysqli_conn != null);
    }

    function performQuery($queryText){
        if(!$this->isOpened())
            $this->openConnection();
        return $this->mysqli_conn->query($queryText);
    }

    function sqlInjectionFilter($parameter){
        if(!$this->isOpened())
            $this->openConnection();
        return $this->mysqli_conn->real_escape_string($parameter);
    }

    function closeConnection(){
        if($this->mysqli_conn !== null)
            $this->mysqli_conn->close();
        $this->mysqli_conn = null;
    }
}
class CalendarioDBManager{
    private $mysqli_conn = null;

    function UserDbManager(){
        $this->openConnection();
    }


    function openConnection(){
        if(!$this->isOpened()){
            global $dbHostname;
            global $dbUsername;
            global $dbPassword;
            global $dbName;
            $dbName = "GIACOMELLI_Calendario";
            $this->mysqli_conn = new mysqli($dbHostname,$dbUsername,$dbPassword);
            if($this->mysqli_conn->connect_error)
                die('Errore di connessione ('.$this->mysqli_conn->connect_errno.')'.$this->mysqli_conn->connect_error);
            $this->mysqli_conn->select_db($dbName);
        }
    }

    function isOpened(){
        return ($this->mysqli_conn != null);
    }

    function performQuery($queryText){
        if(!$this->isOpened())
            $this->openConnection();
        return $this->mysqli_conn->query($queryText);
    }

    function sqlInjectionFilter($parameter){
        if(!$this->isOpened())
            $this->openConnection();
        return $this->mysqli_conn->real_escape_string($parameter);
    }

    function closeConnection(){
        if($this->mysqli_conn !== null)
            $this->mysqli_conn->close();
        $this->mysqli_conn = null;
    }
}