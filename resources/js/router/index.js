import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// Pages
import Home from '../components/pages/Home'
import Search from '../components/pages/Search.vue'

// Account

import AccountProfile from '../components/pages/account/Profile'
import AccountContracts from '../components/pages/account/Contracts'
import AccountBills from '../components/pages/account/Bills'
import AccountMessages from '../components/pages/account/Messages'
import AccountAdvertisements from '../components/pages/account/Advertisements'
import AccountEmployees from '../components/pages/account/Employees'
import AccountCategories from '../components/pages/account/Categories'

// Autentication
import Registration from '../components/pages/auth/Registration/index'
import Login from '../components/pages/auth/login'
import VerifyCode from '../components/pages/auth/VerifyCode'
import LoginSocial from '../components/pages/auth/LoginSocial'
import CompleteProfile from '../components/pages/auth/CompleteProfile'
import CompleteProfileWork from '../components/pages/auth/CompleteProfileWork'

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
    {
        path: '/completeProfileWork',
        component: CompleteProfileWork
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
    },
    {
        path: '/account-categories',
        component: AccountCategories
    },

    {
        path: '/search',
        component: Search
    }
]

export default new Router({
    mode: 'history',
    routes
})
