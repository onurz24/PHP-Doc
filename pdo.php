<?php
/* Datenbank Informationen */
$server = "mysql:host=localhost;dbname=pdodb";
$user = "root"; /*Lokal Standartmässig Root für alle Berechtigungen*/
$pw = null; /*Lokal Standartmässig kein Passwort*/

/* TRY CATCH Block um mögliche Fehlermeldungen Abzufangen */
try {
    /*
        Neue Instanz der Klasse PDO
        Datenbanktyp, Server, Datenbankname , User , Passwort 
        als Parameter dem Konstruktor übergeben
    */
    $verbindung = new PDO($server,$user,$pw);


    /* 
    Prepared Statement
    1.  Wir bereiten ein SQL Statement vor in einer Variable,
        Namens $abfrage. ZB um Daten auszulesen.
    */
    $abfrage = "SELECT * FROM pdotable";
    /*   
     2. übergeben es einer Methode der Klasse PDO.
    */
    $abfrage = $verbindung -> prepare($abfrage);
    /*
    3. Wir führen es aus und schicken es an die Datenbank.
    */
    $abfrage -> execute();
    /*
    4. Danach können wir die $abfrage in einer Foreach
     schleife durchiterieren.Wie bei einer $_POST über 
     eckige klammern die Datenbankzeilen Ansprechen
     */
    foreach ($abfrage as $i){
        echo $i["username"] . "<br/>";
    }
} catch (PDOException $e) {
    echo "Fehler " . $e -> getMessage();
/*
  PDO EXCEPTION ist eine Methode der Klasse PDO 
 und hat eine untermethode -> getMessage() 
 um den Fehler auszugeben wenn der Code in den Catch block geht
*/
}
