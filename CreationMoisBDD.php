<?php

$hote = "p05.evxonline.net";
$nomBase = 'calendriersanblas';
$user = 'calendrierSB';
$passe = 'C74@wqo0';



/*
$hote = "127.0.0.1";
$nomBase = 'calendriersanblas';
$user = 'root';
$passe = '';
*/

//$timestamp = mktime(0, 0, 0, 9, 6, 2022); //Donne le timestamp correspondant à cette date
//echo date('D', $timestamp); //3 premieres lettre jour
//echo date('N', $timestamp); //1 pour Lundi, 2 mardi...



try
{
    $bdd = new PDO("mysql:host=$hote;dbname=$nomBase;charset=utf8", $user, $passe);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}




for($i=1; $i<=31; $i++){
    


    $timestamp = mktime(0, 0, 0, 7, $i, 2023); //Donne le timestamp correspondant à cette date
    $jour = date('N', $timestamp); //1 pour Lundi, 2 mardi...
    
    /*
    switch ($jour) {
        case '1':
            $jour = 'Lundi';
            break;
        case '2':
            $jour = 'Mardi';
            break;
        case '3':
            $jour = 'Mercredi';
            break;
        case '4':
            $jour = 'Jeudi';
            break;
        case '5':
            $jour = 'Vendredi';
            break;
        case '6':
            $jour = 'Samedi';
            break;
        case '7':
            $jour = 'Dimanche';
            break;
    }
    //echo 'le ' . $i . ' le jour est: ' . $jour;
    //echo "<br>";
    */
 
    
    $sqlQueryTags = 'INSERT INTO july (jour, jourSemaine) VALUES (:jour, :jourSemaine)';

    // Préparation
    $insertTags = $bdd->prepare($sqlQueryTags);

    // Exécution
    $insertTags->execute([
        'jour' => $i,
        'jourSemaine' => $jour
    ]);
    
}