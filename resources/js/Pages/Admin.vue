<script setup>
import { ref } from 'vue';

const props = defineProps({
    menus: {
        type: Array,
        required: true
    }
})

const selectedMenu = ref(props.menus[0])
</script>

<template>
    <div class="w-full min-h-[100vh] bg-white">
        <div class="max-w-6xl mx-auto bg-gray-300 flex min-h-[100vh]">
            <div class="w-1/5">
                <p>Lista de Menus</p>
                <div>
                    <p v-for="menu in menus">
                        {{ menu.name }}
                    </p>
                </div>
            </div>
            <div class="w-4/5">
                <p>Editar Menu</p>
                <div>
                    <div class="">
                        <p class="text-lg ">Menu</p>
                        <div class="pl-4 border-l-2 border-black">
                            <div class="flex space-x-2 ">
                                <div>
                                    <p>Nombre</p>
                                    <input type="text" v-model="selectedMenu.name" />
                                </div>
                                <div>
                                    <p>Descripción</p>
                                    <input type="text" :value="selectedMenu.description" />
                                </div>
                            </div>
                            <div class="">
                                <p class="text-lg ">Secciones</p>
                                <div class="" v-for="section in selectedMenu.sections">
                                    <div class="pl-4 border-l-2 border-black">
                                        <div class="flex space-x-2">
                                            <div>
                                                <p>Nombre</p>
                                                <input type="text" :value="section.name" />
                                            </div>
                                            <div>
                                                <p>Descripción</p>
                                                <input type="text" :value="section.description" />
                                            </div>
                                        </div>
                                        <div class="">
                                            <p class="text-lg ">Productos</p>
                                            <div class="" v-for="item in section.items">
                                                <div class="pl-4 border-l-2 border-black">
                                                    <div class="flex space-x-2">
                                                        <div>
                                                            <p>Nombre</p>
                                                            <input type="text" :value="item.name" />
                                                        </div>
                                                        <div>
                                                            <p>Descripción</p>
                                                            <input type="text" :value="item.description" />
                                                        </div>
                                                        <div>
                                                            <p>Precio</p>
                                                            <input type="text" :value="item.price" />
                                                        </div>
                                                    </div>
                                                    <div class="" v-if="item.variants.length > 0">
                                                        <p class="text-lg ">Variantes</p>
                                                        <div class="" v-for="variant in item.variants">
                                                            <div class="pl-4 border-l-2 border-black">
                                                                <div class="flex space-x-2">
                                                                    <div>
                                                                        <p>Nombre</p>
                                                                        <input type="text" :value="variant.name" />
                                                                    </div>
                                                                    <div>
                                                                        <p>Descripción</p>
                                                                        <input type="text"
                                                                            :value="variant.description" />
                                                                    </div>
                                                                    <div>
                                                                        <p>Precio</p>
                                                                        <input type="text" :value="variant.price" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>