<script>
import LayoutAdmin from '../../../layouts/LayoutAdmin'
import { 
    FileIcon,
    Edit2Icon,
    TrashIcon
 } from 'vue-feather-icons'

import Post from '../../Post'

let sizeImgMax = 502400;

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
            form: {},
            urlPreview:null
        }
    },
    components: {
        LayoutAdmin,
        FileIcon,
        Post,
        Edit2Icon,
        TrashIcon
    },
    created(){
        this.getDocs();
    },
    methods: {
        selectImage(){
            this.$refs.fileInput.click()
        },
        async previewDoc(e){
            const image = e.target.files[0]

            if (image?.size >= sizeImgMax){
                this.makeNotice(
                    'danger', 
                    'Tamaño Máximo', 
                    `La imagen debe ser menor a ${Number(sizeImgMax/1024).toFixed(0)}Kb`
                );
                return;
            }
            
            this.form.photo = image;
            this.urlPreview = URL.createObjectURL(image);
            
        }, 
        dateFormat(date){
            let objDate = new Date(date)
            let d = objDate.getDate()
            let m = objDate.getMonth() + 1
            let y = objDate.getFullYear()

            return `${d < 10 ? ( '0' + d ) : d }-${m < 10 ? ( '0' + m) : m}-${y}`
        },
        async getDocs(){
            this.loading = true;
            const response = await this.callApi('get', `app/blogs/posts`);

            console.log(response)

            if (response.status === 200){
                this.docs = response.data.posts.map(post => ({
                    ...post,
                    photo: `${post.photo}?${Date.now()}`
                }));
                this.loading = false; 
            }
        },
        showDocument(doc, index, button) {
            console.log(doc)
            this.currentDoc = { ...doc };
            this.$bvModal.show('modalDoc')
        },
        showModal(action, doc){
            // Action created|updated
            this.clean();

            if (action === 'created'){
                this.currentDoc = null;
            }else {
                this.currentDoc = doc;

                this.form.title = doc.title;
                this.form.description = doc.description;
                this.form.photo = doc.photo;

                this.urlPreview = doc.photo;
            }
              
            this.$bvModal.show('modalDoc')
        },
        validate(){
            console.log('submit', this.form);

            !this.currentDoc ? this.createdDoc() : this.updatedDoc();
        },
        async createdDoc(){
            this.loadingDoc = true;

            let formData = new FormData();

            formData.append('title', this.form.title);
            formData.append('description', this.form.description);
            formData.append('photo', this.form.photo)

            const response = await this.callApi('post', `/app/blogs/posts`, formData);

            console.log(response)

            if (response.status === 200){

                let newPost = response.data.blog;

                this.docs = [ newPost ,...this.docs];

                this.$bvModal.hide('modalDoc');
                this.clean();
                this.loadingDoc = false; 
            }else {
                this.makeNotice('danger', 'Oops', 'Error creando la Noticia');
                this.loadingDoc = false;
            }
        },  
        async updatedDoc(){
            this.loadingDoc = true; 

            let formData = new FormData();
            formData.append('title', this.form.title);
            formData.append('description', this.form.description);


            if (typeof this.form.photo !== 'string'){
                formData.append('photo', this.form.photo)
            }

            const response = await this.callApi('post', `/app/blogs/posts/${this.currentDoc.id}`, formData);
            // console.log(response)
            let newPost = response.data.post;

            if (response.status === 200){

                this.docs = this.docs.map(d => d.id != this.currentDoc.id ? d : {
                    ...newPost,
                    photo: newPost.photo + '?' + Date.now()
                });

                this.loadingDoc = false;

                this.makeNotice('success', 'Info', 'El Post se Actualizo correctamente!');
                this.$bvModal.hide('modalDoc')
                this.clean();
            }
        },
        async destroyDoc(){
            this.loadingDoc = true; 
            const response = await this.callApi('delete', `/app/blogs/posts/${this.currentDoc.id}`);

            if (response.status === 200){
                this.docs = this.docs.filter(d => d.id != this.currentDoc.id);

                this.loadingDoc = false;
                this.makeNotice('success', 'Info', 'El Post se elimino correctamente!');
                this.$bvModal.hide('modalDoc')
                this.clean();
            }

        },
        clean(){
            this.form.title = '';
            this.form.description = "";
            this.form.photo = null;

            this.urlPreview = null;
        }
    }
}
</script>

<template>
    <LayoutAdmin active="Blog">
        <div class="col-12 col-lg-8" v-if="!loading">
            <div class="font-weight-bold mb-2 text-center">
                <h3> Blog </h3>
                <b-button 
                    size="sm" 
                    variant="primary"
                    @click="showModal('created')"
                >
                    Agregar
                </b-button>
            </div>

            <div 
                class="text-center content" 
                v-if="docs.length"
                >
                <div v-for="post in docs" :key="post.id">
                    <div @click="showModal('updated', post)">
                        <Post :post="post"/>
                    </div>
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
        <b-modal id="modalDoc" hide-footer :title="!currentDoc ? 'Crear Noticia' : 'Actualizar'">
            <div v-if="!loadingDoc" class="row">
                <div class="col-12 form-group">
                    <label>Foto <span class="text-danger">*</span></label>
                    <div>
                        <b-form-file
                            v-model="form.photo"
                            @change="e => previewDoc(e)"
                        ></b-form-file>
                    </div>
                    <div class="row d-flex justify-content-center mb-4">
                        <div class="col-12 col-md-8" v-if="!urlPreview">
                            <b-skeleton-img  width="100%"/>
                        </div>
                        <div v-else class="col-12 col-md-8">
                            <img :src="urlPreview" width="100%" />
                        </div>
                    </div>
                </div>
                <div class="col-12 form-group">
                    <label>Titulo <span class="text-danger">*</span></label>
                    <div class="">
                        <input 
                            v-model="form.title" 
                            type="title" 
                            class="form-control pl-5" 
                            placeholder="Ingresa un titulo" 
                            name="title" 
                            required
                        >
                    </div>
                </div>
                <div class="col-12 form-group">
                    <label>Descripcion <span class="text-danger">*</span></label>
                    <div class="">
                        <b-form-textarea 
                            v-model="form.description" 
                            type="description" 
                            class="form-control pl-5" 
                            placeholder="Escribe aqui" 
                            name="description" 
                            size="sm"
                            required
                        />
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div v-if="!currentDoc">
                        <b-button 
                            variant="primary"
                            @click="validate"
                            >
                            Enviar
                        </b-button>
                    </div>
                    <div v-else>
                        <div class="d-flex justify-content-center">
                            <div class="icon-b">
                                <Edit2Icon @click="updatedDoc()" />

                            </div>
                            <div class="icon-b" @click="destroyDoc()">
                                <TrashIcon />
                            </div>
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

    .content {
        max-height: 450px;
        overflow: auto;
    }

    .icon-b {
        width: 100px;
        padding: 5px;
        /* background: red; */
    }
    .icon-b:hover {
        /* border-radius: 50%; */
        background: #eee;
        cursor:pointer;
    }
</style>