<?php
include "Baniere.php";
?>
        <script src="js/JSindex.js"></script>

            <div id="Div_Contenu">
                

                <div id="Div_SuperContenu_Index">
                
                    <div id="Div_Contenu_Index">
                       
                        <div id="Div_Titre_Index">
                            <div>
                                <p id="P_Titres_Index">- San Blas <br />
                                &nbsp &nbsp &nbsp &nbsp &nbsp Cruising -</p>
                            </div>
                        </div>

                        <div id="Div_Centre_Contenu_Index">
                            <div id="Div_SousTitre_Index">
                                <div id="Div_SousTitre_Index2">
                                    <?php 
                                    switch ($_SESSION['langue']) {
                                        case 'en':
                                        ?>
                                            <p id="P_SousTitre_Index">GIVE YOURSELF FREEDOM!</p>
                                            <?php
                                            break;
                                        case 'fr':
                                        ?>
                                            <p id="P_SousTitre_Index">OFFREZ VOUS LA LIBERTE!</p>
                                            <?php
                                            break;
                                        case 'es':
                                        ?>
                                            <p id="P_SousTitre_Index">¡REGALESE LIBERTAD!</p>
                                            <?php
                                        break;
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <!--
                            <div id="Div_Separation_Index">
                                
                            </div>
                            -->

                            <div id="Div_Contenu_Voilier_Index">
                              

                                <div id="Div_TexteVoilier_Index">
                                    <?php 
                                    switch ($_SESSION['langue']) {
                                        case 'en':
                                        ?>
                                            <p>Board a sailboat and discover
                                            this Paradise according to your desires
                                            </p>
                                            <?php
                                            break;
                                        case 'fr':
                                        ?>
                                            <p>Embarquez à bord d’un voilier
                                            et découvrez ce Paradis selon vos envies
                                            </p>
                                            <?php
                                            break;
                                        case 'es':
                                        ?>
                                            <p>Embarque en un velero
                                            y descubre este Paraíso según sus deseos
                                            </p>
                                            <?php
                                        break;
                                    }
                                    ?>
                                </div>
                            </div>
                            
                            <div id="Div_2_Liens_Index">
                                
                                <div class="Div_Liens_Index" id="Div_Lien1_Index">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <a href="#Div_Lien1_Index">
                                                    <div class="Div_Boutton_Index">
                                                        <p class="P_Boutton_Index"><b>LEARN MORE</b></p>
                                                    </div>
                                                </a>
                                                <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <a href="#Div_Lien1_Index">
                                                    <div class="Div_Boutton_Index">
                                                        <p class="P_Boutton_Index"><b>EN SAVOIR PLUS</b></p>
                                                    </div>
                                                </a>
                                                <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <a href="#Div_Lien1_Index">
                                                    <div class="Div_Boutton_Index">
                                                        <p class="P_Boutton_Index"><b>MÁS INFORMACIÓN</b></p>
                                                    </div>
                                                </a>
                                                <?php
                                            break;
                                        }
                                        ?>
                                </div>
                                
                                <div class="Div_Liens_Index" id="Div_Lien2_Index">
                                    
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <a href="Calendrier.php#Div_Code_Couleur">
                                                    <div class="Div_Boutton_Index">
                                                        <p class="P_Boutton_Index"><b>BOOK NOW</b></p>
                                                    </div>
                                                </a>
                                                <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <a href="Calendrier.php#Div_Code_Couleur">
                                                    <div class="Div_Boutton_Index">
                                                        <p class="P_Boutton_Index"><b>RESERVEZ ICI</b></p>
                                                    </div>
                                                </a>
                                                <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <a href="Calendrier.php#Div_Code_Couleur">
                                                    <div class="Div_Boutton_Index">
                                                        <p class="P_Boutton_Index"><b>RESERVA AHORA</b></p>
                                                    </div>
                                                </a>
                                                <?php
                                            break;
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div id="Div_Part2_Index">
                        <div class="P_Espaces_Index">
                            <p>
                                <br />
                                <br />
                            </p>
                        </div>
                        <div id="Div_Separation_Parties_Index">
                            <p>
                                <br />
                            </p>
                        </div>
                        <div id="Div_Description_Index">
                            <?php 
                            switch ($_SESSION['langue']) {
                                case 'en':
                                ?>
                                    <p class="P_Titres_Contenu">The archipelago in a nutshell</p>
                                    <?php
                                    break;
                                case 'fr':
                                ?>
                                    <p class="P_Titres_Contenu">L'archipel en quelques mots</p>
                                    <?php
                                    break;
                                case 'es':
                                ?>
                                    <p class="P_Titres_Contenu">El archipiélago en pocas palabras</p>
                                    <?php
                                break;
                            }
                            ?>
                            <p>
                                <br />
                                <br />
                            </p>

                            <?php 
                            switch ($_SESSION['langue']) {
                                case 'en':
                                ?>
                                    <p>
                                        The San Blas archipelago has about 378 islands spread over 250 km. The only Indian people in the world to have obtained their autonomy, the indigenous population (Guna) exercises full control over their territory. Their society is based on a participatory democracy applied since 1925. Following a revolt of the Gunas against the Panamanian government, the autonomy of the territory was finally recognized in 1970 by the Panamanian parliament.<br />
                                        <br />
                                        Anxious to preserve their culture and continue to live close to nature, the Guna are careful to preserve themselves from mass tourism and have their own rules (no alcohol consumption, no photos, no drones, use of medicinal plants, food from fishing and local culture, eco-construction, etc.).<br />
                                        <br />
                                        Moreover, it is interesting to note that this people is organized in a matriarchal society. For example, during a wedding, it is the young groom who will go to live with his in-laws and who will take the name of his wife. Women, who often bring in the bulk of household income through the sale of their Molas (fabric handicrafts), play a key role in community decisions.<br />
                                        <br/>
                                        The beauty of the landscapes of the archipelago, both terrestrial and underwater, combined with the lifestyle choices of the Guna population which (still) preserve them from mass tourism, make this place a true incomparable natural paradise.<br />
                                    </p>
                                    <?php
                                    break;
                                case 'fr':
                                ?>
                                    <p>
                                        L’archipel des San Blas compte environ 378 îles réparties sur 250 km. Seul peuple indien au monde à avoir obtenu son autonomie, la population autochtone (Guna) exerce un plein contrôle sur son territoire. Leur société est basée sur une démocratie participative appliquée depuis 1925. Suite à une révolte des Gunas contre le gouvernement Panaméen,  l’autonomie du territoire est finalement reconnue en 1970 par le parlement Panaméen.<br />
                                        <br />
                                        Soucieux de conserver leur culture et de continuer à vivre proches de la nature, les Guna veillent à se préserver du tourisme de masse et possèdent leurs propres règles (pas de consommation d’alcool, pas de photos, de drone, usage des plantes médicinales, alimentation issue de la pêche et de la culture locale, écoconstrucions…).<br />
                                        <br />
                                        Par ailleurs, il est intéressant de souligner que ce peuple est organisé en société matriarcale. Par exemple, lors d’un mariage c’est le jeune marié qui ira vivre chez ses beaux-parents et qui prendra le nom de sa femme. Les femmes ramenant souvent le plus gros des revenus du foyer grâce à la vente de leurs Molas (œuvres artisanales en tissus) occupent un rôle déterminant dans les décisions de la communauté.<br />
                                        <br/>
                                        La beauté des paysages de l’archipel, tant terrestres que sous marins, alliée aux choix de vie de la population Guna qui les préservent (encore) du tourisme de masse, font de ce lieu un véritable paradis naturel incomparable.<br />
                                    </p>
                                    <?php
                                    break;
                                case 'es':
                                ?>
                                    <p>
                                        El archipiélago de San Blas tiene unas 378 islas repartidas en 250 km. Único pueblo indígena en el mundo que ha obtenido su autonomía, la población indígena (Guna) ejerce pleno control sobre su territorio. Su sociedad se basa en una democracia participativa aplicada desde 1925. Tras una revuelta de los Gunas contra el gobierno panameño, la autonomía del territorio fue finalmente reconocida en 1970 por el parlamento panameño.<br />
                                        <br />
                                        Ansiosos por preservar su cultura y seguir viviendo cerca de la naturaleza, los Guna tienen cuidado de preservarse del turismo masivo y tienen sus propias reglas (sin consumo de alcohol, sin fotos, sin drones, uso de plantas medicinales, comida de la pesca y cultura local, ecoconstrucción, etc.).<br />
                                        <br />
                                        Además, es interesante notar que este pueblo está organizado en una sociedad matriarcal. Por ejemplo, durante una boda, es el joven novio quien irá a vivir con sus suegros y quien tomará el nombre de su esposa. Las mujeres, que a menudo aportan la mayor parte de los ingresos del hogar a través de la venta de sus Molas (artesanías de tela), juegan un papel clave en las decisiones de la comunidad.<br />
                                        <br/>
                                        La belleza de los paisajes del archipiélago, tanto terrestres como submarinos, combinada con las tradiciones de vida de la población Guna que (todavía) los preserva del turismo de masas, hacen de este lugar un verdadero paraíso natural incomparable.<br />
                                    </p>
                                    <?php
                                break;
                            }
                            ?>




                            <p class="P_Espaces_Index">
                                <br />
                                <br />
                            </p>
                        </div>

                        <div id="Div_Separation_Parties_Index">
                            <p>
                                <br />
                            </p>
                        </div>


                        <div id="Div_Comment_Visiter_Index">
                            
                            <div id="IMG_centre_Index">
                                <img src="Photos/theraEau.png"/>
                            </div>
                            
                            <div id="Div_Texte_Visiter">
                                <?php 
                                switch ($_SESSION['langue']) {
                                    case 'en':
                                    ?>
                                        <div>
                                            <p class="P_Titres_Contenu">The best way to visit the archipelago</p>
                                            <p>
                                               <br />
                                               <br />
                                            </p>
                                            <p>
                                                To miss nothing of the <b>San Blas archipelago</b>, make the right choice by embarking on a <b>tailor-made private cruise</b> aboard</p> <a href="Bateau.php"><p style="color: #c79e31"><b><u>Thera</b></u></p></a><p>, a 34-foot (10.4m) sailboat.<br />
                                                <br />
                                            </p>
                                        </div>
                                
                                        <div id="IMG_centre_Index_Responsive">
                                            <img src="Photos/theraEau.png"/>
                                            <p>
                                                <br />
                                                <br />
                                            </p>
                                        </div>
                                        
                                        <div>
                                            <p>
                                                Its shallow draft (2 feet) will allow you to enjoy fabulous anchorages in <b>turquoise waters</b> and discover <b>the beauty of the underwater life</b> of the archipelago as well as <b>the traditional Guna culture.</b><br />
                                            </p>
                                        </div>
                                         <?php
                                         break;
                                     case 'fr':
                                     ?>
                                        <div>
                                            <p class="P_Titres_Contenu">Le meilleur moyen de visiter l'archipel</p>
                                            <p>
                                                <br />
                                                <br />
                                            </p>
                                            <p>
                                                Pour ne rien louper de <b>l’archipel des San Blas</b>, faites le bon choix en embarquant pour une <b>croisière privée sur mesure</b> à bord de </p> <a href="Bateau.php"><p style="color: #c79e31"><b><u>Thera</b></u></p></a><p>, un voiler de 34 pieds (10.4m).<br />
                                                <br />
                                            </p>
                                        </div>
                                        <div id="IMG_centre_Index_Responsive">
                                            <img src="Photos/theraEau.png"/>
                                        </div>
                                        <div>
                                            <p>
                                               Son faible tirant d’eau (60 cm) vous permettra de profiter de fabuleux mouillages aux <b>eaux turquoise</b> et de découvrir <b>la beauté de la vie sous-marine</b> de l’archipel ainsi que <b>la culture traditionnelle Guna.</b><br />
                                           </p>
                                        </div>
                                        <?php
                                        break;
                                    case 'es':
                                    ?>
                                        <div>
                                            <p class="P_Titres_Contenu">La mejor forma de visitar el archipiélago</p>
                                            <p>
                                               <br />
                                               <br />
                                           </p>
                                           <p>
                                               Para no perderse nada <b>del archipiélago de San Blas</b>, tome la decisión correcta al embarcarse en un <b>crucero privado hecho a medida</b> a bordo de </p> <a href="Bateau.php"><p style="color: #c79e31"><b><u>Thera</b></u></p></a><p>, un velero de 34 pies (10.4 m).<br />
                                               <br />
                                           </p>
                                        </div>
                                
                                        <div id="IMG_centre_Index_Responsive">
                                            <img src="Photos/theraEau.png"/>
                                            <p>
                                                <br />
                                                <br />
                                            </p>
                                        </div>
                                        
                                        <div>
                                            <p>
                                               Su poco calado (60 cm) le permitirá disfrutar de fabulosos fondeaderos con <b>aguas turquesas</b> y descubrir <b>la belleza de la vida submarina</b> del archipiélago así como <b>la cultura tradicional Guna.</b>
                                           </p>
                                    </div>
                                        <?php
                                    break;
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                            <p>
                                <br/>
                            </p>
                        </div>
                    </div>

        <?php
            include "BasPage.php";
        ?>     
    </body>         
</html>