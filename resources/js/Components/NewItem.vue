<script setup>
import { ref } from 'vue';
import { nanoid } from "nanoid";

const emit = defineEmits(["add"])
const focused = ref(false)
const name = ref("")

function createTask(e){
    if(name.value.trim()){
        e.preventDefault();
        emit("add", {
            id: nanoid(),
            name: name.value.trim(),
            createdAt: new Date()
        })
    }
    name.value = ""
}

</script>

<template>
    <div>
        <textarea 
            v-model="name" 
            @keydown.tab="createTask" 
            @keyup.enter="createTask"
            @focus="focused = true"
            @blur="focused = false"
            :placeholder="!focused ? '+ Agregar producto' : 'Dale un nombre al producto'"
            :class="{
                'h-10': !focused,
                'h-20': focused
            }"
            style="outline: none !important;"
        />
    </div>
</template>