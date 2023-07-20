// function getCheck(){
//   document.addEventListener('DOMContentLoaded', (e) => {

//     const myCheckboxes = document.querySelectorAll(".filter-checkbox");
//     const filters = [];

//     myCheckboxes.forEach(checkBox => {
//       filters[checkBox.id] = checkBox.checked;
    
//         checkBox.addEventListener('click', (e) => {
//             filters[e.currentTarget.id] = e.target.checked;

//             // console.log('FILTER',filters);
//             // fonction de raffraichissement de la liste des suggestions
//             refreshUsersSuggestion();
//         }); 
//     });

//     if (Object.keys(filters).length > 0) {
//       refreshUsersSuggestion();
//     }
//     return filters
// });
// }
// console.log('CHECK',getCheck());

// function refreshUsersSuggestion(){
//   console.log('Raffraichissement de la liste des suggestions');
//   //todo inner html
// }


// //Définition des utilisateurs avec leurs centres d'intérêt
//     const array = [
//         { user:'thomas', center:['foot','guitare','jardiner']},
//         { user:'jimy', center:['cuisiner','jardiner','conduire']},
//         { user:'Mona', center:['baseball','conduire','manger']},
//         { user:'Xavier', center:['foot','manger','jardiner']},
//     ];
  
//    //Fonction pour comparer les centres d'intérêt de deux utilisateurs
//   /**
//    *    fonction qui va comparer si lutilisateur 1 a le meme centre 
//    *    dinterret  enssemble  
//    * 
//    * @param {*} utilisateur1 prendra en parametre un premier user
//    * @param {*} utilisateur2 prendra en parametre un second user
//    * @returns renvoie les centre dinteret en commun en tableau
//    */
  
//   function comparerCentresInteret(utilisateur1, utilisateur2) {
    
//     //la variables qui prendra en compte les centre dinteret de lutilisateur 1
//     // et les comparrera via filter sur lutilisateur 2 en verifiant via include 
//     // si linteret de la fonction flecher
//     let centresInteretCommuns = utilisateur1.center.filter((interet) => utilisateur2.center.includes(interet));
//     //console.log(centresInteretCommuns);
//     return centresInteretCommuns;

//   }
  
  
//   // Comparaison des centres d'intérêt de tous les utilisateurs
//   const resultats = {};
  
//   for (let i = 0; i < array.length; i++) {
//     for (let j = i + 1; j < array.length; j++) {
//       const utilisateur1 = array[i];
//       const utilisateur2 = array[j];
//       const centresInteretCommuns = comparerCentresInteret(utilisateur1, utilisateur2);
  
//       if (centresInteretCommuns.length > 0) {
//         if (!resultats[utilisateur1.user]) {
//           resultats[utilisateur1.user] = [];
//         }
//         resultats[utilisateur1.user].push(utilisateur2.user);
//       }
//     }
//   }
  
  
  // // Affichage des résultats
   //console.log(resultats);

  const usersBox = document.querySelector('.users');

    function getData(){
     fetch('http://127.0.0.1:8000/group/getAllUsers')
      .then(response=>response.json())
      .then(data=>{ 
        return data
      })
    }

// console.log(getData);

// const filter = allUsers.filter((data)=> data.username == 'redzebra463');
