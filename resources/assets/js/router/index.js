import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


let routes = [
    { path: '/' , component: require('../components/LoginComponent.vue')},
    { path: '/post', component: require('../components/PostComponent.vue')}
]

export default new VueRouter({
    routes
})