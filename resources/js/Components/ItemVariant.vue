<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import { watch } from 'vue';
import { onMounted } from 'vue';

const props = defineProps({
    variant: {
        required: true,
        type: Object
    }
});

const variantForm = ref({
    id: '',
    name: '',
    price: ''
});

watch(variantForm, (newVariantForm) => {
    router.post(`/variant/${newVariantForm.id}`, newVariantForm);
}, {
    deep: true
});

const deleteVariant = () => router.delete(`/variant/${props.variant.id}`);

onMounted(() => {
    variantForm.value.id = props.variant.id;
    variantForm.value.name = props.variant.name;
    variantForm.value.price = props.variant.price;
});

</script>

<template>
    <div class="flex justify-between w-full border-b border-primary-400 mb-1">
        <div class="w-32">
            <p class="font-bold text-xs text-neutral-300">Nombre</p>
            <input type="text" placeholder="Nombre del platillo" v-model="variantForm.name" class="border-none select:outline-none outline-none bg-transparent text-white text-xs py-0 px-1">
        </div>
        <div class="w-20">
            <p class="font-bold text-xs text-neutral-300">Precio</p>
            <div class="flex">
                <p>$</p>
                <input type="number" step="0.01" placeholder="Nombre del platillo" v-model="variantForm.price" class="w-full border-none select:outline-none outline-none bg-transparent text-white text-xs py-0 px-1">
            </div>
        </div>
        <div>
            <button
                @click="deleteVariant"
                class="mt-1 bg-white text-center text-xs text-black rounded w-4 h-4 hover:scale-105 hover:bg-black hover:text-white transition"
            >
                X
            </button>
        </div>
    </div>
</template>