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

solutionTrigger = document.querySelector(".solution-trigger");
solutions = document.querySelectorAll(".solution");
secteurTrigger = document.querySelector(".secteur-trigger");
secteurs = document.querySelectorAll(".secteur");

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

navTrigger=document.querySelector(".nav-trigger");
mobileNav=document.querySelector(".mobile-nav");
mobileCloser=document.querySelector(".nav-closer");
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