<script>
import Switcher from "@/components/switcher";
import {
    VueTyper
} from 'vue-typer';
import {
    HomeIcon
} from 'vue-feather-icons';

/**
 * Page-cominsoon-2 component
 */
export default {
    data() {
        return {
            start: "",
            end: "",
            interval: "",
            days: "",
            minutes: "",
            hours: "",
            seconds: "",
            starttime: "Dec 25, 2020 15:37:25",
            endtime: "Dec 31, 2020 16:37:25"
        }
    },
    components: {
        Switcher,
        'vue-typer': VueTyper,
        HomeIcon
    },
    mounted() {
        this.start = new Date(this.starttime).getTime();
        this.end = new Date(this.endtime).getTime();
        // Update the count down every 1 second
        this.timerCount(this.start, this.end);
        this.interval = setInterval(() => {
            this.timerCount(this.start, this.end);
        }, 1000);
    },
    methods: {
        timerCount: function (start, end) {
            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = start - now;
            var passTime = end - now;

            if (distance < 0 && passTime < 0) {
                clearInterval(this.interval);
                return;
            } else if (distance < 0 && passTime > 0) {
                this.calcTime(passTime);
            } else if (distance > 0 && passTime > 0) {
                this.calcTime(distance);
            }
        },
        calcTime: function (dist) {
            // Time calculations for days, hours, minutes and seconds
            this.days = Math.floor(dist / (1000 * 60 * 60 * 24));
            this.hours = Math.floor(
                (dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            this.minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((dist % (1000 * 60)) / 1000);
        },
    }
}
</script>

<template>
<div>
    <div class="back-to-home rounded d-none d-sm-block">
        <router-link to="/" class="btn btn-icon btn-soft-primary">
            <home-icon class="icons"></home-icon>
        </router-link>
    </div>

    <!-- COMING SOON PAGE -->
    <section class="bg-home bg-animation-left dark-left d-flex align-items-center" data-jarallax='{"speed": 0.5}' style="background-image: url('images/comingsoon2.jpg');" id="home">
        <a id="video" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=NoZ8S3UgDh0',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
        <div class="container position-relative text-md-left text-center" style="z-index: 1;">
            <div class="row">
                <div class="col-md-12">
                    <a href="javascript:void(0)" class="logo h5"><img src="images/logo-light.png" height="24" alt=""></a>
                    <h1 class="text-uppercase text-white title-dark mt-2 mb-4 coming-soon">
                        <vue-typer class="text-white" :text='["We are Coming soon...","We are Be Ready to", "We are Connected with us"]'></vue-typer>
                    </h1>
                    <p class="text-light para-dark para-desc">Start working with <span class="font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="countdown">
                        <div class="count-down">
                            <span class="count-number">{{days}}</span>
                            <span class="count-head position-relative d-bock">Days</span>
                        </div>
                        <div class="count-down">
                            <span class="count-number">{{hours}}</span>
                            <span class="count-head position-relative d-bock">Hours</span>
                        </div>
                        <div class="count-down">
                            <span class="count-number">{{minutes}}</span>
                            <span class="count-head position-relative d-bock">Minutes</span>
                        </div>
                        <div class="count-down">
                            <span class="count-number">{{seconds}}</span>
                            <span class="count-head position-relative d-bock">Seconds</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="javascript: void(0);" data-toggle="modal" v-b-modal.modal-1 data-target="#LoginForm" class="btn btn-primary mt-4 mr-2"><i class="mdi mdi-check"></i> Notify Me</a>
                    <router-link to="/" class="btn btn-outline-primary mt-4"><i class="mdi mdi-backup-restore"></i> Go Back Home</router-link>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- COMING SOON PAGE -->

    <!-- Subscribe start -->
    <b-modal id="modal-1" title="Subscribe Me" hide-footer centered>
        <div class="bg-white p-3 rounded box-shadow">
            <p>We are comingsoon. Please, Enter your mail id and subscribe.</p>
            <form>
                <div class="form-group mb-0">
                    <div class="input-group">
                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Email :" required="" aria-describedby="newssubscribebtn">
                        <div class="input-group-append">
                            <button class="btn btn-primary submitBnt" type="submit" id="paypalmail">Subscribe</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </b-modal>
    <!-- Subscribe end -->
    <Switcher />
</div>
</template>

<style>
.vue-typer .custom.char.typed {
    color: white;
}
</style>
