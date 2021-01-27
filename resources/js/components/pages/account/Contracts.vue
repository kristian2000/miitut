<script>
import {
    ArrowUpIcon,
    FacebookIcon,
    InstagramIcon,
    TwitterIcon,
    LinkedinIcon,
    GithubIcon,
    YoutubeIcon,
    GitlabIcon,
    MailIcon,
    UserPlusIcon,
    UsersIcon,
    MessageCircleIcon,
    BellIcon,
    ToolIcon,
    PhoneIcon,
    BookmarkIcon,
    ItalicIcon,
    GlobeIcon,
    GiftIcon,
    MapPinIcon
} from 'vue-feather-icons';

import LayoutAccount from '../../../layouts/LayoutAccount'
import FormContract from '../../form/FormContract';
/**
 * Account-profile component
 */
export default {
    data() {
        return {
            contracts: [],
            currentContract: null
        }
    },
    components: {
        LayoutAccount,
        FormContract
    },
    async created(){
        const response = await this.callApi('get', `app/contracts`);
        console.log('contracts', response)
        if (response.status === 200){
            this.contracts = response.data;
        }
    },
    methods: {
        showContract(contract){
            console.log('currentContract', contract)
            this.currentContract = contract;
            this.$bvModal.show('modalContract')
        }
    }
}
</script>

<template>
    <LayoutAccount :active="'Contratos'">
        <div class="col-lg-8 col-12">
            <div v-if="!contracts.length">
                <div class="text-center text-muted">
                    Sin Contratos
                </div>
            </div>

            <div class="border-bottom pb-4">
                <div class="row" v-for="contract in contracts" :key="contract.id">

                    <div class="col-12 border shadow caja" @click="showContract(contract)">
                        <h2 class="font-weight-bold">Contrato ({{ contract.status.label }})</h2>
                        <h3 class="font-weight-bold">{{ contract.category_user.title }}</h3>
                        <p class="text-muted">Mensaje: {{ contract.message }}</p>
                        <p class="text-muted">Creado:  {{ new Date(contract.created_at).toISOString().slice(0, 10) }}</p>
                        <button id="btn-modify-2" class="text-white">ver más</button>
                    </div>

                </div>

            </div>
        </div>
                <!-- Start Modal Contrato -->
        <div >
            <b-modal
                id="modalContract"
                title="Detalles del Contrato"
                scrollable
                hide-footer
                size="lg"
                style="background: blue;"

            >
                <FormContract
                    :contract="currentContract"
                    :onSubmit="()=>{}"
                    :edit="true"
                />
            </b-modal>
        </div>
        <!-- End Modal Contrato -->

    </LayoutAccount>
</template>

<style scope>
    .modal-dialog-scrollable .modal-body {
        overflow-y: scroll;
    }
</style>

