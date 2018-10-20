/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('select-nucleus', require('./components/SelectNucleus.vue'));
Vue.component('nucleus-option', require('./components/NucleusOption.vue'));

Vue.component('select-solvent', require('./components/SelectSolvent.vue'));
Vue.component('solvent-option', require('./components/SolventOption.vue'));

const app = new Vue({
    el: '#app',
    data: {
        nucleus: "1H",
        solvent: "CDCl3",
        shift: "",
    },

    methods: {
        searchShift() {
            return window.location.href = `/search?shift=${this.shift}&nucleus=${this.nucleus}&solvent=${this.solvent}`;
        },

        setNucleus(nucleus) {
            this.nucleus = nucleus;
        },

        setSolvent(solvent) {
            this.solvent = solvent;
        }
    }
});
