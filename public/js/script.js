const nav = document.querySelector('nav');
let lastScroll = 10;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset

    if (currentScroll <= 0){
        nav.classList.remove('scrolled')
    }

    if (currentScroll > lastScroll){
        nav.classList.add('scrolled')
    }else{
        nav.classList.remove('scrolled')
    }
    
}) 