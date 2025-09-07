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
// Mobile sidebar functionality
document.addEventListener('DOMContentLoaded', function() {
    const navTrigger = document.querySelector(".nav-trigger");
    const mobileSidebar = document.querySelector(".mobile-sidebar");
    const mobileOverlay = document.querySelector(".mobile-overlay");
    const mobileClosers = document.querySelectorAll(".nav-closer"); // Select all close buttons

    // Solution and secteur triggers for sidebar
    const solutionTrigger = document.querySelector(".solution-trigger");
    const solutionSubmenu = document.querySelector(".solution-submenu");
    const solutionArrow = document.querySelector(".solution-arrow");

    const secteurTrigger = document.querySelector(".secteur-trigger");
    const secteurSubmenu = document.querySelector(".secteur-submenu");
    const secteurArrow = document.querySelector(".secteur-arrow");

    // Check if elements exist before adding event listeners
    if (navTrigger && mobileSidebar && mobileOverlay) {
        // Open sidebar
        navTrigger.addEventListener("click", () => {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent body scroll
        });

        // Close sidebar function
        function closeSidebar() {
            mobileSidebar.classList.add('-translate-x-full');
            mobileOverlay.classList.add('hidden');
            document.body.style.overflow = 'auto'; // Restore body scroll
        }

        // Add event listeners to all close buttons
        mobileClosers.forEach(closer => {
            closer.addEventListener('click', closeSidebar);
        });

        // Close on overlay click
        mobileOverlay.addEventListener('click', closeSidebar);

        // Close on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeSidebar();
            }
        });
    }

    // Solution submenu toggle
    if (solutionTrigger && solutionSubmenu && solutionArrow) {
        solutionTrigger.addEventListener("click", () => {
            solutionSubmenu.classList.toggle("hidden");
            solutionArrow.classList.toggle("rotate-180");
            
            // Close secteur submenu if open
            if (secteurSubmenu && secteurArrow) {
                secteurSubmenu.classList.add("hidden");
                secteurArrow.classList.remove("rotate-180");
            }
        });
    }

    // Secteur submenu toggle
    if (secteurTrigger && secteurSubmenu && secteurArrow) {
        secteurTrigger.addEventListener("click", () => {
            secteurSubmenu.classList.toggle("hidden");
            secteurArrow.classList.toggle("rotate-180");
            
            // Close solution submenu if open
            if (solutionSubmenu && solutionArrow) {
                solutionSubmenu.classList.add("hidden");
                solutionArrow.classList.remove("rotate-180");
            }
        });
    }
});

 
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

