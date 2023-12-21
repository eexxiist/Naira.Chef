function showMorty(e){
    console.log(e.target.getAttribute('data-visible'))
    if(e.target.getAttribute('data-visible') === 'false'){
        e.target.setAttribute('data-visible', 'true')

        var randomParam = '?t=' + new Date().getTime();

        e.target.style.backgroundImage = 'url(https://media1.tenor.com/m/-9ObxBks2acAAAAd/%D1%80%D0%B8%D0%BA-%D1%80%D0%B8%D0%BA-%D0%B8-%D0%BC%D0%BE%D1%80%D1%82%D0%B8.gif' + randomParam + ')';
    }else{
        e.target.setAttribute('data-visible', 'false')

        e.target.style.backgroundImage = 'none';
    }
}



// const en_btn = document.getElementsByClassName('en_lang')
// const ru_btn = document.getElementsByClassName('rus_lang')

// ru_btn[0].addEventListener('click', () => {
//     console.log('Была нажата кнопка переключения на английский')
//     for(let i = 0; i < ru_btn.length; i++){
//         ru_btn[i].style.position = 'absolute'
//         ru_btn[i].style.left = '-1000px'
//         en_btn[i].style.position = 'static'
//     }
// }) 

// en_btn[0].addEventListener('click', () => {
//     console.log('Была нажата кнопка переключения на русский')
//     for(let i = 0; i < ru_btn.length; i++){
//         en_btn[i].style.position = 'absolute'
//         en_btn[i].style.left = '-1000px'
//         ru_btn[i].style.position = 'static'
//     }
// })