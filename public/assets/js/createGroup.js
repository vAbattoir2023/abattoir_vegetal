
// RIEN ICI
document.addEventListener('DOMContentLoaded', (e) => {

  const myCheckboxes = document.querySelectorAll(".filter-checkbox");
  const filters = [];


  /**
   * Boucle sur toutes les checkx box des filtres
   */
  myCheckboxes.forEach(checkBox => {
    filters[checkBox.id] = checkBox.checked;

    // ajoute le click sur la checkbox
    checkBox.addEventListener('click', (e) => {

      filters[e.currentTarget.id] = e.target.checked;

      // fonction de raffraichissement de la liste des suggestions
      refreshUsersSuggestion();
    });
  });

  // lance l'affichage de la liste au chargement de la page
  if (Object.keys(filters).length > 0) {
    refreshUsersSuggestion();
  }


  /**
   * fonction de raffraichissement de la liste
   */
  function refreshUsersSuggestion() {

    let url = '/group/users-list/';

    let filtersStr = '';
    Object.keys(filters).forEach(elName => {
      if (filters[elName]) {
        let filter = document.getElementById(elName).dataset['filter'];
        filtersStr += (filtersStr == '') ? filter : '#' + filter;
      }
    });

    url += filtersStr;

    const idUsers = [];

    fetch(url)
      .then(response => {
        //console.log(response);
        return response.text();
      })
      .then(html => {
        document.getElementById('users_list').innerHTML = html;
        
        initEventsForZoom();

        // let idUser = document.querySelectorAll('#idUser')

        // idUser.forEach(function (element) {
        //   element.addEventListener("click", function(event) {
        //     let btnClick = event.currentTarget;

        //     console.log(btnClick.value); //log id

        //     idUsers.push(btnClick.value); // push id in array idUsers

        //       //console.log(idUsers); // log array idUsers

        //   });
        // });

      
      const btnAddGroup = document.querySelector('#addGroup');
      if (btnAddGroup) {
      btnAddGroup.addEventListener('click',()=>{
          /**
          * get 
          */
          let urlGroup = '/group/add/';
          let groupeUsers = ''; // initilise groupUsers
          idUsers.forEach(id => {
            let idUsername = id;
            groupeUsers += (groupeUsers == '') ? idUsername : ',' + idUsername;
          });
          urlGroup += groupeUsers;

          console.log('brrr', urlGroup);
          window.location.href = urlGroup;

        }) 
      }
    });
  }

  /**
   * Initialisation du click sur les boutons de zoom
   */
  function initEventsForZoom() {
    let buttonUsers = document.querySelectorAll(".card-user .bt-zoom");
    /** loop on all button and listen this event*/
    buttonUsers.forEach(function (element) {
      element.addEventListener("click", function (event) {

        const idCard = event.target.dataset['card'];

        const currentBigCard = document.querySelector('.card-user:not(.card-small)');
        if(currentBigCard && idCard != currentBigCard.id) {
          currentBigCard.classList.add('card-small')
        }

        const elCard = document.getElementById(idCard);
        elCard.classList.toggle('card-small');


      });
    });
  }


});
//RIEN LA





