import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

// Pages
import Home from '../components/pages/Home/index.vue'
import AboutCategory from '../components/pages/Home/AboutCategory'
import Search from '../components/pages/Search.vue'
import ProfilePublic from '../components/pages/ProfilePublic/index'

// Account

import AccountProfile from '../components/pages/account/Profile'
import AccountContracts from '../components/pages/account/Contracts'
import AccountBills from '../components/pages/account/Bills'
import AccountMessages from '../components/pages/account/Messages'
import AccountAds from '../components/pages/account/Ads'
import AccountEmployees from '../components/pages/account/Employees'
import AccountCategories from '../components/pages/account/Categories'
import AccountOffers from '../components/pages/account/Offers'

// Autentication
import Registration from '../components/pages/auth/Registration/index'
import Login from '../components/pages/auth/Login.vue'
import VerifyCode from '../components/pages/auth/VerifyCode'
import LoginSocial from '../components/pages/auth/LoginSocial'
import CompleteProfile from '../components/pages/auth/CompleteProfile'
import CompleteProfileWork from '../components/pages/auth/CompleteProfileWork'
import ResetPassword from '../components/pages/auth/ResetPassword'
import AccountRetirement from '../components/pages/auth/Registration/AccountRetirement'

//Plantilla
import INDEX from '../components/pages/Home/index.vue'

// Admin
import AdminUsers from '../components/pages/Admin/Users'
import AdminVerify from '../components/pages/Admin/Verify'
import AdminReports from '../components/pages/Admin/Reports'
import AdminPayments from '../components/pages/Admin/Payments'
import AdminMediations from '../components/pages/Admin/Mediations'
import AdminPaymentContract from '../components/pages/Admin/PaymentContract'

import Aboutus from '../components/pages/Home/Aboutus'

const routes = [
    // Admin
    {
        path: '/admin-users',
        component: AdminUsers
    },
    {
        path: '/admin-verify',
        component: AdminVerify
    },
    {
        path: '/admin-reports',
        component: AdminReports
    },
    {
        path: '/admin-payments',
        component: AdminPayments
    },
    {
        path: '/admin-mediations',
        component: AdminMediations
    },
    {
        path: '/admin-payment-contracts',
        component: AdminPaymentContract
    },
    {
        path: '/',
        component: INDEX
    },
    {
        path: '/test',
        component: Home
    },
    {
        path: '/Aboutus',
        component: Aboutus
    },
    {
        path: '/aboutCategory/:category',
        component: AboutCategory
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
        path: '/resetPassword',
        component: ResetPassword
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
    {
        path: '/accountRetirement',
        component: AccountRetirement
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
        path: '/account-ads',
        component: AccountAds
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
        path: '/account-offers',
        component: AccountOffers
    },
    {
        name: 'search',
        path: '/search',
        component: Search,
        props: props => ({
            ...props
        })
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
