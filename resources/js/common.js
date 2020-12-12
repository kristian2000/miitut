import axios from 'axios'

export default {
    data(){
        return {

        }
    },
    methods: {
        async callApi(method, url, data){
            try {
                return await axios({ method, url, data });

            } catch (error) {
                return error.response;
            }
        },
        makeNotice(variant = 'default', title, desc = '...', solid = true) {
            this.$bvToast.toast(desc, {
              title,
              variant,
              solid
            })
        },

        error (desc="Somethingn went wrong! Please try again.", title="Oops ") {
            this.makeNotice('danger', title, desc)
        }

    }
}
