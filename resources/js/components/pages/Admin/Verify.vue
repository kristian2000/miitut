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
                { key: 'createdAt', label: 'Fecha Solicitud'},
                { key: 'user', label: 'Usuario' },
                { key: 'type_document', label: 'Tipo Doc'},
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
            const response = await this.callApi('get', `app/admin/docs`);
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
        },
        async rejectDoc(){
            
            this.loadingDoc = true;
            const response = await this.callApi('post', `app/admin/docs/${this.currentDoc.id}/reject`);
            console.log('rejectDoc', response)
            
            if (response.status === 200){
                this.$bvModal.hide('modalDoc')
                this.docs = this.docs.filter( d => d.id !== this.currentDoc.id)
                this.currentDoc = null;
                this.makeNotice('success', 'Info', 'El proceso de rechazar el documento fue completado exitosamente');
            }

            this.loadingDoc = false;
        },
        async acceptDoc(){
            this.loadingDoc = true;
            const response = await this.callApi('post', `app/admin/docs/${this.currentDoc.id}/accept`);
            console.log('acceptDoc', response)
            
            if (response.status === 200){
                this.$bvModal.hide('modalDoc')
                this.docs = this.docs.filter( d => d.id !== this.currentDoc.id)
                this.currentDoc = null;
                this.makeNotice('success', 'Info', 'El proceso de aceptar el documento fue completado exitosamente');
            }

            this.loadingDoc = false;
        }
    }
}
</script>

<template>
    <LayoutAdmin active="Verificaciones">
        <div class="col-12 col-lg-8" v-if="!loading">
            <div class="text-center" v-if="docs.length">
                <div class="font-weight-bold mb-2">
                    Documentos DNI Pendientes
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
                                        :src="data.item.avatar ? data.item.avatar : 'images/avatarDefault.jpg'"
                                        class=" item-avatar shadow d-block m-1"
                                        width="80px"
                                        height="80px"
                                        alt=""
                                    >
                                    <div class="" style="font-size: 13px;">                                
                                        <div>{{data.item.user.name}}</div>
                                        <div>{{data.item.user.email}}</div>
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
        <b-modal id="modalDoc" hide-footer title="Documento DNI">
            <div v-if="!loadingDoc && currentDoc" class="row">
                <div class="col-12 border-bottom d-flex justify-content-center">
                    <div class="font-weight-bold">
                        <div class="">
                            <span> Nombre: </span>
                            <span> {{ currentDoc.user.name }} </span>
                        </div>
                        <div>
                            <span> Email: </span>
                            <span> {{ currentDoc.user.email }} </span>
                        </div>
                        <div>
                            <span> Tipo de Usuario: </span>
                            <span> {{ currentDoc.user.userType }} </span>
                        </div>
                        <div>
                            <span> DNI: </span>
                            <span> {{ currentDoc.user.dni }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                   
                        <div class=" text-center m-2">
                            <label class="font-weight-bold"> DNI Frente </label>
                            <div >
                                <img 
                                    :src="currentDoc.img_front" 
                                    alt=""
                                    style="width: 100%; cursor: pointer"
                                >
                            </div>
                        </div>

                        <div class=" text-center m-2">
                            <label class="font-weight-bold"> DNI Posterior </label>
                            <div>
                                <img 
                                    :src="currentDoc.img_back" 
                                    alt=""
                                    style="width: 100%; cursor: pointer"
                                >
                            </div>
                        </div>

                    
                    
                </div>
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <div class="m-2">
                            <b-button 
                                pill variant="outline-danger"
                                @click="rejectDoc"
                            >Rechazar</b-button>
                        </div>
                        <div class="m-2">
                            <b-button 
                                pill variant="outline-success"
                                @click="acceptDoc"
                            >Aceptar</b-button>
                        </div>
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