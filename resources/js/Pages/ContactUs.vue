<template>
    <Head>
        <title>Contact the Team | Oxford Mobile Tyre Fitting</title>
        <meta name="description" content="Contact the team!">
        <link rel="canonical" href="https://oxfordmobiletyrefitting.co.uk/contact">
    </Head>

    <div class="relative">
        <div class="relative h-[40vh] max-h-[550px] md:min-h-[440px] sm:min-h-[340px] min-h-[300px] md:w-full overflow-hidden">
            <img
                src="/images/contact-us.jpg"
                class="absolute inset-0 object-cover object-center w-full h-full brightness-[0.5]"
                alt="Mobile Tyre Fitting"
            >
        </div>

        <div class="absolute top-1/4 left-0 right-0">
            <Container>
                <h1 class="sm:text-left text-center font-bold text-gray-200 md:text-5xl sm:text-4xl text-2xl">Let's start a conversation</h1>
                <h2 class="sm:text-left text-center font-light text-gray-200 md:text-3xl sm:text-2xl text-lg">Need to contact us for a particular reason? No problem!</h2>

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

    <Container class="py-16">
        <div class="flex md:flex-row flex-col-reverse md:items-start items-center w-full pb-5">
            <div class="md:w-5/12 w-full md:text-left text-center md:m-0 mt-12 mb-6">
                <h3 class="text-3xl mb-8">Points of Contact</h3>
                <div class="mb-6">
                    <p class="text-lg font-bold mb-2">Support &amp; Inquiries</p>
                    <p>info@oxfordmobiletyrefitting.co.uk</p>
                </div>
                <div>
                    <p class="text-lg font-bold mb-2">Telephone</p>
                    <p>07442 980101</p>
                </div>
            </div>
            <div class="md:w-7/12 w-full">
                <div class="bg-white shadow-xl px-6 py-4 rounded-lg">
                    <template v-if="$page.props.success">
                        <p class="uppercase font-medium tracking-wide">Message sent successfully</p>
                        <p class="text-sm mt-2">Hold tight for our response soon!</p>

                        <Link href="/" class="block bg-gray-200 w-fit px-4 py-1.5 border border-gray-300 text-gray-600 mt-4 rounded-md text-sm uppercase hover:text-gray-800 hover:border-gray-800 transition duration-150">Back to home</Link>
                    </template>
                    <template v-else>
                        <p class="text-sm text-gray-400 mb-4">Note: * fields are required</p>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="fname">
                                First Name <span class="text-red-500">*</span>
                            </label>

                            <input v-model="form.first_name" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="fname" autocomplete="given-name" type="text">
                            <span v-if="$page.props.errors.first_name" v-text="$page.props.errors.first_name" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="lname">
                                Last Name <span class="text-red-500">*</span>
                            </label>

                            <input v-model="form.last_name" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="lname" autocomplete="family-name" type="text">
                            <span v-if="$page.props.errors.last_name" v-text="$page.props.errors.last_name" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="email">
                                E-mail Address <span class="text-red-500">*</span>
                            </label>

                            <input v-model="form.email" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="email" autocomplete="email" type="email">
                            <span v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="phone">
                                Phone Number
                            </label>

                            <input v-model="form.phone" class="py-2 px-3 border outline-0 rounded shadow-sm border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25 w-full block mt-1" id="phone" type="text">
                            <span v-if="$page.props.errors.phone" v-text="$page.props.errors.phone" class="text-xs text-red-500"></span>
                        </div>
                        <div class="mb-4">
                            <label class="block font-medium sm:text-sm text-xs text-gray-700" for="comments">
                                Comments <span class="text-red-500">*</span>
                            </label>

                            <textarea v-model="form.comments" id="comments" class="w-full py-2 px-3 block mt-1 min-h-[6rem] rounded shadow-sm outline-0 border border-gray-300 focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-25"></textarea>
                            <span v-if="$page.props.errors.comments" v-text="$page.props.errors.comments" class="text-xs text-red-500"></span>
                        </div>

                        <div class="flex items-center justify-end">
                            <button
                                @click="submit"
                                :disabled="form.processing"
                                class="relative w-full h-[42px] bg-site-600 border border-transparent rounded-md hover:bg-site-500 active:bg-site-700 focus:outline-none focus:bg-site-700 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150"
                                :class="{'button--loading': form.processing}"
                            >
                                <span v-if="!form.processing" class="font-semibold text-sm text-white uppercase tracking-widest">SEND INQUIRY</span>
                            </button>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </Container>
</template>

<script setup>
import { Head, useForm, Link } from '@inertiajs/vue3';
import Container from "../Components/Container.vue"
import BrandLogoCarousel from "../Components/BrandLogoCarousel.vue"

const form = useForm({
    first_name: null,
    last_name: null,
    email: null,
    phone: null,
    comments: null,
})

function submit() {
    form.post('/contact', {
        preserveScroll: true,
    })
}
</script>

<style scoped>
.button--loading::after {
    content: "";
    position: absolute;
    width: 16px;
    height: 16px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    border: 4px solid transparent;
    border-top-color: #ffffff;
    border-radius: 50%;
    animation: button-loading-spinner 1s ease infinite;
}
@keyframes button-loading-spinner {
    from {
        transform: rotate(0turn);
    }

    to {
        transform: rotate(1turn);
    }
}
</style>
