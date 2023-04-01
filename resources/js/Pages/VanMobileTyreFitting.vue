<template>
    <Head>
        <title>Van Mobile Tyre Fitting | Same Day at Home, Work or Roadside | Oxford Mobile Tyre Fitting</title>
        <meta name="description" content="We also fit van tyres at your location. Get your van tyres fitted on the same day of your call.">
        <link rel="canonical" href="https://oxfordmobiletyrefitting.co.uk/van-mobile-tyre-fitting">
    </Head>


    <div class="relative">
        <div class="relative h-[65vh] max-h-[550px] md:min-h-[480px] sm:min-h-[400px] min-h-[350px] md:w-full overflow-hidden">
            <img
                src="/images/van-mobile-tyre-fitting-showcase.jpg"
                class="absolute inset-0 object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile Tyre Fitting"
            >
        </div>

        <div class="absolute top-1/4 left-0 right-0">
            <Container>
                <p class="sm:text-left text-center font-light text-white md:text-3xl sm:text-2xl text-lg sm:mb-4 mb-2">We Come To You</p>
                <p class="sm:text-left text-center font-bold text-gray-200 md:text-5xl sm:text-4xl text-2xl">30-60 Minute Response</p>
                <h1 class="sm:text-left text-center font-light text-gray-200 md:text-3xl sm:text-2xl text-lg">Van Mobile Tyre Fitting - 24 Hours, 7 Days</h1>

                <div class="flex items-center sm:justify-start justify-center sm:space-x-6 sm:space-y-0 space-y-4 md:mt-10 sm:mt-6 mt-3">
                    <a href="tel:07442980101" class="flex items-end font-bold md:text-4xl sm:text-3xl text-xl text-site-500 hover:text-site-300 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:h-8 md:h-8 sm:w-7 sm:h-7 w-6 h-6 mr-2" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                        <span>07442 980101</span>
                    </a>
                </div>
            </Container>
        </div>

        <BrandLogoCarousel />
    </div>

    <OurServices />

    <Container class="pt-8 pb-8 md:mb-16 mb-8 sm:mt-8 mt-4">
        <div class="sm:px-0 px-4">
            <h1 class="font-montserrat font-bold md:text-3xl sm:text-2xl text-xl mb-2 uppercase"><span class="text-site-700">Van Mobile Tyre Fitting</span></h1>
            <h2 class="md:text-xl sm:text-lg text-base mb-10">Yes, you heard right. Get your van tyres fitted at your convenience!</h2>

            <div class="md:grid grid-cols-12 gap-y-12 lg:gap-x-4 md:gap-x-8 md:space-y-0 space-y-12 md:mt-8 mt-4">
                <div class="col-span-7">
                    <p class="text-sm">
                        At <b>Oxford Mobile Tyre Fitting</b>, we understand that commercial vehicles are a lifeline for businesses, and downtime due to a
                        flat tyre can be costly and disruptive. That's why we offer a reliable and efficient mobile van tyre fitting service, where we come
                        to your location and fit your new tyres on the spot.
                    </p>
                    <br>
                    <p class="text-sm">
                        Our mobile van tyre fitting service is designed to be fast, convenient, and hassle-free. We understand that your time is valuable,
                        which is why we offer flexible appointments that work around your schedule. Whether you have one van or a fleet of vehicles, we can
                        come to you and fit your tyres within a matter of minutes.
                    </p>
                    <br>
                    <p class="text-sm">
                        Our team of experienced technicians is equipped with state-of-the-art tools and equipment to ensure that your new tyres are fitted
                        safely and correctly. We only use premium quality tyres from trusted brands, so you can be confident in the quality and performance of your new tyres.
                    </p>
                    <br>
                    <p class="text-sm">
                        Our mobile van tyre fitting service is available 24/7, so you can count on us anytime, anywhere. Whether you're at your place of
                        business, on the road, or at a job site, we can come to you and fit your tyres quickly and efficiently.
                    </p>
                    <br>
                    <p class="text-sm">
                        At <b>Oxford Mobile Tyre Fitting</b>, we are committed to providing our customers with the best mobile van tyre fitting service
                        in the area. We pride ourselves on our professionalism, reliability, and customer service, and we are confident that you will
                        be satisfied with our services.
                    </p>
                    <br>
                    <div class="flex items-center sm:justify-start justify-center sm:space-x-3 space-x-2">
                        <span class="sm:text-xl text-base font-bold text-site-500">CALL US NOW</span>
                        <a href="tel:07442980101" class="flex items-center justify-center text-white bg-site-500 sm:px-4 px-3 sm:py-3 py-2 uppercase hover:bg-site-300 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="sm:w-4 w-3 sm:h-4 w-3 mr-2" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                            <span class="font-semibold sm:text-base text-sm">07442 980101</span>
                        </a>
                    </div>
                </div>
                <div class="col-span-5">
                    <img src="/images/van-mobile-tyre-fitting.jpg" alt="Commercial or van tyres are fitted using the mobile tyre fitting service.">
                </div>
            </div>
        </div>
    </Container>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import BrandLogoCarousel from "../Components/BrandLogoCarousel.vue"
import OurServices from "../Components/OurServices.vue"
import Container from "../Components/Container.vue"

</script>

<style scoped>

</style>
