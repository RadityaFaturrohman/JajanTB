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

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        } else{
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.anim');
hiddenElements.forEach((el) => observer.observe(el));