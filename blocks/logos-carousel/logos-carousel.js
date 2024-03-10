(() => {
    if (typeof Swiper === 'undefined') return false;
    if (!document.querySelectorAll('.logos-carousel-list').length) return false;

    document.querySelectorAll('.logos-carousel-list').forEach((carousel) => {
        carousel.dataset.settings = JSON.stringify({
            loop: true,
            speed: 8000,
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
            },
        });

    });

})();