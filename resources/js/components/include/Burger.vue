<template>
    <div :isOpen="isOpen">
        <button @openMenu="openBurger" @closeMenu="closeBurger" class="bm-burger-button"></button>
        <div class="bm-menu">
            <div class="bm-overlay">
                <div class="bm-item-list">
                    <a id="home" href="#">
                        <span>Home</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import { Slide } from 'vue-burger-menu'

export default {
    name: 'burger',
    components: {
        Slide,
    },
    data() {
        return {
            isOpen: false
        }
    },
    methods: {
        openBurger(val) {
            console.log(val)
            this.isOpen = true
        },
        closeBurger(val) {
            this.isOpen = false
        }
    },
}
</script>