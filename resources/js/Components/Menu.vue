<script setup>
import MenuPage from "./MenuPage.vue"
defineProps({
    menu: {
        type: Object,
        required: true
    }
})

</script>

<template>

    <MenuPage v-for="page in menu.pages" :page="page" />
</template>