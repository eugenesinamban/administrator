<template>
    <div class="portfolio">
        <portfolio-header @click="showPage" :items="headerItems"/>
        <div :is="pageComponent" :items="items" :lang="lang" :about="about"></div>
    </div>
</template>

<script>
    import AboutMe from "./portfolio/AboutMe.vue";
    import PortfolioItems from "./portfolio/PortfolioItems.vue";
    import PortfolioHeader from "./portfolio/PortfolioHeader.vue";

    export default {
        name: 'portfolio',
        components: [
            PortfolioHeader,
        ],
        props: {
            items: {type: Object},
            about: {type: Array},
            lang: {type: String},
        },
        data() {
            return {
                headerItems: {
                    Works: PortfolioItems,
                    "About Me": AboutMe
                },
                pageComponent: PortfolioItems,
                componentItems: this.items
            }
        },
        components: {
            PortfolioItems,
            AboutMe
        },
        mounted() {},
        computed: {},
        methods: {
            showPage(val) {
                this.pageComponent = val
            }
        },
    }
</script>