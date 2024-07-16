<script setup>
import { Head } from '@inertiajs/vue3';
import MenuLayout from '@/Components/MenuLayout.vue'
import Menu from '@/Components/Menu.vue'
import MENU from "../../../contansts"
import { ref } from 'vue';

const menu = ref({ ...MENU })

</script>

<template>

    <Head title="Menu" />

    <MenuLayout>
        <Menu :menu="menu" />
    </MenuLayout>
</template>