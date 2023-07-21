
// RIEN ICI
document.addEventListener('DOMContentLoaded', (e) => {

    const myCheckboxes = document.querySelectorAll(".filter-checkbox");
    const filters = [];

    /**
     * Boucle sur toutes les chezck box des filtres
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
    function refreshUsersSuggestion(){
    
      let url = '/group/users-list/';

      let filtersStr = '';
      Object.keys(filters).forEach(elName => {
        if(filters[elName]) {
          let filter = document.getElementById(elName).dataset['filter'];
          filtersStr += (filtersStr == '') ? filter : '#' + filter;
        }
      });
      
      url += filtersStr;
      //console.log(url);

      fetch(url)
      .then(response => {
        //console.log(response);
        return response.text();
      })
      .then(html => {
        document.getElementById('users_list').innerHTML = html;
      });

    }

});
//RIEN LA
  




// function getFilters() {
//   return new Promise((resolve) => {
//     document.addEventListener('DOMContentLoaded', (e) => {

//       const myCheckboxes = document.querySelectorAll(".filter-checkbox");
//       const filters = {};

//       myCheckboxes.forEach(checkBox => {
//         filters[checkBox.id] = checkBox.checked;

//         checkBox.addEventListener('click', (e) => {
//           filters[e.currentTarget.id] = e.target.checked;
//           //console.log('FILTER', filters);
//           // fonction de rafraîchissement de la liste des suggestions
//           refreshUsersSuggestion();
//         });
//       });

//       if (Object.keys(filters).length > 0) {
//         refreshUsersSuggestion();
//       }

//       resolve(filters);
//     });
//   });
// }
// function refreshUsersSuggestion(){
//   console.log('Raffraichissement de la liste des suggestions');

//   //todo inner html
// }
// // document.addEventListener('click',
// // getFilters().then((filters) => {
// //   console.log('Récupéré les filtres:', filters);

// // }))
// // Utilisation de la fonction asynchrone pour récupérer les filtres
// getFilters().then((filters) => {
//   console.log('Récupéré les filtres:', filters);
//   // Vous pouvez utiliser la variable filters ici ou appeler d'autres fonctions en fonction des filtres récupérés.
// });











/*************** NEW TESTE 2*********** */



// // Déclarez les filtres en dehors de la fonction getFilters()
// const filters = {};

// function getFilters() {

//     return new Promise((resolve) => {
    
//       const myCheckboxes = document.querySelectorAll(".filter-checkbox");

//       myCheckboxes.forEach(checkBox => {
//         filters[checkBox.id] = checkBox.checked;

//         checkBox.addEventListener('click', (e) => {
//           filters[e.currentTarget.id] = e.target.checked;
//           //console.log('FILTER', filters);
//           // fonction de rafraîchissement de la liste des suggestions
//           refreshUsersSuggestion();
//         });
//       });

//       if (Object.keys(filters).length > 0) {
//         refreshUsersSuggestion();
//       }

//       resolve(filters);
//     });
//   });


// // Utilisation de la fonction asynchrone pour récupérer les filtres
// getFilters().then((filters) => {
//   //console.log('Filtres initiaux:', filters);
// });

// // Fonction de rafraîchissement des suggestions
// function refreshUsersSuggestion() {
//   // Utilisez ici les filtres mis à jour pour récupérer la donnée souhaitée
//   // Par exemple, vous pouvez accéder aux filtres et récupérer les données en fonction de leurs valeurs.
//   const filteredData = getDataBasedOnFilters(filters);
//   //console.log('Donnée récupérée:', filteredData);
// }

// // Exemple de fonction pour récupérer les données en fonction des filtres
// function getDataBasedOnFilters(filters) {
//   // Vous pouvez mettre ici le code pour récupérer les données en fonction des filtres
//   // Par exemple, filtrer une liste de données en fonction des valeurs des filtres.
//   // Retournez ensuite les données filtrées.
//   // Exemple :
//   //console.log(filters);
  
//   const allDataInArray = [filters];
//   for (let i = 0; i < allDataInArray.length; i++) {
//     const allData = allDataInArray[i];
    
//     console.log(allData);
//   }
//   //console.log(allData);
  

//   //console.log(allData);
//   //  filteredData.filter((result) => {
//   //   const [key, value] = Object.entries(result);
//   //   console.log(key);
//   //   //return value === true
//   //   // Vérifiez ici les propriétés de l'élément par rapport aux valeurs des filtres
//   //   // et retournez true si l'élément doit être inclus dans les données filtrées.
//   //  });
//   //console.log(filteredData);

//   //return filteredData;
// }







// // //Définition des utilisateurs avec leurs centres d'intérêt
// //     const array = [
// //         { user:'thomas', center:['foot','guitare','jardiner']},
// //         { user:'jimy', center:['cuisiner','jardiner','conduire']},
// //         { user:'Mona', center:['baseball','conduire','manger']},
// //         { user:'Xavier', center:['foot','manger','jardiner']},
// //     ];

// //    //Fonction pour comparer les centres d'intérêt de deux utilisateurs
// //   /**
// //    *    fonction qui va comparer si lutilisateur 1 a le meme centre 
// //    *    dinterret  enssemble  
// //    * 
// //    * @param {*} utilisateur1 prendra en parametre un premier user
// //    * @param {*} utilisateur2 prendra en parametre un second user
// //    * @returns renvoie les centre dinteret en commun en tableau
// //    */

// //   function comparerCentresInteret(utilisateur1, utilisateur2) {

// //     //la variables qui prendra en compte les centre dinteret de lutilisateur 1
// //     // et les comparrera via filter sur lutilisateur 2 en verifiant via include 
// //     // si linteret de la fonction flecher
// //     let centresInteretCommuns = utilisateur1.center.filter((interet) => utilisateur2.center.includes(interet));
// //     //console.log(centresInteretCommuns);
// //     return centresInteretCommuns;

// //   }


// //   // Comparaison des centres d'intérêt de tous les utilisateurs
// //   const resultats = {};

// //   for (let i = 0; i < array.length; i++) {
// //     for (let j = i + 1; j < array.length; j++) {
// //       const utilisateur1 = array[i];
// //       const utilisateur2 = array[j];
// //       const centresInteretCommuns = comparerCentresInteret(utilisateur1, utilisateur2);

// //       if (centresInteretCommuns.length > 0) {
// //         if (!resultats[utilisateur1.user]) {
// //           resultats[utilisateur1.user] = [];
// //         }
// //         resultats[utilisateur1.user].push(utilisateur2.user);
// //       }
// //     }
// //   }


// // // Affichage des résultats
// //console.log(resultats);

//   const usersBox = document.querySelector('.users');

//   function getData() {
//     fetch('http://127.0.0.1:8000/group/getAllUsers')
//       .then(response => response.json())
//       .then(data => {

//         //getFilters()
//         return data
//       })
//   }

// // console.log(getData);

// // const filter = allUsers.filter((data)=> data.username == 'redzebra463');

// }
