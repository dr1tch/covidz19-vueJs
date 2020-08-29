
require('./bootstrap');

window.Vue = require('vue');
import { BootstrapVue, BIcon, BIconArrowUp, BIconArrowDown } from 'bootstrap-vue'

Vue.use(BootstrapVue)
import { BootstrapVueIcons } from 'bootstrap-vue'

import 'bootstrap-vue/dist/bootstrap-vue-icons.min.css'
Vue.use(BootstrapVueIcons)

import { EmbedPlugin } from 'bootstrap-vue'
Vue.use(EmbedPlugin)

Vue.component('AdminHome', require('./components/admin/home.vue').default);
Vue.component('user-home', require('./components/user/home.vue').default);
Vue.component('SideBar', require('./components/template/sidebar.vue').default);
Vue.component('timeline', require('./components/template/timeline.vue').default);
Vue.component('RightSide', require('./components/template/rightside.vue').default);
Vue.component('Wall', require('./components/template/wall.vue').default);
Vue.component('React', require('./components/template/reactions.vue').default);
Vue.component('Post', require('./components/template/post.vue').default);
Vue.component('Posts', require('./components/template/posts.vue').default);




const app = new Vue({
    el: '#app',
});
