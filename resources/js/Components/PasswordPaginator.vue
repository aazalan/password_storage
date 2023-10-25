<template>
    <Link
    class="m-2"
    :class="{
        'font-bold' : link.active,
        'text-gray-500' : ! link.url,
    }"
    v-for="link in links"
    :key="link.label"
    :href="link.url"
    >
        {{ link.label.includes('Previous') ? '<': link.label.includes('Next') ? '>' : link.label }}
    </Link>
    
</template>

<script setup>
    const props = defineProps({
        links: Array
    })
</script>

<style>

</style>