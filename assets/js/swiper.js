 
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

