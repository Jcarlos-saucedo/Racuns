var slideer= $('#slideer');
var siguiente = $('#sig');
var anterior = $('#atra');

slideer.css('margin-left','-'+0+'%');

function moverD(){
	slideer.animate({marginLeft:'-'+100+'%'},400,function(){
		
	});

}
function moverI(){
	slideer.animate({marginLeft:0},400,function(){
		
	});
}
siguiente.on('click',function() {
	moverD();
});
anterior.on('click',function() {
	moverI();
});

var mostrar = $('#show');
var clave = $('#password')

mostrar.on('click',function(){
	clave.removeAttr('type');
});
var bonot = $('#btnEnv');
var formulario1 = $('#form1');

bonot.on('click',function() {
	formulario1.submit();
});
//mostrar.on('click',function(){
//	clave.attr('type','password');
//});
