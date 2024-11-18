let sideBar = document.querySelector(".side-bar"),
    sideOpen = document.querySelector("#menu-btn"),
    sideClose = document.querySelector("#close-side-bar");

sideOpen.addEventListener("click", () => {
    sideBar.classList.toggle("active");
});

sideClose.addEventListener("click", () => {
    sideBar.classList.remove("active");
});

let searchForm = document.querySelector(".search-form"),
    searchBtn = document.querySelector("#search-btn");

searchBtn.addEventListener("click", () => {
    searchForm.classList.toggle("active");
});

window.addEventListener("scroll", () => {
    sideBar.classList.remove("active");
    searchForm.classList.remove("active");
});

let accordions = document.querySelectorAll(".accordion-container .accordion");

accordions.forEach((accordion) => {
    accordion.addEventListener("click", () => {
        accordion.classList.toggle("active");
    });
});

let swiper_home = new Swiper(".home-slider", {
    loop: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let swiper_reviews = new Swiper(".review-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
        450: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
});
