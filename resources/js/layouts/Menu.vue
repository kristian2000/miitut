<script>
export default {
    props: [
        "active"
    ],
    data(){
        return {
            items: [
                {
                    title: 'Perfil',
                    iconClass: 'uil uil-dashboard',
                    path: '/account-profile',
                    viewOnly: ['empleador', 'empleado']
                },
                {
                    title: 'Contratos',
                    iconClass: 'uil uil-users-alt',
                    path: '/account-contracts',
                    viewOnly: ['empleador', 'empleado']
                },
                {
                    title: 'Anuncios',
                    iconClass: 'uil uil-file',
                    path: '/account-advertisements',
                    viewOnly: ['empleador', 'empleado']
                },
                {
                    title: 'Facturas',
                    iconClass: 'uil uil-envelope-star',
                    path: '/account-bills',
                    viewOnly: ['empleador', 'empleado']
                },
                {
                    title: 'Mensajes',
                    iconClass: 'uil uil-transaction',
                    path: '/account-messages',
                    viewOnly: ['empleador', 'empleado']
                },
                {
                    title: 'Empleados',
                    iconClass: 'uil uil-setting',
                    path: '/account-employees',
                    viewOnly: ['empleador', 'empleado']
                }
            ],

        }
    },
    created(){
    }
}
</script>

<template>
    <div class="col-lg-4 col-md-12 col-12">

        <div class="sidebar sticky-bar p-4 rounded shadow">

            <div class="widget">
                <div class="row">

                    <div class="col-6 mt-4 pt-2" v-for="item in items" :key="item.title">
                        <router-link :to="item.path" :class="`accounts rounded d-block shadow text-center py-3 ${active == item.title ? 'active' : ''}`" >
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

