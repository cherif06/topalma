import './bootstrap';
function setupMenu(link, drop) {
    drop.classList.add("menuDrop");
    let overMenu = false;
    let overDrop = false;

    link.addEventListener("mouseenter", () => {
        overMenu = true;
        drop.classList.add("comeUp");
        drop.classList.remove("menuDrop");
    });
    link.addEventListener("mouseleave", () => {
        overMenu = false;
        setTimeout(() => {
            if (!overDrop) {
                drop.classList.remove("comeUp");
                drop.classList.add("menuDrop");
            }
        }, 300);
    });
    drop.addEventListener("mouseenter", () => {
        overDrop = true;
        drop.classList.add("comeUp");
        drop.classList.remove("menuDrop");
    });
    drop.addEventListener("mouseleave", () => {
        overDrop = false;
        setTimeout(() => {
            if (!overMenu) {
                drop.classList.remove("comeUp");
                drop.classList.add("menuDrop");
            }
        }, 300);
    });
}
document.getElementById("link1").addEventListener("mouseenter",()=>{
    document.getElementById("link2Drop").classList.add("menuDrop");
})
document.getElementById("link2").addEventListener("mouseenter",()=>{
    document.getElementById("link1Drop").classList.add("menuDrop");
})
setupMenu(document.getElementById("link1"), document.getElementById("link1Drop"));
setupMenu(document.getElementById("link2"), document.getElementById("link2Drop"));
// ...existing code...

const solutionTrigger = document.querySelector(".solution-trigger");
const solutions = document.querySelectorAll(".solution");
const secteurTrigger = document.querySelector(".secteur-trigger");
const secteurs = document.querySelectorAll(".secteur");

solutionTrigger.addEventListener("click", ()=>{
    secteurs.forEach(element => {
        element.classList.add("hidden");
    });
    solutions.forEach(element => {
        element.classList.remove("hidden");
    });
})


secteurTrigger.addEventListener("click", ()=>{
    solutions.forEach(element => {
        element.classList.add("hidden");
    });
    secteurs.forEach(element => {
        element.classList.remove("hidden");
    });
})

const navTrigger = document.querySelector(".nav-trigger");
const mobileNav = document.querySelector(".mobile-nav");
const mobileCloser = document.querySelector(".nav-closer");
navTrigger.addEventListener("click",()=>{
    mobileNav.classList.remove('hidden');
    mobileCloser.classList.remove('hidden');
    navTrigger.classList.add("hidden");
})

mobileCloser.addEventListener('click',()=>{
    mobileNav.classList.add('hidden');
    mobileCloser.classList.add('hidden');
    navTrigger.classList.remove("hidden");
})

 
const swiper = new Swiper('.swiper', {
    loop:true,
    autoplay:{
        delay: 3000,
    },
    slidesPerView: 1,    
    spaceBetween: 30,

    breakpoints: {
        // when window width is >= 320px
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 480px
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        // when window width is >= 640px
        1200: {
            slidesPerView: 4,
            spaceBetween: 40
        },
    },
    navigation: {
        nextEl: '#next',
        prevEl: '#prev',
    },
});

