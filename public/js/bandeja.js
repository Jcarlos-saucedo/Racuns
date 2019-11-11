var slideer= $('#slideer');
var siguiente = $('#btn-next');
var anterior = $('#btn-prev');


slideer.css('margin-left','-'+0+'%');

function moverD(){
	slideer.animate({marginLeft:'-'+105+'%'},0,function(){
		
	});

}
function moverI(){
	slideer.animate({marginLeft:0},0,function(){
		
	});
}
siguiente.on('click',function() {
	moverD();
});
anterior.on('click',function() {
	moverI();
});



function openTab(evt, tabName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("content-tab");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" is-active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " is-active";
}

document.getElementById("myBtn").onclick = function() {myFunction()};

/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
  
}

$(".do-nicescrol").niceScroll();

$(".do-nicescrol4").niceScroll(".wrap");