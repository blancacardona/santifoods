import Vue from 'vue'
window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);



if (document.getElementById('app')) {
    const app = new Vue({
        el: '#app',
    });
    
}

if (document.getElementById('apicategory')) {
    require('./admin/apicategory');
}

if (document.getElementById('apirecipe')) {
    require('./admin/apirecipe');
}

if (document.getElementById('apiblog')) {
    require('./admin/apiblog');
}

if (document.getElementById('confirmareliminar')) {
    require('./confirmareliminar');
}