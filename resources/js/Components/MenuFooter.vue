<script setup>
import logo from '../../assets/images/shrimp-logo.png'

</script>

<template>
    <div id="header" class="pt-3 pb-6 flex justify-center bg-primary-600 gap-2">
        <div class="grid place-content-center justify-center">
            <p class="text-white uppercase header-title">
                los aguachingones
            </p>
            <a class="text-sm text-center mb-4 text-white underline">Volver arriba</a>
            <div class="flex justify-center">
                <img :src="logo" alt="" class="self-center w-8 h-8 shake">
            </div>
        </div>
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