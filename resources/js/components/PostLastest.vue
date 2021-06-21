<script>
import Post from './Post';

export default {
    data(){
        return {
            docs: []
        }
    },
    created(){
        this.getLastPost();
    },
    components: {
        Post
    },
    methods: {
        async getLastPost(){
            const response = await this.callApi('get', `/app/blogs/lastestPosts`);

            if (response.status === 200){
                this.docs = response.data.posts;
            }
        }
    }
}
</script>
<template>
<div class="row">
    <div 
        v-for="post in docs" :key="post.id"
        class="col-md-6 col-12"
    >
        <Post :post="post"/>
    </div>
</div>
</template>