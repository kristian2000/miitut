<script>
import {
    ArrowUpIcon,
    ArrowRightIcon,
    MapPinIcon,
    UserCheckIcon,
    MonitorIcon,
    BookIcon,
    ClockIcon,
    DollarSignIcon,
    BriefcaseIcon
} from 'vue-feather-icons';

import Navbar from "@/components/navbar";
import Switcher from "@/components/switcher";
import Footer from "@/components/footer";

/**
 * Page-job-detail component
 */
export default {
    data() {
        return {}
    },
    components: {
        Navbar,
        Switcher,
        Footer,
        ArrowUpIcon,
        ArrowRightIcon,
        MapPinIcon,
        UserCheckIcon,
        MonitorIcon,
        BookIcon,
        ClockIcon,
        DollarSignIcon,
        BriefcaseIcon
    }
}
</script>

<template>
<div>
    <Navbar />

    <!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <img src="images/job/Gradle.svg" class="avatar avatar-small" alt="">
                        <h4 class="title mt-4 mb-3"> Back-End Developer </h4>
                        <p class="para-desc mx-auto text-muted">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                        <ul class="list-unstyled">
                            <li class="list-inline-item text-primary mr-3"><i class="mdi mdi-map-marker text-warning mr-2"></i>Beijing, China</li>
                            <li class="list-inline-item text-primary"><i class="mdi mdi-office-building text-warning mr-2"></i>Gradle</li>
                        </ul>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item">
                                        <router-link to="/">Landrick</router-link>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Page</a></li>
                                    <li class="breadcrumb-item"><a href="#">Careers</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Job Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Job Detail Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="card sidebar sticky-bar rounded shadow border-0">
                        <div class="card-body widget border-bottom">
                            <h5 class="mb-0">Job Information</h5>
                        </div>

                        <div class="card-body">
                            <div class="media widget align-items-center">
                                <user-check-icon class="fea icon-ex-md mr-3"></user-check-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Employee Type:</h4>
                                    <p class="text-primary mb-0">Full Time</p>
                                </div>
                            </div>

                            <div class="media widget align-items-center mt-3">
                                <map-pin-icon class="fea icon-ex-md mr-3"></map-pin-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Location:</h4>
                                    <p class="text-primary mb-0">Beijing, China</p>
                                </div>
                            </div>

                            <div class="media widget align-items-center mt-3">
                                <monitor-icon class="fea icon-ex-md mr-3"></monitor-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Job Type:</h4>
                                    <p class="text-primary mb-0">Back-end Developer</p>
                                </div>
                            </div>

                            <div class="media widget align-items-center mt-3">
                                <briefcase-icon class="fea icon-ex-md mr-3"></briefcase-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Experience:</h4>
                                    <p class="text-primary mb-0">+2 Year</p>
                                </div>
                            </div>

                            <div class="media widget align-items-center mt-3">
                                <book-icon class="fea icon-ex-md mr-3"></book-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Qualifications:</h4>
                                    <p class="text-primary mb-0">MSCIT</p>
                                </div>
                            </div>

                            <div class="media widget align-items-center mt-3">
                                <dollar-sign-icon class="fea icon-ex-md mr-3"></dollar-sign-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Salary:</h4>
                                    <p class="text-primary mb-0">+50k to 70k</p>
                                </div>
                            </div>

                            <div class="media widget align-items-center mt-3">
                                <clock-icon class="fea icon-ex-md mr-3"></clock-icon>
                                <div class="media-body">
                                    <h4 class="widget-title mb-0">Date posted:</h4>
                                    <p class="text-primary mb-0 mb-0">5th Sep, 2019</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-8 col-md-7 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="ml-lg-4">
                        <h5>Job Description: </h5>
                        <p class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others - which creates a distinct visual impression. Moreover, in Latin only words at the beginning of sentences are capitalized.</p>
                        <p class="text-muted">This means that Lorem Ipsum cannot accurately represent, for example, German, in which all nouns are capitalized. Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. If the fill text is intended to illustrate the characteristics of different typefaces.</p>
                        <p class="text-muted">It sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>

                        <h5 class="mt-4">Responsibilities and Duties: </h5>
                        <p class="text-muted">It sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                        <ul class="list-unstyled">
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Participate in requirements analysis
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Write clean, scalable code using C# and .NET frameworks
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Test and deploy applications and systems
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Revise, update, refactor and debug code
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Improve existing software
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Develop documentation throughout the software development life cycle (SDLC)
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Serve as an expert on applications and provide technical support
                            </li>
                        </ul>

                        <h5 class="mt-4">Required Experience, Skills and Qualifications: </h5>
                        <p class="text-muted">It sometimes makes sense to select texts containing the various letters and symbols specific to the output language.</p>
                        <ul class="list-unstyled">
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Proven experience as a .NET Developer or Application Developer
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>good understanding of SQL and Relational Databases, specifically Microsoft SQL Server.
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Experience designing, developing and creating RESTful web services and APIs
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Basic know how of Agile process and practices
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Good understanding of object-oriented programming.
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Good understanding of concurrent programming.
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Sound knowledge of application architecture and design.
                            </li>
                            <li class="text-muted">
                                <arrow-right-icon class="fea icon-sm text-success mr-2"></arrow-right-icon>Excellent problem solving and analytical skills
                            </li>
                        </ul>

                        <div class="mt-4">
                            <router-link to="/page-job-apply" class="btn btn-outline-primary">Apply Now <i class="mdi mdi-send"></i></router-link>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Job Detail End -->
    <!--end section-->
    <Footer />
    <!-- Footer End -->
    <Switcher />
    <!-- Back to top -->
    <a href="javascript: void(0);" class="btn btn-icon btn-soft-primary back-to-top" id="back-to-top" v-scroll-to="'#topnav'">
        <arrow-up-icon class="icons"></arrow-up-icon>
    </a>
    <!-- Back to top -->
</div>
</template>
