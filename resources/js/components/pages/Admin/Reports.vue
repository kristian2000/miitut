<script>
import LayoutAdmin from '../../../layouts/LayoutAdmin'
import { 
    FileIcon
 } from 'vue-feather-icons'

export default {
    data(){
        return {
            docs: [],
            loading: false,
            loadingDoc: false,
            currentDoc: null,
            fields: [
                { key: 'createdAt', label: 'Fecha Reporte'},
                { key: 'user', label: 'Usuario Reportado' },
                { key: 'more', label: 'Ver'}
            ],
        }
    },
    components: {
        LayoutAdmin,
        FileIcon
    },
    created(){
        this.getDocs();
    },
    methods: {
        dateFormat(date){
            let objDate = new Date(date)
            let d = objDate.getDate()
            let m = objDate.getMonth() + 1
            let y = objDate.getFullYear()

            return `${d < 10 ? ( '0' + d ) : d }-${m < 10 ? ( '0' + m) : m}-${y}`
        },
        async getDocs(){
            this.loading = true;
            const response = await this.callApi('get', `app/admin/reports`);
            console.log(response)


            if (response.status === 200){
                this.docs = response.data.docs.map(doc => ({
                    ...doc, createdAt: this.dateFormat(doc.created_at) 
                }));
                this.loading = false; 
            }
        },
        showDocument(doc, index, button) {
            console.log(doc)
            this.currentDoc = { ...doc };
            this.$bvModal.show('modalDoc')
        }
    }
}
</script>

<template>
    <LayoutAdmin active="Reportes">
        <div class="col-12 col-lg-8" v-if="!loading">
            <div class="text-center" v-if="docs.length">
                <div class="font-weight-bold mb-2">
                    Reportes de Usuarios
                </div>
                <div>
                   <b-table
                        responsive
                        striped 
                        hover 
                        outlined
                        small
                        :items="docs"
                        :fields="fields"
                        style="max-height: 350px"
                          
                    >
                        <template  #cell(createdAt)="data">
                            {{ data.item.createdAt }}
                        </template>

                        <template #cell(user)="data">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex align-items-center">
                                    <img
                                        :src="data.item.user_reported.avatar ? data.item.user_reported.avatar : 'images/avatarDefault.jpg'"
                                        class=" item-avatar shadow d-block m-1"
                                        width="80px"
                                        height="80px"
                                        alt=""
                                    >
                                    <div class="" style="font-size: 13px;">                                
                                        <div>{{data.item.user_reported.name}}</div>
                                        <div>{{data.item.user_reported.email}}</div>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <template #cell(more)="data">
                            <div 
                                class="text-center btn-more"
                                @click="showDocument(data.item, data.index, $event.target)" 
                                
                            >
                                <FileIcon 
                                    size="1x"
                                />
                            </div>
                        </template>
                    </b-table>
                </div>
            </div>
            <div v-else>
                <div class="d-flex justify-content-center">
                    <div>
                        Lista de Documentos Vacia 
                    </div>
                </div>
            </div>
        </div>
        <div v-else class="col-12 col-lg-8">
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <b-spinner 
                        type="grow" 
                        label="Spinning" 
                    />
                </div>

            </div>
        </div>

                <!-- Modal Doc Start -->
        <b-modal id="modalDoc" hide-footer title="Usuario Reportado">
            <div v-if="!loadingDoc && currentDoc" class="row">
                <div class="col-12">
                    <div class="text-center text-muted">
                        <label> Usuario Reportado</label>
                    </div>
                </div>
                <div class="col-12 border-bottom d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <img
                                :src="currentDoc.user_reported.avatar ? currentDoc.user_reported.avatar : 'images/avatarDefault.jpg'"
                                class=" item-avatar shadow d-block m-1"
                                width="80px"
                                height="80px"
                                alt=""
                            >
                            <div class="" style="font-size: 13px;">                                
                                <div>{{currentDoc.user_reported.name}}</div>
                                <div>{{currentDoc.user_reported.email}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-1">
                    <div class="text-center text-muted">
                        <label> Datos del Reporte</label>
                        <div class="">
                            <p style="font-size: 14px">
                                <span class="font-weight-bold"> Descripcion: </span>
                                {{ currentDoc.description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="m-2">
                            <b-button 
                                pill variant="outline-danger"
                                @click="$router.push({path: `/perfil-publico/${currentDoc.category_id}`})"
                            >Ir a la categoria</b-button>
                        </div>
                        <!-- <div class="m-2">
                            <b-button 
                                pill variant="outline-success"
                                @click="acceptDoc"
                            >Aceptar</b-button>
                        </div> -->
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="d-flex justify-content-center">
                    <div>
                        <b-spinner type="grow" label="Spinning"></b-spinner>            
                    </div>
                </div>
            </div>
        </b-modal>
    </LayoutAdmin>
</template>

<style scoped>
    .imgDoc {
        width: '100%';
        cursor: pointer;
    }
</style>