document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.trigger('is-active');
        $target.classList.trigger('is-active');
      });
    });
  }
});
// funcion
$("#mycont").hide();//lo primero a suceder
  function ShowHideElement(){
    let text = "";
    if($('#boton1').text()=== "Para el hogar"){
      $("#mycont").show();
      $("#mycont2").hide();
      text = "Para el hogar";
    }else {
      $("#mycont").hide();
      text="Para el hogar";
    }
    $("#boton1").html(text);
    if($("#mycont")=== "#mycont.show"){
      $("#mycont2").hide();
    }
  }

$("#mycont2").hide();//lo primero a suceder
  function ShowHideElement1(){
    let text = "";
    if($('#boton2').text()=== "Para empresas"){
      $("#mycont2").show();
      $("#mycont").hide();
      text = "Para empresas";
    }else {
      $("#mycont2").hide();
      text="Para empresas";
    }
    $("#boton2").html(text);
  }
  
$(document).ready(main);
   var contador = 1;
    function main() {
      $('.menu_bar').click(function(){
        //$('nav').toggle();
      });
    };
