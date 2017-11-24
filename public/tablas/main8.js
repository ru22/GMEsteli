 //validaciones para desavilitar  los meses pagados 
$(function () {
 var e= $("#eenero").val();


if (e=="Canselado" ) {

$("#eenero").prop("checked",true);  $("#eenero").prop("hidden",true); 

}else {
$("#eenero").prop("checked",false);  

}

var f= $("#febrero").val();


if (f=="Canselado" ) {

$("#febrero").prop("checked",true);    $("#febrero").prop("hidden",true); 

}else {
$("#febrero").prop("checked",false);  

}

var m= $("#marzo").val();


if (m=="Canselado" ) {

$("#marzo").prop("checked",true);   $("#marzo").prop("hidden",true); 

}else {
$("#marzo").prop("checked",false);  

}
var a= $("#abril").val();


if (a=="Canselado" ) {

$("#abril").prop("checked",true);  $("#abril").prop("hidden",true); 

}else {
$("#abril").prop("checked",false);  

}


var ma= $("#mayo").val();


if (ma=="Canselado" ) {

$("#mayo").prop("checked",true);   $("#mayo").prop("hidden",true); 

}else {
$("#mayo").prop("checked",false);  

}

var j= $("#junio").val();


if (j=="Canselado" ) {

$("#junio").prop("checked",true);   $("#junio").prop("hidden",true); 

}else {
$("#junio").prop("checked",false);  

}

var ju= $("#julio").val();
var c= + "Canselado";

if (ju=="Canselado" ) {

$("#julio").prop("checked",true);  $("#julio").prop("hidden",true); 

}if (ju==0 ){

$("#julio").prop("checked",false); 

}

var as= $("#agosto").val();


if (as=="Canselado" ) {

$("#agosto").prop("checked",true);   $("#agosto").prop("hidden",true); 

}else {
$("#agosto").prop("checked",false);  

}

var s= $("#septiembre").val();


if (s=="Canselado" ) {

$("#septiembre").prop("checked",true);     $("#septiembre").prop("hidden",true); 

}else {
$("#septiembre").prop("checked",false);  

}

var o= $("#octubre").val();


if (o=="Canselado" ) {

$("#octubre").prop("checked",true);        $("#octubre").prop("hidden",true); 

}else {
$("#octubre").prop("checked",false);  

}

var n= $("#nobiembre").val();


if (n=="Canselado" ) {

$("#nobiembre").prop("checked",true);   $("#nobiembre").prop("hidden",true); 

}else {
$("#nobiembre").prop("checked",false);  

}

var d= $("#diciembre").val();


if (d=="Canselado" ) {

$("#diciembre").prop("checked",true);   $("#diciembre").prop("hidden",true); 

}else {
$("#diciembre").prop("checked",false);  

}


});



