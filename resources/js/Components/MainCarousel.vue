<template>
    <div class="relative">
        <Carousel
            @next="next"
            @prev="prev"
        >
            <CarouselSlide :index="0" :visibleSlide="visibleSlide" :direction="direction">
                <slot name="img_1"></slot>
            </CarouselSlide>
            <CarouselSlide :index="1" :visibleSlide="visibleSlide" :direction="direction">
                <slot name="img_2"></slot>
            </CarouselSlide>
            <CarouselSlide :index="2" :visibleSlide="visibleSlide" :direction="direction">
                <slot name="img_3"></slot>
            </CarouselSlide>
            <CarouselSlide :index="3" :visibleSlide="visibleSlide" :direction="direction">
                <slot name="img_4"></slot>
            </CarouselSlide>
            <CarouselSlide :index="4" :visibleSlide="visibleSlide" :direction="direction">
                <slot name="img_5"></slot>
            </CarouselSlide>
        </Carousel>

        <div class="absolute top-1/4 left-0 right-0">
            <Container>
                <p class="text-center font-light text-white xl:text-4xl md:text-3xl sm:text-2xl text-lg sm:mb-4 mb-2">We Come To You</p>
                <p class="text-center font-bold text-gray-200 xl:text-6xl md:text-5xl sm:text-4xl text-2xl">30-60 Minute Response</p>
                <h1 class="text-center font-light text-gray-200 xl:text-4xl md:text-3xl sm:text-2xl text-lg">Mobile Tyre Fitting - 24 Hours, 7 Days</h1>

                <div class="flex sm:flex-row flex-col items-center justify-center sm:space-x-6 sm:space-y-0 space-y-4 sm:mt-10 mt-6">
                    <a href="tel:07442980101" class="flex items-end font-bold xl:text-5xl md:text-4xl sm:text-3xl text-xl text-site-500 hover:text-site-300 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="xl:h-12 md:h-8 xl:w-12 md:h-8 sm:w-7 sm:h-7 w-6 h-6 mr-2" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                        <span>07442 980101</span>
                    </a>

                    <Link href="/mobile-tyre-fitting" class="block text-white bg-site-500 font-medium md:px-8 md:py-4 px-6 py-4 uppercase hover:bg-site-300 transition cursor-pointer">
                        Mobile Tyre Fitting
                    </Link>
                </div>
            </Container>
        </div>

        <BrandLogoCarousel />
    </div>
</template>

<script setup>
import { ref, watch } from "vue"
import { Link } from "@inertiajs/vue3"
import Container from "./Container.vue"
import Carousel from "./Carousel.vue"
import CarouselSlide from "./CarouselSlide.vue"
import BrandLogoCarousel from "./BrandLogoCarousel.vue"

const isSliding = ref(false);
const visibleSlide = ref(0);
const direction = ref('left');
const slidesLen = 5;

const interval = 10;
const slideTimer = ref(interval);

watch(slideTimer, () => {
    if(slideTimer.value === 0) {
        slideTimer.value = interval;
        next();
    }else{
        setTimeout(() => {
            slideTimer.value--;
        }, 1000);
    }
}, { immediate: true })

function next() {
    if(isSliding.value) return;

    if(visibleSlide.value >= slidesLen - 1) {
        visibleSlide.value = 0;
    }else {
        visibleSlide.value += 1
    }
    direction.value = 'left';
    setSliding();
}
function prev() {
    if(isSliding.value) return;

    if(visibleSlide.value <= 0) {
        visibleSlide.value = slidesLen - 1;
    }else {
        visibleSlide.value--
    }
    direction.value = 'right';
    setSliding();
}

function setSliding() {
    isSliding.value = true;
    setTimeout(() => {
        isSliding.value = false;
    }, 600)
}


</script>

<style scoped>

</style>
