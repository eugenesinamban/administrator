<template>
    <div class="portfolio-index">
        <transition appear name="type">
            <p class="portfolio-index__main">My name is Eugene and I will be a Full-Stack Developer</p>
        </transition>
        <transition name="fade-late" mode="out-in">
            <p v-if="showSub" class="portfolio-index__sub" @click="showWorks">Show Eugene's works</p>
        </transition>
        
    </div>
</template>

<script>
    export default {
        name: 'portfolio-index',
        props: {},
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
