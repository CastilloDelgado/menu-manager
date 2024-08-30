<script setup lang="ts">
import MenuItem from "./MenuItem.vue"
import DragHandle from "./DragHandle.vue"
import draggable from "vuedraggable/dist/vuedraggable.common";
import { router } from '@inertiajs/vue3';

const props = defineProps({
    section: {
        required: true,
        type: Object,
    }
})

const deleteSection = (sectionId: any) => 
    router.delete(`/section/${sectionId}`, {
        onBefore: () => confirm(`¿Seguro que necesitas eliminar esta sección?`)
    });


const handleSectionChange = (event : any, sectionId : any) => 
    router.post(`/section/${sectionId}`, {
        name: event.target.value
    })

const addNewItem = () => router.post(`/section/${props.section.id}/item`);
</script>

<template>
    <div class="section bg-primary-600 h-full min-w-[240px] p-1 rounded overflow-auto border-4 border-primary-600">
        <header class="text-lg text-white mb-2 flex gap-2">
            <DragHandle />
            <input
                type="text"
                class="name-input border-none outline-none bg-transparent py-0 px-1 text-lg w-4/5"
                @keyup.enter="($event.target as HTMLInputElement).blur()"
                @input="(event) => handleSectionChange(event, section.id)"
                :value="section.name"
            />
            <button
                @click="deleteSection(section.id)"
            class="bg-white text-center text-sm text-black rounded w-6 h-6 hover:scale-105 hover:bg-black hover:text-white transition">X</button>
        </header>
        <div class="space-y-2 mb-2">
            <draggable  
                v-model="section.items" 
                :group="{name: 'items'}"  
                @start="drag=true"  
                @end="drag=false" 
                item-key="id"
                :animation="200"
                handle=".drag-handle"
                class="flex flex-col gap-2 min-h-[120px] rounded"
            >
                <template #item="{element: item}">
                    <div>
                        <MenuItem :item="item" @delete="section.items = section.items.filter((i) => i.id !== $event)" />
                    </div>
                </template>
            </draggable>
        </div>
        
        <footer class="flex justify-end">
            <button @click="addNewItem" class="bg-white text-black capitalize text-sm px-2 py-1 hover:scale-105 transition rounded">+ agregar producto</button>
        </footer>
    </div>
</template>