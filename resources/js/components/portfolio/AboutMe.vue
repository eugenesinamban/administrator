<template>
    <div class="portfolio-container">
        <div class="container mb-4 mt-4">
            <div class="row">
                <div class="col-lg-4 about">
                    <div class="text-center about__text">
                        {{ about[0][lang] }}
                        <hr>
                        {{ about[1][lang] }}
                    </div>
                </div>
                <div class="col-lg-4" :class="order">
                    <div class="about__main">
                        <h1 class="text-center">Eugene Sinamban</h1>
                        <img src="/assets/images/eugene.png" class="profile-image circle">
                        <div class="text-center my-4">
                            <a v-for="(item, index) in icons" :href="item.link" :key="index" class="text-dark mx-4 my-4" target="_blank" rel="noreferrer">
                                <i :class="item.class" class="fa-3x faa-tada animated-hover icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 about">
                    <p class="text-center about__text">
                    {{ about[2][lang] }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'about-me',
        props: {
            lang: {type: String},
            about: {type: Array},
        },
        data() {
            return {
                icons: {
                    github: {
                        link: 'https://github.com/eugenesinamban',
                        class: 'fab fa-github'
                    },
                    twitter: {
                        link: 'https://twitter.com/codejunkie21',
                        class: 'fab fa-twitter'
                    }
                },
                windowWidth: 0,
                order: null,
            }
        },
        created() {
            window.addEventListener("resize", this.windowSizeGetter);
        },
        destroyed() {
            window.removeEventListener("resize", this.windowSizeGetter);
        },
        mounted() {},
        watch: {
            windowWidth(val) {
                if (val > 1000) {
                    this.order =  null
                } else {
                    this.order = "order-first"
                }
            }
        },
        computed: {
            
        },
        methods: {
            windowSizeGetter(val) {
                this.windowWidth = val.target.innerWidth
            }
        },
    }
</script>
