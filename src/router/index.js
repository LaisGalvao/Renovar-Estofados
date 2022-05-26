import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/views/Home'
import Loja from '@/views/Loja'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/loja',
      name: 'Loja',
      component: Loja
    }
  ]
})
