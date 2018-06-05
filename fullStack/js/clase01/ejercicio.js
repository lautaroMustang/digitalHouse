var numero=Math.floor(Math.random()*11);
switch (numero) {
  case 1:
    console.log("1");
    break;
  case 2:
    console.log("2");
    break;
  case 3:
    console.log("3");
    break;
  case 4:
    console.log("4");
    break;
  case 5:
    console.log("5");
    break;
  case 6:
    console.log("6");
    break;
  case 7:
    console.log("7");
    break;
  case 8:
    console.log("8");
    break;
  case 9:
    console.log("9");
    break;
  case 10:
    console.log("10");
    break;
  default:console.log("gato");

}
function numerosPares() {
  var contador=1;
do {
  if (contador%2==0) {
    console.log(contador);;
  }
  contador++;
} while (contador<100);
}
