<template>
    <div class="ramen">
        <p>ramen</p>
        <!-- <ramen-header @click="showPage" :items="headerItems"/>
        <transition appear name="fade" mode="out-in">
            <component :is="pageComponent" :index="index" :items="items" :lang="lang" :about="about" @click="showWorks"></component>
        </transition> -->
    </div>
</template>

<script>

    export default {
        name: 'ramen',
        components: {},
        props: {
            // items: {type: Object},
            // about: {type: Array},
            // lang: {type: String},
            // index: {type: Object},
        },
        data() {
            return {
                // headerItems: {
                //     Home: PortfolioIndex,
                //     Works: PortfolioItems,
                //     "About Me": AboutMe,
                // },
                // pageComponent: PortfolioIndex,
                // componentItems: this.items
            }
        },
        mounted() {},
        computed: {},
        methods: {
            // showPage(val) {
            //     this.pageComponent = val
            // },
            // showWorks(val) {
            //     this.pageComponent = this.headerItems[val]
            // }
        },
    }
</script>