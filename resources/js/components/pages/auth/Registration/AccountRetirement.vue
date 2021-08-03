<script>
import FormAccount from '../../../../components/form/FormAccount';

import LayoutStandar from '../../../../layouts/LayoutStandar'

export default {
    data(){
        return {
            
        }
    },
    components: {
       FormAccount,
       LayoutStandar
    },
    created(){
        const user = this.$store.state.user;

        if (!user || user.fase_registry !== 'accountRetirement'){
            this.isAuthRedirect();
        }
         window.scroll(0, 0);
    },
    methods: {
        async submit(form){
            
            const response = await this.callApi('post', 'app/users/accountRetirement', form)
            // console.log('AccountRetirement', response)

            if (response.status === 200){
                this.makeNotice('success', 'Info', 'Se agrego cuenta exitosamente');

                const user = response.data.user;

                setTimeout(()=>{
                    this.$store.dispatch('updateUser',  { user });        
                }, 3000)
            }
        }
    }
}
</script>

<template>
    <LayoutStandar>
        <div class="container col-md-10 col-lg-6 col-12 info mt-5">
            <div class="p-2">
                <FormAccount 
                    :submit="submit"
                />
            </div>
        </div>
    </LayoutStandar>  
</template>