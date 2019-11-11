
var dro4 = document.querySelector('.dro4');


dro4.addEventListener('click', function(event) {
	event.stopPropagation();
  	dro4.classList.toggle('is-active');
});
