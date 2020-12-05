import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// Pages
import Home from '../components/pages/Home'

// Autentication
import Login from '../components/pages/auth/login'
import HelpOrWork from '../components/pages/auth/HelpOrWork'
import Signup from '../components/pages/auth/Signup'
import Categories from '../components/pages/auth/Categories'
import Dashboard from '../components/pages/Dashboard'
import VerifyCode from '../components/pages/auth/VerifyCode'
import LoginSocial from '../components/pages/auth/LoginSocial'
import CompleteProfile from '../components/pages/auth/CompleteProfile'

const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/HelpOrWork',
        component: HelpOrWork
    },
    {
        path: '/:option/categories',
        component: Categories
    },
    {
        path: '/:option/:category?/signup',
        component: Signup
    },
    {
        path: '/dashboard',
        component: Dashboard
    },
    {
        path: '/verify',
        component: VerifyCode
    },
    {
        path: '/authorize/:drive/callback',
        name: 'loginCallback',
        component: LoginSocial
    },
    {
        path: '/completeProfile',
        component: CompleteProfile
    }
]

export default new Router({
    mode: 'history',
    routes
})
