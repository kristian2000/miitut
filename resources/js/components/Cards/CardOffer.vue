
<script>
import {
    MapPinIcon,
    MoreVerticalIcon,
    PlayIcon,
    PauseIcon,
    PlusIcon,
    CheckIcon

} from 'vue-feather-icons';

export default {
    props: ["doc", "onCall"],
    created(){
        console.log('created ads', this.doc)
    },
    components: {
        MapPinIcon,
        MoreVerticalIcon,
        PlayIcon,
        PauseIcon,
        PlusIcon,
        CheckIcon
    },
    data(){
        return {}
    }
}
</script>

<template>
    <div class="card job-box rounded shadow border-0 overflow-hidden">
        <div class="border-bottom">
            <div class="position-relative">
                <img src="images/job/full.jpg" class="img-fluid" alt="">
                <div class="job-overlay bg-white"></div>
            </div>
            <h5 class="mb-0 position">
                <div class="text-dark">
                    {{ doc.category.label }}
                </div>
                <!-- <router-link to="/page-job-detail" class="text-dark">Web Designer</router-link> -->
                <ul class="list-unstyled h6 mb-0 text-warning">
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                    </ul>
            </h5>
            <!-- <ul class="list-unstyled head mb-0">
                <li class="badge badge-success badge-pill">Full Time</li>
            </ul> -->
        </div>

        <div class="card-body content position-relative">
            <div class="firm-logo rounded-circle shadow bg-light text-center">
                <img 
                    :src="doc.user.avatar" 
                    alt=""
                    style="cursor:pointer; width: 60px; height: 60px; border-radius: 50%"
                >
            </div>

            <div class="company-detail text-center mt-3">
                <h5 class="mb-0 text-dar company-name">
                    {{ doc.user.name }}
                    <!-- <router-link to="/page-job-company" class="text-dark company-name">CircleCi</router-link> -->
                </h5>
                <p class="text-muted">
                    <map-pin-icon class="fea icon-sm"></map-pin-icon> {{ doc.user.state }}
                </p>
            </div>
            <ul class="job-facts list-unstyled">
                <li class="list-inline-item text-muted">
                    <check-icon class="fea icon-sm text-success mr-1"></check-icon> Inicio {{ doc.date_start }} {{ doc.start_time }}
                </li>
                <li class="list-inline-item text-muted">
                    <check-icon class="fea icon-sm text-success mr-1"></check-icon> Horas de Trabajo - {{ doc.hours }}hr
                </li>
                <li class="list-inline-item text-muted">
                    <check-icon class="fea icon-sm text-success mr-1"></check-icon> Precio por hora - {{ doc.price }}€
                </li>
            </ul>
            <div 
                class="btn btn-outline-primary btn-block"
            >
                Aplicar Ahora
            </div>
            <!-- <router-link to="/page-job-detail" class="btn btn-outline-primary btn-block">Apply Now</router-link> -->
        </div>
    </div>
</template>
