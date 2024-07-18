<script setup>

defineProps({
    item: Object
})

</script>

<template>
    <div class="rounded bg-gray-600 text-white px-2 py-1">
        {{ item.name }}
    </div>
</template>