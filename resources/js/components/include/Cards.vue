<template>
    <div class="cards">
        <card v-for="product in products" :type="type" :product="product" :key="product.id" />
    </div>
</template>
<script>
    import Card from "./Card.vue";

    export default {
        name: 'cards',
        components: {
            Card
        },
        props: {
            products: { type: Array },
            type: { type: Object },
        },
    }
</script>