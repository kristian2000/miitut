<script>
import {
    NavigationIcon,
    CheckIcon,
    XIcon,
    ArrowRightIcon
} from 'vue-feather-icons';

import Score from './Score'
export default {
    props: ["categoryUser"],
    data() {
        return {
            data: {
                profile: "/images/client/05.jpg",
                name: "Calvin Carlo",
                designation: "Front-end Developer",
                experience: "3+ years",
                skills: ["PHP", "Wordpress", "Web Design", "CSS", "JS"]
            }
        }
    },
    components: {
        Score,
        NavigationIcon,
        CheckIcon,
        XIcon,
        ArrowRightIcon
    }
}
</script>

<template>
<div>
    <div 
        class="candidate-list card rounded border-0 shadow m-2"
        @click="$router.push({ path: `/perfil-publico/${categoryUser.id}` })"
    >
        <div class="card-body">
            <ul class="list-unstyled align-items-center">
                <!-- Esta si es Premium -->
                <li 
                    class="list-inline-item"
                    v-if="Number(categoryUser.user.subscriptions.length)"
                >
                    <span class="badge badge-pill badge-danger">
                        Destacado
                    </span
                    >
                </li>
                <!-- Este si esta verificado -->
                <li 
                    class="list-inline-item ml-auto verified"
                    v-if="Number(categoryUser.user.profile_check)"
                >
                    <span class="badge badge-pill badge-soft-success">
                        Verificado
                    </span
                    >
                </li>
            </ul>

            <div class="content text-center">
                <img
                    :src="categoryUser.user.avatar ? categoryUser.user.avatar : 'images/avatarDefault.jpg'"
                    class="avatar avatar-md-md shadow-md rounded-circle"
                    alt=""
                />
                <Score
                    :scoreStar="Number(categoryUser.user.score) ?
                        Number(categoryUser.user.score)/Number(categoryUser.user.ratings)
                        :
                        0"
                />
                <span class="text-dark h5 name">
                    {{categoryUser.user.name}}
                </span>
                <p class="text-muted my-1">{{categoryUser.category.label}}</p>

                    <div>
                        <div style= "color: #0BFFF;">
                            <div 
                                class="" 
                                style="font-size: 14px; 
                                font-weight: bold"
                            >
                                <NavigationIcon width="15" />
                                A {{ categoryUser.distance > 1 ?
                                    `${Number(categoryUser.distance).toFixed(2)} km`
                                    :
                                    `${Number(categoryUser.distance).toFixed(3).split('.')[1]} m`
                                }} de Ti
                            </div>
                        </div>
                    </div>

                <span class="text-muted"
                ><i
                    class="uil uil-graduation-cap h4 mb-0 mr-2 text-primary"
                ></i
                >Experiencia 
                <span class="text-success">{{categoryUser.yearExperience}} 
                    <span v-if="categoryUser.yearExperience==1" >Año</span>
                    <span v-else >Años</span>
                </span></span
                >

                <div>
                    <div>
                        Coste: 8 €/h
                    </div>
                </div>

                <ul class="list-unstyled">
                    <li 
                        class="list-inline-item m-1" 
                        v-for="(item) of categoryUser.category.subcategories" :key="item.id"
                    >
                        <div
                            class="rounded bg-light py-1 px-2 text-muted small"
                            style="font-size: 12px;"
                        >
                            <span>
                                <CheckIcon
                                    width="10"
                                    v-if="categoryUser.sub_categories ?
                                            (categoryUser.sub_categories
                                                .find(subCat => subCat.code === item.id)
                                            )
                                            : 
                                            false"
                                    style="color: green"
                                />
                                <XIcon
                                    v-else
                                    width="10"
                                    style="color: red"
                                />
                            </span>
                            {{ item.label }}
                        </div>
                    </li>
                </ul>

                <router-link
                tag="a"
                to="/page-job-candidate"
                class="btn btn-block btn-soft-primary"
                >Leer Más
                <arrow-right-icon class="fea icon-sm"></arrow-right-icon
                ></router-link>
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>
.verified{
    position: absolute;
    right: 40px;
}
</style>