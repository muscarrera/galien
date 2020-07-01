import Vue from 'vue';
import VueRouter from 'vue-router';
import ProfilsListes from './components/ProfilsListes';
import TeacherComponent from './components/TeacherComponent';
import ClassesComponent from './components/ClassesComponent';


Vue.use(VueRouter);

export default new VueRouter({
routes:[
    {path:'/panel/profils', component: ProfilsListes},
    {path:'/panel/classes', component: ClassesComponent},
    {path:'/panel/profs', component: TeacherComponent}
],
mode: 'history' 

});