<template>
    <div class="mb-4 mt-4">
        <a :href="`${item.link}`" target="_blank" rel="noopener" class="text-dark">
            <h3>{{ item.title }}</h3>
            <h5>
                {{ item.details[lang] }}
            </h5>
        </a>
    </div>
</template>

<script>
    export default {
        name: 'portfolio-item',
        props: {
            item: {type: Object},
            lang: {type: String},
        },
        mounted() {}
    }
</script>
