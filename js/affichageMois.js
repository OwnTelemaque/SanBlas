var Input_Date_Arrivee = document.getElementById('Input_Date_Arrivee');
var Input_Date_Depart = document.getElementById('Input_Date_Depart');

Check_Dispo = 0;
Check_Email = 0;



function getXMLHttpRequest() {
    var xhr = null;
    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest(); 
        }
    } else {
    alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
    return null;
    }
    return xhr;
}



var xhrLectureBDD = getXMLHttpRequest();                                        //On instancie un nouvel objet XMLHttpRequest en appelant la fonction respective
Tableau_Comparatif_BDD = [];                                                    //Variable globale


    xhrLectureBDD.open("GET", "LectureDisposBDD.php", true);      //on envoi la seule variable dont on a besoin: le nom de la photo.
    xhrLectureBDD.send(null);

    //On va attendre que le traitement soit terminé...  Lorsque le traitement est terminé on exécute les taches présentes dans la fonction suivante
    xhrLectureBDD.addEventListener('readystatechange', function() {
        if (xhrLectureBDD.readyState === XMLHttpRequest.DONE) { 
            
            var response = JSON.parse(xhrLectureBDD.responseText);              //je récupere mes echo du fichier LectureComPHP et la fonction JSON.parse soccupe de tout foutre en ordre dans un objet


            for (k=1; k<=response.NbEntrees; k++){
                
                var tempRetour = 'retour' + '' + k;
                Tableau_Comparatif_BDD.push(response[tempRetour]);
            }
        }
        
        Tableau_Comparatif_BDD.forEach(function(item, index) {
            console.log(item);
        });
        
    });
    
 



//Gestion de l'affichage de la date de départ lors du choix de l'utilisateur
Input_Date_Arrivee.addEventListener('change', function() {
    
    var ValeurDateArrivee = Input_Date_Arrivee.value;
    
    
    Input_Date_Depart.min = ValeurDateArrivee;
    Input_Date_Depart.value = ValeurDateArrivee;
    Input_Date_Depart.style.display = 'inline-block';
    
    
    
    //On gere la situation dans laquelle l'utilisateur modifierait la date d'arrivée à une date postérieure à celle de départ
    
    var Date_Arrivee = Input_Date_Arrivee.value;
    var Date_Depart = Input_Date_Depart.value;
    
    var Date_Arrivee_Nombre = Date_Arrivee.replace(/-/g, '');
    Date_Arrivee_Nombre = Number(Date_Arrivee_Nombre);
    var Date_Depart_Nombre = Date_Depart.replace(/-/g, '');
    Date_Depart_Nombre = Number(Date_Depart_Nombre);
    
    //console.log(Date_Arrivee_Nombre);
    //console.log(Date_Depart_Nombre);
    
    if (Date_Arrivee_Nombre > Date_Depart_Nombre){
        Input_Date_Depart.min = Date_Arrivee;
        Input_Date_Depart.value = Date_Arrivee;
    }
 
    //On efface le boutton submit et le status des disponibilites
    var Input_Submit_Booking = document.getElementById('Input_Submit_Booking');
    var P_Deja_Booke = document.getElementById('P_Deja_Booke');
    var P_Disponible = document.getElementById('P_Disponible');
    
    Check_Dispo === 0;
    Input_Submit_Booking.style.display = 'none';
    P_Deja_Booke.style.display = 'none';
    P_Disponible.style.display = 'none';
});
 
 

//Lorsque l'on choisi la date de retour
Input_Date_Depart.addEventListener('change', function() {
    
    var Input_Date_Arrivee_New = document.getElementById('Input_Date_Arrivee');
    var Input_Date_Depart_New = document.getElementById('Input_Date_Depart');
    
    //On récupère les valeur des dates d'arrivée et de départ
    var Date_Arrivee = Input_Date_Arrivee_New.value;
    var Date_Depart = Input_Date_Depart_New.value;
    
    //console.log('date arrivee: ' + Date_Arrivee);
    //console.log('date depart: ' + Date_Depart);

    //Il faut ensuite récupérer les valeurs des années, mois et jour pour pouvoir les passer en paramètre de la fonction getDatesBetweenDates (Traitement necessaire à cause desdates récupérées au format HTML)
    var Tableau_Date_Arrivee = Date_Arrivee.split('-');
    var Tableau_Date_Depart = Date_Depart.split('-');
    //console.log(Tableau_Date_Arrivee);
    //console.log(Tableau_Date_Depart);
    var Date_Arrivee_Annee = 0;
    var Date_Arrivee_Mois = 0;
    var Date_Arrivee_Jour = 0;
    var Date_Depart_Annee = 0;
    var Date_Depart_Mois = 0;
    var Date_Depart_Jour = 0;
    Tableau_Date_Arrivee.forEach(function(item, index) {
        if(index == 0){
            Date_Arrivee_Annee = item;
            Date_Arrivee_Annee = Number(Date_Arrivee_Annee);
            //console.log('Date_Arrivee_Annee: ' + Date_Arrivee_Annee);
        }
        if(index == 1){
            Date_Arrivee_Mois = item;
            Date_Arrivee_Mois = Number(Date_Arrivee_Mois);
            Date_Arrivee_Mois--;
            //console.log('Date_Arrivee_Mois: ' + Date_Arrivee_Mois);
        }
        if(index == 2){
            Date_Arrivee_Jour = item;
            Date_Arrivee_Jour = Number(Date_Arrivee_Jour);
            //console.log('Date_Arrivee_Jour: ' + Date_Arrivee_Jour);
        }
    });
    Tableau_Date_Depart.forEach(function(item, index) {
        if(index == 0){
            Date_Depart_Annee = item;
            Date_Depart_Annee = Number(Date_Depart_Annee);
            //console.log('Date_Depart_Annee: ' + Date_Depart_Annee);
        }
        if(index == 1){
            Date_Depart_Mois = item;
            Date_Depart_Mois = Number(Date_Depart_Mois);
            Date_Depart_Mois--;
            //console.log('Date_Depart_Mois: ' + Date_Depart_Mois);
        }
        if(index == 2){
            Date_Depart_Jour = item;
            Date_Depart_Jour = Number(Date_Depart_Jour);
            //console.log('Date_Depart_Jour: ' + Date_Depart_Jour);
        }
    });

    //On formate les 2 dates au format javascript avant de les passer à la fonction
    var startDate = new Date(Date_Arrivee_Annee, Date_Arrivee_Mois, Date_Arrivee_Jour);
    var endDate = new Date(Date_Depart_Annee, Date_Depart_Mois, Date_Depart_Jour);
    
    //console.log('start date: ' + startDate);
    //console.log('end date: ' + endDate);

    var Tableau_Comparatif_Saisie_Utilisateur = [];

    //Appel de la fonction qui permet  de compter les jours entre 2 dates
    var Tableau_Jours_Entre_2dates = getDatesBetweenDates(startDate, endDate);
    
    /*
    Tableau_Jours_Entre_2dates.forEach(function(item, index, array) {
       console.log('tab: ' + item);
    });
    */
    
    //On met dans un tableau toutes les dates bookees sous la forme anneemoisjour
    Tableau_Jours_Entre_2dates.forEach(function(item, index, array) {
        
        Tableau_Comparatif_Saisie_Utilisateur.push(item.getFullYear() + '' + item.getMonth() + '' + item.getDate());
        //console.log('annee: ' + item.getFullYear(), index);
        //console.log('mois: ' + item.getMonth(), index);
        //console.log('jour: ' + item.getDate(), index);
        
    //On compare nos 2 tableaux pour savoir si les dates choisies ne sont pas deja bookees
    booke = 0;                                                                  //Variable globale
    
    /*
    console.log('----Tableau_Comparatif_BDD----');
    Tableau_Comparatif_BDD.forEach(function(item, index) {
            console.log(item);
        });
    console.log('----Tableau_Comparatif_Saisie_Utilisateur----');
    Tableau_Comparatif_Saisie_Utilisateur.forEach(function(item, index) {
            console.log(item);
        });
    */
    
    
    
    
    
    
    
    
    Tableau_Comparatif_BDD.forEach(function(item_Tableau_BDD, index) {
        Tableau_Comparatif_Saisie_Utilisateur.forEach(function(item_Tableau_Utilisateur, index_Tableau_Utilisateur) {

            if (item_Tableau_BDD == item_Tableau_Utilisateur){
                booke = 1;
            }
        });
        var P_Deja_Booke = document.getElementById('P_Deja_Booke');
        var P_Disponible = document.getElementById('P_Disponible');

        if(booke == 1){
            P_Deja_Booke.style.display = 'flex';
            P_Disponible.style.display = 'none';
            Check_Dispo = 0;
        }
        else{
            P_Deja_Booke.style.display = 'none';
            P_Disponible.style.display = 'flex';
            Check_Dispo = 1;
        }
        });
    });
    //Une fois le cas traité on vide le tableau par sécurité
    Tableau_Jours_Entre_2dates = [];
    
    if(Check_Email ===1 & Check_Dispo === 1){
        Input_Submit_Booking.style.display = 'inline';
    }
    else{
        Input_Submit_Booking.style.display = 'none';
    }
});


/******************************************************************************/
/*                            Vérifications INPUT                             */
/******************************************************************************/

var Input_Email = document.getElementById('Input_Email');
var Input_Submit_Booking = document.getElementById('Input_Submit_Booking');

//vérif adresse mail saisie
Input_Email.addEventListener('blur', function() {
    if (!Input_Email.value.match(/[a-z0-9_\-\.]+@[a-z0-9_\-\.]+\.[a-z]+/i)) {
        alert("Invalid email address");
        Check_Email = 0;
    }
    else{
        Check_Email = 1;
    }
    
    if(Check_Email ===1 & Check_Dispo === 1){
        Input_Submit_Booking.style.display = 'inline';
    }
    else{
        Input_Submit_Booking.style.display = 'none';
    }
});



/******************************************************************************/
/*            Desactivation utilisation roulette sur Input Number             */
/******************************************************************************/

var Input_Phone = document.getElementById('Input_Phone');
var Input_Phone_Pays = document.getElementById('Input_Phone_Pays');

Input_Phone.addEventListener('wheel', function(e) {
    this.blur();
});

Input_Phone_Pays.addEventListener('wheel', function(e) {
    this.blur();
});



/******************************************************************************/
/*                            Déclarations fonctions                          */
/******************************************************************************/

//Fonction permettant de compter les jours qu'il y a entre 2 dates - Ce n'est pas moi qui l'ai rédigée
const getDatesBetweenDates = (startDate, endDate) => {
    let dates = [];
    //to avoid modifying the original date
    const theDate = new Date(startDate);
    while (theDate < endDate) {
      dates = [...dates, new Date(theDate)];
      theDate.setDate(theDate.getDate() + 1);
    }
    dates = [...dates, endDate];
    return dates;
  };


