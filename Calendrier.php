<?php
include "Baniere.php";
require "class.phpmailer.php";
require "class.smtp.php";

$Liste_Mois = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];

    if (isset($_POST['moisEnvoye']))
    {
        $mois = strtolower($_POST['moisEnvoye']);
    }
    else
    {
        //On récupère le mois actuel en anglais
        /*
        $timestamp = time();
        $mois = date('F', $timestamp);
        $mois = strtolower($mois);
        */
        $mois = 'january';  //Temporaire
    }

    $date = date("Y-m-d");
    $mois_affiche = $mois;

switch ($_SESSION['langue']) {
    case 'en':
        $lundi = 'Monday';
        $mardi = 'Tuesday';
        $mercredi = 'Wednesday';
        $jeudi = 'Thursday';
        $vendredi = 'Friday';
        $samedi = 'Saturday';
        $dimanche = 'Sunday';
        
        switch ($mois) {
            case 'september':
                $mois_affiche = 'Septembre';
            break;
            case 'october':
                $mois_affiche = 'Octobre';
            break;
            case 'november':
                $mois_affiche = 'Novembre';
            break;
            case 'december':
                $mois_affiche = 'Decembre';
            break;
            case 'january':
                $mois_affiche = 'January';
            break;
            case 'february':
                $mois_affiche = 'February';
            break;
            case 'march':
                $mois_affiche = 'March';
            break;
            case 'april':
                $mois_affiche = 'April';
            break;
            case 'may':
                $mois_affiche = 'May';
            break;
            case 'june':
                $mois_affiche = 'June';
            break;
            case 'july':
                $mois_affiche = 'July';
            break;
            case 'august':
                $mois_affiche = 'August';
            break;
        }
        
    break;
    case 'fr':
        $lundi = 'Lundi';
        $mardi = 'Mardi';
        $mercredi = 'Mercredi';
        $jeudi = 'Jeudi';
        $vendredi = 'Vendredi';
        $samedi = 'Samedi';
        $dimanche = 'Dimanche';
        
        switch ($mois) {
            case 'september':
                $mois_affiche = 'Septembre';
            break;
            case 'october':
                $mois_affiche = 'Octobre';
            break;
            case 'november':
                $mois_affiche = 'Novembre';
            break;
            case 'december':
                $mois_affiche = 'Décembre';
            break;
            case 'january':
                $mois_affiche = 'Janvier';
            break;
            case 'february':
                $mois_affiche = 'Février';
            break;
            case 'march':
                $mois_affiche = 'Mars';
            break;
            case 'march':
                $mois_affiche = 'Avril';
            break;
            case 'march':
                $mois_affiche = 'Mai';
            break;
            case 'march':
                $mois_affiche = 'Juin';
            break;
            case 'march':
                $mois_affiche = 'Juillet';
            break;
            case 'march':
                $mois_affiche = 'Août';
            break;
        }
    break;
    case 'es':
        $lundi = 'Lunes';
        $mardi = 'Martes';
        $mercredi = 'Miercoles';
        $jeudi = 'Jueves';
        $vendredi = 'Viernes';
        $samedi = 'Sabado';
        $dimanche = 'Domingo';
        
        switch ($mois) {
            case 'september':
                $mois_affiche = 'Septiembre';
            break;
            case 'october':
                $mois_affiche = 'Octubre';
            break;
            case 'november':
                $mois_affiche = 'Noviembre';
            break;
            case 'december':
                $mois_affiche = 'Diciembre';
            break;
            case 'january':
                $mois_affiche = 'Enero';
            break;
            case 'february':
                $mois_affiche = 'Febrero';
            break;
            case 'march':
                $mois_affiche = 'Marzo';
            break;
        }
    break;
}


if (isset($_POST['checkEnvoiFormulaire']) == 1)
{
    
    try
    {
        $bdd = new PDO("mysql:host=$hote;dbname=$nomBase;charset=utf8", $user, $passe);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    
    $date_arrivee = $_POST['date_arrivee'];
    $date_depart = $_POST['date_depart'];
    $client = $_POST['client'];
    $hotel = $_POST['hotel'];
    $email = $_POST['email'];
    $email = strtolower($email);
    $Pays_phone = $_POST['Pays_phone'];
    $phone = $_POST['phone'];
    $commentaire = $_POST['commentaire'];
    
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        
        //Formatage du numéro de téléphone avnt intégration bdd
        $phoneBDD = '(' . $Pays_phone . ')' . $phone;
        
        $Tableau_Date_Arrivee = explode("-", $date_arrivee);
        $Tableau_Date_Depart = explode("-", $date_depart);
        

        $debut_jour = (int)$Tableau_Date_Arrivee[2];
        $debut_mois = (int)$Tableau_Date_Arrivee[1];
        $debut_annee = (int)$Tableau_Date_Arrivee[0];
        $fin_jour = (int)$Tableau_Date_Depart[2];
        $fin_mois = (int)$Tableau_Date_Depart[1];
        $fin_annee = (int)$Tableau_Date_Depart[0];

        $debut_date = mktime(0, 0, 0, $debut_mois, $debut_jour, $debut_annee);
        $fin_date = mktime(0, 0, 0, $fin_mois, $fin_jour, $fin_annee);
        
        $Date_Injection_Tableau = '';
       
        for($i = $debut_date; $i <= $fin_date; $i+=86400)
        {
            $jourTrim = date('d',$i);
            $jourTrimed = ltrim($jourTrim, "0");
            //echo $jourTrimed . "<br>";
            $moisTrim = date('F',$i);
            $moisTrimed = strtolower($moisTrim);
            //echo $moisTrimed . "<br>";
            
            $Date_Injection_Tableau = $jourTrimed . " " . $moisTrimed;
            
            $data = [
                'disponibilite' => 2,
                'client' => $client,
                'hotel' => $hotel,
                'phone' => $phoneBDD,
                'email' => $email,
                'commentaire' => $commentaire,
                'jour' => $jourTrimed
                ];
            
            switch ($moisTrimed) {
                case 'september':
                    $sql = "UPDATE september SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
                case 'october':
                    $sql = "UPDATE october SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
                case 'november':
                    $sql = "UPDATE november SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
                case 'december':
                    $sql = "UPDATE december SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
                case 'january':
                    $sql = "UPDATE january SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
                case 'february':
                    $sql = "UPDATE february SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
                case 'march':
                    $sql = "UPDATE march SET disponibilite=:disponibilite, client=:client, hotel=:hotel, phone=:phone, email=:email, commentaire=:commentaire WHERE jour=:jour";
                break;
            }
            $stmt= $bdd->prepare($sql);
            $stmt->execute($data);
        }
        
        //Envoi du mail
        
        $mail = new PHPmailer();
        //ici ce qui t'interesse
        $mail->IsSMTP();
        $mail->Host = "mail.sanblascruising.com";
        $mail->SMTPAuth = true;
        $mail->CharSet = 'UTF-8';
        $mail->Username = 'nico.degouve@sanblascruising.com';
        $mail->Password = $passeMDP;
        $mail->Port = 25;
        $mail->FromName = 'San-Blas booking';
        $mail->From='nico.degouve@sanblascruising.com';
        $mail->AddAddress('nico.degouve@gmail.com', 'gmail');
        $mail->AddAddress('contact@sanblascruising.com', 'sanblascruising');
        //$mail->AddReplyTo('votre@adresse');	
        
        $mail->Body = $client . " a demandé de réserver du: " . $date_arrivee . " au " . $date_depart . ":   \n \n" . "Adresse mail: " . $email . "\n" . "Numéro de tel: " . $phoneBDD  . "\n" . "Commentaire: " . $commentaire;                        //Création du corps du mail qui sera envoyé
        $mail->Subject = "Nouvelle demande de réservation du ". $date_arrivee . " au " . $date_depart;  //Création du sujet du mail qui sera envoyé        
        
        $mail->Send();                                              //On s'envoie le petit email pour etre tenu informé de l'ajout d'un nouveau commentaire
        
        $mail->SmtpClose();                                         //Fermeture de la connection SMTP
        unset($mail);
        ?>
        
        <div id="Div_Contenu">
        <div id="Div_Gauche_Contenu">
            <p>&nbsp</p>
        </div>

        <div id="Div_Centre_Contenu">

            
            <p>Booking done with success!</p>
            
            
        </div>

        <div id="Div_Droite_Contenu">
            <p>&nbsp</p>
        </div>
        </div>     
        
        <?php
    }else{
        ?>
        
        <div id="Div_Contenu">
        <div id="Div_Gauche_Contenu">
            <p>&nbsp</p>
        </div>

        <div id="Div_Centre_Contenu">
            <div>
                <p><br />Email address not valid <br /></p>
                <?php
                echo $email;
                ?>
                <form id="formulaire_moins" action="Calendrier.php#Div_Reservations" method="post">
                    <input type="hidden" name="Retour_client" value=<?php echo $client; ?>>
                    <input type="hidden" name="Retour_hotel" value=<?php echo $hotel; ?>>
                    <input type="hidden" name="Retour_email" value=<?php echo $email; ?>>
                    <input type="hidden" name="Retour_Pays_phone" value=<?php echo $Pays_phone; ?>>
                    <input type="hidden" name="Retour_phone" value=<?php echo $phone; ?>>
                    <input type="hidden" name="Retour_commentaire" value=<?php echo $commentaire; ?>>
                    <input type="hidden" name="Retour" value="1">
                    <input type="submit" id="BouttonRetour" value="Back">
                </form>
            </div>
        </div>

        <div id="Div_Droite_Contenu">
            <p>&nbsp</p>
        </div>
        </div>     
        
    <?php
    }
}
else
{
    

    //On préparer les noms des mois précédents et suivants

        $clef_mois = array_search($mois, $Liste_Mois, true);

        if($clef_mois == 0){
            $mois_suivant = 'February';
            $mois_precedent = 'December';
        }
        else if($clef_mois == 11){
            $mois_suivant = 'January';
            $mois_precedent = 'November';
        }
        else{
            $mois_suivant = $Liste_Mois[$clef_mois+1];
            $mois_precedent = $Liste_Mois[$clef_mois-1];
        }


    try
    {
        $bdd = new PDO("mysql:host=$hote;dbname=$nomBase;charset=utf8", $user, $passe);
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $sqlQueryCalendrier = "SELECT * FROM $mois ORDER BY jour";
    $Calendrier = $bdd->prepare($sqlQueryCalendrier);
    $Calendrier->execute();
    $donnees = $Calendrier->fetchAll();

    $totalDonnes = count($donnees);

    ?>

            <div id="Div_Contenu">
                <div id="Div_Gauche_Contenu">
                    <p>&nbsp</p>
                </div>

                <div id="Div_Centre_Contenu">
                    
                    
                    <div id="Div_Calendrier">
                        
                        <div>
                            <p>
                                <br />
                                <br />
                            </p>
                            <?php 
                            switch ($_SESSION['langue']) {
                                case 'en':
                                ?>
                                    <p class="P_Titres_Contenu">Prices</p>
                                    <p>
                                        <br />
                                        <br />
                                    </p>
                                    <p>
                                        A single price: <b>$150 US</b> per person per night.<br />
                                        <br />
                                        <i><b>This price includes:</b></i>
                                    </p>
                                        <ul>
                                            <li><p class="P_puces_Tarifs">Your double cabin (with sheets and bath towels)</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Full board</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">3 alcoholic drinks per day</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Excursions between the islands aboard the sailboat</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">On-board services (cooking and cleaning the sailboat)</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Lots of fun and great memories!</p></li>
                                        </ul>
                                        <p><i><b>This price does not include:</b></i></p>
                                        <ul>
                                            <li><p class="P_puces_Tarifs">The round trip Panama City/San Blas</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">The 2x$10 airstrip taxes in San Blas</p></li>
                                        </ul>
                                    <?php
                                    break;
                                case 'fr':
                                ?>
                                    <p class="P_Titres_Contenu">Tarifs</p>
                                    <p>
                                        <br />
                                        <br />
                                    </p>
                                    <p>
                                        Un tarif unique: <b>$150 US</b> par personne et par nuit.<br />
                                        <br />
                                        <i><b>Ce tarif inclut:</b></i>
                                    </p>
                                        <ul>
                                            <li><p class="P_puces_Tarifs">Votre cabine double (avec draps et serviettes de bain)</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Une pension complète</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">3 boissons alcoolisées par jour</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Les excursions entre les îles à bord du voilier</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Le service à bord (cuisine et nettoyage du voilier)</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Beaucoup de fun et de bons souvenirs à la clef!</p></li>
                                        </ul>
                                        <p><i><b>Ce tarif n'inclut pas:</b></i></p>
                                        <ul>
                                            <li><p class="P_puces_Tarifs">Le trajet aller-retour Panama City/San Blas</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Les 2x$10 de taxes par personne de piste aux San Blas</p></li>
                                        </ul>
                                    <?php
                                    break;
                                case 'es':
                                ?>
                                    <p class="P_Titres_Contenu">Precios</p>
                                    <p>
                                        <br />
                                        <br />
                                    </p>
                                    <p>
                                        Un solo precio: <b>$150 US</b> por persona por noche.<br />
                                        <br />
                                        <i><b>Este precio incluye:</b></i>
                                    </p>
                                        <ul>
                                            <li><p class="P_puces_Tarifs">Su camarote doble (con sábanas y toallas de baño)</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Pensión completa</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">3 bebidas alcohólicas por día</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Excursiones entre islas a bordo del velero</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Servicio a bordo (cocinar y limpiar el velero)</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Mucha diversión y grandes recuerdos!</p></li>
                                        </ul>
                                        <p><i><b>Este precio no incluye:</b></i></p>
                                        <ul>
                                            <li><p class="P_puces_Tarifs">El viaje de ida y vuelta Panama City/San Blas</p></li>
                                            <br />
                                            <li><p class="P_puces_Tarifs">Los 2x$10 impuestos de pista en San Blas</p></li>
                                        </ul>
                                    <?php
                                    break;
                            }
                            ?>
                        </div>
                        
                        
                        <div id="Div_Ancre_Calendrier">
                            <p>
                                <br />
                                <br />
                            </p>
                            <?php 
                            switch ($_SESSION['langue']) {
                                case 'en':
                                ?>
                                    <p class="P_Titres_Contenu">Availability calendar</p>
                                    <p>
                                        <br />
                                        <br />
                                        For the moment we only take reservations until March 2023 inclusive.
                                        <br />
                                        <br />
                                    </p>
                                <?php
                                    break;
                                case 'fr':
                                ?>
                                    <p class="P_Titres_Contenu">Calendrier des disponibilités</p>
                                    <p>
                                        <br />
                                        <br />
                                        Pour le moment nous ne prenons des réservations que jusqu'au mois de Mars 2023 inclus.
                                        <br />
                                        <br />
                                    </p>
                                <?php
                                    break;
                                case 'es':
                                ?>
                                    <p class="P_Titres_Contenu">Calendario de disponibilidad</p>
                                    <p>
                                        <br />
                                        <br />
                                        Por el momento solo aceptamos reservas hasta Marzo de 2023 incluidas.
                                        <br />
                                        <br />
                                    </p>
                                <?php
                                break;
                            }
                            ?>
                        </div>
                        
                        <div id="Div_Mois">
                            
                            <div id="Div_P_mois_gauche">
                            
                            <?php
                            if($mois != 'september'){
                            ?>
                                
                                <form id="formulaire_moins" action="Calendrier.php#Div_Ancre_Calendrier" method="post">
                                    <input type="hidden" name="moisEnvoye" value=<?php echo $mois_precedent ?>>
                                    <input type="image" src="Images/Chevronversgauche.png" width="8%" border="0" alt="Submit" />
                                </form>
                            <?php
                            }
                            ?>
                            </div>
                            <div id="Div_P_mois">
                                <p id="P_mois"><?php echo $mois_affiche; ?></p>
                            </div>
                            <div id="Div_P_mois_droit">
                            <?php
                            if($mois != 'march'){
                            ?>
                                <form id="formulaire_plus" action="Calendrier.php#Div_Ancre_Calendrier" method="post">
                                    <input type="hidden" name="moisEnvoye" value=<?php echo $mois_suivant ?>>
                                    <input type="image" src="Images/Chevronversdroite.png" width="8%" border="0" alt="Submit" />
                                </form>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                        
                        <div class="Div_Semaines"> 
                            <div class="Div_Jour_Semaine"><p><?php echo $lundi; ?></p></div>
                            <div class="Div_Jour_Semaine"><p><?php echo $mardi; ?></p></div>
                            <div class="Div_Jour_Semaine"><p><?php echo $mercredi; ?></p></div>
                            <div class="Div_Jour_Semaine"><p><?php echo $jeudi; ?></p></div>
                            <div class="Div_Jour_Semaine"><p><?php echo $vendredi; ?></p></div>
                            <div class="Div_Jour_Semaine"><p><?php echo $samedi; ?></p></div>
                            <div class="Div_Jour_Semaine"><p><?php echo $dimanche; ?></p></div>
                        </div>
                        
                        <div class="Div_Semaines">
                        
                            <?php
                            foreach ($donnees as $donnees) {   
                                if($donnees["jourSemaine"] == 1){
                                ?>
                                    </div>
                                    <div class="Div_Semaines">
                                <?php
                                }
                                
                                if($donnees["jour"] == 1){
                                    for($i=1; $i<$donnees["jourSemaine"]; $i++){
                                    ?>
                                        <div class="Div_Jour_dispo"><p>&nbsp</p></div>
                                    <?php
                                    }
                                }
                                
                                switch ($donnees["disponibilite"]) {
                                    case 1: ?>
                                        <div class="Div_Jour_dispo"><p><?php echo $donnees['jour'] ?></p></div>
                                    <?php
                                    break;
                                    case 0: ?>
                                        <div class="Div_Jour_booke"><p><?php echo $donnees['jour'] ?></p></div>
                                    <?php
                                    break;
                                    case 2: ?>
                                        <div class="Div_Jour_attente"><p><?php echo $donnees['jour'] ?></p></div>
                                    <?php
                                    break;
                                }
                                
                                if($donnees["jour"] == $totalDonnes){
                                    
                                    for($i=$donnees["jourSemaine"]; $i<7; $i++){
                                    ?>
                                        <div class="Div_Jour_dispo"><p>&nbsp</p></div>
                                    <?php
                                    }
                                }
                            }?> 
                        </div>
                        
                        <p>  </p>
                        
                        <?php 
                        switch ($_SESSION['langue']) {
                            case 'en':
                                ?>
                                <div id="Div_Code_Couleur">
                                    <div class="Div_Contenant_Code_Couleur">
                                        <div id="Div_Code_Couleur_Booke"></div>
                                        <p class="P_Code_Couleur">&nbsp Already booked</p>
                                    </div>
                                    <div class="Div_Contenant_Code_Couleur">
                                        <div id="Div_Code_Couleur_Attente"></div>
                                        <p class="P_Code_Couleur">&nbsp Validation pending</p>
                                    </div>
                                </div>
                                <?php
                                break;
                            case 'fr':
                                ?>
                                <div id="Div_Code_Couleur">
                                    <div class="Div_Contenant_Code_Couleur">
                                        <div id="Div_Code_Couleur_Booke"></div>
                                        <p class="P_Code_Couleur">&nbsp Déjà réservé</p>
                                    </div>
                                    <div class="Div_Contenant_Code_Couleur">
                                        <div id="Div_Code_Couleur_Attente"></div>
                                        <p class="P_Code_Couleur">&nbsp En attente de réservation</p>
                                    </div>
                                </div>
                                <?php
                                break;
                            case 'es':
                                ?>
                                <div id="Div_Code_Couleur">
                                    <div class="Div_Contenant_Code_Couleur">
                                        <div id="Div_Code_Couleur_Booke"></div>
                                        <p class="P_Code_Couleur">&nbsp Ya esta reservado</p>
                                    </div>
                                    <div class="Div_Contenant_Code_Couleur">
                                        <div id="Div_Code_Couleur_Attente"></div>
                                        <p class="P_Code_Couleur">&nbsp Esperando la validación</p>
                                    </div>
                                </div>
                                <?php
                            break;
                        }
                        ?>
                        
                        <div id="Div_Reservations">
                            <?php 
                            switch ($_SESSION['langue']) {
                                case 'en':
                                ?>
                                    <p class="P_Titres_Contenu">
                                        <br />
                                        Book now
                                        <br />
                                    </p>
                                <?php
                                    break;
                                case 'fr':
                                ?>
                                    <p class="P_Titres_Contenu">
                                        <br />
                                        Réservez dès maintenant
                                        <br />
                                    </p>
                                <?php
                                    break;
                                case 'es':
                                ?>
                                    <p class="P_Titres_Contenu">
                                        <br />
                                        Reservar ahora
                                        <br />
                                    </p>

                                <?php
                                break;
                            }
                            ?>
                            
                            <p class="P_Retour_Ligne_Responsive">
                                <br />
                            </p>
                            
                        </div>
                        
                        
                        <div id="Div_Formulaire_Booking">
                            
                            
                            <?php
                            //Si on est renvoyé sur la page suite à la saisie d'uen mauvaise adresse mail
                            if (isset($_POST['Retour']) == 1){
                                ?>
                                <form id="formulaire_Booking" action="Calendrier.php" method="post">
                                    <div id="Div_Input_Dates">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="start">* Arrival date:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="start">* Date d'arrivée:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="start">* Fecha de llegada:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                        <input type="date" id="Input_Date_Arrivee" name="date_arrivee" value="<?php echo $date; ?>" min="<?php echo $date; ?>" max="2023-03-30">
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                        <p class="P_Retour_Ligne_Responsive"></p>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="end">* Return date:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="end">* Date de retour:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="end">* Fecha de vuelta:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                        <input type="date" id="Input_Date_Depart" name="date_depart" max="2023-03-31">
                                        <p class="P_Retour_Ligne_Responsive"></p>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <p id="P_Deja_Booke">Dates unavailable</p>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <p id="P_Deja_Booke">Dates indisponibles</p>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <p id="P_Deja_Booke">Fechas no disponibles</p>
                                            <?php
                                            break;
                                        }
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <p id="P_Disponible">Dates available</p>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <p id="P_Disponible">Dates disponibles</p>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <p id="P_Disponible">Fechas disponibles</p>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                    </div>
                                    <div id="Div_Input_Infos_Client">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="client">* Your name and surname:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                    <label for="client">* Votre Nom et prénom:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="client">* Su nombre y apellido:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="text" id="Input_Client" name="client" value="<?php echo $_POST['Retour_client'];?>" required maxlength="50"><br><br>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="client">Hotel:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                    <label for="client">Hôtel:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="client">Hotel:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="text" id="Input_Hotel" name="hotel" value="<?php echo $_POST['Retour_hotel'];?>" maxlength="200"><br><br>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="email">* Your E-mail address to contact you:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="email">* Votre adresse mail pour vous recontacter:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="email">* Su correo electrónico para contactarlo:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="text" required size="40" maxlength="60" id="Input_Email" name="email" value="<?php echo $_POST['Retour_email'];?>"><br><br>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="phone">* Your whatsapp number (or regular phone number) to exchange easily: +</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="phone">* Votre numéro whatsapp (ou téléphone) pour échanger facilement: +</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="phone">* Su número de whatsapp (o teléfono) para intercambiar fácilmente: +</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="number" id="Input_Phone_Pays" placeholder="Country" required max="2000" size="4" name="Pays_phone" value="<?php echo $_POST['Retour_Pays_phone'];?>">
                                        <input type="number" id="Input_Phone" name="phone" required value="<?php echo $_POST['Retour_phone'];?>"><br><br>
                                    </div>
                                    <div id="Div_Input_Commentaire">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="commentaire">In order to ensure you the best welcome, please let us know: <br />
                                                    - Foods to avoid and possible food intolerances
                                                    <br />
                                                    - Your special wishes
                                                    <br />
                                                    <br />
                                                </label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="commentaire">Afin de vous assurer le meilleur accueil, merci de nous préciser: <br />
                                                    - Les aliments à éviter et éventuelles intolérances alimentaires
                                                    <br />
                                                    - Vos souhaits particuliers
                                                    <br />
                                                    <br />
                                                </label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="commentaire">Para asegurarle la mejor bienvenida, por favor háganoslo saber: <br />
                                                    - Alimentos a evitar y posibles intolerancias alimentarias
                                                    <br />
                                                    - Sus deseos especiales
                                                    <br />
                                                    <br />
                                                </label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <textarea placeholder="Max 2000 Char." id="Textarea_Form" name="commentaire" rows="5" cols="100%" maxlength="2000"><?php echo $_POST['Retour_commentaire'];?></textarea>
                                    </div>
                                    <div id="Div_Input_Submit">
                                        <p><br /></p>
                                        <input id="Input_Submit_Booking" type="submit" alt="Submit" value="Book"/>
                                    </div>

                                <input type="hidden" name="checkEnvoiFormulaire" value='1'>
                                </form>
                            <?php }
                            //Sinon on affiche le formulaire vide
                            else {
                                ?>
                                <form id="formulaire_Booking" action="Calendrier.php" method="post">
                                    <div id="Div_Input_Dates">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="start">* Arrival date:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="start">* Date d'arrivée:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="start">* Fecha de llegada:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                        <input type="date" id="Input_Date_Arrivee" name="date_arrivee" value="<?php echo $date; ?>" min="<?php echo $date; ?>" max="2023-03-30">
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp&nbsp</p>
                                        <p class="P_Retour_Ligne_Responsive"></p>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="end">* Return date:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="end">* Date de retour:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="end">* Fecha de vuelta:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp</p>
                                        <input type="date" id="Input_Date_Depart" name="date_depart" max="2023-03-31">
                                        <p class="P_Retour_Ligne_Responsive"></p>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp&nbsp</p>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <p id="P_Deja_Booke">Dates unavailable</p>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <p id="P_Deja_Booke">Dates indisponibles</p>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <p id="P_Deja_Booke">Fechas no disponibles</p>
                                            <?php
                                            break;
                                        }
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <p id="P_Disponible">Dates available</p>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <p id="P_Disponible">Dates disponibles</p>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <p id="P_Disponible">Fechas disponibles</p>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <p class="P_Espaces_Input_Dates">&nbsp&nbsp&nbsp&nbsp</p>
                                    </div>
                                    <div id="Div_Input_Infos_Client">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="client">* Your name and surname:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="client">* Votre Nom et prénom:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="client">* Su nombre y apellido:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="text" id="Input_Client" name="client" required maxlength="50"><br><br>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="hotel">Hotel:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="hotel">Hôtel:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="hotel">Hotel:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="text" id="Input_Hotel" name="hotel" maxlength="200"><br><br>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="email">* Your E-mail address to contact you:</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="email">* Votre adresse mail pour vous recontacter:</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="email">* Su correo electrónico para contactarlo:</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="text" required size="40" maxlength="60" id="Input_Email" name="email"><br><br>
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="phone">* Your whatsapp number (or regular phone number) to exchange easily: +</label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="phone">* Votre numéro whatsapp (ou téléphone) pour échanger facilement: +</label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="phone">* Su número de whatsapp (o teléfono) para intercambiar fácilmente: +</label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <input type="number" id="Input_Phone_Pays" placeholder="Country" required max="2000" size="4" name="Pays_phone">
                                        <input type="number" id="Input_Phone" name="phone" required><br><br>
                                    </div>
                                    <div id="Div_Input_Commentaire">
                                        <?php 
                                        switch ($_SESSION['langue']) {
                                            case 'en':
                                            ?>
                                                <label for="commentaire">In order to ensure you the best welcome, please let us know: <br />
                                                    - Foods to avoid and possible food intolerances
                                                    <br />
                                                    - Your special wishes
                                                    <br />
                                                    <br />
                                                </label>
                                            <?php
                                                break;
                                            case 'fr':
                                            ?>
                                                <label for="commentaire">Afin de vous assurer le meilleur accueil, merci de nous préciser: <br />
                                                    - Les aliments à éviter et éventuelles intolérances alimentaires
                                                    <br />
                                                    - Vos souhaits particuliers
                                                    <br />
                                                    <br />
                                                </label>
                                            <?php
                                                break;
                                            case 'es':
                                            ?>
                                                <label for="commentaire">Para asegurarle la mejor bienvenida, por favor háganoslo saber: <br />
                                                    - Alimentos a evitar y posibles intolerancias alimentarias
                                                    <br />
                                                    - Tus deseos especiales
                                                    <br />
                                                    <br />
                                                </label>
                                            <?php
                                            break;
                                        }
                                        ?>
                                        <textarea placeholder="Max 2000 Char." id="Textarea_Form" name="commentaire"  rows="5" cols="100%" maxlength="2000"></textarea>
                                    </div>
                                    <div id="Div_Input_Submit">
                                        <p><br /></p>
                                        <input id="Input_Submit_Booking" type="submit" alt="Submit" value="Book"/>
                                    </div>
                                    

                                <input type="hidden" name="checkEnvoiFormulaire" value='1'>
                                </form>
                            <?php   
                            } ?>
                            
                           
                            
                        </div>
                        
                        <div>
                            <p><br /></p>
                            <p><br /></p>
                        </div>
                       
                        
                        <div class="IMG_centre">
                            
                            <img src="Photos/photoResa.jpg" width="80%"/>
                        </div>
                        
                        <div>
                            <p><br /></p>
                            <p><br /></p>
                        </div>
                        
                    </div>
                    
                </div>

                <div id="Div_Droite_Contenu">
                    <p>&nbsp</p>
                </div>
            </div>  
<?php
} ?>

        </div>
        
        <?php
            include "BasPage.php";
        ?>  
        
        
        <script src="js/affichageMois.js"></script>
        
    </body>
</html>