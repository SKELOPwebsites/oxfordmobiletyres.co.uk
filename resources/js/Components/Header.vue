<template>
    <div class="absolute top-0 left-0 right-0 w-full z-50">
        <Container class="relative select-none flex flex-row items-center justify-between pt-8">
            <div class="w-[200px]">
                <Link href="/">
                    <img
                        class="w-full"
                        src="/images/logo-light.png"
                        alt="Oxford Mobile Tyre Fitting Logo"
                    >
                </Link>
            </div>
            <div class="font-montserrat font-bold text-sm md:flex hidden flex-row space-x-4 lg:ml-12 lg:mt-0 mt-2 uppercase">
                <a href="/" class="sm:block hidden text-white hover:text-site-300">HOME</a>
                <a href="/#our-services" class="sm:block hidden text-white hover:text-site-300">SERVICE</a>
                <a href="/#coverage" class="sm:block hidden text-white hover:text-site-300">COVERAGE</a>
                <a href="/#about" class="sm:block hidden text-white hover:text-site-300">ABOUT</a>
                <a href="/contact" class="sm:block hidden text-white hover:text-site-300">CONTACT</a>
            </div>
            <div class="md:hidden block">
                <button @click="mobileNavShow = !mobileNavShow" class="menu-btn text-white border-0 outline-0 text-xl flex items-center justify-center">
                    <span class="font-montserrat font-semibold text-sm">MENU</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <Transition name="mobile-nav">
                <div v-show="mobileNavShow" class="md:hidden block bg-gray-100 w-72 fixed top-0 right-0 z-50">
                    <div class="h-screen overflow-y-scroll">
                        <button @click="hideMobileNav" class="w-full flex items-center justify-center h-14 bg-gray-200 text-site-600 font-semibold text-lg" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            CLOSE
                        </button>
                        <div class="flex flex-col">
                            <NavLinkMob href="/" component="Home" class="border-b flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                HOME
                            </NavLinkMob>
                            <div class="w-full py-4 pl-4 border-b border-[#ebebeb] text-sm text-gray-400">
                                <span @click="otherServicesOpen = !otherServicesOpen" class="flex items-center">
                                    Our Services
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <div v-show="otherServicesOpen" class="flex flex-col space-y-2 mt-2">
                                    <NavLinkMob href="/mobile-tyre-fitting" component="MobileTyreFitting" title="Mobile Tyre Fitting" class="border-l-2 border-dotted">Mobile Tyre Fitting</NavLinkMob>
                                    <NavLinkMob href="/mobile-tyre-repair" component="MobileTyreRepair" title="Mobile Tyre Repair" class="border-l-2 border-dotted">Mobile Tyre Repair</NavLinkMob>
                                    <NavLinkMob href="/van-mobile-tyre-fitting" component="VanMobileTyreFitting" title="Van Mobile Tyre Fitting" class="border-l-2 border-dotted">Van Mobile Tyre Fitting</NavLinkMob>
                                    <NavLinkMob href="/branded-tyres" component="BrandedTyres" title="Branded Tyres" class="border-l-2 border-dotted">Branded Tyres</NavLinkMob>
                                </div>
                            </div>
                            <NavLinkMob href="/contact" component="ContactUs" title="Contact Us" class="border-b"><a>Contact Us</a></NavLinkMob>
                            <NavLinkMob href="/privacy-policy" component="PrivacyPolicy" title="Privacy Policy" class="border-b"><a>Privacy Policy</a></NavLinkMob>
                        </div>
                    </div>
                </div>
            </Transition>
        </Container>
    </div>
</template>

<script setup>
import { ref } from "vue"
import { Link } from "@inertiajs/vue3";
import Container from "./Container.vue";
import NavLinkMob from "./NavLinkMob.vue";

const otherServicesOpen = ref(false)
const mobileNavShow = ref(false)
const sliding = ref(false)

function toggleMobileNav(){
    if(sliding.value) return;
    mobileNavShow.value = !mobileNavShow.value;
    setSliding();
}
function hideMobileNav(){
    if(sliding.value) return;
    mobileNavShow.value = false;
    setSliding();
}
function setSliding() {
    sliding.value = true;
    setTimeout(() => {
        sliding.value = false;
    }, 500)
}
</script>

<style scoped>
.mobile-nav-enter-active{
    animation: navInAnimation 0.5s ease;
}
.mobile-nav-leave-active{
    animation: navOutAnimation 0.5s ease;
}
@keyframes navInAnimation {
    from { transform: translateX(100%); }
    to { transform: translateX(0) }
}
@keyframes navOutAnimation {
    from { transform: translateX(0); }
    to { transform: translateX(100%) }
}
</style>
