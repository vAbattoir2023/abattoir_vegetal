const next = document.querySelector('#next');
const preview = document.querySelector('#preview');

const firstPage1 = document.querySelector('#first_second');
const firstPage2 = document.querySelector('#thirdData');

const secondPage = document.querySelector('#nextSelect');

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