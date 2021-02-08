<template>
    <div class="portfolio">
        <portfolio-header @click="showPage" :items="headerItems"/>
        <!-- <burger/> -->
        <transition appear name="fade" mode="out-in">
            <component :is="pageComponent" :index="index" :items="items" :lang="lang" :about="about" @click="showWorks"></component>
        </transition>
    </div>
</template>

<script>
    import AboutMe from "./portfolio/AboutMe.vue";
    import PortfolioItems from "./portfolio/PortfolioItems.vue";
    import PortfolioHeader from "./portfolio/PortfolioHeader.vue";
    import PortfolioIndex from "./portfolio/PortfolioIndex.vue";
    import Burger from './include/Burger.vue'

    export default {
        name: 'portfolio',
        components: [
            PortfolioItems,
            AboutMe,
            PortfolioHeader,
            Burger
        ],
        props: {
            items: {type: Object},
            about: {type: Array},
            lang: {type: String},
            index: {type: Object},
        },
        data() {
            return {
                headerItems: {
                    Home: PortfolioIndex,
                    Works: PortfolioItems,
                    "About Me": AboutMe,
                },
                pageComponent: PortfolioIndex,
                componentItems: this.items
            }
        },
        components: {
            PortfolioItems,
            AboutMe,
            PortfolioIndex,
        },
        mounted() {},
        computed: {},
        methods: {
            showPage(val) {
                this.pageComponent = val
            },
            showWorks(val) {
                this.pageComponent = this.headerItems[val]
            }
        },
    }
</script>