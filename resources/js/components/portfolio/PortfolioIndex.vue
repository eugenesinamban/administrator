<template>
    <div class="portfolio-container portfolio-index">
        <transition appear name="type">
            <p class="portfolio-index__main">{{ index.main[lang]}}</p>
        </transition>
        <transition name="fade-late" mode="out-in">
            <p v-if="showSub" class="portfolio-index__sub" @click="showWorks">{{ index.sub[lang] }}</p>
        </transition>
        
    </div>
</template>

<script>
    export default {
        name: 'portfolio-index',
        props: {
            index: {type: Object},
            lang: {type: String},
        },
        data() {
            return {
                timer: 4000,
                showSub: false
            }
        },
        mounted() {
            this.showSubDelayed()
        },
        computed: {},
        methods: {
            showWorks() {
                this.$emit('click', 'Works');
            },
            showSubDelayed(){
                setTimeout(() => {
                    this.showSub = true
                }, this.timer)
            }  
        },
    }
</script>
