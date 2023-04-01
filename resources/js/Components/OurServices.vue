<template>
    <Container class="pt-12" id="our-services">
        <p class="text-center text-2xl font-montserrat font-bold mb-8">Our Services</p>
        <div class="w-full mx-auto grid xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 xl:gap-x-4 lg:gap-x-3 gap-x-4 xl:gap-y-0 gap-y-3 items-center justify-center">
            <Link
                v-for="service in services"
                class="col-span-1"
                :class="$page.component === service.component ? 'pointer-events-none' : ''"
                :href="service.href"
            >
                <div class="group w-full 2xl:h-48 md:h-44 h-36 relative border border-gray-600 rounded flex flex-col items-center justify-center hover:shadow-xl transition duration-300 ease-in-out">
                    <img class="absolute inset-0 w-full h-full brightness-[0.5] object-cover object-center" :src="service.image_url" :alt="service.name">
                    <div
                        class="z-10 w-full h-full flex flex-col items-center justify-center group-hover:bg-site-500/30 transition duration-300 ease-in-out"
                        :class="$page.component === service.component ? 'bg-site-500/20' : ''"
                    >
                        <div
                            class="group-hover:-translate-y-1 transition duration-300 ease-in-out"
                            :class="$page.component === service.component ? '-translate-y-1' : ''"
                        >
                            <h2 class="md:text-lg sm:text-base text-lg text-center text-white whitespace-nowrap font-montserrat font-bold uppercase" v-text="service.name"></h2>
                            <h2 class="md:text-sm sm:text-xs text-sm text-center text-gray-300 whitespace-nowrap font-montserrat" v-text="service.desc"></h2>
                        </div>
                    </div>
                </div>
            </Link>
        </div>
    </Container>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"
import Container from "./Container.vue"

const services = [
    {
        image_url: '/images/services/mobile-tyre-fitting.jpg',
        name: 'Mobile Tyre Fitting',
        desc: 'At home, work or roadside',
        href: '/mobile-tyre-fitting',
        component: 'MobileTyreFitting'
    },
    {
        image_url: '/images/services/mobile-tyre-repair.jpg',
        name: 'Mobile Tyre Repair',
        desc: 'Securely seal your punctured tyre',
        href: '/mobile-tyre-repair',
        component: 'MobileTyreRepair'
    },
    {
        image_url: '/images/services/van-mobile-tyre-fitting.jpg',
        name: 'Van Mobile Tyre Fitting',
        desc: 'Van tyres fitted at your convenience',
        href: '/van-mobile-tyre-fitting',
        component: 'VanMobileTyreFitting'
    },
    {
        image_url: '/images/services/branded-tyres.jpg',
        name: 'Branded Tyres',
        desc: 'High quality and performant tyres',
        href: '/branded-tyres',
        component: 'BrandedTyres'
    },
]
</script>

<style scoped>

</style>
