<template>
    <div class="xl:h-[330px] md:h-[288px] sm:h-[250px] h-fit min-h-[300px] relative select-none" id="coverage">
        <img
            src="/images/areas-we-cover.jpg"
            class="absolute inset-0 object-center object-cover h-full w-full brightness-[0.4]"
            alt="Oxford Mobile Tyre Fitting Coverage Zone"
        >
        <div class="absolute right-4 left-4 top-5 md:pt-8 sm:pt-4 pb-5 text-white text-center">
            <div class="mb-2 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
            </div>
            <h3 class="text-center sm:text-3xl text-2xl font-extrabold font-montserrat">Areas We Cover</h3>
            <div class="flex items-center justify-center flex-row flex-wrap mt-6 space-y-1 space-x-1.5 xl:text-base text-sm">
                <Link
                    v-for="area in coverage"
                    :href="'/mobile-tyre-fitting/'+area.slug"
                    class="flex items-center hover:text-site-100"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 fill-site-100" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    {{ area.name }}
                </Link>
                <p>&amp; Surrounding Areas!</p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    coverage: {
        type: Object,
        required: true,
    },
})
</script>

<style scoped>

</style>
