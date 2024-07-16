<script setup>
import MenuHeader from "@/Components/MenuHeader.vue"
import MenuFooter from "@/Components/MenuFooter.vue"
</script>

<template>
    <div class="bg-image bg-red-500">
        <MenuHeader />
        <div class="max-w-xl mx-auto border-neutral-200 bg-transparent py-2 md:py-4">
            <div class="min-h-[100vh] px-2 md:px-0 ">
                <slot />
            </div>
        </div>
        <MenuFooter />
    </div>
</template>

<style scoped>
.bg-image {
    background-image: url('../../assets/images/pattern.png');
    background-size: 40px 40px;
}
</style>