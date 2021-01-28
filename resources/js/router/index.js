import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// Pages
import Home from '../components/pages/Home/index.vue'
import Search from '../components/pages/Search.vue'
import ProfilePublic from '../components/pages/ProfilePublic/index'

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
import Login from '../components/pages/auth/Login.vue'
import VerifyCode from '../components/pages/auth/VerifyCode'
import LoginSocial from '../components/pages/auth/LoginSocial'
import CompleteProfile from '../components/pages/auth/CompleteProfile'
import CompleteProfileWork from '../components/pages/auth/CompleteProfileWork'

//Plantilla
import INDEX from '../components/pages/Home/index.vue'

// Admin
import AdminUsers from '../components/pages/Admin/Users.vue'

const routes = [
    // Admin
    {
        path: '/admin/users',
        component: AdminUsers
    },
    {
        path: '/',
        component: INDEX
    },
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
    },
    {
        path: '/profilePublic/:id',
        component: ProfilePublic
    }
]

export default new Router({
    mode: 'history',
    routes
})
