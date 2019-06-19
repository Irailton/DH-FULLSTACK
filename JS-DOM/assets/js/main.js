window.onload = function(){
    confirm('Seja bem vinda/bem vindo a  resolução de nossa pratica da aula 2 de JavaScript - DOM!\nAbra o console no DevTools do Chrome para ver todos os comentários impressos.\nE, claro, leia os comentários do main.js para entender mais a fundo todas as ações.\n\nAliás... aqui vai uma primeira dica \'extra\': use a barra invertida seguida de n para quebrar linhas no console! E barra invertida seguida de aspas para exibir aspas. =)')

    // Exercicios Iniciais - Seletores

    // ExercÃ­cio 1 - Ocultar ti­tulo h1 (id='cabecalho')

    var cabecalho = document.getElementById('cabecalho')// Selecionamos o elemento de id cabecalho e alteramos variavel cabecalho.
    cabecalho.style.display='none' // Alteramos o valor da propriedade de estilo display para none.
    

    // ExercÃ­cio 2 - Deixar a coruja em escala de cinza

    var coruja = document.querySelector('#lechuza')  // Selecionamos o elemento pelo id lechuza com querySelector().
    // Perceba que para o querySelector (e querySelectorAll) utilizamos a classe da mesma maneira que no css. Já com getElementById não, declaramos apenas o valor, sem o si­mbolo do tipo de seletor CSS.
    coruja.style.filter='grayscale(100%)'// Aplicamos o filtro grayscale no elemento.

    // ExercÃ­cio 3 - Deixar elementos input com fundo vermelho (percorrendo-os)

    var camposInput = document.querySelectorAll('input') // Definimos a variavel camposInput e atribuimos um array com cada campo input do documento.
    for( let i =0; i<camposInput.length; i++){  // Chamada do loop for, com i valendo 0 e - enquanto for menor que o comprimento do array camposInput, incrementa i.
        camposInput[i].style.backgroundColor ='red' // A cada elemento do array camposInput (selecionados pelo i que vai aumentando), aplicamos uma cor de fundo vermelho.
        // Observação: perceba que os nomes das propriedades do css que são divididas por hifens (como background-color), no JavaScript são unidas e aplica-se o camelCase (backgroundColor).
    }

    // Exerci­cios DOM - Seletores e Atributos

    // Exercicio 1 - Mostrar atributos do elemento de id copyright no console
    console.log('\n\n######## EXERCICIO 1 ########\n') // 'Marcação do Exercicio no Console'
    var copyright = document.querySelector('#copyright') //Atribuimos o elemento a  variavel.
    console.log(copyright.attributes) // Imprimimos os atributos no console. Clique em NamedNodeMap no console para ver os detalhes.

    // ExercÃ­cio 2 - Mostrar a URL de destino do link do Twitter no console
    console.log('\n\n######## EXERCICIO 2 ########\n') // 'Marcação do Exercicio no Console'
    var twitter = document.querySelector('.fa-twitter') // Selecionamos o elemento pela classe.
    console.log(twitter.getAttribute('href')) // Imprimimos o valor do atributo href, capturado com getAttribute.

    // Exerci­cio 3 - Mostrar a URL de destino do link do Facebook no console
    console.log('\n\n######## EXERCICIO 3 ########\n') // 'Marcacação do Exerci­cio no Console'
    var facebook = document.querySelector('.fa-facebook') // Importante: querySelector retorna a primeira ocorrência, que nos serve nesse caso. Se precisassemos selecionar um elemento específico através da classe,teriamos de utilizar o querySelectorAll (que retorna um array) e indicar qual o index (posição do elemento no array) desejado.

    console.log('O link do facebook:'+facebook.getAttribute('href')) // Nesse exemplo, inclui­mos a concatenação de um texto antes do valor da URL, são para aplicar a concatenação. Pense que isso pode facilitar na hora que estiver desenvolvendo. )

    // Exercicio 4 - Mudar valor do atributo href do link do YouTube
    console.log('\n\n######## EXERCICIO 4 ########\n') // 'Marcação do Exercicio no Console'
    var youTube = document.getElementsByClassName('fa-youtube')
     // Selecionando array de elementos com essa classe. Como poderia haver mais de um link para o canal do YouTube (e nesse caso precisamos modificar o href, nao somente ler e exibir), faremos uso do loop.
     if (youTube != null && youTube != undefined){ // Condicional para apenas aplicar a ação se a variavel youTube for declarada e possuir valor distinto de nulo.
         var i = 0;// Definimos nossa variavel para 'caminhar'/percorrer nossa array
         while(i< youTube.length){ // Loop while, enquanto a condição for verdadeira, rodará o loop.
            youTube[i].setAttribute('href', 'https://www.youtube.com/channel/UCRQdwmWMhTcqDFjPT4UPZYA')
            // Selecionamos o atributo href e aplicamos (setamos) um novo valor.
            i++ // incrementando o i, que determina o index do elemento dentro do array retornado de getElementsByClassName().
            console.log('\nAlteração de link do YouTube de número ' + i + ' para o link do canal da Digital House\n')  // Apenas para registrarmos quantos foram os links alterados.


         }
	
     }else{
         // caso não haja elementos com a classe fa-youtube ou caso a variavel youTube naõo tenha sido declarada...
        console.log('\nNão há elementos com classe fa-youtube.\n') // Imprimimos no console um alerta.

     }

        // Exercicio 5 - Verificar se o formulário possui o atributo action e imprimir na tela
        console.log('\n\n######## EXERCÍCIO 5 ########\n') // 'Marcação do ExercÃ­cio no Console'
        var formulario = document.querySelector('form') // Selecionamos a primeira tag form do documento (sabemos que não há uma no caso);
        formulario.hasAttribute('action')  // Estamos declarando um if ternário. Nessa linha temos a condição, deve retornar true ou false (booleano);
            ? console.log(formulario.getAttribute('action')) // Essa ação caso a condição retorne true (seja verdadeira); 
            : console.log('\n Não há Action no Formulário\n')

        // ExercÃ­cio 6 - Inserir o valor do atributo url do form num novo atributo href

        console.log('\n\n######## EXERCICIO 6 ########\n') // 'Marcação do ExercÃ­cio no Console'
        var destinoForm = formulario.getAttribute('url') // Capturamos o valor atual do atributo url;
        formulario.removeAttribute('url')
        formulario.setAttribute('action', destinoForm) // Aplicamos o valor capturado de url e aplicamos ao atributo criado href.
        console.log('\n Agora o action do form: '+destinoForm+'\n')  // Imprimindo no console um alerta avisando que agora o form possui action (como a verificação vem antes, ela não é impressa antes da adição do action).

        // Exercício 7 - Trocar a cor de h2 para vermelho
        console.log('\n\n######## EXERCÍCIO 7 ########\n') // 'Marcação do Exercicio no Console'
        var h2Tags = document.querySelectorAll('h2') // Selecionando todas as h2 em um array.
        // Poderiamos fazer novamente com o for...
        // for ( let i = 0; i<h2Tags.length; i++){
        //     h2Tags[i].style.color='red'
        // }

        // Mas vamos usar o while para variar um pouquinho.

        var i = 0  // Definindo i, que definirá o index do elemento dentro do array de elementos h2.
        while(i<h2Tags.length){ // Aplicando a condição do loop while (até que deixe de ser verdadeira, o loop roda).
            h2Tags[i].style='color:blue; text-transform:capitalize' // Redefinindo a cor do texto das tags h2 para vermelho. Perceba que ao invés de selecionarmos o atributo color, selecionamos o style então definimos a propriedade e o valor a serem editados. Também aplicamos uma segunda propriedade/valor. Ou seja, em alguns casos (se quiser alterar muitas propriedades ao mesmo tempo), vale a pena fazer dessa maneira ao invés de declarar cada propriedade separadamente.
            i++ // Incrementando i para que percorra o array.
            console.log('\nTag h2 de número ' + i + ' alterada\n')  // Alerta confirmando a alteração de cada h2 do documento.
        }

        /* E aí, qual você prefere? For ou while?
    Envie sua resposta no grupo do Whatsapp da turma e prove que leu todos os comentários! hehehe... */
    // Exercício 8 - Deixar a cor de todos os i­cones (classe icon) vermelha

    console.log('\n\n######## EXERCÍCIO 8 ########\n') // 'Marcação do Exercício no Console'
    var incones = document.querySelectorAll('icon') // Selecionamos todos os elementos com classe icon e recebemos um array
    var i =0 
    if(incones.length >=1 && incones != null && incones != undefined){  // Garantindo que não tente alterar a cor não se houver  elementos com a classe icons
        do{ // Agora vamos utilizar o loop do/while, onde a ação é executada e depois a verificação da condicional é feita (se deixar de ser verdadeira, não recomeça o loop).

            (i !=0) ? console.log("\nLoop número "+(i+1)+" (valor de i + 1, pois i começa em 0, para pegar o primeiro index do array).\nCondição validada, começando a executar a ação novamente.\n")  :console.log('\nLoop número 1\nComeçando a executar a ação pela primeira vez (antes de validar a condição)\n') // If ternário para alertar a primeira rodada do loop e então as demais, apontando que a condição foi validada como true/verdadeira.
            incones[i].style.backgroundColor='red' //Ação a ser feita no loop
            i++ // Incremento do array para avancarmos o index
            console.log("\nDepois a ação ter sido executada, agora i vale " + i + '\n') // Alertando o incremento de i dentro do loop
        }while (i < icones.length) // Condição a ser verificada depois a ação
		console.log("\nFim do loop do/while\n") // Alerta para avisar o fim do loop no console
	}
        


}
