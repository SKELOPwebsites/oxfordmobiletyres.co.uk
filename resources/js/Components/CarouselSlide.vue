<template>
    <transition :name="direction">
        <div v-show="visibleSlide === index" class="absolute inset-0">
            <slot></slot>
        </div>
    </transition>
</template>

<script setup>
defineProps({
    visibleSlide: Number,
    index: Number,
    direction: String,
})
</script>

<style scoped>
    .left-enter-active {
        animation: leftInAnimation 0.6s ease-in-out;
    }
    .left-leave-active {
        animation: leftOutAnimation 0.6s ease-in-out;
    }
    @keyframes leftInAnimation {
        from { transform: translateX(100%); }
        to { transform: translateX(0) }
    }
    @keyframes leftOutAnimation {
        from { transform: translateX(0); }
        to { transform: translateX(-100%) }
    }

    .right-enter-active {
        animation: rightInAnimation 0.6s ease-in-out;
    }
    .right-leave-active {
        animation: rightOutAnimation 0.6s ease-in-out;
    }
    @keyframes rightInAnimation {
        from { transform: translateX(-100%); }
        to { transform: translateX(0) }
    }
    @keyframes rightOutAnimation {
        from { transform: translateX(0); }
        to { transform: translateX(100%) }
    }
</style>
