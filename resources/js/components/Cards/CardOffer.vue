
<script>
import {
    MapPinIcon,
    MoreVerticalIcon,
    PlayIcon,
    PauseIcon,
    PlusIcon,
    CheckIcon,
    ClipboardIcon

} from 'vue-feather-icons';

import Score from '../score.vue'

export default {
    props: ["doc", "onCall", "onCallRequest", 'type'],
    
    components: {
        MapPinIcon,
        MoreVerticalIcon,
        PlayIcon,
        PauseIcon,
        PlusIcon,
        CheckIcon,
        ClipboardIcon,
        Score
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
                <!-- <ul class="list-unstyled h6 mb-0 text-warning">
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>                                    
                        <li class="list-inline-item mb-0"><i class="mdi mdi-star"></i></li>
                    </ul> -->
                <Score
                    :scoreStar="Number(doc.user.score) ?
                        Number(doc.user.score)/Number(doc.user.ratings)
                        :
                        0"
                />
            </h5>
            <span 
                class="head mt-3" v-if="type === 'ad'"
                style="cursor: pointer;"
                @click="onCallRequest(doc)"
            >
                <ClipboardIcon style="width: 30px; height: 30px;" />
                <span style="position:relative">
                    <b-badge 
                        variant="dark"
                        style="
                            position: absolute; 
                            top: 10px;
                            right: 0px; 
                            font-size: 15px; 
                            padding: 1px 2px;
                        "
                    >
                        {{ doc.requests.length }}
                    </b-badge>
                </span>
            </span>
            <!-- <ul class="list-unstyled head mb-0">
                <li class="badge badge-success badge-pill">Full Time</li>
            </ul> -->
        </div>

        <div class="card-body content position-relative">
            <div class="firm-logo rounded-circle shadow bg-light text-center">
                <img 
                    :src="doc.user.avatar || '/images/avatarDefault.jpg'" 
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
                    <map-pin-icon class="fea icon-sm"></map-pin-icon> {{ doc.user.state }}<br>{{ doc.user.county }}
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
                @click="onCall(doc)"
            >
                {{ type === "ad" ? "Ver" : "Aplicar Ahora"}}
            </div>
            <!-- <router-link to="/page-job-detail" class="btn btn-outline-primary btn-block">Apply Now</router-link> -->
        </div>
    </div>
</template>
