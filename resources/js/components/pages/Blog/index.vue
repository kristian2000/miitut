<script>

import Post from '../../Post'
export default {
    data(){
        return {
            docs: [],
            loading: false,
        }
    },
    components: {
        Post
    },
    created(){
        this.getDocs();
    },
    methods: {
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
    }

}
</script>

<template>
    <div>
        <section
            class="bg-half d-table w-100" style="background: url('/images/company/aboutus.jpg');"
        >
            <div class="bg-overlay"></div>
        </section>
        <!-- Hero Start -->
        <section class="content-blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center info">
                        <div class="" v-if="!loading">
                            <div class="font-weight-bold my-4 text-center">
                                <h3> Blog </h3>
                            </div>

                            <div 
                                class="text-center content" 
                                v-if="docs.length"
                                >
                                <div v-for="post in docs" :key="post.id">
                                    <div>
                                        <Post :post="post" maxDescription="true"/>
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
                        <div v-else class="col-12">
                            <div class="p-5">
                                <div class="mb-4">
                                    <b-spinner 
                                        type="grow" 
                                        label="Spinning" 
                                    />
                                </div>
                                Cargando Publicaciones
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

    </div>
</template>

<style scoped>
      .info {
        box-sizing: border-box;
        /* width: 100%; */
        /* max-width: 800px; */
        /* padding: 5vw; */
        min-height: 60vh;
        border-radius: 10px;
        background: white;
        border: 3px solid #eee;
    }

    .content-blog {
        position:relative;
        top: -100px;
    }
</style>