//Desafio 1 
alert("Boas vindas ao nosso site");
let nome = "Lua";
let idade = 25
let numeroVendas = 50;
let saldoDisponivel = 1000;
alert("Erro!Preencha todos os campos");
let mensagemErro = "Erro! Preencha todos os campos";
alert (mensagemErro);

let nome1 = prompt ("Digite seu nome");
let idade1 = prompt ("Digite a sua idade");

if(idade>= 18){
    alert ("Você está apto para tirar a habilitação");
}


//Desafio 2 

//A 
diaDaSemana = prompt('Qual é o dia da semana?');
if (diaDaSemana == 'Sábado') {
    alert('Bom fim de semana!');
} else if (diaDaSemana == 'Domingo') {
    alert('Bom fim de semana!');
} else {
    alert('Boa semana!');
}

//B
numero = prompt('Digite um positivo ou negativo');
if (numero > 0) {
    alert('Número positivo!');
} else {
    alert('Número negativo!');
}

//C
pontuacao = 105;
if (pontuacao >= 100) {
    console.log('Parabéns, você venceu!');
} else {
    console.log('Tente novamente para ganhar.');
}

//D
let saldoConta = 500; // Exemplo de saldo
alert(`Seu saldo é de R$${saldoConta}.`);


//E
let nome2 = prompt('Qual o seu nome?');
alert(`Boas vindas ${nome}`);

//Desafio 3
//A
let contador = 1;
while (contador <= 10) {
    console.log(contador);
    contador++;
}

//B
let contador1 = 10;
while (contador >= 0) {
    console.log(contador);
    contador--;
}

//C
let numeroMaximo = prompt("Digite um número para a contagem regressiva:");

while (numeroMaximo >= 0) {
    console.log(numeroMaximo);
    numeroMaximo--;
}

//D
let numeroMaximo1 = prompt("Digite um número para a contagem progregressiva:");;
let contador2 = 0;

while (contador <= numeroMaximo) {
    console.log(contador);
    contador++
}

//Desafio 4 
//A 
console.log("Boas-Vindas");

//B
let nome3 = "Drika";
console.log(`Olá, ${nome3}!`);

//C
let nome4 = "Drika";
alert(`Olá, ${nome4}!`);

//D
let linguagemPreferida = prompt ("Qual a linguagem de programação que você mais gosta?");
console.log(linguagemPreferida);

//E
let valor1 = 42;
let valor2 = 8;
let resultado = valor1 + valor2;

console.log(`A soma de ${valor1} e ${valor2} é igual ${resultado}.`)

//F
let valor3 = 10;
let valopr4 = 8;
let resultado2 = valor3 - valopr4;

console.log(`A diferença entre ${valor3} e ${valopr4} é igual a ${resultado2}`);

//G
let idade2 = prompt("Digite a sua idade:");
if (idade2 > 17){
    console.log("Você é maior de idade.");
}else {
    console.log("Você é menor de idade.");
}

//H
var numero = parseFloat(prompt("Digite um número: "));

if(numero>0){
    console.log("O número é positivo");
}else if (numero<0) {
    console.log("O número é negativo")
}else {
    console.log("O número é igual a 0");
}

//I
let numero1 = 1;
while(numero<= 10) {
    console.log(numero);
    numero++;
}

//J
let nota = 8;
if(nota >= 7){
    console.log("Você está Aprovado!");
}else {
    console.log("Você está Reprovado!");
}

//K
let numeroAleatorio = Math.random();
console.log(numeroAleatorio);

//L
let numeroInteiroAleatorio = parsetInt(Math.random() * 10) + 1;
console.log(numeroInteiroAleatorio);

//M
let numeroInteiroAleatorio1 = parentInt(Math.random() * 1000) + 1;
console.log(numeroInteiroAleatorio1);