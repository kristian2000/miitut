<script>
import {
    SearchIcon
} from 'vue-feather-icons';

export default {
    data(){
        return {
            category: '',
            address: ''
        }
    },
    components: {
        SearchIcon
    },
    async created(){
        // Seleccionar el primero
        this.category = this.$store.state.categories[0]
    },
    computed: {
        categories(){
            return this.$store.state.categories
                .map( category => ({
                    value: category,
                    text: category.label,
                }));
        }
    },
    methods: {
        submit(){
            this.$router.push({
                name: 'search',
                params: {
                    type: 'quickSearch',
                    address: this.address,
                    category: this.category
                }
                
            })
        }
    }
}
</script>

<template>
    <div class="box">
        <form class="row" @submit.prevent="submit">
            <div class="col-5">
                <b-form-select 
                    class="input"
                    v-model="category" 
                    :options="categories" 
                    required
                />
            </div>
            <div class="col-5">
                <b-form-input 
                    class="input"
                    v-model="address" 
                    placeholder="Direccion"
                    required
                />
            </div>
            <div class="col-2">
                <button class="icon-search"
                    type="submit"
                >
                    <SearchIcon />
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>
    .box {
        padding: 5px;
        border: 1px solid rgb(250, 150, 150);
        /* background: rgb(238, 238, 238); */
        border-radius: 5px;
    }
    .icon-search {
        background: rgb(255, 123, 123);
        height: 40px;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        color: white;
    }
</style>