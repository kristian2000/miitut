<template>
    <b-pagination 
        v-if="items.length"
        v-model="page"
        :total-rows="items.length"
        :per-page="perPage"
        @change="paginate"
    />
</template>

<script>
export default {
    props: ["perPage", "items", "handleChange"],
    data(){
        return {
            //Pagination
            page: 1
        }
    },
    created(){
        this.paginate(1);
    },
    methods: {
        paginate(page){
            let perPage = this.perPage;
            let from = (page * perPage) - perPage;
            let to = (page * perPage);

            let newDocs =  [...this.items].slice(from, to);


            console.log('newDocs', newDocs)
            // return newDocs;
            this.handleChange(newDocs);
        },
    }
}
</script>