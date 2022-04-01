function validar() {

	var nombre, apellidos, num_aud, sector, email, telefono, celular, status ;

nombre = document.getElementByName("nombre").value;
apellidos = document.getElementByName("apellidos").value;
num_aud = document.getElementByName("num_aud").value;
sector = document.getElementByName("sector").value;
email = document.getElementByName("email").value;
telefono = document.getElementByName("telefono").value;
celular = document.getElementByName("celular").value;
status = document.getElementByName("status").value;



if (nombre === "" || apellidos === "" || num_aud === "" || sector === "" || email === "" || telefono === "" || celular === "" || status === "" ) {

	alert("Todos los campos son obligatorios.");

	return false;

  } 


}