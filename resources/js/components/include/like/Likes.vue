<template>
    <p class="likes">いいね数 : {{ likes }}</p>
</template>

<script>
    export default {
        name: 'likes',
        props: {
            likes: {type: Number}
        },
    }
</script>