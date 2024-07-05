
//Je m'occupe de l'ajout de l'album.
var LeBody = document.getElementsByTagName("body")[0];
var MonHTML = document.getElementById('MonHTML');
var DivMonAlbum = document.getElementById('DivAlbum');

DivMonAlbum.style.display = "flex";     //avant de commencer à le faire glisser je l'affiche.
LeBody.style.overflow = 'hidden';
MonHTML.style.overflow = 'hidden';

DivMonAlbum.style.animation = 'animationAjouteAlbum 2s';                //j'éxécute mon animation

//console.log('j\'ajoute une animation: ' + DivMonAlbum.id);

var fonctionAjoutAlbum = function(e) {                               //comme ci-dessus meme principe pour la création de l'évênement avec une fonction NON anonyme

    //Une fois l'évênement terminé...

    e.target.style.left = '0px';                                     //je fige mon album

    //console.log('fini ajout: ' +  e.target.id);
    LeBody.style.overflow = 'initial';
    MonHTML.style.overflow = 'initial';

    DivMonAlbum.removeEventListener('animationend', fonctionAjoutAlbum);     //je supprime mon evênement
};

 DivMonAlbum.addEventListener('animationend', fonctionAjoutAlbum);   //ajout de l'évênement par appel de la fonction
 //console.log('on ajoute');
 
 
/******************************************************************************/
/**************************** GESTION DU CAROUSSEL ****************************/
/******************************************************************************/
 
var TousMesLiens = [];                          //on va récupérer dans ce tableau accessible dans toutes les fonctions les liens de toutes les images présentes en miniatures (grace à la boucle for ci-dessous)


 /*Ma fonction la plus importante: l'affichage de la photo et */
function displayImg(link) {

    var img = new Image(),
        overlay = document.getElementById('overlay'),
        Commandes = document.getElementById('Commandes'),
        DivGlobalOverlay = document.getElementById('DivGlobalOverlay');

    /*on rajoute cet evenement dans lequel le code sera exécuté une fois l'objet img (notre image donc) chargée
    Ce code sera donc exécuté dès que l'image aura fini d'être chargée sur la page*/
    img.addEventListener('load', function() {

        overlay.innerHTML = '';         //on supprime le texte "Chargement en cours puisque l'image est prete a être affichée" 
        overlay.style.display = 'flex';
        Commandes.style.display = 'flex';
        Commandes.style.position = 'fixed';

        DivGlobalOverlay.style.display = 'flex';
        DivGlobalOverlay.style.position = 'fixed';
        DivGlobalOverlay.style.zIndex = '1';

        document.getElementById('MonHTML').style.overflow = "hidden";       //On empeche d'avoir le scroll sur la doite lors de la visualisation des photos

        //gestion de l'affichage de l'image selon que la hauteur et plus grande que la largeur - on teste lles tailles de l'image en fonction des tailles de l'overlay
        if (img.height > overlay.offsetHeight || img.width > overlay.offsetWidth)   //Si on a une image dont la largeur ou la hauteur dépassent celles du DIV overlay...
        {
            if (img.width / img.height < overlay.offsetWidth / overlay.offsetHeight) 
            {
                img.style.height = '100%';
            }
            else if (img.width / img.height > overlay.offsetWidth / overlay.offsetHeight) 
            {
                img.style.width = '100%';
            }
        }
        //on insere notre image
        overlay.appendChild(img);
    });

    console.log('link! :' + link);  
    
    //ce code est exécuté avant celui dans le bloc au dessus
    img.src = link;  //on récupère l'image en fonction de la valeur qui a été passée en paramètre de la fonction.
    //console.log('img.src! :' + img.src);
    
    img.style.display = 'block';    //on modifie l'attribu de l'image pour que cette dernière soit affichée en tant que block

    overlay.innerHTML = '<span>Chargement en cours...</span>';
    var TexteChargementEnCours = overlay.firstChild;
    TexteChargementEnCours.style.color= 'white';
    


   /////////////FIN TRAITEMENT AFFICHAGE COMMENTAIRES//////////////////


    /////////////traitement du passage aux images suivantes et précédentes//////////////////


    ProchainePhotoaAfficheraGauche = null;
    ProchainePhotoaAfficheraDroite = null;
    var ToutesLesPhotos = TousMesLiens;
    var IDPhotoActuelle = 0;

    //console.log('Compte du tableau: ' + ToutesLesPhotos.length);
    //console.log('Image source: ' + img.src);

    for (j=0; j<ToutesLesPhotos.length; j++)
    {
        
        console.log('ToutesLesPhotos j: ' + ToutesLesPhotos[j]);
        
        if (ToutesLesPhotos[j] == link)
        {
            IDPhotoActuelle = j;                    //Je récupère l'ID dans le tableau contenant tous les liens des photos celui de la photo actuellement affichée
        }
    //console.log('img src: ' + img.src);
    //console.log(ToutesLesPhotos[j].href);
    }
    console.log('ID actuel: ' + IDPhotoActuelle);


    //enusite on met dans 2 variables différentes l'ID de la photo suivante et précédente à afficher
    IDProchainePhotoaAfficheraGauche = IDPhotoActuelle-1;
    IDProchainePhotoaAfficheraDroite = IDPhotoActuelle+1;

    console.log('ID de la prochaine photo à gauche: ' + IDProchainePhotoaAfficheraGauche);
    console.log('ID de la prochaine photo à droite: ' + IDProchainePhotoaAfficheraDroite);

    //on gère le fait d'être en début ou en fin de liste
    if (IDProchainePhotoaAfficheraGauche == -1)
    {
        IDProchainePhotoaAfficheraGauche = ToutesLesPhotos.length - 1;
    }

    if (IDProchainePhotoaAfficheraDroite == ToutesLesPhotos.length)
    {
        IDProchainePhotoaAfficheraDroite = 0;
    }

   
    //On stocke le résultat de notre recherche dans 2 objets afin d'utiliser ces variables en dehors de cette fonction
    ProchainePhotoaAfficheraGauche = ToutesLesPhotos[IDProchainePhotoaAfficheraGauche];
    ProchainePhotoaAfficheraDroite = ToutesLesPhotos[IDProchainePhotoaAfficheraDroite];
    console.log('Prochaine photo a afficher à gauche: ' + ProchainePhotoaAfficheraGauche);
    console.log('Prochaine photo a afficher à droite: ' + ProchainePhotoaAfficheraDroite);
    console.log('Mon objet: ' + ProchainePhotoaAfficheraGauche);
}
    
/* Cette fonction permet de ré-initialiser les éléments lorsque l'on décide de quitter l'image visualisée. (soit en appuyant sur échap soit en cliquant sur le boutton du menu de droite pour quitter) */
function Raz() {
    var Commandes = document.getElementById('Commandes');
    var overlay = document.getElementById('overlay');
    var DivGlobalOverlay = document.getElementById('DivGlobalOverlay');


    Commandes.style.display = 'none';                                       //on vire le pannaux d'affichage...
    Commandes.style.width = '100%';                                          //...dont on ré-initialise la taille à 75% pour etre pret à etre affiché si l'on ré-ouvre une photo ensuite

    overlay.style.display = 'none';                                         //même traitement pour l'overlay
    overlay.style.width = '100%';


    DivGlobalOverlay.style.display = 'none';                                //On cache le div global sinon on ne peut plus rien faire sur la page: il est transparent et nous empeche de cliquer sur les éléments de la page
    document.getElementById('MonHTML').style.overflow = "auto";             //on replace le scroll de la fenetre principale que l'on avait desactivé pour la visualisation des photos

}
    
    
    
/*********************************** EVENEMENTS *******************************/


var DivMonAlbum = document.getElementById('DivAlbum');

toutesMesPhotos = DivMonAlbum.getElementsByTagName('div');





var lienaEnvoyer;
for (i=0; i<toutesMesPhotos.length; i++)
    {
        lienaEnvoyer = toutesMesPhotos[i].style.backgroundImage;     
        //lienaEnvoyer = lienaEnvoyer.substring(5, lienaEnvoyer.lastIndexOf('"'));
        var splitted = lienaEnvoyer.split('Miniatures/');                       //je coupe ma chaine en deux morceaux que je place respectueusement dans un tableau et je supprime ce qu'il y a entre guillements (miniatures/)
        lienaEnvoyer = splitted[0] + splitted[1];                               //je re-constitue mon lien en concaténant les 2 éléments du tableau
        
        //Je détecte à quel index dans la chaine le mot Photos commence pour virer ensuite le url(" ...
        var indexTextePhotos = lienaEnvoyer.indexOf('Photos');
        lienaEnvoyer = lienaEnvoyer.substr(indexTextePhotos);
        //on vire le ") en fin de chaine
        lienaEnvoyer = lienaEnvoyer.substr(0, lienaEnvoyer.length-2);
    
        TousMesLiens[i] = lienaEnvoyer;
        console.log('lienaEnvoyer: ' + lienaEnvoyer);
    }


/*--------------- Evenement permetant de désactiver l'ouverture de l'image dans une nouvelle fenetre lorsque l'on clique sur la miniature ------------------*/

for (var i = 0; i < toutesMesPhotos.length; i++) {                                  //cette variable est déclarée est calculée au début.
    //console.log(toutesMesPhotos[i]);  
    toutesMesPhotos[i].addEventListener('click', function(e) {              //Cette variable est déclarée est calculée au début et contient les liens de toutes les photos
        e.preventDefault();                                                 //On bloque la redirection 
        var lienaEnvoyer = e.currentTarget.style.backgroundImage;           //On prépare une variable contenant le nom du lien de l'image à afficher. c'est un traitement sur la chaine de caractère pour enlever quelques caractères dérangeants
        //currentTarget est utilisé pour cibler le lien et non l'image On va donc devoir un peu modifier cette variable pour l'utiliser lors de l'appel de notre fonction d'affichage
        lienaEnvoyer = lienaEnvoyer.substring(5, lienaEnvoyer.lastIndexOf('"'));
        var splitted = lienaEnvoyer.split('Miniatures/');                       //je coupe ma chaine en deux morceaux que je place respectueusement dans un tableau et je supprime ce qu'il y a entre guillements (miniatures/)
        lienaEnvoyer = splitted[0] + splitted[1];                               //je re-constitue mon lien en concaténant les 2 éléments du tableau
        console.log('lien a envoyer: ' + lienaEnvoyer);
        console.log('premiere partie: ' + splitted[0]);
        console.log('deuxieme partie: ' + splitted[1]);
        console.log(e.currentTarget.style.backgroundImage); 

        displayImg(lienaEnvoyer);                                           //On en profite pour appeller notre fonction permettant d'afficher notre image
    });
}





/*-------- evênements surveillants le click sur les bouttons des commandes pour passer aux images suivantes et précédentes-------*/

var BoutonGauche = document.getElementById('Gauche');
var BoutonDroit = document.getElementById('Droite');

//on rajoute l'évênement sur le div de gauche
BoutonGauche.addEventListener('click', function() {
    var ProchainePhotoaAfficher = ProchainePhotoaAfficheraGauche;       //on stocke dans une variable locale l'ID de la photo à afficher à gauche (précédement calculé dans la fonction d'affichage de l'image displayImg et ensuite placé dans un objet)
    //console.log('objet récupéré?: ' + ProchainePhotoaAfficher);
    //Refresh();                                                          //j'exécute ma fonction me permettant de virer les commentaires si il y en a. Ils seront ré-insérés si besoin lors de l'exécution de la fonction displayImg
    displayImg(ProchainePhotoaAfficher);                                //on exécute notre fonction d'affichage de l'image qui va se charger d'afficher l'image et tous les commentaires associés maintenant que notre champs est vierge
});

//on rajoute l'évênement sur le div de droite, même principe qu'au dessus
BoutonDroit.addEventListener('click', function() {
    var ProchainePhotoaAfficher = ProchainePhotoaAfficheraDroite;
    //console.log('objet récupéré?: ' + ProchainePhotoaAfficher);
   // Refresh();                                                          
    displayImg(ProchainePhotoaAfficher);                            
});

/*-------------- FIN EVENEMENT de surveillance de  click sur les bouttons des commandes---------------*/


/*-----------------évênement permettant de gérer l'action lors de l'appui sur les fleches de direction----------------------*/

//On s'occupe de la fleche de gauche
document.addEventListener('keyup', function(e) {
    if(overlay.style.display == 'flex')
    {
        var ProchainePhotoaAfficher = ProchainePhotoaAfficheraGauche;   //cette variable est issue de notre fonction d'affichage de l'image dans laquelle on avait calculer les ID image suivante et précédente

        if (e.keyCode == 37)                      
        {
            displayImg(ProchainePhotoaAfficher);                        //on exécute notre fonction qui affiche l'image en lui passant en paramètre le line de la prochaine photo à afficher
        }
    }
});
//même principe que ci-dessus
document.addEventListener('keyup', function(e) {
    if(overlay.style.display == 'flex')
    {
        var ProchainePhotoaAfficher = ProchainePhotoaAfficheraDroite;
        if (e.keyCode == 39)
        {
            displayImg(ProchainePhotoaAfficher);
        }
    }
});

/*-------------- FIN EVENEMENT de surveillance de l'appuie sur les touches de direction---------------*/

/*-------------- 2évênements permettants de quitter la visualisation des photos---------------*/

// lors de l'appuie sur la touche echap
document.addEventListener('keydown', function(e) {
    if (e.keyCode == 27)
    {
        Raz();                                                              //On appelle notre fonction qui s'occupe de ré-initialiser les attributs des éléments
    }
});

// lors du click sur le boutton de retour
Icone_Retour = document.getElementById('Icone_Retour');
Icone_Retour.addEventListener('click', function() {
    Raz();                                                              //On appelle notre fonction qui s'occupe de ré-initialiser les attributs des éléments
});



/***************************** EVENEMENTS TACTILES ****************************/

/*

for (var i = 0; i < toutesMesPhotos.length; i++) {                                  //cette variable est déclarée est calculée au début.
    //console.log(toutesMesPhotos[i]);  
    toutesMesPhotos[i].addEventListener('touchstart', function(e) {              //Cette variable est déclarée est calculée au début et contient les liens de toutes les photos
        
        e.stopPropagation();
        e.preventDefault();                                                 //On bloque la redirection 
        var lienaEnvoyer = e.currentTarget.style.backgroundImage;           //On prépare une variable contenant le nom du lien de l'image à afficher. c'est un traitement sur la chaine de caractère pour enlever quelques caractères dérangeants
        //currentTarget est utilisé pour cibler le lien et non l'image On va donc devoir un peu modifier cette variable pour l'utiliser lors de l'appel de notre fonction d'affichage
        lienaEnvoyer = lienaEnvoyer.substring(5, lienaEnvoyer.lastIndexOf('"'));
        var splitted = lienaEnvoyer.split('Miniatures/');                       //je coupe ma chaine en deux morceaux que je place respectueusement dans un tableau et je supprime ce qu'il y a entre guillements (miniatures/)
        lienaEnvoyer = splitted[0] + splitted[1];                               //je re-constitue mon lien en concaténant les 2 éléments du tableau
        console.log('lien a envoyer: ' + lienaEnvoyer);
        console.log('premiere partie: ' + splitted[0]);
        console.log('deuxieme partie: ' + splitted[1]);
        console.log(e.currentTarget.style.backgroundImage); 

        displayImg(lienaEnvoyer);                                           //On en profite pour appeller notre fonction permettant d'afficher notre image
    });
}


*/