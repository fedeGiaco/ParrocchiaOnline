
Salve, sono Federico Giacomelli, matricola 578106. 

Il manuale utente richiesto da specifica � reperibile nella cartella HTML 
sotto il nome di "index.html" ed � inoltre accessibile dal sito dall'icona "i".

In questo file inserisco alcune specifiche tecniche per una migliore comprensione.

-------------------------------------------------------------------------------------------------------

GESTIONE DATABASE

Ho creato 2 file .sql nella cartella DB per la creazione del 
database,tabelle e dati come visto al corso "Basi di dati".

Il primo crea i 2 database (giacomelli_utenti,giacomelli_calendario) con annesse tabelle.
Il secondo le popola.


Ho comunque creato i 2 file dei singoli DB tramite "Esporta DB" che si chiamano:
 - giacomelli_utenti.sql :DB,tabelle popolate
 - giacomelli_calendario.sql :DB,tabella popolate

-------------------------------------------------------------------------------------------------------

UTENTI GIA' A DISPOSIZIONE: 3

1. Username: fedeGiaco, Password: badia
2. Username: marioRossi, Password: mario
3. Username: pippo, Password: pippo

1. fedeGiaco pu� fare tutto quello che si pu� fare, in particolare:
 - pu� accedere alle sezioni "Gruppo medie" e "Gruppo giovani"
 - aggiungere del contenuto a "Tutti", "Solo badiesi" o ai singoli gruppi cui appertiene
 - vedere i post di rivolti a "Tutti", "Solo badiesi" e nei signoli gruppi

2. marioRossi fa esattamente le stesse cose, salvo che appartiene solo al "Gruppo giovani"

3. pippo:
 - accede esclusivamente alla sezione "Gruppo medie"
 - NON pu� aggiungere contenuto
 - pu� vedere il contenuto di "Tutti", "Solo badiesi" o "Gruppo medie"

La gestione dell'OSPITE � stata cos� gestita:
 - accede senza credenziali
 - NON pu� aggiungere contenuto
 - NON pu� accedere a nessun gruppo in quanto non ne � partecipe
 - pu� vedere esclusivamente i post rivolti a "Tutti"

-------------------------------------------------------------------------------------------------------

GESTIONE CARIMENTO FILE

Per limitazione del server, non � possibile caricare file pi� grandi di 900kb in un post.
Se sfora, non solo non lo/li carica, ma non carica neanche il post.

-------------------------------------------------------------------------------------------------------

