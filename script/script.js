$(document).ready(() => {
    $('.menuOpen').click(() => {
        $('.menu-wrapper').addClass('active')
    })
    $('.menuClose').click(() => {
        $('.menu-wrapper').removeClass('active')
    })

    $(document).scroll(() => {
        $('.navbar').toggleClass('active', $(this).scrollTop() > $('.navbar').height())
    })
})

var swiper = new Swiper(".mySwiperHome", {
    slidesPerView: "auto",
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
    },
    autoplay: {
        delay: 2000,
    },
});

var swiper = new Swiper(".mySwiperProduct", {
    slidesPerView: "auto",
    spaceBetween: 40,
    navigation: {
        nextEl: ".bxs-chevron-right-circle",
        prevEl: ".bxs-chevron-left-circle",
    },
    breakpoints: {
        350: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 40,
        }
    }
});

var swiper = new Swiper(".mySwiperTesti", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 2000,
    },
});