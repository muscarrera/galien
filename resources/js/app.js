import router from './router';
import ProfilsListes from './components/ProfilsListes';
import TeacherComponent from './components/TeacherComponent';



require('./bootstrap');

window.Vue = require('vue');



/*Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('profilsliste-component', require('./components/ProfilsListes.vue').default);
Vue.component('teacherliste-component', require('./components/TeacherComponent.vue').default);
*/
Vue.component('pagination', require('laravel-vue-pagination'));

const app = new Vue({
    el: '#app',
    components: {
        ProfilsListes,
        TeacherComponent
    },
    router
});
