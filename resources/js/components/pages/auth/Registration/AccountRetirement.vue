<script>
import FormAccount from '../../../../components/form/FormAccount';

export default {
    data(){
        return {
            
        }
    },
    components: {
       FormAccount
    },
    methods: {
        async submit(form){
            
            const response = await this.callApi('post', 'app/users/accountRetirement', form)
            // console.log('AccountRetirement', response)

            if (response.status === 200){
                this.makeNotice('success', 'Info', 'Se agrego cuenta exitosamente');
                
                setTimeout(()=>{
                    window.location.href = '/'
                }, 3000)
            }
        }
    }
}
</script>

<template>
    <div class="">
        <div class="d-flex justify-content-center">
            <div class="col-md-8 col-12">
                <FormAccount 
                    :submit="submit"
                />
            </div>
        </div>
    </div>  
</template>