<?php session_start();

//Si on n'a pas encore de langue choisie (On arrive sur le site)
if (!$_SESSION['langue']){
    
    //On va récupérer la langue du navigateur pour choisir la langue a afficher
    $langue = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    
    if($langue == 'en'){
        $_SESSION['langue'] = "en";
    }
    elseif($langue == 'fr') {
        $_SESSION['langue'] = "fr";
    }
    elseif($langue == 'es') {
        $_SESSION['langue'] = "es";
    }
    //Par defaut en anglais
    else{
        $_SESSION['langue'] = "en";
    }
}

include "connexion.php";

?>
<!DOCTYPE html>

<html id="MonHTML">
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Blas Cruising</title>
    <link rel="stylesheet" media="screen" type="text/css" href="cssSanBlas.css" />
    <link rel="shortcut icon" href="Images/Palmier.png"/>
    <link rel="apple-touch-icon" href="Images/Palmier.png"/>
</head>
    <body>
        
        <div id="Div_Global">
            
            <div id="Div_Baniere">

                
                <div id="Div_Top_Baniere_Responsive">
                    <div id="Div_Home">
                            <a href="index.php">
                                <img id="IMG_Home_Responsive_Blanc" src="Images/home.png" height="15px"/>
                                <img id="IMG_Home_Responsive_Dore" src="Images/homeDore.png" height="15px"/>
                            </a>
                    </div>
                    <div id="Div_Entre_Home_Langues">
                        
                    </div>
                    <div id="Div_Langues">
                        <?php
                        if($_SESSION['langue'] != 'en'){
                        ?>
                            <div>
                                <a href="ChangementLangueEN.php">
                                    <img src="Images/en.png" height="15px"/>
                                </a>
                            </div>
                        <?php
                        }
                        if($_SESSION['langue'] != 'fr'){
                        ?>
                        <div>
                            <a href="ChangementLangueFR.php">
                                <img src="Images/fr.png" height=15px"/>
                            </a>
                        </div>
                        <?php
                        }
                        if($_SESSION['langue'] != 'es'){
                        ?>
                        <div>
                            <a href="ChangementLangueES.php">
                                <img src="Images/es.png" height="15px"/>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                
                
                
                <div id="Div_Gauche_Baniere">
                    <div id="Div_Home">
                            <a href="index.php">
                                <img id="IMG_Home" src="Images/home.png" height="40px"/>
                            </a> 
                    </div>
                </div>
                
                <div id="Div_Centre_Baniere">

                    <div id="Div_Bouttons">
                        
                        <?php 
                        switch ($_SESSION['langue']) {
                        case 'en':
                            ?>
                        <div class="boutton">
                                <a class="A_boutton" href="Equipage.php">
                                    <div class="boutton_enfant"><p>Who are we?</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Bateau.php">
                                    <div class="boutton_enfant"><p>The boat: Thera</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Programme.php">
                                    <div class="boutton_enfant"><p>Programme</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Infos.php">
                                    <div class="boutton_enfant"><p>useful information</p></div>
                                </a>
                            </div>
                                                    <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Photos.php">
                                    <div class="boutton_enfant"><p>Pictures</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Calendrier.php">
                                    <div class="boutton_enfant"><p>Prices & Availabilities</p></div>
                                </a>
                            </div>
                            <?php
                            break;
                        case 'fr':
                            ?>
                            <div class="boutton">
                                <a class="A_boutton" href="Equipage.php">
                                    <div class="boutton_enfant"><p>Qui sommes nous?</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Bateau.php">
                                    <div class="boutton_enfant"><p>Le bateau: Thera</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Programme.php">
                                    <div class="boutton_enfant"><p>Programme</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Infos.php">
                                    <div class="boutton_enfant"><p>Infos pratiques</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Photos.php">
                                    <div class="boutton_enfant"><p>Photos</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Calendrier.php">
                                    <div class="boutton_enfant"><p>Tarifs & Disponibilités</p></div>
                                </a>
                            </div>
                            <?php
                            break;
                        case 'es':
                            ?>
                            <div class="boutton">
                                <a class="A_boutton" href="Equipage.php">
                                    <div class="boutton_enfant"><p>¿Quién somos?</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Bateau.php">
                                    <div class="boutton_enfant"><p>El barco: Thera</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Programme.php">
                                    <div class="boutton_enfant"><p>Programa</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Infos.php">
                                    <div class="boutton_enfant"><p>informaciones prácticas</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Photos.php">
                                    <div class="boutton_enfant"><p>Fotos</p></div>
                                </a>
                            </div>
                            <div class="Div_Separation">
                                <p></p>
                            </div>
                            <div class="boutton">
                                <a class="A_boutton" href="Calendrier.php">
                                    <div class="boutton_enfant"><p>Precios & Disponibilidades</p></div>
                                </a>
                            </div>
                            <?php
                            break;
                        }?>
                    </div>
                    
                    
                </div>
                
                <div id="Div_Droite_Baniere">
                    
                    <div id="Div_Langues">
                        <?php
                        if($_SESSION['langue'] != 'en'){
                        ?>
                            <div>
                                <a href="ChangementLangueEN.php">
                                    <img src="Images/en.png" height="30px"/>
                                </a>
                            </div>
                        <?php
                        }
                        if($_SESSION['langue'] != 'fr'){
                        ?>
                        <div>
                            <a href="ChangementLangueFR.php">
                                <img src="Images/fr.png" height="30px"/>
                            </a>
                        </div>
                        <?php
                        }
                        if($_SESSION['langue'] != 'es'){
                        ?>
                        <div>
                            <a href="ChangementLangueES.php">
                                <img src="Images/es.png" height="30px"/>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

            </div>   
            
            <!-- Ce div est une bidouille ajoutee pour permettre de recuperer les 10% d'espace en haut perdu par la baniere a cause de sa position fixed -->
            <div id="Div_Baniere_2">
            </div>
            
            <script src="js/baniere.js"></script>