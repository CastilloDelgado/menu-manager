<script setup lang="ts">
import draggable from "vuedraggable/dist/vuedraggable.common";
import { router } from '@inertiajs/vue3';
import SectionBoard from "./SectionBoard.vue";

const props = defineProps({
    selectedMenu: {
        type: Object,
        required: false
    }
})

const createSection = () => router.post(`/menu/${props.selectedMenu?.id}/section`)

</script>

<template>
    <div class="flex items-start overflow-x-auto pt-1" v-if="selectedMenu">   
        <draggable  
            v-model="selectedMenu.sections" 
            group="sections"  
            @start="drag=true"  
            @end="drag=false" 
            item-key="id"
            :animation="200"
            handle=".drag-handle"
            class="flex gap-2 h-[90vh]"
            >
            <template #item="{element: section}">
                <SectionBoard :section="section" />
            </template>
        </draggable>
        <button
            @click="createSection"
            class="bg-white whitespace-nowrap hover:scale-105 transition p-2 rounded ml-2"
        >
            + Agregar sección
        </button>
    </div>
</template>