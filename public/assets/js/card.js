// take button on all card
let buttonUsers = document.querySelectorAll(".card-user .bt-zoom");



/**
 * loop on all button and listen this event
 */
buttonUsers.forEach(function (element) {
  element.addEventListener("click", function (event) {
    
    const idCard = event.target.dataset['card'];
    const elCard = document.getElementById(idCard);
    elCard.classList.toggle('card-small');

    

  });
});
