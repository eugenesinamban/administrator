<template>
    <div class="portfolio-header">
        <div class="container text-center pt-4">
            <ul>
                <li
                v-for="(item, index) in items" 
                :key="index" 
                class="header-item mx-4" 
                @click="choosePage(item)">
                    {{ index }}
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'portfolio-header',
        props: {
            items : {type: Object},
        },
        data() {
            return {
                
            }
        },
        mounted() {},
        computed: {},
        methods: {
            choosePage(val) {
                this.$emit('click', val)
            },
        },
    }
</script>
