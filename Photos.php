<?php
include "Baniere.php";
?>

            <div id="Div_Contenu">
                <div id="Div_Gauche_Contenu">
                    <p>&nbsp</p>
                </div>

                <div id="Div_Centre_Contenu">
                    
                    <div class="Div_Texte_Contenu">
                        <p>
                            <br />
                            <br />
                        </p>
                        <?php
                        switch ($_SESSION['langue']) {
                            case 'en':
                            ?>
                                <p class="P_Titres_Contenu">We look forward to seeing you!</p>
                            <?php
                                break;
                            case 'fr':
                            ?>
                                <p class="P_Titres_Contenu">Nous vous attendons!</p>
                            <?php
                                break;
                            case 'es':
                            ?>
                                <p class="P_Titres_Contenu">¡Esperamos verle!</p>
                            <?php
                            break;
                        }
                        ?>
                        
                        <p>
                            <br />
                            <br />
                            <br />
                        </p>
                        
                        <div id="DivPrincipalCaroussel">
                            
                            <div id="DivGlobalOverlay">
                                <div id="overlay"></div>
                            
                                <div id="Commandes">
                                    <div id="Commandes_haut">
                                        <div id="Gauche"><div id="Chevron"><p><img src="Images/ChevronGauche.png" /></p></div></div>
                                        <div id="Centre"></div>
                                        <div id="Centre2"></div>
                                        <div id="Droite"><div id="Chevron"><p><img src="Images/ChevronDroite.png" /></p></div></div>
                                    </div>
                                    <div id="Commandes_bas"><div id="Retour"><p><img id="Icone_Retour" src="Images/retour.png" /></p></div></div>
                                </div>
                                
                            </div>
                            
                            <div id="CadrePhotosMiniatures">
                               
                                <div id="DivAlbum">
                                    <?php
                                    
                                    //Je mets dans un tableau le nom de fichier de toutes les photos du répertoire miniature
                                    $Tab_Nom_Photos = [];
                                    foreach (glob("Photos/Galerie/Miniatures/*.jpg") as $filename) {
                                        //Comme la fonction glob recupère le chemin complet pour le nom, je vire les 26 premiers caractères pour sortir que le nom de fichier.jpg
                                        $filename = substr($filename, 26);
                                        array_push($Tab_Nom_Photos, $filename);
                                    }
                                   
                                    foreach ($Tab_Nom_Photos as $index){
                                        $image = imagecreatefromjpeg('Photos/Galerie/Miniatures/' . $index);
                                        $largeur_image = imagesx($image);
                                        $hauteur_image = imagesy($image);
                                        $ratio = $largeur_image/$hauteur_image;         //je préfere travailler sur le ratio plutot que la taille en dur au cas ou j'ai une taille un peu tronquée un jour (pb de calcul ou autre)
                                        //Selon que l'image a une largeur plus ou moins grande que la hauteur, je vais choisir un css different pour l'affichage de la miiature (donc créer un id différent)
                                        if($ratio <= 1) //si le ration est égal à un (meme taille de H et L, cela ne fait pas de grande difference entre un css ou l'autre)
                                        {?>
                                            <a id="LiensPhotos" href="Photos/Galerie/Miniatures/<?php echo $index;?>" title="Afficher l'image originale"><div id="PetitDivDeLimageL" style="background-image: url(Photos/Galerie/Miniatures/<?php echo $index;?>)"></div></a>
                                        <?php
                                        }
                                        else
                                        {?>
                                            <a id="LiensPhotos" href="Photos/Galerie/Miniatures/<?php echo $index;?>" title="Afficher l'image originale"><div id="PetitDivDeLimageH" style="background-image: url(Photos/Galerie/Miniatures/<?php echo $index;?>)"></div></a>
                                        <?php
                                        }
                                    }?>             
                                </div>
                            </div>
                            
                            
                        </div>
                        
                       <p>
                            <br />
                            <br />
                        </p>
                    </div>    
                </div> 
                        
                        
                <div id="Div_Droite_Contenu">
                    <p>&nbsp</p>
                </div>
            </div>         
                
        </div>
        
        <?php
            include "BasPage.php";
        ?>  
        
        <script src="js/caroussel.js"></script>
        
    </body>
</html>