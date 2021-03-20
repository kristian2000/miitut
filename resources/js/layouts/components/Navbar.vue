<script>
    import {
        BellIcon,
        UserIcon,
        SearchIcon,
        XIcon
    } from 'vue-feather-icons';

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
            XIcon
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
                const res = await this.callApi('get', 'app/logout')
                if (res.status === 200){
                    this.makeNotice('success', 'Hasta Luego!', res.data.msg)
                    this.$store.commit('setUpdateUser', false);
                    window.location.href = '/'
                }
            },
            async notificationsMarkAsReads(){
                const res = await this.callApi('get', 'app/users/notifications/markAsReads')

                this.getNotifications();
            }
        }
    }
</script>
<template>
    <nav>
        <b-navbar toggleable="lg" type="light" variant="light" >
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
                        <!-- Only Admin -->
                        <!-- <b-nav-item-dropdown text="Admin" right v-if="user.userType === 'admin'">
                            <b-dropdown-item href="#">Usuarios</b-dropdown-item>
                            <b-dropdown-item href="#">Aprobar Documentos</b-dropdown-item>
                            <b-dropdown-item href="#">Disputas</b-dropdown-item>
                            <b-dropdown-item href="#">Pagos</b-dropdown-item>
                        </b-nav-item-dropdown> -->
                        <div class="d-flex" v-if="user.userType !== 'admin' && user.fase_registry === 'completed'">
                            <b-nav-item v-if="user.userType === 'help'">
                                <search-icon size="1.5x" class="custom-class" @click="$router.push('/search')"></search-icon>
                            </b-nav-item>

                            <b-nav-item v-b-toggle.sidebar-right>
                                <bell-icon size="1.5x" class="custom-class" />
                                <span style="position:relative">
                                    <b-badge 
                                        variant="dark"
                                        style="position: absolute; right: -2px; font-size: 10px;"
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
            <div>
                <b-sidebar id="sidebar-right" title="Notificaciones" right shadow>
                <div class="p-2  border-bottom" v-if="notifications.length">
                    <div class="d-flex justify-content-center">
                        <b-button pill variant="outline-secondary" size="sm"
                            @click="notificationsMarkAsReads"
                        >
                            Marcar como Leidas
                        </b-button>
                    </div>
                </div>
                <div class="px-3 py-2">
                    <div 
                        class="notif" 
                        v-for="notif in notifications" :key="notif.id"
                        @click="$router.push('/account-contracts')"
                    >
                        <div 
                            class="mb-1 d-flex justify-content-end align-item-center"
                            style="position: relative;"
                        >
                            <span 
                                class="notif-close"
                                style="position: absolute;"
                            >
                                <XIcon size="1x"/>
                            </span>
                        </div>
                        <div class="pt-3">
                            <h3>{{ notif.data.title }}</h3>
                        </div>
                        <div class="">
                            <div>
                                <div class="desc">
                                    {{ notif.data.description }}
                                </div>
                            </div>
                                
                        </div>
                    </div>

                </div>
                </b-sidebar>
            </div>
        </b-navbar>
    </nav>
</template>

<style scope>
    .notif-close:hover {
        background: rgb(231, 231, 231);
        border: 1px solid #666;
        cursor: pointer;
        border-radius: 25%;
        padding-right: 2px;
        padding-left: 2px;
    }

    .notif {
        cursor: pointer;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
    }

    .notif h3 {
        font-size: 16px;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
    }

    .notif .desc {
        font-size: 12px;
    }
</style>

