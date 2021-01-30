<template>
    <div>
        <h2># {{ rank + 1}}</h2>
        <div class="card border-dark mb-4">
            <h5 class="card-header bg-danger text-light">{{ product.text }}</h5>
            <div class="card-body">
                <a :href="showRoute">
                    <img :src="product.image_url" class="image card-image mb-4">
                </a>
                <like-bar 
                    :likes="product.likes"
                    :product="product"
                />
            </div>
        </div>
    </div>
</template>
<script>
    import LikeBar from "./LikeBar.vue";

    export default {
        name: 'card',
        components: {
            LikeBar
        },
        props: {
            product: {type: Object},
            type: { Type: Object },
            rank: { Type: Number },
        },
        mounted() {
            console.log('card : ', this)
        },
        computed: {
            showRoute() {
                return `/${this.product.slug}`
            }
        },
        methods: {
            
        },
    }
</script>