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
        }
    },

    mounted: () => {
        window.onscroll = function () {
            onwindowScroll();
        };

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
        },
    }
}
</script>

<template>
<div>
    <!-- Navbar STart -->
    <header id="topnav" class="defaultscroll sticky" :class="{'bg-white': isWhiteNavbar === true}">
        <div class="container">
            <!-- Logo container-->
            <div>
                <router-link class="logo" to="/" v-if="navLight !== true">
                    <img src="https://i.ibb.co/YTDV8yz/Logo-01.png" height="24" alt="">
                </router-link>
                <router-link class="logo" to="/" v-else>
                    <img src="images/logo-dark.png" class="l-dark" height="24" alt="">
                    <img src="images/logo-light.png" class="l-light" height="24" alt="">
                </router-link>
            </div>
            <div class="buy-button">
                <a href="#" class="btn" :class="{'btn-light': navLight === true, 'btn-primary':  navLight !== true}">Buy Now</a>
            </div>
            <!--end login button-->
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
                    <li>
                        <router-link to="/" class="side-nav-link-reftext-white">Home</router-link>
                    </li>

                    <li>
                        <router-link to="/" class="side-nav-link-reftext-white">Quienes Somos</router-link>
                    </li>
                    

                    <li class="has-submenu">
                        <a <a class="text-white" href="javascript:void(0)" @click="onMenuClick">Categorias</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            
                                    <li>
                                        <router-link to="/page-aboutus" class="side-nav-link-ref">Categoria 1</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-aboutus" class="side-nav-link-ref">Categoria 2</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-aboutus" class="side-nav-link-ref">Categoria 3</router-link>
                                    </li>
                            
                            
                            </ul>
                    </li>

                    <li>
                        <router-link to="/" class="side-nav-link-reftext-white">Acceder</router-link>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><span class="text-white" id="registrate">REGISTRATE GRATIS</span></a>
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
    
    #registrate {
        border: 1px solid white;
        margin-left: 50px;
        padding: 10px;
        border-radius: 10px;
    }

    .buy-button {
    display: none;
}

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

ul.navigation-menu {
    float: right;
}

#topnav.nav-sticky ul li a {
    color: #000 !important;
}

#topnav.nav-sticky #registrate {
    border: 1px solid black;
    margin-left: 50px;
    padding: 10px;
    border-radius: 10px;
    color: #000 !important;
}

</style>