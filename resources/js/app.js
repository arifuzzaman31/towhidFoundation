/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./vue-asset.js');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('photo-gallery', require('./components/Gallery.vue').default);

import ContactUs  from './components/ContactUs.vue';
import Gallery  from './components/Gallery.vue';
import fullgallery  from './components/AlbumAll.vue';


import VueLazyload from 'vue-lazyload';

Vue.use(VueLazyload);

const app = new Vue({
    el: '#app',
    components : {

    	'contact-us' : ContactUs,
    	'gallery' : Gallery,
    	'fullgallery' : fullgallery,
    }
});
