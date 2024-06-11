<script setup>
import logo from '../../assets/images/shrimp-logo.png'

</script>

<template>
    <div id="header" class="p-2 flex justify-center bg-primary-600 gap-2">
        <div class="h-10 grid place-content-center">
            <p class="text-white text-xl md:text-2xl uppercase header-title font-title">
                los aguachingones
            </p>
        </div>
        <img :src="logo" alt="" class="w-10 h-10 shake">
    </div>
</template>

<style scoped>
.header-title {
    font-weight: bold;
}

.shake {
    animation: shake 2s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
    transform: rotate(360deg);
}

@keyframes shake {

    0% {
        transform: rotate(360deg);
    }

    100% {
        transform: rotate(0);
    }

}
</style>