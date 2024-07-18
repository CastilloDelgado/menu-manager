<script setup lang="ts">
import { ref } from "vue";
import { nanoid } from "nanoid";
import MenuItem from "./MenuItem.vue"
import draggable from "vuedraggable/dist/vuedraggable.common";
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

</script>

<template>
    <div>   
        <draggable  
            v-model="sections" 
            group="sections"  
            @start="drag=true"  
            @end="drag=false" 
            item-key="id"
            class="flex gap-2 h-[100vh]"
            >
            <template #item="{element: section}: {element: Section}">
                <div class="bg-gray-800 h-full min-w-[240px] p-2 rounded">
                    <header class="text-lg text-white mb-2">{{ section.name }}</header>
                    <div class="space-y-2 mb-2">
                        <MenuItem :item="item"  v-for="item in section.items" :key="item.id" />
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