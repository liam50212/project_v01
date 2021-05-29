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

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


/**
 * Toggling sidebar when screen width is below 992px
 */
const navBarToggler = document.querySelector('.navbar-toggler');
const sideBar = document.querySelector('.sidebar');
const closeNavMenu = document.querySelector('.close-nav');

// listen to click event of the navbar toggler
navBarToggler.addEventListener('click', function(){
    // display sidebar by moving it back to the inside of its parent wrapper from the right
    sideBar.style.right = 0;

    // listen to click event of the close navigation menu button
    closeNavMenu.addEventListener('click', function(){
        // hide the sidebar by moving it completely out of the its parent wrapper to the right
        sideBar.style.right = (sideBar.offsetWidth * -1) + 'px';
    });
});