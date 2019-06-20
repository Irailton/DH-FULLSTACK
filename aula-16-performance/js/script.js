window.onload = function(){

    var header = document.querySelector('header')
    var divUm = document.querySelector('#content-um')
    var divDois = document.querySelector('#content-dois')
    var divTres = document.querySelector('#content-tres')
    var footer = document.querySelector('footer')

    header.addEventListener('mouseover', function(){
        header.style.backgroundColor='blue'
        header.style.transition='all 3s ease-in-out'
    })

    header.addEventListener('mouseout', function(){
        header.style = 'background-color: aquamarine; transition: all 2s ease-out'
    })

    divUm.addEventListener('mouseover', function(){
        divUm.classList.remove('col-6')
        divUm.classList.add('col-12')
        divUm.style.transition = 'all 1s'
        divDois.style.display = 'none'
        // divDois.style.opacty = 1;
    })

    divUm.addEventListener('mouseout', function(){
        divUm.classList.remove('col-12')
        divUm.classList.add('col-6')
        divUm.style.transition = 'all 1s'
        divDois.style.display = 'initial'
        setTimeout(function(){
            divDois.style.display = 'initial'
        }, 1500)
        // divDois.style.display
    })
}