<script setup>
import { computed, ref } from 'vue';
import MenuBoard from "../Components/MenuBoard.vue"
import LogoBadge from '../Components/LogoBadge.vue';
import { router } from '@inertiajs/vue3';
import { watch } from 'vue';
import { onMounted } from 'vue';

const props = defineProps({
    menus: {
        type: Array,
        required: true
    }
})

const selectedMenu = ref(0)
const menuName = ref('')

const handleCreateMenuClick = () => {
    router.post('/menu');
}

const handleMenuSelection = (menuIndex) => selectedMenu.value = menuIndex
const selectedMenuObject = computed(() => props.menus[selectedMenu.value] || {})

const handleDeleteMenuClick = (menuId) => {
    router.delete(`/menu/${menuId}`, {
        onBefore: () => confirm(`¿Seguro que necesitas eliminar el menu: ${selectedMenuObject.value?.name}?`)
    });
}

const handleTitleMenuInputChange = (newMenuName) => {
    router.post(`/menu/${selectedMenuObject.value?.id}`, {
        'name': newMenuName
    });
}

watch(menuName, (newMenuName) => {
    handleTitleMenuInputChange(newMenuName)
})

const formatDate = (menuDate) => {
    const date = new Date(menuDate)
    return date.toLocaleDateString()
}

onMounted(() => {
    menuName.value = selectedMenuObject.value.name
})

</script>

<template>
    <div class="bg-primary-50 w-full flex min-h-screen">
        <div class="w-1/6 bg-primary-600 pt-6 px-4 max-h-screen pb-12 border-r-4 border-primary-700">
            <LogoBadge class="mb-6" />
            <div class="text-center">
                <p class="text-white text-xl mb-2">Listado de Menus</p>
                <div class="overflow-x-hidden overflow-y-auto max-h-[70vh]">
                    <ul class="space-y-2 p-2">
                        <li 
                            v-for="(menu, index) in menus" 
                            :key="menu.id" 
                            class="py-1 rounded border-2 hover:scale-105 transition select-none cursor-pointer" 
                            :class="{
                                'bg-primary-800 border-primary-50 text-primary-50': index === selectedMenu,
                                'bg-primary-50  border-primary-800': index !== selectedMenu
                            }"
                            @click="() => handleMenuSelection(index)"
                        >
                            <p>{{ menu.name }}</p>
                            <p class="text-xs">{{ formatDate(menu.created_at) }}</p>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center mt-6 px-2">
                    <button @click="handleCreateMenuClick" class="bg-white transition hover:scale-105 text-black rounded px-2 py-3 w-full border-2 border-primary-900">Agregar Menu</button>
                </div>
            </div>
        </div>
        <div class="w-5/6 overflow-auto bg-primary-900 px-3 py-2">
            <div class="mb-2 flex gap-2">
                <input type="text" class="text-white px-2 pt-1 text-3xl outline-none border-none bg-primary-800 rounded p-0" v-model="menuName"/>
                <div class="grid place-content-end pb-1">
                    <p class="text-neutral-300">{{`(${selectedMenu && formatDate(selectedMenuObject?.created_at)})`}}</p>
                </div>
                <button 
                    class="bg-white text-primary-700 px-2 rounded hover:scale-105 hover:text-white hover:bg-primary-700 transition"
                    @click="() => handleDeleteMenuClick(selectedMenuObject?.id)"
                >
                    Eliminar
                </button>
            </div>
            <MenuBoard :selected-menu="menus[selectedMenu]" />
        </div>
    </div>
</template>