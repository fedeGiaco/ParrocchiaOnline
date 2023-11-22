/*Gestione DB e tabelle "Utenti"*/
SET NAMES latin1;
SET FOREIGN_KEY_CHECKS = 0;

BEGIN;
CREATE DATABASE IF NOT EXISTS `GIACOMELLI_Utenti`;
COMMIT;

USE GIACOMELLI_Utenti;

CREATE TABLE Utente(
	ID INT(255) NOT NULL AUTO_INCREMENT,
	Username VARCHAR(255) NOT NULL,
	Password VARCHAR(255) NOT NULL,
	Nome VARCHAR(50) NOT NULL,
	Cognome VARCHAR(50) NOT NULL,
	DataNascita DATE NOT NULL,
	Mail VARCHAR(50) NOT NULL,
	Sesso CHAR NOT NULL,
	Controllo TINYINT(1),
	Note VARCHAR(255),
	PRIMARY KEY(ID,Username)
) ENGINE="InnoDB";

CREATE TABLE Svolge(
	ID VARCHAR(255) NOT NULL,
	Gruppo VARCHAR(50),
	Ruolo VARCHAR(15),
	Anno INTEGER(4),
	PRIMARY KEY(ID,Gruppo)
) ENGINE="InnoDB";

CREATE TABLE Attivita(
	Nome VARCHAR(50) NOT NULL,
	Cod VARCHAR(15),
	PRIMARY KEY(Nome)
) ENGINE="InnoDB";

CREATE TABLE Stanze(
	ID INT(255) NOT NULL AUTO_INCREMENT,
	Stanza INT(1) NOT NULL,
	GiornoPeriodico INTEGER(2) NOT NULL,
	GiornoSpecifico INTEGER(2),
	MeseSpecifico INTEGER(2),
	AnnoSpecifico INTEGER(4),
	OrarioInizio INT(2) NOT NULL,
	OrarioFine INT(2) NOT NULL,
	Periodico TINYINT NOT NULL,
	Responsabile VARCHAR(255),
	Note VARCHAR(255),
	PRIMARY KEY(ID)
) ENGINE="InnoDB";

CREATE TABLE tabellaFile(
  	ID INT(255) NOT NULL AUTO_INCREMENT, 
	Nome VARCHAR(255) default NULL, 
	Tipo VARCHAR(128) default NULL, 
	Dati LONGBLOB, 
	Proprietario VARCHAR(255),
	Immissione TIMESTAMP,
	PRIMARY KEY (ID) 
);

CREATE TABLE PostUtenti(
  	ID INT(255) NOT NULL AUTO_INCREMENT,
  	Proprietario VARCHAR(255) NOT NULL,
  	Titolo VARCHAR(255) NOT NULL,
  	Testo VARCHAR(255),
  	Utenza VARCHAR(255) NOT NULL,
  	Immissione TIMESTAMP NOT NULL,
  	PRIMARY KEY(ID)
);

CREATE TABLE PostCommenti(
  	ID INT(255) NOT NULL AUTO_INCREMENT,
  	IDPost INT(255) NOT NULL,
  	Proprietario VARCHAR(255) NOT NULL,
  	Testo VARCHAR(255) NOT NULL,
  	Immissione TIMESTAMP NOT NULL,
  	PRIMARY KEY(ID)
);

BEGIN;
CREATE DATABASE IF NOT EXISTS `GIACOMELLI_Calendario`;
COMMIT;

USE GIACOMELLI_Calendario;

CREATE TABLE Santo(
	ID INT(255) NOT NULL AUTO_INCREMENT,
	Nome VARCHAR(255) NOT NULL,
	Giorno INT(2) NOT NULL,
	Mese INT(2) NOT NULL,
	PRIMARY KEY(ID)
) ENGINE="InnoDB";

CREATE TABLE Vangelo(
	ID INT(255) NOT NULL AUTO_INCREMENT,
	Testo TEXT NOT NULL,
	Evangelista VARCHAR(255) NOT NULL,
	Capitolo INT(2) NOT NULL,
	VersettoInizio INT(2) NOT NULL,
	VersettoFine INT(2) NOT NULL,
	Giorno INT(2) NOT NULL,
	Mese INT(2) NOT NULL,
	PRIMARY KEY(ID)
) ENGINE="InnoDB";

CREATE TABLE Lettura(
	ID INT(255) NOT NULL AUTO_INCREMENT,
	Libro VARCHAR(255) NOT NULL,
	Profeta VARCHAR(255) NOT NULL,
	Testo TEXT NOT NULL,
	Capitolo INT(2) NOT NULL,
	VersettoInizio INT(2) NOT NULL,
	VersettoFine INT(2) NOT NULL,
	Giorno INT(2) NOT NULL,
	Mese INT(2) NOT NULL,
	PRIMARY KEY(ID)
) ENGINE="InnoDB";