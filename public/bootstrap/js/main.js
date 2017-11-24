jQuery(function($){
	$(".codigo").mask("?aaa9999999999999",{placeholder:"xxx-000000-0000000"});
	$('.nombres').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z ^A-Z ]/g, '');
        });
	$('.apellidos').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z ^A-Z ]/g, '');
        });
	$('.colegio').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z ^A-Z ]/g, '');
        });
	$('.parentesco').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z ^A-Z ]/g, '');
        });
	$('.ocupacion').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z ^A-Z ]/g, '');
        });
	$('.trabajo').keyup(function (){
            this.value = (this.value + '').replace(/[^a-z ^A-Z ]/g, '');
        });
	// $(".nombres").mask("a",{placeholder:""});
  	$('.cedula').mask("999-999999-9999?a",{placeholder:"000/000000/0000X"},{completed:function(){alert("Por favor complete: "+this.val());}})
  
  $(".telefono").mask("99999999",{placeholder:"00000000"});
  
}); 

 