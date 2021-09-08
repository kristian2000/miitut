<script>
/**
 * Navbar component
 */
export default {
    data() {
        return {
            isCondensed: false
        }
    },
    props: {
        isWhiteNavbar: {
            type: Boolean
        },
        navLight: {
            type: Boolean
        },
        isAuth: {
            type: Boolean
        }
    },
    async created(){
       await this.getCategories();
    },
    mounted: () => {
        // window.onscroll = function () {
        //     onwindowScroll();
        // };

        function onwindowScroll() {
            if (
                document.body.scrollTop > 50 ||
                document.documentElement.scrollTop > 50
            ) {
                document.getElementById("topnav").classList.add("nav-sticky");
            } else {
                document.getElementById("topnav").classList.remove("nav-sticky");
            }

            if (document.body.scrollTop > 100 ||
                document.documentElement.scrollTop > 100) {
                document.getElementById('back-to-top').style.display = 'inline';
            } else {
                document.getElementById('back-to-top').style.display = 'none';
            }
        }

        var links = document.getElementsByClassName("side-nav-link-ref");
        var matchingMenuItem = null;
        for (var i = 0; i < links.length; i++) {
            if (window.location.pathname === links[i].pathname) {
                matchingMenuItem = links[i];
                break;
            }
        }

        if (matchingMenuItem) {
            matchingMenuItem.classList.add("active");
            var parent = matchingMenuItem.parentElement;

            /**
             * TODO: This is hard coded way of expading/activating parent menu dropdown and working till level 3.
             * We should come up with non hard coded approach
             */
            if (parent) {
                parent.classList.add("active");
                const parent2 = parent.parentElement;
                if (parent2) {
                    parent2.classList.add("active");
                    const parent3 = parent2.parentElement;
                    if (parent3) {
                        parent3.classList.add("active");
                        const parent4 = parent3.parentElement;
                        if (parent4) {
                            const parent5 = parent4.parentElement;
                            parent5.classList.add("active");
                        }
                    }
                }
            }
        }
    },
    computed: {
        categories(){
            return this.$store.state.categories;
        }
    },
    methods: {
        /**
         * Toggle menu
         */
        toggleMenu() {
            this.isCondensed = !this.isCondensed;
            if (this.isCondensed) {
                document.getElementById("navigation").style.display = "block";
            } else
                document.getElementById("navigation").style.display = "none";
        },

        /**
         * Close menu
         */
        closeMenu() {
            this.isCondensed = false;
                document.getElementById("navigation").style.display = "none";
        },


        /**
         * Menu clicked show the submenu
         */
        onMenuClick(event) {
            event.preventDefault();
            const nextEl = event.target.nextSibling.nextSibling;
            console.log(event.target.nextSibling.nextSibling)
            console.log(event.target.lastChild)
            console.log(event.target.childNodes)

            if (nextEl && !nextEl.classList.contains("open")) {
                const parentEl = event.target.parentNode;
                if (parentEl) {
                    parentEl.classList.remove("open");
                }
                nextEl.classList.add("open");
            } else if (nextEl) {
                nextEl.classList.remove("open");
            }
            return false;
        }
    }
}
</script>

<template>
<div>
    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <div>
                <router-link class="logo" to="/">
                    <img src="https://i.ibb.co/YTDV8yz/Logo-01.png" height="24" alt="">
                </router-link>
                <!-- <router-link class="logo" to="/" >
                    <img src="images/logo.png" height="24" alt="">
                </router-link> -->
            </div>
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" @click="toggleMenu()" :class="{'open': isCondensed === true}">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu" :class="{'nav-light': navLight === true}">
                    <li @click="closeMenu">
                        <router-link to="/" class="" >Inicio</router-link>
                    </li>

                    <li @click="closeMenu">
                        <router-link to="/quienes-somos" class="side-nav-link-reftext-white">Quienes Somos</router-link>
                    </li>


                    <li class="has-submenu"  @click="closeMenu">
                        <router-link to="/todas-categorias/" @click="onMenuClick"> Categorias </router-link><span class="menu-arrow"></span>
                        <ul class="submenu">

                            <!-- <li>
                                <router-link to="/page-aboutus" class="side-nav-link-ref">Categoria 1</router-link>
                            </li> -->

                            <li v-for="category in categories" :key="category.id">
                                <router-link :to="`/acerca-categoria/${category.label.replaceAll(' ', '').toLowerCase()}`" class="side-nav-link-ref">
                                    {{ category.label }}
                                </router-link>
                            </li>   

                        </ul>
                    </li>

                    <li  @click="closeMenu">
                        <router-link to="/blog" class="side-nav-link-reftext-white">Blog</router-link>
                    </li>

                    <li v-if="!isAuth">
                        <router-link to="/login" class="side-nav-link-reftext-white">Acceder</router-link>
                    </li>

                    <li class="has-submenu">
                        <router-link to='/registro' v-if="!isAuth">
                            <span id="reg">REGISTRATE GRATIS</span>
                        </router-link>
                        <a href="javascript:void(0);" v-else @click="isAuthRedirect()" >
                            <span  id="reg">Ir a Perfil</span>
                        </a>
                    </li>


                </ul>


            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->
</div>
</template>

<style>

.buy-button {
    display: none;
}

@media (min-width: 991px) {

    #topnav .navigation-menu > li > a {
        display: block;
        color: #fff;
        background-color: transparent !important;
        font-weight: 700;
        letter-spacing: 1px;
        line-height: 24px;
        text-transform: uppercase;
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
        font-family: "Nunito", sans-serif;
        padding-left: 15px;
        padding-right: 15px;
        font-size: 15px;
    }

    
}

ul.navigation-menu {
    float: right;
}

#topnav.nav-sticky ul li a {
    color: #000 !important;
}
/*
#topnav.nav-sticky #registrate {
    border: 1px solid black;
    margin-left: 50px;
    padding: 10px;
    border-radius: 10px;
    color: #000 !important;
}*/

</style>
