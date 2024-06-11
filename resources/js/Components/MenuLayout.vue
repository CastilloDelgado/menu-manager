<script setup>
import MenuHeader from "@/Components/MenuHeader.vue"
</script>

<template>
    <div class="bg-image bg-red-500">
        <MenuHeader />
        <div class="max-w-xl mx-auto border-neutral-200 bg-transparent">
            <div class="min-h-[100vh] ">
                <slot />
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg-image {
    background-image: url('../../assets/images/pattern.png');
    background-size: 40px 40px;
}
</style>