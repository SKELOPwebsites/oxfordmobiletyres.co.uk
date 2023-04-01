<template>
    <Head>
        <title>Mobile Tyre Fitting | 30-60 Minute Response | Oxford Mobile Tyre Fitting</title>
        <meta name="description" content="Oxford Mobile Tyre Fitting offers same day, 7 days a week emergency mobile tyre fitting service in and around Oxford.">
        <link rel="canonical" href="https://oxfordmobiletyrefitting.co.uk/">
    </Head>


    <MainCarousel>
        <template v-slot:img_1>
            <img
                src="/images/carousel/1.webp"
                class="object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile tyre fitting"
            >
        </template>
        <template v-slot:img_2>
            <img
                src="/images/carousel/2.jpg"
                class="object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile tyre repair"
            >
        </template>
        <template v-slot:img_3>
            <img
                src="/images/carousel/3.jpg"
                class="object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile tyre repair"
            >
        </template>
        <template v-slot:img_4>
            <img
                src="/images/carousel/4.jpg"
                class="object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile tyre repair"
            >
        </template>
        <template v-slot:img_5>
            <img
                src="/images/carousel/5.jpg"
                class="object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile tyre repair"
            >
        </template>
    </MainCarousel>

    <OurServices/>

    <Container class="pt-8">
        <div class="flex lg:flex-row flex-col-reverse lg:space-y-0 items-start justify-between">
            <div class="lg:w-1/2 w-full lg:mt-0 mt-10 flex items-center lg:justify-start justify-center">
                <div class="">
                    <p class="xl:text-3xl sm:text-2xl text-xl font-semibold font-montserrat">Why choose mobile tyre fitting?</p>

                    <ul class="xl:pl-4 pl-0 mt-10 space-y-4">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-6 sm:h-6 w-4 h-4 mr-2 mt-1 shrink-0" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="xl:text-xl sm:text-lg text-base">Cost-effective solution for your tyre needs</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-6 sm:h-6 w-4 h-4 mr-2 mt-1 shrink-0" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="xl:text-xl sm:text-lg text-base">Quick response, so you don't wait for breakdown services</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-6 sm:h-6 w-4 h-4 mr-2 mt-1 shrink-0" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="xl:text-xl sm:text-lg text-base">Keeps you and your car safe</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="sm:w-6 sm:h-6 w-4 h-4 mr-2 mt-1 shrink-0" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                            </svg>
                            <span class="xl:text-xl sm:text-lg text-base">Fitted at your convenience, you choose the time & place.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <AreasWeCover :coverage="coverage" class="lg:w-1/2 w-full"/>
        </div>
    </Container>

    <Container class="pt-8 pb-8 md:mb-16 mb-8 sm:mt-8 mt-4" id="about">
        <div class="sm:px-0 px-4">

            <h1 class="font-montserrat font-bold md:text-3xl sm:text-2xl text-xl mb-2 uppercase">Welcome to <span class="text-site-700">Oxford Mobile Tyre Fitting</span></h1>
            <h2 class="md:text-xl sm:text-lg text-base mb-10">We bring the garage to your car, so you don't have to.</h2>
            <p class="text-sm">
                Welcome to <b>Oxford Mobile Tyre Fitting</b>, your trusted partner for mobile tyre fitting and repair services. We are dedicated to providing fast,
                reliable, and professional assistance to drivers in need, whether you're stranded on the road or at home.
            </p>
            <br>
            <p class="text-sm">
                Our team of experienced technicians is equipped with state-of-the-art tools and equipment to deliver high-quality services at your convenience.
                With our mobile tyre fitting service, we can come to your location and fit your tyres quickly and efficiently, saving you time and hassle.
                We also offer mobile tyre repair services, so if you have a flat tyre, we can fix it on the spot and get you back on the road in no time.
            </p>
            <br>

            <div class="md:grid grid-cols-12 gap-y-12 lg:gap-x-4 md:gap-x-8 md:space-y-0 space-y-12 md:mt-8 mt-4">
                <div class="md:hidden block">
                    <img src="/images/24-hour-assistance.jpg" alt="">
                </div>

                <div class="col-span-7">
                    <h2 class="lg:text-3xl text-2xl font-semibold">24 Hour Assistance</h2>
                    <br>
                    <p class="text-sm">
                        At <b>Oxford Mobile Tyre Fitting</b>, we understand the importance of safety on the road, which is why we only use premium quality tyres
                        from trusted brands to ensure your safety and peace of mind. Our services are available 24/7, so you can count on us anytime, anywhere.
                    </p>
                    <br>
                    <p class="text-sm">
                        Whether you're a busy professional, a family on the go, or just someone who wants the convenience of having your tyres fitted or repaired
                        at your location, <b>Oxford Mobile Tyre Fitting</b> is here to help. Contact us today to schedule an appointment or learn more about our services.
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
                <div class="md:block hidden col-span-5">
                    <img src="/images/24-hour-assistance.jpg" alt="Image of a car at night on the road, with a flat tyre, waiting for Oxford Mobile Tyre Fitting to arrive.">
                </div>

                <div class="col-span-5">
                    <img src="/images/high-quality-tyres.jpg" alt="">
                </div>
                <div class="col-span-7">
                    <h2 class="lg:text-3xl text-2xl font-semibold">Ultimate Performance Tyres</h2>
                    <br>
                    <p class="text-sm">
                        When it comes to choosing the right tyres for your vehicle, there are many options to consider, including budget tyres, mid-range tyres,
                        and premium tyres. Branded tyres fall into the premium category, and for good reason.
                    </p>
                    <br>
                    <p class="text-sm">
                        Branded tyres are manufactured by reputable companies that have a long-standing reputation for quality, innovation, and performance.
                        These companies invest heavily in research and development to create tyres that meet the specific needs of different types of vehicles and driving conditions.
                    </p>
                    <br>
                    <p class="text-sm">
                        At <b>Oxford Mobile Tyre Fitting</b>, we only stock and fit branded tyres from leading manufacturers such as Michelin, Bridgestone, Goodyear, and Pirelli.
                        We understand the importance of quality and performance, and we are committed to delivering the best products and services to our customers.
                    </p>
                    <br>
                    <p class="text-sm">
                        If you're looking for branded tyres that offer exceptional performance, durability, and safety, look no further than <b>Oxford Mobile Tyre Fitting</b>. Our team of
                        experienced technicians can help you choose the right tyres for your vehicle and fit them quickly and efficiently, so you can get back on the road with confidence.
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
import MainLayout from '../Layouts/MainLayout.vue';
import { Head } from '@inertiajs/vue3';
import MainCarousel from "../Components/MainCarousel.vue"
import OurServices from "../Components/OurServices.vue"
import AreasWeCover from "../Components/AreasWeCover.vue"
import Container from "../Components/Container.vue"

defineProps({
    coverage: {
        type: Object,
        required: true,
    },
})
</script>
