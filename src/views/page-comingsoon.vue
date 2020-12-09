<script>
import Switcher from "@/components/switcher";
import {
    HomeIcon
} from 'vue-feather-icons';

/**
 * Page-comingsoon component
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
    <section class="bg-home d-flex align-items-center" data-jarallax='{"speed": 0.5}' style="background-image: url('images/comingsoon.jpg');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <a href="javascript:void(0)" class="logo h5"><img src="images/logo-light.png" height="24" alt=""></a>
                    <div class="text-uppercase title-dark text-white mt-2 mb-4 coming-soon">We're Coming soon...</div>
                    <p class="text-light para-desc para-dark mx-auto">Start working with <span class="text-primary font-weight-bold">Landrick</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
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
                <div class="col-md-12 text-center">
                    <router-link to="/" class="btn btn-primary mt-4"><i class="mdi mdi-backup-restore"></i> Go Back Home</router-link>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!--section end-->
    <!-- COMING SOON PAGE -->
    <Switcher />
</div>
</template>
