<script setup>
import { ref } from 'vue';
import MenuBoard from "../Components/MenuBoard.vue"

const props = defineProps({
    menus: {
        type: Array,
        required: true
    }
})

const selectedMenu = ref(props.menus[0])
</script>

<template>
    <div class="overflow-auto bg-black">
        <div class="pl-2 pt-2">
            <h1 class="text-white text-2xl">Crear menú</h1>
        </div>
        <MenuBoard />
    </div>
</template>