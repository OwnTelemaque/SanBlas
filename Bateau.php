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
                                <p class="P_Titres_Contenu">Your cozy nest on the sea</p>
                            <?php
                                break;
                            case 'fr':
                            ?>
                                <p class="P_Titres_Contenu">Votre nid douillet sur la mer</p>
                            <?php
                                break;
                            case 'es':
                            ?>
                                <p class="P_Titres_Contenu">Su acogedor nido en el mar</p>
                            <?php
                            break;
                        }
                        ?>
                        
                        <p>
                            <br />
                            <br />
                            <br />
                        </p>
                        
                        <div class="IMG_centre">
                            <a id="A_IMG_80" href="Photos/Thera.jpg" title="Afficher l'image originale">
                                <img src="Photos/Thera.jpg" width="100%"/></img>
                            </a>
                        </div>
                        
                        <br />
                        <br />
                        <?php 
                        switch ($_SESSION['langue']) {
                            case 'en':
                            ?>
                            <ul>
                                <li><p class="P_puces">Two double cabins:</p> <p>One being occupied by the crew members (ourselves), you will therefore be <b>our only guests onboard</b> during this <b>private cruise.</b> Your cabin is certainly small but has a <b>double bed</b> with sheets, pillows and bath towels, plenty of storage space and a door to offer you real privacy.</p></li>
                                <br />
                                
                                    <div class="IMG_centre">
                                        <a id="A_IMG_70" href="Photos/cabine.jpg" title="Afficher l'image originale">
                                            <img src="Photos/cabine.jpg" width="100%"/>
                                        </a>
                                    </div>
                                
                                <br />
                                <br />
                                <li><p class="P_puces">A kitchen with burners and oven</p> <p>to concoct good local dishes from the catch of the day when we have the favors of the ocean.</p></li>
                                <br />
                                
                                <div class="IMG_centre">
                                    <a id="A_IMG_50" href="Photos/cuisine.jpg" title="Afficher l'image originale">
                                        <img src="Photos/cuisine.jpg" width="100%"/>
                                    </a>
                                </div>
                                
                                <br />
                                <br />
                                <li><p class="P_puces">A fridge</p> <p>to offer you cold drinks every day.</p></li>
                                <br />
                                <li><p class="P_puces">A large living room</p> <p>with a central table to share friendly moments during any wet or cool days (rare in San Blas).</p></li>
                                <br />
                                
                                <div class="IMG_centre">
                                    
                                    
                                    <div class="IMG_centre">
                                        <a id="A_IMG_80" href="Photos/carre.jpg" title="Afficher l'image originale">
                                            <img src="Photos/carre.jpg" width="100%"/>
                                        </a>
                                        <p>&nbsp&nbsp&nbsp&nbsp</p>
                                    </div>
                                    
                                    <div class="IMG_centre">
                                        <a id="A_IMG_80" href="Photos/descente.jpg" title="Afficher l'image originale">
                                            <img src="Photos/descente.jpg" width="100%"/>
                                        </a>
                                    <p>&nbsp&nbsp&nbsp&nbsp</p>
                                    </div>
                                    
                                </div>
                                
                                <div><p><br /><br /></p></div>
                                
                                <div class="IMG_centre">
                                    <a id="A_IMG_80" href="Photos/carre2.jpg" title="Afficher l'image originale">
                                        <img src="Photos/carre2.jpg" width="100%"/>
                                    </a>
                                    <p>&nbsp&nbsp&nbsp&nbsp</p>
                                </div>
                                
                                <br />
                                <br />
                                <li><p class="P_puces">A shared bathroom</p> <p>with a sink and toilets. The shower will be done with sea water on the Sugar scoop on the stern of the boat. Limited fresh water rinsing. As the sailboat is not equipped with a water-maker, fresh water is a precious commodity to which we are careful.</p></li>
                                <br />
                                <li><p class="P_puces">12v, 110v and 220v photovoltaic power supplies</p> <p>available on board to charge phones, tablets, laptops, cameras, etc.</p></li>
                                <br />
                                <li><p class="P_puces">A removable outdoor</p> <p>table to share meals on sunny days and starry evenings.</p></li>
                                <br />
                                
                                <div class="IMG_centre">
                                    <a id="A_IMG_70" href="Photos/table.jpg" title="Afficher l'image originale">
                                        <img src="Photos/table.jpg" width="100%"/>
                                    </a>
                                </div>
                                
                                <br />
                                <br />
                                <li><p class="P_puces">A dinghy</p> <p>equipped with a 15 HP outboard to easily cruise around the boat to the best snorkeling spots and the most beautiful islands of the archipelago.</p></li>
                                <br />
                                
                                <div class="IMG_centre">
                                    <a id="A_IMG_50" href="Photos/annexe.jpg" title="Afficher l'image originale">
                                        <img src="Photos/annexe.jpg" width="100%"/>
                                    </a>
                                </div>
                                
                                <br />
                                <br />
                                <li><p class="P_puces">Snorkeling equipment: </p> <p>2 Masks, 2 snorkels, 2 lead belts. Personal equipment is nevertheless recommended for your comfort. (Remember to bring your fins and wetsuits if you have some). A Go Pro is available onboard so we can immortalize your adventures underwater.</p></li>
                            </ul>
                            <?php
                                break;
                            case 'fr':
                            ?>
                            <ul>
                                <li><p class="P_puces">Deux cabines doubles:</p> <p>L’une étant occupée par les membres d’équipage (nous-mêmes), vous serez donc <b>nos seuls invités à bord</b> lors de cette <b>croisière privative.</b> Votre cabine est certes petite mais possède un <b>lit double</b> avec ses draps, oreillers et serviettes de bain, de nombreux rangements et une porte pour vous offrir une réelle intimité. </p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_70" href="Photos/cabine.jpg" title="Afficher l'image originale">
                                        <img src="Photos/cabine.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Une cuisine avec plaques et four</p> <p>pour vous concocter de bons petits plats locaux issus de la pêche du jour lorsque nous avons les faveurs de l'océan.</p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_50" href="Photos/cuisine.jpg" title="Afficher l'image originale">
                                        <img src="Photos/cuisine.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Un frigo</p> <p>pour vous offrir des boissons fraîches au quotidien.</li>
                                <br />
                                <li><p class="P_puces">Un grand salon</p> <p>avec table centrale pour partager des moments conviviaux lors des éventuelles journées humides ou fraîches (rares aux San blas).</p></li>
                                <br />
                                <div class="IMG_centre">
                                    
                                <div class="IMG_centre">
                                    <a id="A_IMG_80" href="Photos/carre.jpg" title="Afficher l'image originale">
                                        <img src="Photos/carre.jpg" width="100%"/>
                                    </a>
                                    <p>&nbsp&nbsp&nbsp&nbsp</p>
                                </div>

                                <div class="IMG_centre">
                                    <a id="A_IMG_80" href="Photos/descente.jpg" title="Afficher l'image originale">
                                        <img src="Photos/descente.jpg" width="100%"/>
                                    </a>
                                <p>&nbsp&nbsp&nbsp&nbsp</p>
                                </div>
                                    
                                </div>
                                
                                <div><p><br /><br /></p></div>
                                
                                <div class="IMG_centre">
                                    <a id="A_IMG_80" href="Photos/carre2.jpg" title="Afficher l'image originale">
                                        <img src="Photos/carre2.jpg" width="100%"/>
                                    </a>
                                    <p>&nbsp&nbsp&nbsp&nbsp</p>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Une salle de bain</p> <p>partagée avec lavabo et toilettes. La douche quant à elle se fera à l’eau de mer sur la jupe à l’arrière du bateau. Rinçage à l’eau douce limité. Le voilier n’étant pas équipé de désalinisateur, l’eau douce est une denrée précieuse à laquelle nous prêtons attention.</p></li>
                                <br />
                                <li><p class="P_puces">Alimentations électriques</p> <p>12v, 110v et 220v issues du photovoltaïque disponibles à bord pour recharger téléphones, tablettes, PC portables, appareils photo…</p></li>
                                <br />
                                <li><p class="P_puces">Une table extérieure</p> <p>amovible pour partager les repas lors des journées ensoleillées et des soirées étoilées.</p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_70" href="Photos/table.jpg" title="Afficher l'image originale">
                                        <img src="Photos/table.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Une annexe</p> <p>dotée d’un moteur de 15 CV pour rayonner facilement autour du bateau vers les meilleurs sites de snorkeling et les plus belles îles de l’archipel.</p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_50" href="Photos/annexe.jpg" title="Afficher l'image originale">
                                        <img src="Photos/annexe.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Du matériel de snorkeling: </p> <p>2 Masques, 2 tubas, 2 ceintures de plomb. Du matériel personnel est néanmoins recommandé pour votre confort. (Pensez à amener vos palmes et combinaisons si vous en avez). Une Go Pro est disponible à bord pour que nous immortalisions vos souvenirs sous l’eau.</p></li>
                            </ul>
                            <?php
                                break;
                            case 'es':
                            ?>
                            <ul>
                                <li><p class="P_puces">Dos cabinas dobles:</p> <p>Una está ocupada por los miembros de la tripulación (nosotros mismos), entoncés estarán <b>nuestros únicos huéspedes a bordo</b> durante este <b>crucero privado.</b> Su cabaña es ciertamente pequeña, pero tiene una <b>cama doble</b> con sus sábanas, almohadas y toallas, mucho espacio de almacenamiento y una puerta para ofrecerle privacidad real.</p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_70" href="Photos/cabine.jpg" title="Afficher l'image originale">
                                        <img src="Photos/cabine.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Una cocina con platos y horno</p> <p>para elaborar buenos platos locales de la pesca del día cuando tenemos los favores del océano.</p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_50" href="Photos/cuisine.jpg" title="Afficher l'image originale">
                                        <img src="Photos/cuisine.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Una nevera</p> <p>para ofrecerle bebidas frías a diario.</li>
                                <br />
                                <li><p class="P_puces">Un gran salón</p> <p>con mesa central para compartir momentos de convivencia durante posibles días húmedos o frescos (raros en San blas).</p></li>
                                <br />
                                
                                <div class="IMG_centre">
                                    <div class="IMG_centre">
                                        <a id="A_IMG_80" href="Photos/carre.jpg" title="Afficher l'image originale">
                                            <img src="Photos/carre.jpg" width="100%"/>
                                        </a>
                                        <p>&nbsp&nbsp&nbsp&nbsp</p>
                                    </div>
                                    
                                    <div class="IMG_centre">
                                        <a id="A_IMG_80" href="Photos/descente.jpg" title="Afficher l'image originale">
                                            <img src="Photos/descente.jpg" width="100%"/>
                                        </a>
                                    <p>&nbsp&nbsp&nbsp&nbsp</p>
                                    </div>
                                </div>
                                
                                <div><p><br /><br /></p></div>
                                
                                <div class="IMG_centre">
                                    <a id="A_IMG_80" href="Photos/carre2.jpg" title="Afficher l'image originale">
                                        <img src="Photos/carre2.jpg" width="100%"/>
                                    </a>
                                    <p>&nbsp&nbsp&nbsp&nbsp</p>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Un baño</p> <p>compartido con lavabo e inodoro. La ducha será con agua de mar en la parte trasera del barco. Enjuague con agua dulce limitada. Como el velero no está equipado con un desalinizador, el agua dulce es un bien precioso al que prestamos atención.</p></li>
                                <br />
                                <li><p class="P_puces">Fuentes de alimentación</p> <p>de 12v, 110v y 220v procedentes de energía fotovoltaica disponibles a bordo para cargar teléfonos, tablets, portátiles, cámaras...</p></li>
                                <br />
                                <li><p class="P_puces">Una mesa exterior</p> <p>extraíble para compartir comidas en días soleados y noches estrelladas. </p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_70" href="Photos/table.jpg" title="Afficher l'image originale">
                                        <img src="Photos/table.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Un bote</p> <p>con un motor de 15 HP para recorrer fácilmente alrededor del barco a los mejores sitios de snorkel y las islas más bellas del archipiélago.</p></li>
                                <br />
                                <div class="IMG_centre">
                                    <a id="A_IMG_50" href="Photos/annexe.jpg" title="Afficher l'image originale">
                                        <img src="Photos/annexe.jpg" width="100%"/>
                                    </a>
                                </div>
                                <br />
                                <br />
                                <li><p class="P_puces">Equipo de snorkel:</p> <p>2 máscaras, 2 snorkels, 2 cinturones de plomo. Sin embargo, se recomienda el equipo personal para su comodidad. (Recuerda llevar sus aletas y trajes de neopreno si tiene alguno). Un Go Pro está disponible a bordo para poder immortalizar sus recuerdos bajo del mar.</p></li>
                            </ul>
                            <?php
                            break;
                        }
                        ?>
                        
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
        
    </body>
</html>