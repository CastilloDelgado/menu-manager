<script setup>
import { ref } from 'vue';
import MenuBoard from "../Components/MenuBoard.vue"
import LogoBadge from '../Components/LogoBadge.vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
    menus: {
        type: Array,
        required: true
    }
})

const selectedMenu = ref(props.menus[0])

const handleCreateMenuClick = () => {
    router.post('/menu');
}

</script>

<template>
    <div class="bg-primary-50 w-full flex">
        <div class="w-1/6 bg-primary-600 pt-6 px-4 overflow-y-auto max-h-screen">
            <LogoBadge class="mb-6" />
            <div class="text-center">
                <p class="text-white text-xl mb-2">Listado de Menus</p>
                <ul class="">
                    <li v-for="menu in menus" :key="menu.id">{{ menu.name }}</li>
                </ul>
                <div class="flex justify-center mt-6">
                    <button @click="handleCreateMenuClick" class="bg-white transition hover:scale-105 text-black rounded px-2 py-1">Agregar Menu</button>
                </div>
            </div>
        </div>
        <div class="w-5/6 overflow-auto">
            <div class="pl-2 pt-2">
                <h1 class="text-white text-2xl">Crear menu</h1>
            </div>
            <MenuBoard />
        </div>
    </div>
</template>