<script>
export default {
    data() {
        return {
            isVisible: false
        }
    },
    methods: {
        ToogleMenu() {
            this.isVisible = !this.isVisible;
        },
        setTheme(theme) {
            document
                .getElementById("color-opt")
                .setAttribute("href", "./css/colors/" + theme + ".css");
        },
        setDark() {
            document.getElementById("theme-opt").setAttribute("href", "./css/style-dark.css");
        },
        setLight() {
            document.getElementById("theme-opt").setAttribute("href", "./css/style.css");
        },
        darkRtl() {
            document.getElementById("theme-opt").setAttribute("href", "./css/style-dark-rtl.css");
        },
        darkLtr() {
            document.getElementById("theme-opt").setAttribute("href", "./css/style-dark.css");
        },
        setRtl() {
            document.getElementById("theme-opt").setAttribute("href", "./css/style-rtl.css");
        },
        setLtr() {
            document.getElementById("theme-opt").setAttribute("href", "./css/style.css");

        }
    }
}
</script>

<template>
<!-- Start Style switcher -->
<div id="style-switcher" style="left: 0px;" class="bg-light border p-3 pt-2 pb-2" v-bind:style="isVisible ? 'left: 0px' : 'left: -189px' ">
    <h3 class="title text-center">Select Your Color</h3>
    <ul class="pattern text-center mb-2">
        <li class="list-inline-item">
            <a class="default" href="javascript: void(0);" v-on:click="setTheme('default')"></a>
        </li>
        <li class="list-inline-item">
            <a class="green" href="javascript: void(0);" v-on:click="setTheme('green')"></a>
        </li>
        <li class="list-inline-item">
            <a class="purple" href="javascript: void(0);" v-on:click="setTheme('purple')"></a>
        </li>
        <li class="list-inline-item">
            <a class="red" href="javascript: void(0);" v-on:click="setTheme('red')"></a>
        </li>
        <li class="list-inline-item">
            <a class="skyblue" href="javascript: void(0);" v-on:click="setTheme('skyblue')"></a>
        </li>
        <li class="list-inline-item">
            <a class="skobleoff" href="javascript: void(0);" v-on:click="setTheme('skobleoff')"></a>
        </li>
        <li class="list-inline-item">
            <a class="cyan" href="javascript: void(0);" v-on:click="setTheme('cyan')"></a>
        </li>
        <li class="list-inline-item">
            <a class="slateblue" href="javascript: void(0);" v-on:click="setTheme('slateblue')"></a>
        </li>
    </ul>

    <h3 class="title text-center pt-3 mb-0 border-top">Theme Option</h3>
    <div class="text-center">
        <a href="javascript: void(0);" class="btn btn-sm w-100 btn-primary rtl-version t-rtl-light mt-2" @click="setRtl()">RTL</a>
        <a href="javascript: void(0);" class="btn btn-sm w-100 btn-primary ltr-version t-ltr-light mt-2" @click="setLtr()">LTR</a>
        <a href="javascript: void(0);" class="btn btn-sm w-100 btn-primary dark-rtl-version t-rtl-dark mt-2" @click="darkRtl()">RTL</a>
        <a href="javascript: void(0);" class="btn btn-sm w-100 btn-primary dark-ltr-version t-ltr-dark mt-2" @click="darkLtr()">LTR</a>
        <a href="javascript: void(0);" class="btn btn-sm w-100 btn-dark dark-version t-dark mt-2" @click="setDark()">Dark</a>
        <a href="javascript: void(0);" class="btn btn-sm w-100 btn-dark light-version t-light mt-2" @click="setLight()">Light</a>
    </div>
    <div class="bottom">
        <a href="javascript: void(0);" class="settings bg-white shadow d-block" @click="ToogleMenu"><i class="mdi mdi-cog ml-1 mdi-24px position-absolute mdi-spin text-primary"></i></a>
    </div>
</div>
<!-- End Style switcher -->
</template>
