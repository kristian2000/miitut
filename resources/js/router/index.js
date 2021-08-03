import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

//Layout
import Layout from '../layouts/LayoutDefault'
import LayoutPublic from '../layouts/LayoutPublic'
import LayoutAdmin from '../layouts/LayoutAdmin'

// Pages
import Home from '../components/pages/Home/index.vue'
import AboutCategory from '../components/pages/Home/AboutCategory'
import AllCategories from '../components/pages/Home/AllCategories'
import Search from '../components/pages/Search/index'
import ProfilePublic from '../components/pages/ProfilePublic/index'

// Account

import AccountProfile from '../components/pages/account/Profile'
import AccountContracts from '../components/pages/account/Contracts'
import AccountBills from '../components/pages/account/Bills'
import AccountMessages from '../components/pages/account/Messages'
import AccountAds from '../components/pages/account/Ads'
import AccountEmployees from '../components/pages/account/Employees'
import AccountServices from '../components/pages/account/Categories'
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
import DNI from '../components/pages/auth/DNI'
import InfoCheckEmail from '../components/pages/auth/Registration/InfoCheckEmail'
import AuthLogin from '../components/pages/auth/auth-cover-login'
import NewSignup from '../components/pages/auth/Registration/Signup'
import NewRegistration from '../components/pages/auth/Registration/NewIndex'

//Plantilla
import INDEX from '../components/pages/Home/index.vue'
import INDEX_NEW from '../components/pages/Home/index_new.vue'

// Admin
import AdminUsers from '../components/pages/Admin/Users'
import AdminVerify from '../components/pages/Admin/Verify'
import AdminReports from '../components/pages/Admin/Reports'
import AdminBlog from '../components/pages/Admin/Blog'
import AdminPayments from '../components/pages/Admin/Payments'
import AdminMediations from '../components/pages/Admin/Mediations'
import AdminPaymentContract from '../components/pages/Admin/PaymentContract'

// Blog
import Blog from '../components/pages/Blog'

// Info
import Aboutus from '../components/pages/Home/Aboutus'
// Soporte
import Support from '../components/pages/Info/Support'
// TermAndCond
import TermAndCond from '../components/pages/Info/TermAndCond'

const routes = [
    // Admin
    // {
    //     path: '/admin-users',
    //     component: AdminUsers
    // },
    // {
    //     path: '/admin-verify',
    //     component: AdminVerify
    // },
    // {
    //     path: '/admin-reports',
    //     component: AdminReports
    // },
    // {
    //     path: '/admin-payments',
    //     component: AdminPayments
    // },
    // {
    //     path: '/admin-mediations',
    //     component: AdminMediations
    // },
    // {
    //     path: '/admin-payment-contracts',
    //     component: AdminPaymentContract
    // },
    // {
    //     path: '/index',
    //     component: INDEX
    // },
    // {
    //     path: '/test',
    //     component: Home
    // },

    // Rutas Publicas

    {
        path: '/',
        component: LayoutPublic,
        children: [
            {
                path: '',
                component: INDEX_NEW
            },
            {
                path: '/quienes-somos',
                component: Aboutus
            },
            {
                path: '/todas-categorias',
                component: AllCategories
            },
            {
                path: '/acerca-categoria/:category',
                component: AboutCategory
            },
            {
                path: '/blog',
                component: Blog
            }
        ]
    },
    {
        path: '/login',
        component: AuthLogin
    },
    {
        path: '/',
        component: Layout,
        children: [
            //Routes Admin
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
                path: '/admin-blog',
                component: AdminBlog
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

            //Routes-Autentificacion
            {
                path: '/registro',
                component: NewRegistration
            },
            {
                path: '/verificar-codigo',
                component: VerifyCode
            },
            {
                path: '/resetear-clave',
                component: ResetPassword
            },
            {
                path: '/authorize/:drive/callback',
                name: 'loginCallback',
                component: LoginSocial
            },

            // Routes-Privadas
                //fase Registro
            {
                path: '/completar-perfil',
                component: CompleteProfile
            },
            {
                path: '/completar-perfil-trabajo',
                component: CompleteProfileWork
            },
            {
                path: '/cuenta-retiro',
                component: AccountRetirement
            },
            {
                path: '/DNI',
                component: DNI
            },
            {
                path: '/info-ver-email',
                component: InfoCheckEmail
            },
            {
                path: '/TermAndCond',
                component: TermAndCond
            },
            {
                path: '/support',
                component: Support
            },
        
            // Routes Account
            {
                path: '/cuenta-perfil',
                component: AccountProfile
            },
            {
                path: '/cuenta-contratos',
                component: AccountContracts
            },
            {
                path: '/cuenta-facturas',
                component: AccountBills
            },
            {
                path: '/cuenta-mensajes',
                component: AccountMessages
            },
            {
                path: '/cuenta-anuncios',
                component: AccountAds
            },
            {
                path: '/account-employees',
                component: AccountEmployees
            },
            {
                path: '/cuenta-servicios',
                component: AccountServices
            },
            {
                path: '/cuenta-ofertas',
                component: AccountOffers
            },
            {
                name: 'search',
                path: '/buscar',
                component: Search,
                props: props => ({
                    ...props
                })
            },
            {
                path: '/perfil-publico/:id',
                component: ProfilePublic
            }
        ]
    }

]

export default new Router({
    mode: 'history',
    routes
})
