<script>

import {
    ArrowLeftIcon
} from 'vue-feather-icons';

import SelectedUserType from './SelectedUserType.vue'
import SelectedCategories from './SelectedCategories.vue'
import SignUp from './Signup.vue'
import LayoutStandar from '../../../../layouts/LayoutStandar'

export default {
    data(){
        return {
            step: 'selectedUserType',
            userType: '',
            category: ''
        }
    },
    created(){
        if (this.$store.state.user){
            this.$router.push('cuenta-perfil');
        }
        window.scroll(0, 0);
    },
    methods: {
        goBack(){
            // console.log('goBakc')
            if (this.step === 'signup' && this.userType == 'work'){
                this.step = 'selectedCategories'
            }else if (this.step == 'selectedUserType'){
                this.$router.push('/')
            }else {
                this.step = 'selectedUserType'
            }
        },
        selectedUserType(option){
            console.log('SelectedOption', option)
            this.userType = option;

            if (option === 'help'){
                this.step = 'signup'
            }else {
                this.step = 'selectedCategories'
            }
        },
        selectedCategory(category){
            this.category = category
            this.step = 'signup'
            console.log('seletedCategory', category)
        }
    },
    components: {
        SelectedUserType,
        SelectedCategories,
        SignUp,
        ArrowLeftIcon,
        LayoutStandar
    }
}
</script>

<template>
<div>
    <LayoutStandar :bgWhite="true">
        <section>
            <div>
                <b-button @click="goBack()">
                    <ArrowLeftIcon />
                </b-button>
                <transition name='slide-fade' mode="out-in">
                    <!-- Seleccionar Option Ayuda = Trabajo -->
                    <selected-user-type
                        v-if="step === 'selectedUserType'"
                        :selectedOption="selectedUserType"
                        :category="category"
                    />

                    <!-- Seleccionar Categoria, (Si la option es trabajo) -->

                    <selected-categories
                        v-if="step === 'selectedCategories'"
                        :selectedItem="selectedCategory"
                    />

                    <!-- Form Registro -->
                    <sign-up
                        v-if="step === 'signup'"
                        :category="category"
                        :userType="userType"
                    />

                </transition>
            </div>
        </section>
    </LayoutStandar>
</div>
</template>


<style scoped>
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(10px);
        opacity: 0;
    }
</style>
