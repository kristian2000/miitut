import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// Pages
import Home from '../components/pages/Home'

// Account

import AccountProfile from '../components/pages/account/Profile'
import AccountContracts from '../components/pages/account/Contracts'
import AccountBills from '../components/pages/account/Bills'
import AccountMessages from '../components/pages/account/Messages'
import AccountAdvertisements from '../components/pages/account/Advertisements'
import AccountEmployees from '../components/pages/account/Employees'

// Autentication
import Registration from '../components/pages/auth/Registration/index'
import Login from '../components/pages/auth/login'
// import HelpOrWork from '../components/pages/auth/HelpOrWork'
// import Signup from '../components/pages/auth/Signup'
// import Categories from '../components/pages/auth/Categories'
import VerifyCode from '../components/pages/auth/VerifyCode'
import LoginSocial from '../components/pages/auth/LoginSocial'
import CompleteProfile from '../components/pages/auth/CompleteProfile'


//Plantilla
import INDEX from '../components/pages/Home/index.vue'

const routes = [
    {
        path: '/test',
        component: Home
    },
    //Autentificacion
    {
        path: '/login',
        component: Login
    },
    {
        path: '/registration',
        component: Registration
    },
    {
        path: '/',
        component: INDEX
    },
    // {
    //     path: '/HelpOrWork',
    //     component: HelpOrWork
    // },
    // {
    //     path: '/:option/categories',
    //     component: Categories
    // },
    // {
    //     path: '/:option/:category?/signup',
    //     component: Signup
    // },
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
    },

    // Rutas Account
    {
        path: '/account-profile',
        component: AccountProfile
    },
    {
        path: '/account-contracts',
        component: AccountContracts
    },
    {
        path: '/account-bills',
        component: AccountBills
    },
    {
        path: '/account-messages',
        component: AccountMessages
    },
    {
        path: '/account-advertisements',
        component: AccountAdvertisements
    },
    {
        path: '/account-employees',
        component: AccountEmployees
    }
]

export default new Router({
    mode: 'history',
    routes
})
