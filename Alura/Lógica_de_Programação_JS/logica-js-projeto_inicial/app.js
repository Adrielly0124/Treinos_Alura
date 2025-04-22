alert("Boas vindas ao jogo do Número Secreto");
let numeroMaximo = 5000;
let numeroSecreto = parseInt(Math.random() * numeroMaximo + 1);
console.log(numeroSecreto);
let chute;
let tentativas = 1;

//enquato o chute não for igual ao número secreto 
//!= não igual - diferente
while (chute != numeroSecreto) {
    chute = prompt(`Escolha um número entre 1 e ${numeroMaximo}`);
//se o chute for  = ao numero secreto
    if(chute == numeroSecreto){
        break;
        } else {
        if (chute > numeroSecreto){
            alert(`O número secreto é menor que ${chute}`);
        } else {
            alert(`O número secreto é maior que ${chute}`);
        }
        // tentativas = tentativas + 1;
        tentativas ++;
    }
}

let palavrasTentativa = tentativas > 1 ? "tentativas" : "tentativa";
alert(`Isso aí, você descobriu o número secreto ${numeroSecreto} com ${tentativas} ${palavrasTentativa}`);

//if (tentativas > 1){
//  alert(`Isso aí, você descobriu o número secreto ${numeroSecreto} com ${tentativas} tentativas`);
//}else {
//   alert(`Isso aí, você descobriu o número secreto ${numeroSecreto} com ${tentativas} tentativa`);
//}

