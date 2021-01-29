<template>
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
            // rank: {type: Number},
            // likeRoute: {type: String},
            // showRoute: {type: String},
            // imageUrl: {type: String},
        },
        mounted() {
            console.log(this.showRoute)
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