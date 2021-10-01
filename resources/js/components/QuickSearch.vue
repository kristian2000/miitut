<script>
import Axios from 'axios';
import {
    SearchIcon,
    MapPinIcon
} from 'vue-feather-icons';

export default {
    props: ['categorySelected', 'disabled'],
    data(){
        return {
            address: '',
            categorySelect: null,
            subcategory: ''
        }
    },
    components: {
        SearchIcon,
        MapPinIcon
    },
    created(){
        if (this.categorySelected){
            this.categorySelect = this.$store.state.categories
                    .find(c => c.name === this.categorySelected?.id);
            
            return;
        }
    
        this.categorySelect = this.$store.state.categories[0];
    },
    computed: {
        categories(){
            
            return this.$store.state.categories
                .map( category => ({
                    value: category,
                    text: category.label,
                }));
        },
        category(){
            return this.$store.state.categories
                    .find(c => c.name === this.categorySelect?.id)
            
        },
        subcategories(){
            return this.categorySelect ? this.categorySelect.subcategories.map( sub => ({
                value: sub.id,
                text: sub.label
            })) : [];
   
        }
    },
    methods: {
        submit(){
            this.$router.push({
                name: 'search',
                params: {
                    type: 'quickSearch',
                    address: this.address,
                    category: this.categorySelect,
                    subcategory: this.subcategory
                }
                
            })
        }
    }
}
</script>

<template>
    <div class="box">
        <!-- <form class="row" @submit.prevent="submit">
            <div class="col-5">
                <b-form-select 
                    class="input"
                    v-model="category" 
                    :options="categories" 
                    :disabled="disabled"
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
        </form> -->

    <div class="card login_page shadow rounded border-0 ml-lg-5">      
        <div class="card-body">
        <h5 class="card-title">Encuentra la ayuda que necesitas</h5>

        <form class="login-form" @submit.prevent="submit">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Servicios</label>

                        <b-form-select 
                            class="input"
                            :options="categories" 
                            v-model="categorySelect"
                            :disabled="disabled"
                            required
                        />
                    </div>
                        <div class="form-group">
                        <label>Sub-Servicios</label>
                        <b-form-select 
                            class="input"
                            v-model="subcategory" 
                            :options="subcategories" 
                        />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <label>Ciudad</label>
                    <div class="position-relative">
                        <map-pin-icon
                        class="fea icon-sm icons"
                        style="top:14px;"
                        ></map-pin-icon>
                        <input
                            type="text"
                            v-model="address" 
                            class="form-control pl-5"
                            placeholder="Direccion"
                            name="s"
                            required=""
                        />
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button class="btn btn-primary w-100">Buscar Ahora</button>
            </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</template>

<style scoped>
    .box {
        padding: 5px;
        /* border: 1px solid rgb(250, 150, 150); */
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