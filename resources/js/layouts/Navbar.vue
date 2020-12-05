<template>
    <nav>
        <b-navbar toggleable="lg" type="light" variant="light" >
            <div class="container">
                <b-navbar-brand href="#">
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
                        <b-nav-item-dropdown text="Admin" right v-if="user.userType === 'admin'">
                            <b-dropdown-item href="#">Usuarios</b-dropdown-item>
                            <b-dropdown-item href="#">Aprobar Documentos</b-dropdown-item>
                            <b-dropdown-item href="#">Disputas</b-dropdown-item>
                            <b-dropdown-item href="#">Pagos</b-dropdown-item>
                        </b-nav-item-dropdown>

                        <b-nav-item-dropdown right>

                            <template #button-content>
                                <em>{{user.name}}</em>
                            </template>
                                <b-dropdown-item href="#">Perfil</b-dropdown-item>
                                <b-dropdown-item href="#" @click="logout()">Salir</b-dropdown-item>
                        </b-nav-item-dropdown>
                    </b-navbar-nav>
                </b-collapse>
            </div>
        </b-navbar>
    </nav>
</template>

<script>

export default {
    data(){
        return {
            signIn: false,
            admin: true
        }
    },
    computed: {
        user(){
            return this.$store.state.user
        }
    },
    methods: {
        async logout(){
            const res = await this.callApi('get', 'app/logout')
            if (res.status === 200){
                this.makeNotice('success', 'Hasta Luego!', res.data.msg)
                this.$store.commit('setUpdateUser', false);
                this.$router.push('/');
            }
        }
    },
    components: {

    }
}
</script>
