/*Changer la couleur du bouton home lorsque la souris passe dessus*/

var Div_Icone_Home = document.getElementById('IMG_Home');

Div_Icone_Home.addEventListener('mouseover', function() {
    document.getElementById("IMG_Home").src = "Images/homeDore.png";                
});

Div_Icone_Home.addEventListener('mouseout', function() {
    document.getElementById("IMG_Home").src = "Images/home.png";             
});

/*Pour le tel*/

var Div_Icone_Home = document.getElementById('IMG_Home_Responsive_Blanc');

Div_Icone_Home.addEventListener('touchstart', function() {

    document.getElementById("IMG_Home_Responsive_Blanc").style.display = 'none';  
    document.getElementById("IMG_Home_Responsive_Dore").style.display = 'inline-block';  

});