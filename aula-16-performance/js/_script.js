window.onload = function(){
console.log('Arquivo iniciado!\n')

console.log('Arquivo carregado')

var cabecalho = document.getElementById('meuHeader')
console.log(cabecalho)

cabecalho.onclick = function(){
    alert('Eu sou cabecalho')
}

var alertarRodape = function(){
    alert('Eu sou o rodapé\n Não clique aqui!')
}

var rodape = document.querySelector('#meuFooter')
console.log(rodape)

rodape.addEventListener('click', alertarRodape)

rodape.removeEventListener('click', alertarRodape)


var meuLink = document.createElement('a')
meuLink.style.backgroundColor='pink'
// meuLink.scrollHeight.minhaHeight ='20px'
var meuLinkText = document.createTextNode('Me clica!')
var primeiraSessao = document.querySelector('#section1')

primeiraSessao.appendChild(meuLink)

// meuLink.textContent = 'meuLinkText'
meuLink.appendChild(meuLinkText)
meuLink.setAttribute('class', 'col-12')
meuLink.setAttribute('href', 'https://google.com')

var impedirAcesso = function(evento){
    event.preventDefault()
}

meuLink.addEventListener('click', impedirAcesso)

var codigoPromo = this.prompt('Qual seu código')

if(codigoPromo=='123'){
    meuLink.removeEventListener('click',impedirAcesso )
}else{
    alert('Você não tem acesso.')
}


}