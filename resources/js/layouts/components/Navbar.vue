<script>
    import {
        BellIcon,
        UserIcon,
        SearchIcon,
        XIcon,
        HomeIcon,
        MailIcon
    } from 'vue-feather-icons';

    import Notifications from './Notifications'

    export default {
        data(){
            return {
                signIn: false,
                admin: true
            }
        },
        components: {
            BellIcon,
            UserIcon,
            SearchIcon,
            XIcon,
            HomeIcon,
            MailIcon,
            Notifications
        },
        computed: {
            user(){
                return this.$store.state.user
            },
            notifications(){
                return this.$store.state.notifications;
            }
        },
        created(){
            if (this.$store.state.user){
                setInterval(()=> {
                    this.getNotifications();
                }, 5000)
            }
        },
        methods: {
            async logout(){
                const res = await this.callApi('get', '/app/logout')
                if (res.status === 200){
                    this.makeNotice('success', 'Hasta Luego!', res.data.msg)
                    this.$store.commit('setUpdateUser', false);
                    window.location.href = '/'
                }
            },
            // async notificationsMarkAsReads(){
            //     const res = await this.callApi('get', '/app/users/notifications/markAsReads')

            //     this.getNotifications();
            // },
            // async destroyNotification(notif){
            //     // console.log('notif', notif)
            //     const res = await this.callApi('delete', `/app/users/notifications/${notif.id}`);
            //     console.log('destroyNoty', res)
            // }
        }
    }
</script>
<template>
<div class="">
    <nav class="navbar-custom">
        <b-navbar toggleable="lg" >
            <div class="container">
                <b-navbar-brand @click="$router.push('/')">
                    <img src="/assets/logo.png" alt="logo"  height="30">
                </b-navbar-brand>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <!-- Right aligned nav items -->
                <b-collapse id="nav-collapse" is-nav>
                    <!-- not autentication -->
                    <b-navbar-nav class="ml-auto" v-if="!user">
                        <b-nav-item  @click="$router.push('/')">
                                Home
                        </b-nav-item>
                        <b-nav-item>
                            Servicios
                        </b-nav-item>
                        <b-nav-item @click="$router.push('/login')">
                                Acceder
                        </b-nav-item>
                        <b-nav-item @click="$router.push('/helpOrWork')">
                            <b-button variant="outline-primary" pill size="sm">REGISTRATE GRATIS</b-button>
                        </b-nav-item>
                    </b-navbar-nav>

                    <!-- Autentication -->
                    <b-navbar-nav class="ml-auto" v-else>
                        <div 
                            class="d-flex" 
                            v-if="user.userType !== 'admin' && user.fase_registry === 'completed'"
                            >
                            <b-nav-item>
                                <home-icon size="1.5x" class="custom-class" @click="$router.push('/')" />
                            </b-nav-item>

                            <!-- <b-nav-item>
                                <mail-icon size="1.5x" class="custom-class" @click="$router.push('/account-messages')" />
                            </b-nav-item> -->

                            <b-nav-item v-if="user.userType === 'help'">
                                <search-icon size="1.5x" class="custom-class" @click="$router.push('/search')" />
                            </b-nav-item>

                            <b-nav-item v-b-toggle.sidebar-right>
                                <bell-icon size="1.5x" class="custom-class" />
                                <span style="position:relative">
                                    <b-badge 
                                        variant="dark"
                                        style="position: absolute; 
                                            right: 0px; 
                                            font-size: 10px;
                                            padding: 2px;
                                        "
                                    >
                                        {{ notifications.length }}
                                    </b-badge>
                                </span>
                            </b-nav-item>

                            <!-- Icono Perfil -->
                            <b-nav-item @click="$router.push('/account-profile')">
                                <user-icon size="1.5x" class="custom-class"></user-icon>
                            </b-nav-item>
                        </div>

                        <!-- Nombre de usuario -->
                        <b-nav-item-dropdown right>
                            <template #button-content>
                                <em>{{user.name}}</em>
                            </template>
                                <b-dropdown-item href="#" @click="logout()">Salir</b-dropdown-item>
                        </b-nav-item-dropdown>
                    </b-navbar-nav>
                </b-collapse>
            </div>

            <!-- Notificaciones -->
            <Notifications />
        </b-navbar>
    </nav>
</div>
</template>

<style scope>

    .navbar-custom {
        position: relative;
        z-index: 10;
        width: 100%;
        background: transparent;
    }
</style>

