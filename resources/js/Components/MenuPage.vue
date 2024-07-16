<script setup>
import MenuSection from './MenuSection.vue';

defineProps({
    page: Object
})
</script>

<template>
    <MenuSection v-for="section in page.sections" class="mb-4">
        <p class="uppercase text-center text-2xl md:text-3xl font-bold text-primary-600 mb-4">{{ section.title }}</p>

        <!-- Elements -->
        <div v-for="element in section.elements"
            class="pt-1 md:pt-2 flex flex-col w-full justify-around px-3 md:px-4 border-b border-primary-100 md:pb-1 border-dashed"
            :class="{
        'mb-2': element.description
    }">
            <div class="flex justify-between">
                <div class="w-6/8 md:pr-8">
                    <p class="text-primary-700 font-bold uppercase text-xl">{{ element.title }}</p>
                    <p class="text-justify text-sm md:text-base text-primary-950" v-if="element.description">{{
        element.description
    }}</p>
                </div>
                <div class="w-2/8 flex text-medium md:text-lg justify-end gap-2 text-primary-600  font-thin"
                    v-if="element.price">

                    ${{ element.price.toFixed(2) }}
                </div>
            </div>
            <div class="mt-2">
                <!-- Variants -->
                <div v-for="variant in element.variants" class="w-full flex">
                    <div class="w-4/6">
                        <p class="text-primary-700 uppercase">{{ variant.title }}</p>
                    </div>
                    <div class="w-2/6 flex text-medium md:text-lg justify-end gap-2 text-primary-600 font-thin">
                        <span v-if="variant.price">
                            ${{ variant.price.toFixed(2) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </MenuSection>
</template>