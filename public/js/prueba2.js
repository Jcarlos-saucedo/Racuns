var dro = document.querySelector('.dro');
dro.addEventListener('click', function(event) {
  event.stopPropagation();
  dro.classList.toggle('is-active');
});