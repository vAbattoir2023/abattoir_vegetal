// 1st AND 2nd SLIDE CONTENT
const next = document.querySelector('#next');               // button to see the next input
const preview = document.querySelector('#preview');         // button to see the preview input
const firstPage1 = document.querySelector('#first_second'); // 1st content input
const firstPage2 = document.querySelector('#thirdData');    // 1st content input
const secondPage = document.querySelector('#nextSelect');   // 2nd content input

// CONTENT OF THE MODAL SELECT AVATAR
const btnOpenModal = document.querySelector('#btnSelect'); // button for open the modal select avatar
const boxAvatar = document.querySelector('#boxAvatar'); // the box Avatar
const image1 = document.querySelector('#avatar1');      // image 1 with the men image
const image2 = document.querySelector('#avatar2');      // image 2 with the women image
const imageInput = document.querySelector('.imageInput');   // get the invisible input image
const btnSelectedAvatar = document.querySelector('#selectAvatar');  // button for close the modal select avatar
var valueAvatar = '';   // avatar selected value
// the value of the men image
const menAvatar = 'https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg';
// the value of the woman image
const womanAvatar = 'https://static.vecteezy.com/ti/vecteur-libre/p3/5419157-profil-utilisateur-femme-avatar-est-une-femme-un-personnage-pour-un-economiseur-d-ecran-avec-emotions-illustrationle-sur-fond-blanc-isole-vectoriel.jpg';


btnOpenModal.addEventListener('click',()=>{
    boxAvatar.style.display = 'flex';
});

image1.addEventListener('click',()=>{valueAvatar = menAvatar, console.log(valueAvatar)});

image2.addEventListener('click',()=>{valueAvatar = womanAvatar, console.log(valueAvatar)});

btnSelectedAvatar.addEventListener('click',()=>{
    imageInput.value = valueAvatar;
    console.log(imageInput.value);
    console.log(imageInput);
    boxAvatar.style.display = 'none';
});


next.addEventListener('click',()=>{
    firstPage1.style.display = 'none';
    firstPage2.style.display = 'none';

    secondPage.style.display = 'flex';
});

preview.addEventListener('click',()=>{
    firstPage1.style.display = 'flex';
    firstPage2.style.display = 'flex';

    secondPage.style.display = 'none';
});
