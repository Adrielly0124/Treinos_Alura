function sortear() {
    let quantidade = parseInt(document.getElementById('quantidade').value);
    let de = parseInt(document.getElementById('de').value);
    let  ate = parseInt(document.getElementById('ate').value);
    
    let sorteados = []; //Array
    let numero;

    for (let i = 0; i < quantidade; i++){ //loop for
        numero = obterNumeroAleatorio(de, ate);

        while (sorteados.includes(numero)) { //includes retorna true ou false
            numero = obterNumeroAleatorio9(de, ate);
        }
        sorteados.push(numero);
    }

    let resultado = document.getElementById('resultado');
    resultado.innerHTML =  `<label class="texto__paragrafo">Números sorteados: ${resultado} </label>`;
}

function obterNumeroAleatorio(min, max) {
    return Math.floor(Math.random() * (max-min + 1)) + min;
}

