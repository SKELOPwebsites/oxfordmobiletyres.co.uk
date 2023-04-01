<template>
    <Head>
        <title>High Quality and Performant Tyres Available | Oxford Mobile Tyre Fitting</title>
        <meta name="description" content="We stock high quality and performant tyres from the leading tyre manufacturers">
        <link rel="canonical" href="https://oxfordmobiletyrefitting.co.uk/branded-tyres">
    </Head>


    <div class="relative">
        <div class="relative h-[65vh] max-h-[550px] md:min-h-[480px] sm:min-h-[400px] min-h-[350px] md:w-full overflow-hidden">
            <img
                src="/images/branded-tyres-showcase.jpg"
                class="absolute inset-0 object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile Tyre Fitting"
            >
        </div>

        <div class="absolute top-1/4 left-0 right-0">
            <Container>
                <p class="sm:text-left text-center font-light text-white md:text-3xl sm:text-2xl text-lg sm:mb-4 mb-2">We Come To You</p>
                <p class="sm:text-left text-center font-bold text-gray-200 md:text-5xl sm:text-4xl text-2xl">30-60 Minute Response</p>
                <h1 class="sm:text-left text-center font-light text-gray-200 md:text-3xl sm:text-2xl text-lg">Large range of quality brands available</h1>

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
            <h1 class="font-montserrat font-bold md:text-3xl sm:text-2xl text-xl mb-2 uppercase"><span class="text-site-700">Branded Tyres</span></h1>
            <h2 class="md:text-xl sm:text-lg text-base mb-10">We stock high quality and performant tyres from leading tyre brands</h2>

            <div class="md:grid grid-cols-12 gap-y-12 lg:gap-x-4 md:gap-x-8 md:space-y-0 space-y-12 md:mt-8 mt-4">
                <div class="col-span-7">
                    <p class="text-sm">
                        <b>Oxford Mobile Tyre Fitting</b> branded tyres are the ideal choice for those who value safety, performance, and quality.
                        From high-performance sports tyres to reliable all-season options, our selection of leading tyre brands has something to suit every need and budget.
                    </p>
                    <br>
                    <p class="text-sm">
                        Branded tyres are built to the highest standards, using cutting-edge technology and materials to provide superior handling, grip, and durability.
                        Whether you want better fuel efficiency, a smoother and quieter ride, or better handling in bad weather,
                        you can find the right tyre for your needs among our branded tyre options.
                    </p>
                    <br>
                    <p class="text-sm">
                        With Oxford Mobile Tyre Fitting, you can have peace of mind knowing that you're investing in high-quality tyres that will improve your vehicle's safety,
                        performance, and lifespan. So, for your next tyre change, why not go with branded tyres from Oxford Mobile Tyre Fitting and see the difference that quality makes?
                    </p>
                </div>
                <div class="col-span-5">
                    <img src="/images/branded-tyres.jpg" alt="">
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
