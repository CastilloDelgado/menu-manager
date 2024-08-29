<script setup>
import { ref } from 'vue';
import DragHandle from './DragHandle.vue';
import { onKeyStroke } from '@vueuse/core';
import { isVNode } from 'vue';


const props = defineProps({
    item: Object
})

const emit = defineEmits(['delete'])

const focused = ref(false)

onKeyStroke("Backspace", (e) => {
    if(focused.value) emit("delete", props.item.id)
})

</script>

<template>
    <div 
        class="item rounded bg-primary-700 text-white px-2 pt-1 pb-2"
        tabindex="0"
        @focus="focused = true" 
        @blur="focused = false"
    >
        <DragHandle />
        <div class="w-full">
            <div class="w-full border-b border-primary-400 mb-1">
                <p class="font-bold text-xs text-neutral-300">Nombre del platillo</p>
                <input type="text" placeholder="Nombre del platillo" :value="item.name" class="w-full border-none select:outline-none outline-none bg-transparent text-white text py-0 px-1">
            </div>
            <div class="w-full  border-b border-primary-400 mb-1">
                <p class="font-bold text-xs text-neutral-300">Precio</p>
                <div class="flex">
                    <p>$</p>
                    <input type="number" step="0.01" placeholder="Nombre del platillo" :value="item.price" class="w-full border-none select:outline-none outline-none bg-transparent text-white text py-0 px-1">
                </div>
            </div>
            <div class="border-b border-primary-400 mb-1">
                <p class="font-bold text-xs text-neutral-300">Descripción</p>
                <textarea :value="item.description" rows="3" class="w-full border-none select:outline-none outline-none bg-transparent text-sm text-white text py-0 px-1" />
            </div>
            <div>
                <p class="font-bold text-xs text-neutral-300 mb-1">Variantes del platillo</p>
                <div class="mb-2">
                    <p v-if="item.variants.length === 0" class="text-xs">
                        No hay variantes de este platillo
                    </p>
                    <div v-else v-for="variant in item.variants" class="flex justify-between w-full  border-b border-primary-400 mb-1">
                        <div class="w-32">
                            <p class="font-bold text-xs text-neutral-300">Nombre</p>
                            <input type="text" placeholder="Nombre del platillo" :value="variant.name" class="border-none select:outline-none outline-none bg-transparent text-white text-xs py-0 px-1">
                        </div>
                        <div class="w-20">
                            <p class="font-bold text-xs text-neutral-300">Precio</p>
                            <div class="flex">
                                <p>$</p>
                                <input type="number" step="0.01" placeholder="Nombre del platillo" :value="variant.price" class="w-full border-none select:outline-none outline-none bg-transparent text-white text-xs py-0 px-1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end w-full">
                    <button class="bg-white text-black rounded p-2 pb-1 text-xs capitalize">+ Agregar variante</button>
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