var slideer= $('#slideer');
var siguiente = $('#next');
var anterior = $('#btn-prev');

slideer.css('margin-left','-'+0+'%');

function moverD(){
	slideer.animate({marginLeft:'-'+100+'%'},10,function(){
		
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