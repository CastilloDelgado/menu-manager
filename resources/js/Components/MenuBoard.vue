<script setup lang="ts">
import { nextTick, ref } from "vue";
import { nanoid } from "nanoid";
import MenuItem from "./MenuItem.vue"
import DragHandle from "./DragHandle.vue"
import draggable from "vuedraggable/dist/vuedraggable.common";
import { useKeyModifier, useLocalStorage } from "@vueuse/core";
import NewItem from "./NewItem.vue";
const sections = useLocalStorage('menuBoard', [
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

function createSection(){
    const section = {
        id: nanoid(),
        name: "",
        description: "",
        items: []
    }

    sections.value.push(section)
    nextTick(() => {
        (document.querySelector(".section:last-of-type .name-input") as HTMLInputElement).focus()
    }) 
}

</script>

<template>
    <div class="flex items-start gap-2 overflow-x-auto">   
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
                <div class="section bg-gray-800 h-full min-w-[240px] p-2 rounded">
                    <header class="text-lg text-white mb-2 flex gap-2">
                        <DragHandle />
                        <input
                            type="text"
                            class="name-input bg-transparent focus:bg-white rounded px-1 w-4/5"
                            @keyup.enter="($event.target as HTMLInputElement).blur()"
                            @keydown.backspace="section.name === '' ? (sections = sections.filter(s => s.id !== section.id)) : null"
                            v-model="section.name"
                        />
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
                                    <MenuItem :item="item" @delete="section.items = section.items.filter((i) => i.id !== $event)" />
                                </div>
                            </template>
                        </draggable>
                        
                    </div>
                    
                    <footer class="">
                      <NewItem @add="section.items.push($event)" />
                    </footer>
                </div>
            </template>
        </draggable>
        <button
            @click="createSection"
            class="
            bg-gray-200 whitespace-nowrap p-2 rounded opacity-50"
        >
            + Agregar sección
        </button>
    </div>
</template>