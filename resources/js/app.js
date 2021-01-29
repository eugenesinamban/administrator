/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// //  includes
// Vue.component('like-button', require('./components/include/like/LikeButton.vue').default);
// Vue.component('likes', require('./components/include/like/Likes.vue').default);
// Vue.component('like-bar', require('./components/include/LikeBar.vue').default);

// // portfolio
// Vue.component('about-me', require('./components/portfolio/AboutMe.vue').default);
// Vue.component('portfolio-index', require('./components/portfolio/PortfolioIndex.vue').default);
// Vue.component('portfolio-item', require('./components/portfolio/PortfolioItem.vue').default);
// Vue.component('portfolio-header', require('./components/portfolio/PortfolioHeader.vue').default);
// Vue.component('portfolio', require('./components/Portfolio.vue').default);

// // ramen
// Vue.component('ramen', require('./components/Ramen.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
