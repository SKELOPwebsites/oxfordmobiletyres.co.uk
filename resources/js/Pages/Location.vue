<template>
    <Head>
        <title>Mobile Tyre Fitting | Same Day at Home, Work or Roadside | Oxford Mobile Tyre Fitting</title>
        <meta name="description" content="Mobile tyre fitting in and around Oxford. Get your tyres fitted at work, home or roadside on the same day.">
        <link rel="canonical" :href="'https://oxfordmobiletyrefitting.co.uk' + $page.url">
    </Head>


    <div class="relative">
        <div
            class="relative h-[65vh] max-h-[550px] md:min-h-[480px] sm:min-h-[400px] min-h-[350px] md:w-full overflow-hidden">
            <img
                src="/images/mobile-tyre-fitting-showcase.jpg"
                class="absolute inset-0 object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile Tyre Fitting"
            >
        </div>

        <div class="absolute top-1/4 left-0 right-0">
            <Container>
                <p class="sm:text-left text-center font-light text-white md:text-3xl sm:text-2xl text-lg sm:mb-4 mb-2">We Come To You</p>
                <p class="sm:text-left text-center font-bold text-gray-200 md:text-4xl sm:text-3xl text-xl">Mobile Tyre Fitting in {{location}}</p>
                <h1 class="sm:text-left text-center font-light text-gray-200 md:text-2xl sm:text-xl text-lg">30-60 Minute Response - 24 Hours, 7 Days</h1>

                <div class="flex items-center sm:justify-start justify-center sm:space-x-6 sm:space-y-0 space-y-4 md:mt-10 sm:mt-6 mt-3">
                    <a href="tel:07442980101" class="flex items-end font-bold md:text-4xl sm:text-3xl text-xl text-site-500 hover:text-site-300 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="md:h-8 md:h-8 sm:w-7 sm:h-7 w-6 h-6 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                        <span>07442 980101</span>
                    </a>
                </div>
            </Container>
        </div>

        <BrandLogoCarousel/>
    </div>

    <OurServices/>

    <Container class="pt-8 pb-8 md:mb-16 mb-8 sm:mt-8 mt-4">
        <div class="sm:px-0 px-4">
            <h1 class="font-montserrat font-bold md:text-3xl sm:text-2xl text-xl mb-2 uppercase">Mobile Tyre Fitting in <span class="text-site-700">{{ location }}</span></h1>
            <h2 class="md:text-xl sm:text-lg text-base mb-10">We know visiting a garage can use up valuable free time, so use our Mobile Tyre Fitting service instead</h2>

            <div class="md:grid grid-cols-12 gap-y-12 lg:gap-x-4 md:gap-x-8 md:space-y-0 space-y-12 md:mt-8 mt-4">
                <div class="col-span-7">
                    <p class="text-sm">
                        Looking for a reliable and efficient mobile tyre fitting service in <span class="font-semibold" v-text="location"></span>? Look no
                        further than <b>Oxford Mobile Tyre Fitting</b>. Our mobile tyre fitting service is designed to provide you with fast, convenient,
                        and hassle-free tyre fitting, wherever you are in <span class="font-semibold" v-text="location"></span>.
                    </p>
                    <br>
                    <p class="text-sm">
                        Our team of experienced technicians is equipped with state-of-the-art tools and equipment to ensure that your new tyres are fitted
                        safely and correctly. We only use premium quality tyres from trusted brands, so you can be confident in the quality and performance
                        of your new tyres.
                    </p>
                    <br>
                    <p class="text-sm flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                            <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Need mobile tyre services ASAP?, please call us on <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a> for a prompt service</span>
                    </p>
                </div>
                <div class="col-span-5">
                    <img src="/images/mobile-tyre-fitting.jpg" alt="">
                </div>

                <div class="col-span-5">
                    <img src="/images/emergency-mobile-tyre-fitting.jpg" alt="">
                </div>
                <div class="col-span-7">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Emergency Mobile Tyre Fitting</h2>
                    <br>
                    <p class="text-sm">
                        Our mobile tyre fitting service is available 24/7, so you can count on us anytime, anywhere. Whether you're at home, at work, or on
                        the road, we can come to you and fit your tyres quickly and efficiently. We understand that your time is valuable, which is why we
                        offer flexible appointments that work around your schedule.
                    </p>
                    <br>
                    <p class="text-sm">
                        At <b>Oxford Mobile Tyre Fitting</b>, we pride ourselves on our professionalism, reliability, and customer service. We are committed
                        to providing our customers in <span class="font-semibold" v-text="location"></span> with the best mobile tyre fitting service in the
                        area. Whether you need a puncture repair or new tyres fitted, we can help.
                    </p>
                    <br>
                    <p class="text-sm">
                        In addition to our mobile tyre fitting service, we also offer a mobile tyre repair service, so if you have a punctured or damaged tyre,
                        we can repair it on the spot. We also offer competitive pricing and a price match guarantee, so you can be sure that you're getting the
                        best value for your money.
                    </p>
                    <br>
                    <p class="text-sm">
                        So why wait? Contact us today to schedule an appointment for our mobile tyre fitting service in <span class="font-semibold" v-text="location"></span>,
                        and experience the convenience and quality that <b>Oxford Mobile Tyre Fitting</b> has to offer.
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
            </div>
        </div>
    </Container>
</template>

<script setup>
import {Head, Link} from '@inertiajs/vue3';
import BrandLogoCarousel from "../Components/BrandLogoCarousel.vue"
import OurServices from "../Components/OurServices.vue"
import Container from "../Components/Container.vue"

defineProps({
    location: String,
})
</script>

<style scoped>

</style>
