<script setup lang="ts">
import { ref } from "vue";
import { nanoid } from "nanoid";
import MenuItem from "./MenuItem.vue"
import DragHandle from "./DragHandle.vue"
import draggable from "vuedraggable/dist/vuedraggable.common";
import { useKeyModifier } from "@vueuse/core";
const sections = ref([
    {
        id: nanoid(),
        name: "Cerveza",
        description: "",
        active: true,
        items: [
            {
                id: nanoid(),
                name: "Corona",
                description: "",
                price: 40,
                active: true,
                variants: [],
            },
            {
                id: nanoid(),
                name: "Victoria",
                description: "",
                price: 40,
                active: true,
                variants: [],
            },
            {
                id: nanoid(),
                name: "Modelo",
                description: "",
                price: 40,
                active: true,
                variants: [],
            }
        ],
    },
    {
        id: nanoid(),
        name: "Comida",
        description: "",
        active: true,
        items: [],
    },
    {
        id: nanoid(),
        name: "Postre",
        description: "",
        active: true,
        items: [],
    }
])

const alt = useKeyModifier('Alt')

</script>

<template>
    <div>   
        <draggable  
            v-model="sections" 
            group="sections"  
            @start="drag=true"  
            @end="drag=false" 
            item-key="id"
            :animation="200"
            handle=".drag-handle"
            class="flex gap-2 h-[100vh]"
            >
            <template #item="{element: section}">
                <div class="bg-gray-800 h-full min-w-[240px] p-2 rounded">
                    <header class="text-lg text-white mb-2 flex gap-2">
                        <DragHandle />
                        <p class="select-none">
                            {{ section.name }}
                        </p>
                    </header>
                    <div class="space-y-2 mb-2">
                        <draggable  
                            v-model="section.items" 
                            :group="{name: 'items', pull: alt ? 'clone' : true }"  
                            @start="drag=true"  
                            @end="drag=false" 
                            item-key="id"
                            :animation="200"
                            handle=".drag-handle"
                            class="flex flex-col gap-2 min-h-[120px] bg-gray-700 p-2"
                        >
                            <template #item="{element: item}">
                                <div>
                                    <MenuItem :item="item"  />
                                </div>
                            </template>
                        </draggable>
                        
                    </div>
                    
                    <footer class="">
                        <button class="bg-gray-300 text-black w-full">
                            + Agregar producto
                        </button>
                    </footer>
                </div>
            </template>
        </draggable>
    </div>
</template>