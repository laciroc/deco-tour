$(document).ready( function() {

var abc=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z"];

var tiendasEjemplo = ["I love my home lima limona","Reina Batata","Chez Lenio"];

for (var i = 0; i < abc.length; i++) {
	$("#cajaAbc").append("<a href='#letra"+abc[i]+"' class='letraAbc'>"+abc[i]+"</a>");		

	$("#cajaResultadosAbc").append("<div id='letra"+abc[i]+"' class='col-xs-12 col-md-6'><h4>"+abc[i]+"</h4></div>");	

	for (var j = 0; j < tiendasEjemplo.length; j++) {
		$("#letra"+abc[i]).append("<p>"+tiendasEjemplo[j]+"</p>");
		console.log('hola');
	};
};






});