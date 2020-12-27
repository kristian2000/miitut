<script>
export default {
    props: [
        "active"
    ],
    data(){
        return {
            options: [
                {
                    title: 'Servicio',
                    iconClass: 'uil uil-file',
                    path: '/account-categories',
                    viewOnly: ['work']
                },
                {
                    title: 'Perfil',
                    iconClass: 'uil uil-dashboard',
                    path: '/account-profile',
                    viewOnly: ['help', 'work']
                },
                {
                    title: 'Horario',
                    iconClass: 'uil uil-users-alt',
                    path: '/account-contracts',
                    viewOnly: ['help', 'work']
                },
                {
                    title: 'Ubicacion',
                    iconClass: 'uil uil-file',
                    path: '/account-advertisements',
                    viewOnly: ['help']
                },
                {
                    title: 'Valoracion',
                    iconClass: 'uil uil-envelope-star',
                    path: '/account-bills',
                    viewOnly: ['help', 'work']
                },
                // {
                //     title: 'Mensajes',
                //     iconClass: 'uil uil-transaction',
                //     path: '/account-messages',
                //     viewOnly: ['help', 'work']
                // },
            ]
        }
    },
    created(){
        let userType = this.$store.state.user.userType
        this.items = this.options.filter( item => item.viewOnly.includes(userType) )
    }
}
</script>

<template>
    <div class="col-lg-4 col-md-12 col-12">

        <div class="sidebar sticky-bar p-4 rounded shadow">

            <div class="widget">
                <div class="row">

                    <div class="col-6 mt-4 pt-2" v-for="item in items" :key="item.title">
                        <router-link
                            v-if="item"
                            :to="item.path"
                            :class="`accounts rounded d-block shadow text-center py-3
                            ${active == item.title ? 'active' : ''}`"

                        >
                            <span class="pro-icons h3 text-muted"><i :class="item.iconClass"></i></span>
                            <h6 class="title text-dark h6 my-0">{{item.title}}</h6>
                        </router-link>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</template>

