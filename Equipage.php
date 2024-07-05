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
                                <p class="P_Titres_Contenu">Your hosts welcome you</p>
                            <?php
                                break;
                            case 'fr':
                            ?>
                                <p class="P_Titres_Contenu">Vos hôtes vous accueillent</p>
                            <?php
                                break;
                            case 'es':
                            ?>
                                <p class="P_Titres_Contenu">Sus anfitriones le dan la bienvenida</p>
                            <?php
                            break;
                        }
                        ?>
                        
                        <div id="Div_Texte_Contenu_equipage">
                            <div id="Div_Texte_equipage">
                                
                                <?php 
                                switch ($_SESSION['langue']) {
                                    case 'en':
                                    ?>
                                    <p id="P_description_equipage">
                                        We are <b>Nico and Marina</b>, a 38-year-old French couple with a passion for travel. After having traveled quite a bit around the world on our own (Australia, Southeast Asia, Canada, Europe, Maghreb, Latin America…) we met in Mexico more than 4 years ago. Marina was traveling solo through Central America and Nico had just purchased <a href="Bateau.php"><b>Thera</b></a> in Martinique to fulfill his childhood dream of living on a sailboat.<br />
                                        We lived for several years in Roatan, Honduras where Nico worked as a scuba instructor.<br />
                                        <br />
                                        Marina works as a photographer, Latin dance teacher (salsa and bachata) and as professional integration counselor. 
                                        For his part, Nico works as a computer technician and is passionate about the mountains (climbing, mountain courses, skiing, via ferrata, etc.).<br />
                                        <br />
                                        <b>Freedom, benevolence, sharing and discovery</b> are the values that are most important to us.
                                        Also, we look forward to meeting you so that you too can taste this heavenly life aboard our little Thera. We are able to welcome you in French, English and Spanish.<br />
                                    </p>
                                    <?php
                                        break;
                                    case 'fr':
                                    ?>
                                    <p id="P_description_equipage">
                                        Nous sommes <b>Nico et Marina</b>, un couple de français de 38 ans passionnés par les voyages. Après avoir pas mal vadrouillé à travers le monde chacun de notre côté (Australie, Asie du Sud-est, Canada, Europe, Maghreb, Amérique latine…)  nous nous sommes rencontrés au Mexique il y plus de 4 ans. Marina voyageait en solo à travers l’Amérique centrale et Nico venait tout juste d’acheter <a href="Bateau.php"><b>Thera</b></a> en Martinique afin de réaliser son rêve d’enfance : vivre sur un voilier.<br />
                                        Nous avons vécu plusieurs années à Roatan, au Honduras où Nico travaillait en tant qu’instructeur de plongée.<br />
                                        <br />
                                        Marina exerce en tant que photographe, professeure de danses latines (salsa et bachata) et conseillère en insertion professionnelle.
                                        De son côté Nico travaille en tant que technicien informatique et est passionné de montagne (escalade, courses en montagne, ski, via ferrata…).<br />
                                        <br />
                                        <b>La liberté, la bienveillance, le partage et la découverte</b> sont les valeurs qui nous tiennent le plus à cœur.
                                        Aussi, nous avons hâte de faire votre connaissance afin de vous permettre de goûter, vous aussi à cette vie paradisiaque à bord de notre petite Thera. Nous sommes en mesure de vous accueillir en Français, Anglais et Espagnol.<br />
                                    </p>
                                    <?php
                                        break;
                                    case 'es':
                                    ?>
                                    <p id="P_description_equipage">
                                        Somos <b>Nico y Marina</b>, una pareja francesa de 38 años apasionada por los viajes. Después de haber deambulado por el mundo cada uno por nuestra cuenta (Australia, Sudeste Asiático, Canadá, Europa, Magreb, América Latina...) nos conocimos en México hace más de 4 años. Marina viajaba sola por Centroamérica y Nico acababa de comprar <a href="Bateau.php"><b>Thera</b></a> en Martinica para cumplir su sueño de la infancia de vivir en un velero.<br />
                                        Vivimos durante varios años en Roatán, Honduras, donde Nico trabajó como instructor de buceo.<br />
                                        <br />
                                        Marina trabaja como fotógrafa, profesora de bailes latinos (salsa y bachata) y consultora de integración profesional.
                                        Por su parte, Nico trabaja como técnico informático y es un apasionado de la montaña (escalada, excursionismo, esquí, vías ferratas...).<br />
                                        <br />
                                        <b>La libertad, la bondad, el compartir y el descubrimiento</b> son los valores que son más importantes para nosotros.
                                        Esperamos conocerte para permitirte probar, tú también, esta vida celestial a bordo de nuestra pequeña Thera. Podemos darle la bienvenida en francés, inglés y español.<br />
                                    </p>
                                    <?php
                                    break;
                                }
                                ?>
                           </div>

                            <div id="Div_Photo_Contenu_equipage">
                                <img src="Photos/nous.jpg" width="90%"/>
                            </div>
                            
                            
                            <div id="Div_Photo_Contenu_equipage_Responsive">
                                <img src="Photos/nousResponsive.jpg" width="100%"/>
                            </div>
                        </div>
                    <p id="P_Espaces_Equipages_Responsive">
                        <br />
                        <br />
                    </p>
                    
                    <div id="Div_Separation_Parties_Index">
                        <p> 
                            <br />
                        </p>
                    </div>
                    
                    <div id="Div_Citation">
                        <?php 
                        switch ($_SESSION['langue']) {
                            case 'en':
                            ?>
                                <p id="P_Citation">
                                    "The gladdest moment in human life is a departure into unknown lands."<br />
                                </p>
                                <p>
                                    - Sir Richard Burton -
                                </p>
                                <?php
                                break;
                            case 'fr':
                            ?>
                                <p id="P_Citation">
                                    "Le plus beau moment de la vie humaine est un départ vers des terres inconnues."<br />
                                </p>
                                <p>
                                    - Sir Richard Burton -
                                </p>
                                <?php
                                break;
                            case 'es':
                            ?>
                                <p id="P_Citation">
                                    "El momento más alegre en la vida humana es en la partida hacia tierras desconocidas."<br />
                                </p>
                                <p>
                                    - Sir Richard Burton -
                                </p>
                                <?php
                            break;
                        }
                        ?>
                    </div>
                    
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
        
    </body>
</html>