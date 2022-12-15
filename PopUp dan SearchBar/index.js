// search bar
let inputBox = document.querySelector('.input-box'),
  searchIcon = document.querySelector('.icon'),
  closeIcon = document.querySelector('.close-icon');

searchIcon.addEventListener('click', () => inputBox.classList.add('open'));
closeIcon.addEventListener('click', () => inputBox.classList.remove('open'));

// pop-up alert
const buttonPrimary = document.querySelectorAll('.button-primary');
const buttonPrimaries = document.querySelectorAll('.button-primary');

buttonPrimaries.forEach(function (button) {
  button.addEventListener('click', function () {
    alert('Hello Ini PopUp JavaScript');
  });
});
