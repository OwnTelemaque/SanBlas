<?php

include "connexion.php";

$index = 0;

try
{
    $bdd = new PDO("mysql:host=$hote;dbname=$nomBase;charset=utf8", $user, $passe);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$reponse = "SELECT jour, mois, annee FROM september WHERE disponibilite = 0 OR disponibilite = 2
            UNION SELECT jour, mois, annee FROM october WHERE disponibilite = 0 OR disponibilite = 2
            UNION SELECT jour, mois, annee FROM november WHERE disponibilite = 0 OR disponibilite = 2
            UNION SELECT jour, mois, annee FROM december WHERE disponibilite = 0 OR disponibilite = 2
            UNION SELECT jour, mois, annee FROM january WHERE disponibilite = 0 OR disponibilite = 2
            UNION SELECT jour, mois, annee FROM february WHERE disponibilite = 0 OR disponibilite = 2
            UNION SELECT jour, mois, annee FROM march WHERE disponibilite = 0 OR disponibilite = 2";
        
$result = $bdd->prepare($reponse);
$result->execute();
$donnees = $result->fetchAll();

$Total = count($donnees);


echo '{ ';
        
foreach ($donnees as $donnees) {
    
    $index = $index+1;
    
    $mois = $donnees['mois'] - 1;
    
    echo '"retour' . $index . '": "' . $donnees['annee'] . $mois . $donnees['jour'] . '", ';  

}
   
echo '"NbEntrees": "' . $Total . '"';

echo '}';

?>