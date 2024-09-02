<script setup>
import { ref } from 'vue';
import DragHandle from './DragHandle.vue';
import { router } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import { watch } from 'vue';
import ItemVariant from './ItemVariant.vue';

const props = defineProps({
    item: Object
})

const itemForm = ref({
    id: "",
    name: "",
    description: "",
    price: "",
})

watch(itemForm, (newItemForm) => {
    router.post(`/item/${newItemForm.id}`, newItemForm);
}, {
    deep: true
});

const focused = ref(false);

const deleteItem = () => router.delete(`/item/${props.item.id}`, {
    onBefore: () => confirm(`¿Seguro que necesitas eliminar este item?`)
});

const addNewVariant = () => router.post(`/item/${props.item.id}/variant`)

onMounted(() => {
    itemForm.value.id = props.item.id;
    itemForm.value.name = props.item.name;
    itemForm.value.description = props.item.description;
    itemForm.value.price = props.item.price;
})

</script>

<template>
    <div 
        class="item rounded bg-primary-700 text-white px-2 pt-1 pb-2"
        tabindex="0"
        @focus="focused = true" 
        @blur="focused = false"
    >
        <div class="flex justify-between">
            <DragHandle />
            <button
            @click="deleteItem"
            class="mt-1 bg-white text-center text-xs text-black rounded w-4 h-4 hover:scale-105 hover:bg-black hover:text-white transition">X</button>
        </div>
        <div class="w-full">
            <div class="w-full border-b border-primary-400 mb-1">
                <p class="font-bold text-xs text-neutral-300">Nombre del platillo</p>
                <input type="text" placeholder="Nombre del platillo" v-model="itemForm.name" class="w-full border-none select:outline-none outline-none bg-transparent text-white text py-0 px-1">
            </div>
            <div class="w-full  border-b border-primary-400 mb-1">
                <p class="font-bold text-xs text-neutral-300">Precio</p>
                <div class="flex">
                    <p>$</p>
                    <input type="number" step="0.01" placeholder="Nombre del platillo" v-model="itemForm.price" class="w-full border-none select:outline-none outline-none bg-transparent text-white text py-0 px-1">
                </div>
            </div>
            <div class="border-b border-primary-400 mb-1">
                <p class="font-bold text-xs text-neutral-300">Descripción</p>
                <textarea v-model="itemForm.description" rows="3" class="w-full border-none select:outline-none outline-none bg-transparent text-sm text-white text py-0 px-1" />
            </div>
            <div>
                <p class="font-bold text-xs text-neutral-300 mb-1">Variantes del platillo</p>
                <div class="mb-2">
                    <p v-if="item.variants.length === 0" class="text-xs">
                        No hay variantes de este platillo
                    </p>
                    <template v-else v-for="variant in item.variants" class="flex justify-between w-full  border-b border-primary-400 mb-1">
                        <ItemVariant :variant="variant" />
                    </template>
                </div>
                <div class="flex justify-end w-full">
                    <button class="transition hover:scale-105 bg-white text-black rounded p-2 pb-1 text-xs capitalize" @click="addNewVariant">+ Agregar variante</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.sortable-chosen {
    background: green;
}

.sortable-drag .item{ 
    transform: rotate(5deg);
}

.sortable-ghost .item {
    position: relative;
}

.sortable-ghost .item::after {
    content: "";
    @apply absolute top-0 bottom-0 left-0 right-0 bg-gray-800;
}

.item:focus,
.item.focus-visible {
    @apply outline-gray-400;
    outline: gray auto 1px;
}
</style>