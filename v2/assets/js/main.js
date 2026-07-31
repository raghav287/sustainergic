document.addEventListener("DOMContentLoaded", function () {

    const testimonialSwiperEl = document.querySelector(".testimonials-swiper");
    if (testimonialSwiperEl && typeof Swiper !== "undefined") {
        new Swiper(testimonialSwiperEl, {
            slidesPerView: 1,
            spaceBetween: 28,
            speed: 700,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: ".testimonial-swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".testimonial-swiper-next",
                prevEl: ".testimonial-swiper-prev"
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            breakpoints: {
                576: {
                    slidesPerView: 1,
                    spaceBetween: 22
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 22
                },
                991: {
                    slidesPerView: 2,
                    spaceBetween: 26
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 28
                }
            }
        });
    }

    const header = document.querySelector(".main-header");
    const toggle = document.getElementById("mobileToggle");
    const navbar = document.getElementById("navbar");

    function closeMenu() {
        navbar.classList.remove("active");
        toggle.classList.remove("active");
        toggle.setAttribute("aria-expanded", "false");
        document.querySelectorAll(".dropdown.active").forEach(function (d) {
            d.classList.remove("active");
        });
        document.body.style.overflow = "";
    }

    function openMenu() {
        navbar.classList.add("active");
        toggle.classList.add("active");
        toggle.setAttribute("aria-expanded", "true");
        if (window.innerWidth <= 991) {
            document.body.style.overflow = "hidden";
        }
    }

    toggle.addEventListener("click", function (e) {
        e.stopPropagation();
        if (navbar.classList.contains("active")) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    window.addEventListener("scroll", function () {
        if (window.scrollY > 80) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    });

    document.querySelectorAll(".dropdown > a").forEach(function (item) {
        item.addEventListener("click", function (e) {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                var parentDropdown = this.parentElement;
                var wasActive = parentDropdown.classList.contains("active");
                document.querySelectorAll(".dropdown.active").forEach(function (d) {
                    if (d !== parentDropdown) {
                        d.classList.remove("active");
                    }
                });
                if (wasActive) {
                    parentDropdown.classList.remove("active");
                } else {
                    parentDropdown.classList.add("active");
                }
            }
        });
    });

    document.addEventListener("click", function (e) {
        if (window.innerWidth <= 991 && navbar.classList.contains("active")) {
            if (!navbar.contains(e.target) && !toggle.contains(e.target)) {
                closeMenu();
            }
        }
    });

    document.querySelectorAll('.nav-menu > li > a:not(.dropdown > a)').forEach(function (link) {
        link.addEventListener("click", function () {
            if (window.innerWidth <= 991) {
                closeMenu();
            }
        });
    });

    document.querySelectorAll(".dropdown-menu a").forEach(function (link) {
        link.addEventListener("click", function () {
            if (window.innerWidth <= 991) {
                closeMenu();
            }
        });
    });

    var resizeTimer;
    window.addEventListener("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if (window.innerWidth > 991) {
                closeMenu();
            }
        }, 150);
    });

    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && navbar.classList.contains("active")) {
            closeMenu();
        }
    });

});
