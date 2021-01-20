<template>
    <div class="portfolio-item">
        {{ item.title }}
    </div>
</template>

<script>
    export default {
        name: 'portfolio-item',
        props: {
            item: {type: Object},
        },
    }
</script>
