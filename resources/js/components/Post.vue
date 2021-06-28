<script>
    import moment from 'moment';
export default {
    props: ['post', 'maxDescription'],
    data(){
        return {

        }
    },
    created(){
        console.log('post', this.post)
    }
}
</script>
<template>
    <div class=" mb-3" style="cursor:pointer">
        <div class="card blog rounded border-0 shadow overflow-hidden">
            <div class="row align-items-center no-gutters">
                
                <div class="col-md-6 order-2 order-md-1">
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">
                            {{ post.title }}    
                        </a></h5>
                        <p class="text-muted mb-0">
                            {{ !maxDescription ? post.description.slice(0, 50) : post.description}}...
                        </p>
                        <div class="post-meta d-flex justify-content-center mt-3">
                            <!-- <ul class="list-unstyled mb-0">
                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                            </ul> -->
                            <!-- <router-link to="/page-blog-detail" class="text-muted readmore">Read More <i class="mdi mdi-chevron-right"></i></router-link> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-6 order-1 order-md-2">
                    <img :src="post.photo" class="img-fluid" alt="">
                    <div class="overlay bg-dark"></div>
                    <div class="author">
                        <!-- <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small> -->
                        <small class="text-light date"><i class="mdi mdi-calendar-check"></i> {{ this.dateFormat(post.created_at)}}</small>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end blog post-->
    </div>
</template>