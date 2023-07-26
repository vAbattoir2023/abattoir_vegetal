function nextStep() {
  let fieldsets = document.getElementsByTagName('fieldset');
  
  for (let i = 0; i < fieldsets.length; i++) {
    if (fieldsets[i].classList.contains('active')) {
      fieldsets[i].classList.remove('active');
      fieldsets[i].style.display = 'none';
      fieldsets[i+1].classList.add('active');
      fieldsets[i+1].style.display = 'block';
      break;
    }
  }
}

function previousStep() {
  let fieldsets = document.getElementsByTagName('fieldset');
  
  for (let i = 0; i < fieldsets.length; i++) {
    if (fieldsets[i].classList.contains('active')) {
      fieldsets[i].classList.remove('active');
      fieldsets[i].style.display = 'none';
      fieldsets[i-1].classList.add('active');
      fieldsets[i-1].style.display = 'block';
      break;
    }
  }
}
