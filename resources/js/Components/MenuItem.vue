<script setup>
import DragHandle from './DragHandle.vue';


defineProps({
    item: Object
})

</script>

<template>
    <div class="item rounded bg-gray-600 text-white">
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
    @apply absolute top-0 bottom-0 left-0 right-0 bg-gray-800
}

</style>