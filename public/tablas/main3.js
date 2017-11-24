

$(document).ready(function(){


 $("#texto").keyup(function(){
     
    inicio();
	});

$("#telefono").keyup(function(){
     
    campo();
  });

$("#carat").keyup(function(){
     
    nombresestu();
 
  });

$("#apellidosestu").keyup(function(){
     
    apellidosestu();
 
  });


$("#procedencia").keyup(function(){
     
    procedencia();
 
  });
$("#direccionestu").keyup(function(){
     
    direccionestu();
 
  });

$("#nombrep").keyup(function(){
     
    nombrep();
 
  });

$("#apellidop").keyup(function(){
     
    apellidop();
 
  });

$("#cedula").keyup(function(){
     
    cedula();
 
  });

$("#parentesco").keyup(function(){
     
    parentesco();
 
  });

$("#lugar").keyup(function(){
     
    lugar();
 
  });

$("#ocupacion").keyup(function(){
     
    ocupacion();
 
  });

$("#direccionp").keyup(function(){
     
    direccionp();
 
  });


});

//funcion campo codigo ----------------------------------------------

function inicio(){


  var valor = document.getElementById("texto").value;
	if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#texto").parent().attr("class","form-group has-error has-feedback");
  $("#texto").parent().children("span").text("Debes llenar campo ").show();
  $("#texto").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

	}

else if ( !(/^\d{8}$/.test(valor)) ) {
$('#iconotexto').remove();
$("#texto").parent().attr("class","form-group has-error has-feedback");
$("#texto").parent().children("span").text("formato incorrecto").show();
$("#texto").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
	$('#iconotexto').remove();
	 $("#texto").parent().attr("class","form-group has-success has-feedback");
  $("#texto").parent().children("span").text("").hide();
  $("#texto").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}



//funcion campo telefono ------------------------------------------------


function campo(){


  var valor = document.getElementById("telefono").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#telefono").parent().attr("class","form-group has-error has-feedback");
  $("#telefono").parent().children("span").text("Debes llenarlo ").show();
  $("#telefono").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

else if ( !(/^\d{8}$/.test(valor)) ) {
$('#iconotexto').remove();
$("#telefono").parent().attr("class","form-group has-error has-feedback");
$("#telefono").parent().children("span").text("Solo numeros 8 digitos").show();
$("#telefono").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
   $("#telefono").parent().attr("class","form-group has-success has-feedback");
  $("#telefono").parent().children("span").text("").hide();
  $("#telefono").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}


//funcion car nombres------------------------------------------------




function nombresestu(){


  var valor = document.getElementById("carat").value;
  
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#carat").parent().attr("class","form-group has-error has-feedback");
  $("#carat").parent().children("span").text("Debes llenar este campo ").show();
  $("#carat").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

  else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#carat").parent().attr("class","form-group has-error has-feedback");
$("#carat").parent().children("span").text("Solo ingresar letras").show();
$("#carat").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
   $("#carat").parent().attr("class","form-group has-success has-feedback");
  $("#carat").parent().children("span").text("").hide();
  $("#carat").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}



//funcion campo apellidos estudiante ----------------------------------------------

function apellidosestu(){


  var valor = document.getElementById("apellidosestu").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#apellidosestu").parent().attr("class","form-group has-error has-feedback");
  $("#apellidosestu").parent().children("span").text("Debes llenar campo ").show();
  $("#apellidosestu").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#apellidosestu").parent().attr("class","form-group has-error has-feedback");
$("#apellidosestu").parent().children("span").text("Solo ingresar letras").show();
$("#apellidosestu").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
   $("#apellidosestu").parent().attr("class","form-group has-success has-feedback");
  $("#apellidosestu").parent().children("span").text("").hide();
  $("#apellidosestu").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}

//funcion campo procedencia estudiante ----------------------------------------------

function procedencia(){


  var valor = document.getElementById("procedencia").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#procedencia").parent().attr("class","form-group has-error has-feedback");
  $("#procedencia").parent().children("span").text("Debes llenar campo ").show();
  $("#procedencia").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#procedencia").parent().attr("class","form-group has-error has-feedback");
$("#procedencia").parent().children("span").text("Solo ingresar letras").show();
$("#procedencia").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#procedencia").parent().attr("class","form-group has-success has-feedback");
  $("#procedencia").parent().children("span").text("").hide();
  $("#procedencia").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}

//funcion campo direccion estudiante ----------------------------------------------

function direccionestu(){


  var valor = document.getElementById("direccionestu").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#direccionestu").parent().attr("class","form-group has-error has-feedback");
  $("#direccionestu").parent().children("span").text("Debes llenar campo ").show();
  $("#direccionestu").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ\s\d]*$/.test(valor)) {
$('#iconotexto').remove();
$("#direccionestu").parent().attr("class","form-group has-error has-feedback");
$("#direccionestu").parent().children("span").text("Solo ingresar letras").show();
$("#direccionestu").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#direccionestu").parent().attr("class","form-group has-success has-feedback");
  $("#direccionestu").parent().children("span").text("").hide();
  $("#direccionestu").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}



//funcion campo nombre padre ----------------------------------------------

function nombrep(){


  var valor = document.getElementById("nombrep").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#nombrep").parent().attr("class","form-group has-error has-feedback");
  $("#nombrep").parent().children("span").text("Debes llenar campo ").show();
  $("#nombrep").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#nombrep").parent().attr("class","form-group has-error has-feedback");
$("#nombrep").parent().children("span").text("Solo ingresar letras").show();
$("#nombrep").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#nombrep").parent().attr("class","form-group has-success has-feedback");
  $("#nombrep").parent().children("span").text("").hide();
  $("#nombrep").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}


//funcion campo apellido padre ----------------------------------------------

function apellidop(){


  var valor = document.getElementById("apellidop").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#apellidop").parent().attr("class","form-group has-error has-feedback");
  $("#apellidop").parent().children("span").text("Debes llenar campo ").show();
  $("#apellidop").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#apellidop").parent().attr("class","form-group has-error has-feedback");
$("#apellidop").parent().children("span").text("Solo ingresar letras").show();
$("#apellidop").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#apellidop").parent().attr("class","form-group has-success has-feedback");
  $("#apellidop").parent().children("span").text("").hide();
  $("#apellidop").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}


//funcion campo cedula padre ----------------------------------------------

function cedula(){


  var valor = document.getElementById("cedula").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#cedula").parent().attr("class","form-group has-error has-feedback");
  $("#cedula").parent().children("span").text("Debes llenar campo ").show();
  $("#cedula").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if ( !(/^\d{3}-\d{3}[A-Z]$/.test(valor)) ) {
$('#iconotexto').remove();
$("#cedula").parent().attr("class","form-group has-error has-feedback");
$("#cedula").parent().children("span").text("Formato incorrecto").show();
$("#cedula").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#cedula").parent().attr("class","form-group has-success has-feedback");
  $("#cedula").parent().children("span").text("").hide();
  $("#cedula").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}


//funcion campo parentesco padre ----------------------------------------------

function parentesco(){


  var valor = document.getElementById("parentesco").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#parentesco").parent().attr("class","form-group has-error has-feedback");
  $("#parentesco").parent().children("span").text("Debes llenar campo ").show();
  $("#parentesco").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#parentesco").parent().attr("class","form-group has-error has-feedback");
$("#parentesco").parent().children("span").text("Solo ingresar letras ").show();
$("#parentesco").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#parentesco").parent().attr("class","form-group has-success has-feedback");
  $("#parentesco").parent().children("span").text("").hide();
  $("#parentesco").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}

//funcion campo lugar padre ----------------------------------------------

function lugar(){


  var valor = document.getElementById("lugar").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#lugar").parent().attr("class","form-group has-error has-feedback");
  $("#lugar").parent().children("span").text("Debes llenar campo ").show();
  $("#lugar").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#lugar").parent().attr("class","form-group has-error has-feedback");
$("#lugar").parent().children("span").text("Solo ingresar letras").show();
$("#lugar").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#lugar").parent().attr("class","form-group has-success has-feedback");
  $("#lugar").parent().children("span").text("").hide();
  $("#lugar").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}


//funcion campo ocupacion padre ----------------------------------------------

function ocupacion(){


  var valor = document.getElementById("ocupacion").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#ocupacion").parent().attr("class","form-group has-error has-feedback");
  $("#ocupacion").parent().children("span").text("Debes llenar campo ").show();
  $("#ocupacion").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ]*$/.test(valor)) {
$('#iconotexto').remove();
$("#ocupacion").parent().attr("class","form-group has-error has-feedback");
$("#ocupacion").parent().children("span").text("Solo ingrasar letras").show();
$("#ocupacion").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#ocupacion").parent().attr("class","form-group has-success has-feedback");
  $("#ocupacion").parent().children("span").text("").hide();
  $("#ocupacion").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}

//funcion campo ocupacion padre ----------------------------------------------

function direccionp(){


  var valor = document.getElementById("direccionp").value;
  if ( valor ==null || valor.length == 0 || /^\s+$/.test(valor)) {
  $('#iconotexto').remove();
  $("#direccionp").parent().attr("class","form-group has-error has-feedback");
  $("#direccionp").parent().children("span").text("Debes llenar campo ").show();
  $("#direccionp").parent().append( "<span  id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
  return false;

  }

 else if (!/^[a-zA-ZáéíóúüñÁÉÍÓÚÜÑ\s\d]*$/.test(valor)) {
$('#iconotexto').remove();
$("#direccionp").parent().attr("class","form-group has-error has-feedback");
$("#direccionp").parent().children("span").text("Formato incorrecto").show();
$("#direccionp").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-remove form-control-feedback'></span>");
return false;

}

else
  $('#iconotexto').remove();
  $("#direccionp").parent().attr("class","form-group has-success has-feedback");
  $("#direccionp").parent().children("span").text("").hide();
  $("#direccionp").parent().append( "<span id='iconotexto'class='glyphicon glyphicon-ok form-control-feedback'></span>");
  return true;
  
}