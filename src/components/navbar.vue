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
                    <li class="has-submenu">
                        <a class="text-white" href="javascript:void(0)" @click="onMenuClick">Servicios</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li>
                                        <router-link to="/index-saas" class="side-nav-link-ref">Saas</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-classic-saas" class="side-nav-link-ref">Classic Saas</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-agency" class="side-nav-link-ref">Agency</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-apps" class="side-nav-link-ref">Application</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-classic-app" class="side-nav-link-ref">Classic Application</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-studio" class="side-nav-link-ref">Studio</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-business" class="side-nav-link-ref">Business</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-modern-business" class="side-nav-link-ref">Modern Business</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-hotel" class="side-nav-link-ref">Hotel</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-marketing" class="side-nav-link-ref">Marketing</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-enterprise" class="side-nav-link-ref">Enterprise</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-insurance" class="side-nav-link-ref">Insurance</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-shop" class="side-nav-link-ref">Shop</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-coworking" class="side-nav-link-ref">Coworking</router-link>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li>
                                        <router-link to="/index-it-solution" class="side-nav-link-ref">IT Solution <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-corporate" class="side-nav-link-ref">Corporate Business<span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-task-management" class="side-nav-link-ref">Task Management <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-email-inbox" class="side-nav-link-ref">Email Inbox <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-landing-one" class="side-nav-link-ref">Landing One <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-landing-two" class="side-nav-link-ref">Landing Two <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-landing-three" class="side-nav-link-ref">Landing Three <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-travel" class="side-nav-link-ref">Travel <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-blog" class="side-nav-link-ref">Blog <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/forums" class="side-nav-link-ref">Forums <span class="badge badge-danger rounded">v2.5</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-personal" class="side-nav-link-ref">Personal</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-services" class="side-nav-link-ref">Service</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-payments" class="side-nav-link-ref">Payments</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-crypto" class="side-nav-link-ref">Cryptocurrency</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <router-link to="/index-course" class="side-nav-link-ref">Course</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-online-learning" class="side-nav-link-ref">Online Learning</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-hosting" class="side-nav-link-ref">Hosting & Domain</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-event" class="side-nav-link-ref">Event</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-single-product" class="side-nav-link-ref">Product</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-portfolio" class="side-nav-link-ref">Portfolio</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-job" class="side-nav-link-ref">Job</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-social-marketing" class="side-nav-link-ref">Social Media</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-digital-agency" class="side-nav-link-ref">Digital Agency</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-car-riding" class="side-nav-link-ref">Car Ride</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-customer" class="side-nav-link-ref">Customer</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-software" class="side-nav-link-ref">Software</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-ebook" class="side-nav-link-ref">E-Book</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/index-onepage" class="side-nav-link-ref">Saas <span class="badge badge-pill badge-warning ml-2">Onepage</span></router-link>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a <a class="text-white" href="javascript:void(0)" @click="onMenuClick">Acceder</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Company <span class="badge badge-primary rounded">Added</span></a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-aboutus" class="side-nav-link-ref"> About Us</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-aboutus-two" class="side-nav-link-ref"> About Us Two <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-services" class="side-nav-link-ref">Services</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-history" class="side-nav-link-ref">History <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-team" class="side-nav-link-ref"> Team</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-pricing" class="side-nav-link-ref">Pricing</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Account <span class="badge badge-primary rounded">Added</span></a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/account-profile" class="side-nav-link-ref">Profile</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/account-members" class="side-nav-link-ref">Members <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/account-works" class="side-nav-link-ref">Works <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/account-messages" class="side-nav-link-ref">Messages <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/account-payments" class="side-nav-link-ref">Payments <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/account-setting" class="side-nav-link-ref">Setting</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-invoice" class="side-nav-link-ref">Invoice</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Shop </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/shop-products" class="side-nav-link-ref">All Products</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/shop-product-detail" class="side-nav-link-ref">Product Details</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/shop-cart" class="side-nav-link-ref">Shop Cart</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/shop-checkouts" class="side-nav-link-ref">Checkouts</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/shop-myaccount" class="side-nav-link-ref">My Account</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Help center </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/helpcenter-overview" class="side-nav-link-ref">Helpcenter</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/helpcenter-faqs" class="side-nav-link-ref">Faqs</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/helpcenter-guides" class="side-nav-link-ref">Guides</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/helpcenter-support-request" class="side-nav-link-ref">Support Call</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Forums <span class="badge badge-danger rounded">v2.5</span></a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/forums" class="side-nav-link-ref">Overview <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/forums-topic" class="side-nav-link-ref">Forum Topic <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/forums-comments" class="side-nav-link-ref">Forum Comments <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Email Template</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/email-confirmation" class="side-nav-link-ref">Confirmation</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/email-password-reset" class="side-nav-link-ref">Reset Password</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/email-alert" class="side-nav-link-ref">Alert</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/email-invoice" class="side-nav-link-ref">Invoice</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick">Careers</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link tag="a" to="/page-jobs" class="side-nav-link-ref">Jobs</router-link>
                                    </li>
                                    <li>
                                        <router-link tag="a" to="/page-jobs-sidebar" class="side-nav-link-ref">Jobs - Sidebar</router-link>
                                    </li>
                                    <li>
                                        <router-link tag="a" to="/page-job-detail" class="side-nav-link-ref">Job Detail</router-link>
                                    </li>
                                    <li>
                                        <router-link tag="a" to="/page-job-apply" class="side-nav-link-ref">Job Apply</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-job-company" class="side-nav-link-ref">Company</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-job-candidate" class="side-nav-link-ref">Candidate</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Blog <span class="badge badge-primary rounded">Added</span></a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-blog-grid" class="side-nav-link-ref">Blog Grid</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-blog-sidebar" class="side-nav-link-ref">Blog with Sidebar</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-blog-list" class="side-nav-link-ref">Blog Listing</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-blog-list-sidebar" class="side-nav-link-ref">Blog List & Sidebar</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-blog-detail" class="side-nav-link-ref">Blog Detail</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-blog-detail-two" class="side-nav-link-ref">Blog Detail 2 <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Case Study <span class="badge badge-danger rounded">v2.5</span></a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-cases" class="side-nav-link-ref">All Cases <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-case-detail" class="side-nav-link-ref">Case Detail <span class="badge badge-success rounded">New</span></router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Works</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-work-modern" class="side-nav-link-ref">Works Modern</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-work-classic" class="side-nav-link-ref">Works Classic</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-work-grid" class="side-nav-link-ref">Works Grid</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-work-masonry" class="side-nav-link-ref">Works Masonry</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-work-detail" class="side-nav-link-ref">Work Detail</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a <a class="text-white" href="javascript:void(0)" @click="onMenuClick"> Auth Pages</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/auth-login">Login</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-cover-login">Login Cover</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-login-three">Login Simple</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-signup">Signup</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-cover-signup">Signup Cover</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-signup-three">Signup Simple</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-re-password">Reset Password</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-cover-re-password">Reset Password Cover</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/auth-re-password-three">Reset Password Simple</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Utility </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-terms" class="side-nav-link-ref">Terms of Services</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-privacy" class="side-nav-link-ref">Privacy Policy</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Special </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-comingsoon">Coming Soon</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-comingsoon2">Coming Soon Two</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-maintenance">Maintenance</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-error" class="side-nav-link-ref">Error</router-link>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu"><a href="javascript:void(0)" @click="onMenuClick"> Contact </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li>
                                        <router-link to="/page-contact-detail" class="side-nav-link-ref">Contact Detail</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-contact-one" class="side-nav-link-ref">Contact One</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-contact-two" class="side-nav-link-ref">Contact Two</router-link>
                                    </li>
                                    <li>
                                        <router-link to="/page-contact-three" class="side-nav-link-ref">Contact Three</router-link>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><span class="text-white" id="registrate">REGISTRATE GRATIS</span></a>
                    </li>

                    <!-- <li class="has-submenu">
                        <a href="javascript:void(0)" @click="onMenuClick">REGISTRATE GRATIS</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <router-link to="/documentation" class="side-nav-link-ref">Documentation</router-link>
                            </li>
                            <li>
                                <router-link to="/changelog" class="side-nav-link-ref">Changelog</router-link>
                            </li>
                            <li>
                                <router-link to="/components" class="side-nav-link-ref">Components</router-link>
                            </li>
                            <li>
                                <router-link to="/widget" class="side-nav-link-ref">Widget</router-link>
                            </li>
                        </ul>
                    </li> -->
                </ul>
                <!--end navigation menu-->
<!--                 <div class="buy-menu-btn d-none">
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div> -->
                <!--end login button-->
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

</style>