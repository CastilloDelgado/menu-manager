<script setup>
import { ref } from 'vue';
import DragHandle from './DragHandle.vue';
import { onKeyStroke } from '@vueuse/core';


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
        class="item rounded bg-gray-600 text-white"
        tabindex="0"
        @focus="focused = true" 
        @blur="focused = false"
    >
        <DragHandle />
        {{ item.name }}
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