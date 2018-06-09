console.log("“esto es un archivo externo”");
console.log(location.pathname);

// var nombre=prompt("ingrese su nombre");
// alert("bienvenido "+nombre);
// var mayor=confirm("sos mayor?");
// if (mayor) {
//
// }else {
//   location="https:/google.com";
// }
var botonAnt = document.getElementById("ant");

botonAnt.onclick = function () {
  history.back();
};

var botonProx = document.getElementById("prox");

botonProx.onclick = function () {
  console.log(history.forward());
  history.foward();

};
