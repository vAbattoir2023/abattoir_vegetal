// take id of one card 
let bigCard = document.querySelectorAll('card-profil');
// take id of image          
let zoom = document.querySelectorAll('#zoom-card-click');
//take source of image
let imageswitch = document.getElementById('src-zoom');


/**
 * this function remove one class to big or small card
 * and switch source of this button
 * @param {*} e take event click target
 */
function addCard(e) {
    
   //e.preventDefault();
   let src = imageswitch.getAttribute("src");
   //check source of images for condition if

   /**
    * virifie if this card contain the classlist card-small
    * if is true remove this else add this
    */
  if(bigCard.classList.contains('card-small') == true){
     
     bigCard.classList.remove('card-small');
    }else if (bigCard.classList.contains('card-small') == false){
    bigCard.classList.add('card-small');
}

/**
 * virifie if this src == this source active this is true switch src
 */
if (src == "Assets/ICONES/zoom/zoom-retrecir.svg") {
    imageswitch.src ="Assets/ICONES/zoom/zoom-agrandir.svg";
    
}else if (src =="Assets/ICONES/zoom/zoom-agrandir.svg"){
    imageswitch.src = "Assets/ICONES/zoom/zoom-retrecir.svg";
}

}

/**
 * event listener all cars
 */
for (let i = 0; i < zoom.length; i++) {
    zoom[i].addEventListener('click', addCard);
    console.log(zoom[i]);
    
}
