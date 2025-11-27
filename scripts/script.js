const swiperBlog = new Swiper (".swiper-blog.swiper", {
    slidesPerView: 1,
    loop: true,
   pagination: {
        el: ".swiper-blog-pagination"
   }, 
   navigation: {
        prevEl: ".swiper-blog-prev",
        nextEl: ".swiper-blog-next",
   },
    breakpoints: {
        1192: {
            slidesPerView: 3
        },
        720: {
            slidesPerView: 2
        }
    }
});

const swiperPitchbar = new Swiper (".swiper-pitchbar.swiper", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 3000,
    },
    breakpoints: {
        1192: {
            slidesPerView: 4
        },
        720: {
            slidesPerView: 2
        }
    }
});

// Clica no abrir menu
$("#open-mobile-menu").on("click", function() {

    // Abre o menu
    $("#mobile-menu").addClass("active");

    // Acessibilidade 
    $(this).attr("aria-expanded", true);
    $("#close-mobile-menu").attr("aria-expanded" , true);
    $("#mobile-menu").attr("aria-hidden", false);
});

// Clica no fechar menu
$("#mobile-menu").on("click", function(event) {

    // Verifica se o click foi apenas no pai e n o no filho
    if (event.target === this) {
        closeMenu();
    }
});

$("#close-mobile-menu").on("click", closeMenu);


function closeMenu() {
    // Abre o menu
    $("#mobile-menu").removeClass("active");

    // Acessibilidade 
    $("#open-mobile-menu").attr("aria-expanded", false);
    $("#close-mobile-menu").attr("aria-expanded" , false);
    $("#mobile-menu").attr("aria-hidden", true);
}


$(".blog-categories-link").on("click", function(e) {
    $("#blog-form").trigger("submit");
});