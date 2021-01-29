<template>
    <div class="row">
        <div class="col-6 text-left">
            <likes :likes="likeCount"/>
        </div>
        <div class="col-6 text-right">
            <transition name="fade">
                <p :class="error ? 'text-danger' : 'text-light'">30秒お待ちください</p>
            </transition>
            <like-button :product="product" @click="addLike"/>
        </div>
    </div>
</template>
<script>
    import LikeButton from "./like/LikeButton.vue";
    import Likes from "./like/Likes.vue";

    export default {
        name: 'like-bar',
        components: {
            LikeButton,
            Likes
        },
        props: {
            likes: {type: Number},
            product: {type: Object},
        },
        data() {
            return {
                likeCount: 0,
                error: false,
            }
        },
        mounted() {
            this.likeCount = this.likes
        },
        methods: {
            addLike(val) {
                if (val === 'approved') {
                    this.error = false
                    this.likeCount++
                } else {
                    this.error = true
                }
            }
        },
    }
</script>