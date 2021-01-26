<template>
    <div class="portfolio-container portfolio-index">
        <transition appear name="type">
            <p v-if="lang == 'en'" class="portfolio-index__main">My name is Eugene <br> and I will be a Full-Stack Developer</p>
            <p v-if="lang == 'ja'" class="portfolio-index__main">ユージンです。フルスタックエンジニアになります。</p>
        </transition>
        <transition name="fade-late" mode="out-in">
            <p v-show="showSub" class="portfolio-index__sub" @click="showWorks">
                <span v-if="lang == 'en'">Show Eugene's works</span>
                <span v-if="lang == 'ja'">作品をみる</span>
            </p>
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
