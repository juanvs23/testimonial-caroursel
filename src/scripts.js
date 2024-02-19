import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/';
import 'swiper/swiper-bundle.mjs';

const testimonialCarousels = document.querySelectorAll('.testimonial-carousel');


if (testimonialCarousels) {
    swipers.forEach((testimonialCarousel) => {
        /**
         *     data-desktop="<?php echo $desktop; ?>"
        data-tablet="<?php echo $tablet; ?>"
        data-mobile="<?php echo $mobile; ?>"
        data-arrow="<?php echo $show_arrows; ?>"
        data-dots="<?php echo $show_dots; ?>"
        data-autoplay="<?php echo $autoplay; ?>"
        data-autoplayspeed="<?php echo $autoplay_speed; ?>">
         */
        const SlidesDesktop = testimonialCarousel.dataset.desktop;
        console.log(SlidesDesktop);
        const testmonialSwiper = new Swiper(testimonialCarousel, {
            modules: [Navigation, Pagination,Autoplay],
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            wrapperClass: 'testimonial-carousel-wrapper',
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonial-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.testimonial-button-next',
                prevEl: '.testimonial-button-prev',
            },
        })
    })
}