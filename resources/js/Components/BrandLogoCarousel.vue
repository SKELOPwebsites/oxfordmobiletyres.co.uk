<template>
    <div class="absolute bottom-0 left-0 right-0 w-full bg-white/50 z-10 py-2 px-3">
        <Container>
            <div class="flex items-center justify-start overflow-hidden" ref="container">
                <div class="flex items-center transition ease duration-700" ref="tray">
                    <div v-for="logo in logos" class="shrink-0 h-16 flex items-center justify-center">
                        <img :src="'/images/logo/'+logo.toLowerCase()+'.webp'" :alt="logo + ' Logo'">
                    </div>
                </div>
            </div>
        </Container>
    </div>
</template>

<script setup>
import Container from './Container.vue'
import { ref, onMounted, onUnmounted, watch } from "vue"

const logos = ['Bridgestone', 'Continental', 'Michelin', 'Pirelli', 'Goodyear', 'Dunlop', 'Avon', 'Hankook', 'Yokohama']
const container = ref(null)
const tray = ref(null)
const width = ref(0)
let interval = null
let num = 5;
let count = 0

onMounted(() => {
    getWidth()

    window.addEventListener("resize", getWidth)

    interval = setInterval(() => {
        count ++;
        if(count + num > container.value.children[0].children.length) count = 0;
        tray.value.style.transform = 'TranslateX(-'+(width.value * count)+'px)'
    }, 2500)
})
onUnmounted(() => {
    window.removeEventListener("resize", getWidth)
    clearInterval(interval)
})
watch(width, (value) => {
    for (let i = 0; i < container.value.children[0].children.length; i++) {
        container.value.children[0].children[i].style.width = value + 'px'
    }
})
function getWidth() {
    if(window.innerWidth >= 1280) {
        num = 5
    }
    else if(window.innerWidth < 1280 && window.innerWidth >= 1024) {
        num = 4;
    }
    else if(window.innerWidth < 1024 && window.innerWidth >= 768) {
        num = 3;
    }
    else if(window.innerWidth < 768 && window.innerWidth >= 450) {
        num = 2;
    }
    else {
        num = 1
    }

    width.value = container.value.clientWidth / num;
}

</script>

<style scoped>

</style>
