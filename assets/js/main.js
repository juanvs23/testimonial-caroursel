const testimonialCarousels = document.querySelectorAll('.testimonial-carousel');

(function(){
    
if (testimonialCarousels) {
    testimonialCarousels.forEach((testimonialCarousel) => {
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
      const SlidesTablet = testimonialCarousel.dataset.tablet;
      const SlidesMobile = testimonialCarousel.dataset.mobile;
      const SlideLoop = testimonialCarousel.dataset.loop == 'true' ? true : false;
      const speed = testimonialCarousel.dataset.speed;
      const autoPlaySpeed = testimonialCarousel.dataset.autoplayspeed;
      const SlideAutoPlay = testimonialCarousel.dataset.autoplay == 'true' ? {delay: autoPlaySpeed} : false;
      const paginationButton = testimonialCarousel.dataset.pagination == 'true' ?  {
        el: '.testimonial-pagination',
        clickable: true,
    } : false;
    const navigationButtons = testimonialCarousel.dataset.navigation == 'true'?  {
        nextEl: '.testimonial-button-next',
        prevEl: '.testimonial-button-prev',
    }:false

        console.log(typeof testimonialCarousel.dataset.loop);
        const testimonialSwiper = new Swiper('.testimonial-carousel', {
           // modules: [Navigation, Pagination, Autoplay,FreeMode],
            loop: SlideLoop ,
            freeMode: true,
            observeParents: true,
          
            observeSlideChildren: true,
            pauseOnMouseEnter: true,
           
            direction: 'horizontal',
            speed: speed,
            autoplay:SlideAutoPlay,
            breakpoints: {
                1200:{
                    slidesPerView: SlidesDesktop
                },
                768:{
                    slidesPerView: SlidesTablet
                },
                0:{
                    slidesPerView: SlidesMobile
                }
            },
            autoplay:SlideAutoPlay,
            pagination:paginationButton,
            navigation:navigationButtons,
        })
    }) 
}
})()