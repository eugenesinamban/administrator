<template>
    <div class="items">
        <div v-for="(item, index) in items" :key="index" class="item">
            <portfolio-item :item="item" :lang="lang"/>
        </div>
    </div>
</template>

<script>
    import PortfolioItem from "./PortfolioItem.vue";
    
    export default {
        name: 'portfolio-items',
        components: { PortfolioItem },
        props: {
            items: {type: Object},
            lang: {type: String},
        },
        mounted() {}
    }
</script>
