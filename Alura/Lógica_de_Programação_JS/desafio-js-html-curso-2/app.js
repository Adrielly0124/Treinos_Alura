//Desafio1
//A

let titulo = document.querySelector('h1');
titulo.innerHTML = 'Hora do Desafio';

//B
function exibirMensagemConsole() {
    console.log('O botão foi clicado!')
}

//C
function exibirAlert() {
    alert('Eu amo JS')
}

//D
function exibirPrompt() {
    let nomeDaCidade = prompt('Digite o nome de uma cidade do Brasil que você gosta muito:')
    alert(`Estive em ${nomeDaCidade} e lembrei de você`)
}

//E
function somandoDoisNumeros(){
    let primeiroNumero = parseInt(prompt('Digite o primeiro Número:'));
    let segundoNumero = parseInt(prompt('Digite o segundo Múmero: '));
    let resultado = primeiroNumero + segundoNumero;
    alert(`${primeiroNumero} + ${segundoNumero} = ${resultado}`)
}

//Desafio2
//A
function exibirOla() {
    console.log('Olá Mundo');
}

exibirOla();

//B
function exibirOlaNome(nome) {
    console.log(`Olá ${nome}!`);
} 

exibirOlaNome("Alice");

//C
function calcularDobro(numero) {
    return numero * 2;
}

let resultadoDobro = calcularDobro(5);
console.log(resultadoDobro);

//D
function calcularMedia(a, b, c) {
    return(a + b + c) / 3;
}

let media = calcularMedia(4, 7, 10);
console.log(media);

//E
function encontrarMaior(a, b) {
    return a > b ? a : b;
}

let maiorNumero = encontrarMaior(15, 9);
console.log(maiorNumero);

//F
function quadrado(numero) {
    return numero * numero;
}

let resultado = quadrado(2);
console.log(resultado);

//Desafio3 
//A
function calculaIMC(altura, peso) {
    let imc = peso / (alturaMetros * alturaMetros);
}

//B
function calcularfatorial(numero) {
    if (numero === 0 || numero === 1){
        return 1;
    }
    let fatorial = 1;
    for (let i = 2; i <= numero; i++){
        fatorial*=i;
}
return fatorial;
}

//exemplo de uso
let numero = 5;
let resultado1 = calcularfatorial(numero);
console.log(`O fatorial de ${numero} é ${resultado1}`);

//C
function converterDolarParaReal(valorEmDolar) {
    let cotacaoDolar = 4.80;
    let valorEmReais = valorEmDolar * cotacaoDolar;
    return valorEmReais.toFixed(2);
}

//Exemplo de uso
let valorEmDolar = 50;
let valorEmReais = converterDolarParaReal(valorEmDolar);
console.log(`${valorEmDolar} dólares equivalem a R$ ${valorEmReais}`);

//D
function calcularAreaPerimetroSalaRetangular(altura, largura) {
    let area = altura * largura;
    let perimetro = 2* (altura + largura);

    console.log(`Área da sala: ${area} metros quadrados`);
    console.log(`Perímetro da sala: ${perimetro} metros`);
}

//Exemplo de uso
let altura = 3; //em metros
let largura = 5; // em metros
calcularAreaPerimetroSalaRetangular(altura, largura);

//E
function calcularAreaPerimetroSalaCircular(raio) {
    let area1 = Math.PI * raio *raio;
    let perimetro1 = 2 * Math.PI * raio;
    
    console.log(`Área da sala circular: ${area1.toFixed(2)} metros quadrados`);
    console.log(`Perímetro da sala circular: ${perimetro1.toFixed(2)} metros`);
}
//Exemplo de uso
let raio = 4; //em metros
calcularAreaPerimetroSalaCircular(raio);

//F
function mostrarTabuada(numero1) {
    for (let i = 1; i <= 10; i++) {
        let resultado2 = numero1 * i;
        console.log(`${numero1} x ${i} = ${resultado2}`)
    }
}
//Exemplo de uso
let numero1 = 7;
mostrarTabuada(numero);

//Desafio4
//A
let listagenerica = [];

//B
let linguagensDeProgramação = ['javaScript', 'C', 'C++', 'Kotlin', 'Python'];


//C
let linguagensDeProgramação1 = ['javaScript', 'C', 'C++', 'Kotlin', 'Python'];
linguagensDeProgramação.push('java', 'Ruby','GoLang');

//D
nomes = ['JavaScript', 'Python', 'Go'];
console.log(nomes[0]);

//E
nomes1 =['JavaScript', 'Python', 'Go'];
console.log(nomes[1]);
//F
nomes2 = ['JavaScript', 'Python', 'Go'];
console.log(nomes[2]);