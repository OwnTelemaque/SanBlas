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
                                <p class="P_Titres_Contenu">To facilitate your stay</p>
                                <p>
                                    <br />
                                    <br />
                                </p>
                                <p class="P_puces">How to reach us?</p> <p>Several possibilities of lanchas exist but we recommend the services of <a href="https://lamtourspanama.com/" target="_blank"><u>Lam tour</u></a>.<br />
                                <br /></p>
                                <p class="P_puces">Means of payment:</p> <p>Card withdrawals and payments are not possible in San Blas. We therefore recommend that you make your arrangements before coming on board.<br />
                                <br /></p>
                                <p class="P_puces">What to bring during your stay?</p> <p>2 swimsuits, sunscreen, mosquito repellent, cap or hat, lycra wetsuit for the chilly, long-sleeved t-shirt to protect you from the sun during snorkeling sessions, fins and diving mask if you have one: It is always more comfortable to use suitable personal equipment; sunglasses, a waterproof bag for your electronic equipment, a beach towel, change in dollars for the purchase of your souvenirs (avoid the exchange at the airport because the rate is very unfavorable), drinks (sodas or alcoholic beverages ) and treats if desired.<br /> 
                                <br /></p>
                                <p class="P_puces">Seasickness:</p> <p>If you are prone to seasickness or if you have never sailed, plan to take seasickness pills to fully enjoy your stay. We are obviously inclined to modify our schedule if you prefer to sail less and stay at the most protected anchorages.<br />
                                <br /></p>
                                <p class="P_puces">Do not carry:</p> <p>As living space on a boat is limited, please leave your large suitcases (or bulky items) at your hotel and prefer a travel backpack.<br />
                                <br /></p>
                                <p class="P_puces">Internet access:</p> <p>Life on a boat is also the joy of savoring the simple moments of everyday life and leaving aside for a while the tumult of city life and social networks. We may be able to have internet access at certain anchorages but we cannot guarantee you stable access every day. We advise you to buy a SIM card (DIGICEL at $2) as well as an internet recharge before boarding if it is important for you to stay connected. For information, we have a satellite connection for sending urgent messages just in case.<br />
                                <br /></p>
                                <p class="P_puces">Cigarette consumption:</p> <p>For information, we are non-smokers and would like the interior of the boat to remain so as well. We obviously accept smokers on condition that they respect the environment (no cigarette butts thrown into the sea) and crew members.<br /></p>
                                <?php
                                break;
                            case 'fr':
                            ?>
                                <p class="P_Titres_Contenu">Pour faciliter votre séjour</p>
                                <p>
                                    <br />
                                    <br />
                                </p>
                                <p class="P_puces">Comment nous rejoindre?</p> <p>Plusieurs possibilités de lancha existent mais nous vous recommandons les services de <a href="https://lamtourspanama.com/" target="_blank"><u>Lam tour.</u></a><br />
                                <br /></p>
                                <p class="P_puces">Moyen de paiement:</p> <p>Les retraits et les paiements par carte sont impossibles dans les San Blas. Nous vous recommandons donc de prendre vos dispositions avant de venir à bord.<br />
                                <br /></p>
                                <p class="P_puces">Quoi emporter lors de votre séjour?</p> <p> 2 maillots de bains, crème solaire, crème anti-moustiques, casquette ou chapeau, combinaison lycra pour les frileux, t-shirt à manche longue pour vous protéger du soleil lors des sessions de snorkeling, palmes et masque de plongée si vous en possédez : Il est toujours plus confortable d’utiliser un matériel personnel adapté; lunettes de soleil, un sac étanche pour votre matériel électronique, une serviette de plage, de la monnaie en dollar pour l’achat de vos souvenirs (éviter le change à l’aéroport car le taux est très défavorable), boissons (sodas ou alcoolisées) et friandises si vous le souhaitez.<br /> 
                                <br /></p>
                                <p class="P_puces">Mal de mer:</p> <p>si vous êtes sujet au mal de mer ou si vous n’avez jamais navigué, prévoyez des cachets pour le mal de mer pour profiter pleinement de votre séjour. Nous sommes bien évidemment enclins à modifier notre planning si vous préférez faire moins de navigation et rester aux mouillages les plus protégés.<br />
                                <br /></p>
                                <p class="P_puces">Ne pas emporter:</p> <p>L’espace de vie sur un bateau étant limité, merci de laisser vos grosses valises (ou objets encombrants) à votre hôtel et de préférer un sac à dos de voyage.<br />
                                <br /></p>
                                <p class="P_puces">Accès à internet:</p> <p>La vie sur un bateau c’est aussi le bonheur de savourer les moments simples du quotidien et de laisser de côté pour un temps le tumulte de la vie citadine et des réseaux sociaux. Il se peut que nous puissions avoir accès à internet sur certains mouillages mais nous ne pouvons vous garantir un accès stable tous les jours. Nous vous conseillons d’acheter une carte SIM (DIGICEL à 2$) ainsi qu’une recharge internet avant d’embarquer si c’est important pour vous de rester connectés. Pour information nous possédons une connexion satellitaire pour l’envoi de messages urgents au cas où.<br />
                                <br /></p>
                                <p class="P_puces">Consommation de cigarette:</p> <p>Pour information nous sommes non fumeurs et souhaitons que l’intérieur du bateau le reste également. Nous acceptons bien évidemment les fumeuses et les fumeurs à condition qu’elles respectent l’environnement (pas de jet de mégot à la mer) et les membres d’équipage.<br /></p>
                                <?php
                                break;
                            case 'es':
                            ?>
                                <p class="P_Titres_Contenu">Para facilitar su estancia</p>
                                <p>
                                    <br />
                                    <br />
                                </p>
                                <p class="P_puces">¿Cómo llegar a nosotros?</p> <p>Existen varias posibilidades de lancha pero recomendamos los servicios de <a href="https://lamtourspanama.com/" target="_blank"><u>Lam tour</u></a>.<br />
                                <br /></p>
                                <p class="P_puces">Medios de pago:</p> <p>Los retiros y pagos con tarjeta no son posibles en San Blas. Por lo tanto, le recomendamos que haga sus arreglos antes de subir a bordo.<br />
                                    <br /></p>
                                <p class="P_puces">¿Qué llevar durante su estancia?</p> <p>2 trajes de baño, protector solar, crema repelente de mosquitos, gorra o sombrero, traje de lycra para el frío, camiseta de mangas largas para protegerte del sol durante las sesiones de snorkel, aletas y máscara de buceo si tiene una: Siempre es más cómodo usar equipo personal adaptado; gafas de sol, una bolsa impermeable para su equipo electrónico, una toalla de playa, cambio de dólar para la compra de sus recuerdos (evite el cambio en el aeropuerto porque la tarifa es muy desfavorable), bebidas (refrescos o alcohólicos) y dulces si lo desea.<br /> 
                                <br /></p>
                                <p class="P_puces">Mareo:</p> <p>si es propenso a marearse o si nunca ha navegado, planee tomar pastillas para el mareo para disfrutar plenamente de su estadía. Obviamente, nos inclinamos a modificar nuestro horario si prefiere navegar menos y quedarse en los fondeaderos más protegidos.<br />
                                <br /></p>
                                <p class="P_puces">No le lleve:</p> <p>Como el espacio habitable en un barco es limitado, deje sus maletas grandes (o artículos voluminosos) en su hotel y prefiera una mochila de viaje.<br />
                                <br /></p>
                                <p class="P_puces">Acceso a Internet:</p> <p>La vida en un barco es también la alegría de saborear los momentos sencillos de la vida cotidiana y dejar de lado por un tiempo el tumulto de la vida de la ciudad y las redes sociales. Es posible que tengamos acceso a Internet en algunos anclajes, pero no podemos garantizar un acceso estable todos los días. Le aconsejamos que compre una tarjeta SIM (DIGICEL a $2) así como una recarga de Internet antes de embarcar si es importante que permanezca conectado. Para información disponemos de una conexión vía satélite para el envío de mensajes urgentes por si acaso.<br />
                                <br /></p>
                                <p class="P_puces">Consumo de cigarrillos:</p> <p>Para información somos no fumadores y deseamos que el interior del barco siga siéndolo también. Obviamente aceptamos personas fumadoras si respeten el medio ambiente (no arrojar colillas de cigarrillos al mar) y a los miembros de la tripulación.<br /></p>
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