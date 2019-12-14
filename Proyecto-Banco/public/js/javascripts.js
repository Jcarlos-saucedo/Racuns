$("#mycont").hide();//lo primero a suceder
  function ShowHideElement(){
    let text = "";
    if($('#boton1').text()=== "RFC"){
      $("#mycont").show();
      $("#mycont2").hide();
      text = "RFC";
    }else {
      $("#mycont").hide();
      text="RFC";
    }
    $("#boton1").html(text);
    if($("#mycont")=== "#mycont.show"){
      $("#mycont2").hide();
    }
  }

$("#mycont2").hide();//lo primero a suceder
  function ShowHideElement1(){
    let text = "";
    if($('#boton2').text()=== "NOMBRES"){
      $("#mycont2").show();
      $("#mycont").hide();
      text = "NOMBRES";
    }else {
      $("#mycont2").hide();
      text="NOMBRES";
    }
    $("#boton2").html(text);
  }
