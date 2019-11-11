
var dro2 = document.querySelector('.dro2');


dro2.addEventListener('click', function(event) {
	event.stopPropagation();
  	dro2.classList.toggle('is-active');
});
