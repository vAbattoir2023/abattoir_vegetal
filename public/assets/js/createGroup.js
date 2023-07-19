document.addEventListener('DOMContentLoaded', (e) => {

    const myCheckboxes = document.querySelectorAll(".filter-checkbox");
    const filters = [];

    myCheckboxes.forEach(checkBox => {
      filters[checkBox.id] = checkBox.checked;
    
        checkBox.addEventListener('click', (e) => {
            filters[e.currentTarget.id] = e.target.checked;

            console.log(filters);
            // fonction de raffraichissement de la liste des suggestions
            refreshUsersSuggestion();
        });

        
    });

    if (Object.keys(filters).length > 0) {
      refreshUsersSuggestion();
    }
});


function refreshUsersSuggestion(){
  console.log('Raffraichissement de la liste des suggestions');
  //todo inner html
}


//let inputBox = document.querySelectorAll("input")
//console.log(inputBox);





// let result =[];

// function checkedUserSelection() {


//   let myCheckboxes = document.getElementsByClassName("filter-checkbox");

//   console.log(myCheckboxes);

  

//   // for (var i = 0; i < mycheckbox.length; i++) {
//   //     if (mycheckbox[i].checked) {
//   //         console.log("check");
//   //         result.push(mycheckbox[i])
//   //         break;
//   //     } else {
//   //         console.log("pas check");
//   //         result.splice(mycheckbox[i] ,1)
//   //     }
//   // }
//   // console.log(result);
  
//   return result 
  
// }





/*
for (let i = 0; i < checkedBox.length; i++) {
  checkedBox[i].addEventListener('change',checkedUserSelection)
  
}
*/


//let users =document.getElementById('users')
/*
//console.log(array);
function filterUsers(arrayCenterOfInterest) {
    for (let i = 0; i < arrayCenterOfInterest.length; i++) {
        let user= arrayCenterOfInterest[i];
        let center =user.center
        if (user) {
            
        }
        console.log(center);
        //console.log(user.center=='foot');
        /*
        users.innerHTML+=`
                <p>les centre dinterert sont${element.center}</p>
        `
        */
  //  }
    //let result = arrayCenterOfInterest.filter()
    
//}

//filterUsers(array);


/*
    const filter = array.filter((data)=>{
        return data.center === 'foot' || data.center === 'baseball'
    })
console.log(filter.map((data)=>{return data.center}));
*/


/*
let interet = [];

window.fetch(``)
        .then(function(httpResponse){
            //console.log(httpResponse);
            //console.log(httpResponse);
            return httpResponse.json();
            
            
        }).then(function(results){
            //console.log(results);
            interet = results;
            

            for (let i = 0; i < inputBox.length; i++) {
                inputBox[i].addEventListener('change',checkedUserSelection)
                
            }
            
             
        });
*/




//Définition des utilisateurs avec leurs centres d'intérêt
    const array = [
        { user:'thomas', center:['foot','guitare','jardiner']},
        { user:'jimy', center:['cuisiner','jardiner','conduire']},
        { user:'Mona', center:['baseball','conduire','manger']},
        { user:'Xavier', center:['foot','manger','jardiner']},
    ];
  
   //Fonction pour comparer les centres d'intérêt de deux utilisateurs
  /**
   *    fonction qui va comparer si lutilisateur 1 a le meme centre 
   *    dinterret  enssemble  
   * 
   * @param {*} utilisateur1 prendra en parametre un premier user
   * @param {*} utilisateur2 prendra en parametre un second user
   * @returns renvoie les centre dinteret en commun en tableau
   */
  
  function comparerCentresInteret(utilisateur1, utilisateur2) {
    
    //la variables qui prendra en compte les centre dinteret de lutilisateur 1
    // et les comparrera via filter sur lutilisateur 2 en verifiant via include 
    // si linteret de la fonction flecher
    let centresInteretCommuns = utilisateur1.center.filter((interet) => utilisateur2.center.includes(interet));
    console.log(centresInteretCommuns);
    return centresInteretCommuns;

  }
  
  
  // Comparaison des centres d'intérêt de tous les utilisateurs
  const resultats = {};
  
  for (let i = 0; i < array.length; i++) {
    for (let j = i + 1; j < array.length; j++) {
      const utilisateur1 = array[i];
      const utilisateur2 = array[j];
      const centresInteretCommuns = comparerCentresInteret(utilisateur1, utilisateur2);
  
      if (centresInteretCommuns.length > 0) {
        if (!resultats[utilisateur1.user]) {
          resultats[utilisateur1.user] = [];
        }
        resultats[utilisateur1.user].push(utilisateur2.user);
      }
    }
  }
  
  
  // // Affichage des résultats
   console.log(resultats);
  

