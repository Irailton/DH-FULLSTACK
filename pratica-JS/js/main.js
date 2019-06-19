// //Estruturas de decisão if 

// var diaDaSemana = 'domingo'

// if (diaDaSemana == 'domingo') {
//     console.log('Hoje é dia de Churrasco')
// } else {
//     console.log('Hoje não é dia de Churrasco')
// }

// diaDaSemana = 'sabado'

// // if ternário

// var diaDaSemana = 'segunda-feira'

// diaDaSemana == 'domingo'
//     ? console.log('Hoje é dia de Churrasco')
//     : console.log('Hoje não é dia de Churrasco')


// // switch case 
// var fruta = 'mamão'

// switch (fruta) {
//     case 'Abacaxi':
//         console.log('Me ajuda com este Abacaxi')
//         break;
//     case 'mamão':
//         console.log('É mamão com açucar')
//         break;
//     default:
//         console.log('É outra Fruta')
// }

window.onload = function(){
    confirm('Seja bem Vindo !')


var alterarAzul = document.querySelectorAll('.azul')


for (let i=0; i<alterarAzul.length; i++){
    alterarAzul[i].style.backgroundColor='yellow'
}

var alterarVermelho = document.querySelectorAll('.vermelho')

for (let i=0; i<alterarVermelho.length; i++){
    alterarVermelho[i].style.backgroundColor='brown'
    console.log('Classe na posição: '+[i]+' alterada')
    
}

var alterarGreen = document.querySelectorAll('.green')

for (let i=0; i<alterarGreen.length; i++){
    alterarGreen[i].style.backgroundColor='pink'
    console.log('Classe na posição: '+[i]+' alterada')
    if(i>=2){
        console.log('Encerrei as Alterações')
        break;
    }
}


var alterarFonte = document.querySelectorAll('.section-texto')

let contador = 0
while(contador < 10){ // duvidas no console sem o contador
    console.log('Contagem de numero'+contador)
    contador++
}


var alterarSubtitulo = document.querySelectorAll('.subtitulo')

var i=0
while(i<alterarSubtitulo.length){
    alterarSubtitulo[i].style.color='#8e44ad'
    console.log('Alterei o '+(i+1)+'º subtitulo')
    i++;
}


var alterarButton = document.getElementsByTagName('button')

var i=0
do{
    alterarButton[i].style='background-color:blue;text-transform:uppercase; border:none; font-size:1.2;border-radius:1.8em; padding:1em'
    i++
    console.log('Executei a acão '+i)
}while(i<5){
    console.log('Terminei as alterações')
}

var centralizarButton = document.querySelectorAll('.section-texto')

for( let i = 0; 1<centralizarButton.length; i++){
    centralizarButton[i].style.textAlign='center'
}


var titulo = document.getElementById('titulo')

titulo.style.display='none'


let vermelho = document.querySelector('.vermelho')

vermelho.style.backgroundColor='#000'


var subtitulo = document.querySelectorAll('.subtitulo')

for(let i = 0; i<subtitulo.length; i++){
    subtitulo[i].style='background-color: yellow; font-size:2em'
}


// Selecionando atributo

var atributo = document.querySelector('form')
atributo.hasAttributes;

// Removendo Atributo
atributo.removeAttribute('action')

// Inserindo Atributo

atributo.setAttribute('method', atributo)

atributo.setAttribute('class', 'vermelha')

// Criando novos elementos 
let li = document.createElement('LI')
let textoLi = document.createTextNode('Item da lista')
li.appendChild(textoLi)
document.getElementById('minhaLista').appendChild(li)

// Propriedade text content
let elemento = document.getElementById('link')

elemento.textContent='Eu sou um link'

// Usando o innerHTML
let elemento2 = document.querySelector('.footer')

elemento2.innerHTML= '<h5> Meu elemento html</h5>'


// removeChild 

let removeElemento = document.getElementById('elemento')
let elementoFilho = elemento.children.item('0')
elemento.removeChild(elementoFilho)
}


// Trabalhando com eventos 

var functionEvent = function (){
    alert('Aí você clicou em mim !')
}

elementoEvento.addEventListener('click', functionEvent)

var elementoEvento = document.querySelector('.btn')

elementoEvento.removeEventListener('click', functionEvent)  