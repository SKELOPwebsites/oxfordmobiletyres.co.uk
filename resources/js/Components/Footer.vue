<template>
    <footer>
        <div class="hidden sm:block h-14 w-full bg-site-800 text-white">
            <Container class="flex h-full items-center justify-center items-center">
                <p class="text-xl text-center"><b>Need help?</b> <Link href="/contact" class="underline">Contact us</Link>, or call us on <a href="07442980101" class="underline">07442 980101</a></p>
            </Container>
        </div>
        <div class="bg-stone-800">
            <Container>
                <div class="grid grid-cols-4 lg:gap-x-12 lg:gap-y-0 gap-y-8 lg:px-0 px-8 py-10">
                    <div class="lg:col-span-1 col-span-4">
                        <img
                            class="w-48"
                            src="/images/logo-light.png"
                            alt="Oxford Mobile Tyre Fitting Logo"
                        >
                        <p class="mt-6 text-gray-500 text-sm">
                            <b>Oxford Mobile Tyre Fitting</b> provides a fast and efficient mobile tyre fitting service that's available 24/7, so you can get back on the road in no time.
                        </p>
                    </div>
                    <div class="lg:col-span-1 col-span-4">
                        <p class="text-xl tracking-wide mb-2 text-white">SERVICES</p>
                        <div class="space-y-3 flex flex-col items-start">
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/mobile-tyre-fitting" title="Mobile Tyre Fitting">Mobile Tyre Fitting</Link>
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/mobile-tyre-repair" title="Mobile Tyre Repair">Mobile Tyre Repair</Link>
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/van-mobile-tyre-repair" title="Van Mobile Tyre Repair">Van Mobile Tyre Repair</Link>
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/branded-tyres" title="Branded Tyres">Branded Tyres</Link>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-4">
                        <p class="text-xl tracking-wide mb-2 text-white">HELP</p>
                        <div class="space-y-3 flex flex-col items-start">
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/#coverage" title="Our Coverage">Our Coverage</Link>
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/contact" title="Contact Us">Contact Us</Link>
                            <Link class="text-sm text-gray-500 underline hover:text-gray-300" href="/privacy-policy" title="Privacy Policy">Privacy Policy</Link>
                        </div>
                    </div>
                    <div class="lg:col-span-1 col-span-4">
                        <p class="text-xl tracking-wide mb-2 text-white text-center">SECURE PAYMENTS</p>
                        <div class="space-y-3 flex items-center justify-center flex-wrap">
                            <img class="w-20" src="/images/card/visa.png" alt="Visa">
                            <img class="w-20" src="/images/card/mastercard.png" alt="Mastercard">
                            <img class="w-20" src="/images/card/discover.png" alt="Discover">
                            <img class="w-20" src="/images/card/apple-pay.png" alt="Apple Pay">
                            <img class="w-20" src="/images/card/google-pay.png" alt="Google Pay">
                        </div>
                    </div>
                </div>
            </Container>
        </div>
        <div class="bg-stone-900">
            <Container class="flex lg:flex-row lg:space-y-0 space-y-2 flex-col items-center justify-between py-5">
                <p class="text-sm text-center text-gray-500">© 2022 Oxford Mobile Tyre Fitting | All Rights Reserved</p>
                <p class="text-gray-300 text-center text-sm">Website by: <a class="text-white hover:underline" href="https://skelop.com" target="_blank" rel="noreferrer">SKELOP Website Design &amp; Development</a></p>
            </Container>
        </div>
    </footer>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Container from "./Container.vue";

</script>

<style scoped>

</style>
