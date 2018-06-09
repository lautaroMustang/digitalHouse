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



function ej1(a,b) {
  return Math.pow(a,b)
}
ej1(2,2)


//2
var cuadrado=function (num) {
  return num*num;
}
cuadrado(2);
//4
function trianguloRectangulo(a,b) {
  var hip=Math.sqrt((a**2)+(b**2));
  return a+b+hip;
}
trianguloRectangulo(2,3);

//5

function miSandwich(ing1, ing2, callback) {
  console.log("estoy comiendome un snbuche de: "+ing1+" "+ing2);
  callback();
}
function sal() {
  console.log("termine");
}
miSandwich("asa","asasdddd",sal);

//arrray 1
var a = [];
for (var i = 1; i < 20; i++) {
  a.push(i);
}
a;
a.forEach(function (value) {
  if (value%7==0) {
    console.log(value);
  }
})

//2
var arrayResultado= a.map(function (numero) {
  return Math.sqrt(numero);
})
console.log(arrayResultado);

//3

var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,
"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3
,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];
enigma.filter(function (valor) {
  return typeof valor=='string'
})
//4
var enigma = ["l",1,"a",2,2,5,"p",5,7,5,3,"e",6,"r",7,6,5,3,2,1,"s",9,9,9,6,"e",2,"v",5,"e",3,
"r",2,"a",1,6,4,1,2,"n",2,"c",3,5,5,5,7,"i",4,"a",5,2,1,3,"e",6,"s",7,"l",4,"a",3
,"c",2,3,1,5,3,2,"l",3,"a",4,"v",5,"e",6];
(enigma.filter(function (valor) {
  return typeof valor=='number'
})).reduce(function (total,numero) {
  return total+numero;
})

//objeto literal
//ej1
var persona={
  edad: 22,
  nombre: "pepe",
 apellido: "pepon",
 sexo: "macho",
 estadoCivil: "solo",
películasFavoritas:["han Solo","la casas DEBUG: "]
};
console.log(persona);
persona.edad=26;
console.log(persona);
persona.estatura=1.83;console.log(persona);
persona.saludo=function(){
  console.log(persona.nombre+" "+persona.apellido);
};
persona.comer=function(comida){
  console.log("estoy comiendo "+comida);
};
persona.comer("milanga");
