<script>
import {
    SendIcon
} from 'vue-feather-icons';
import Vue from 'vue';

import LayoutAccount from '../../../layouts/LayoutAccount'

/**
 * Account-profile component
 */
export default {
    data() {
        return {
            loading: false,
            loadingMessages: false,
            loadingSendMessage: false,
            conversations: [],
            currentConversation: null,
            messagesConversation: [],
            textMessage: ''
        }
    },
    components: {
        LayoutAccount,
        SendIcon
    },
    async created(){
        this.getConversations();

        setInterval(()=>{ 
            this.getConversations();
        }, 50000)
    },
    computed: {
        userType(){
            return this.$store.state.user.userType;
        }
    },
    methods: {
        async getConversations(){
            console.log('getConversations')
            // this.loading = true;
            const response = await this.callApi('get', `app/chats/getConversations`);

            if (response.status === 200){
                this.conversations = response.data.conversations;
                // this.loading = false;
            }
            console.log('conversation', response);
        },
        async openConversation(currentConversation){
            console.log('openConversation');
            this.currentConversation = currentConversation;
            // console.log('open Conversation', currentConversation);
            this.$bvModal.show('modalConversation')

            this.getMessages();

        },
        async closeConversation(){
            console.log('closeConversation')
        },
        async getMessages(){
            this.loadingMessages = true;
            const response = await this.callApi('get', `app/chats/messagesConversation/${this.currentConversation.id}`);

            if (response.status === 200){
                this.loadingMessages = false;
                this.messagesConversation = response.data.messages;

            // Mover el scroll al ultimo mensaje
                this.scrollBoxMessagesTopEnd();
                console.log('messagesConversation', response.data.messages);
            }
        },
        async sendMessage(){
            if (!this.textMessage.trim().length){
                return ''
            }

            this.loadingSendMessage = true;
            console.log('sendMessage');

            let form = {
                to: this.currentConversation.from_id === this.$store.state.user ? 
                    this.currentConversation.to_id :
                    this.currentConversation.from_id,
                message: this.textMessage
            }
            console.log('sendMessage', form)

            const response = await this.callApi('post', '/app/chats/sendMessage', form);
            console.log('responseAxios', response)
            if (response.status === 200){
                this.textMessage = '';
                this.loadingSendMessage = false;

                // Actualizar los datos del chat
                this.messagesConversation = response.data.messages
                this.conversations = this.conversations
                    .map( c => c.id !== this.currentConversation.id ?
                        c : response.data.conversation
                    )
                this.scrollBoxMessagesTopEnd();
            }
        },
        scrollBoxMessagesTopEnd(){
            Vue.nextTick()
                .then(()=>{
                    this.$refs.boxMessages.scrollTop = this.$refs.boxMessages.scrollHeight;
                })
        }
    }
}
</script>

<template>
    <LayoutAccount :active="'Mensajes'">
        <div class="col-lg-8 col-12">

            <div class=" pb-4">
                <div class="border-bottom">
                    <h3 class="font-weight-bold col-sm-12">Conversaciones:</h3>
                </div>
                <!-- <label class="container">
                    <input type="checkbox">
                    <span class="font-weight-bold">Seleccionar Todos</span>
                </label> -->
                    <div v-if="conversations.length > 0">
                        <div class="row" v-for="conversation in conversations" :key="conversation.id">

                            <div class="col-12 container caja" style="cursor:pointer">
                                <div class="row" @click="openConversation(conversation)">
                                    <div class="col-lg-2 col-md-3 col-sm-4">
                                        <img :src="userType === 'work' ? 
                                                conversation.user_help.avatar 
                                                : 
                                                conversation.user_work.avatar" 
                                            class="rounded-circle shadow d-block" 
                                            width="80px" 
                                            height="80px"
                                            alt=""
                                        >
                                    </div>
                                    <div class="col-lg-10 col-md-9 col-sm-8">
                                        <h3 class="font-weight-bold">
                                            {{ userType === 'work' ?
                                                conversation.user_help.name 
                                                : 
                                                conversation.user_work.name  
                                            }}
                                        </h3>
                                        <p class="text-muted">{{ conversation.message }}.</p>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div v-else>
                        <div class="text-center text-muted font-weight-bold m-5">
                            Sin Conversaciones
                        </div>
                    </div>
                <!-- </div> -->
                <!-- <div v-else>
                    <div class="d-flex justify-content-center">
                        <div>
                            <b-spinner 
                                type="grow" 
                                label="Spinning" 
                            />
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    <!-- Modal Conversation Start -->
        <div>
            <b-modal 
                id="modalConversation" 
                hide-footer 
                title="Conversacion"
                @hidden="closeConversation"
            >
                <div ref="box-conversation">
                   <div v-if="currentConversation">
                       <div class="">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="">
                                    <img :src="userType === 'work' ? 
                                            currentConversation.user_help.avatar 
                                            : 
                                            currentConversation.user_work.avatar"
                                        class="rounded-circle shadow d-block mr-2" 
                                        width="50px" 
                                        height="50px"
                                        alt=""
                                    >
                                </div>
                                <div class="">
                                    <div>
                                        <h3 class="font-weight-bold" style="font-size:18px">
                                            {{ userType === 'work' ? 
                                                currentConversation.user_help.name 
                                                : 
                                                currentConversation.user_work.name  
                                            }}
                                        </h3> 
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div v-if="!loadingMessages">
                       <div class="box-messages" style="height:300px" ref="boxMessages">
                           <div v-for="message in messagesConversation" :key="message.id">
                               <div :class="`message ${$store.state.user.id === message.user_id ? 
                                 'my-message' : 'you-message'
                               }`">
                                   <!-- <span class=""> -->
                                       {{ message.message }}
                                   <!-- </span> -->
                               </div>
                               
                           </div>
                       </div>
                       <div class="">
                           <div class="d-flex align-items-center" style="height: 50px">
                                <div style="width: 90%;">
                                    <b-form-input 
                                        v-model="textMessage" 
                                        placeholder="Escribe Tu mensaje"
                                        @keyup.enter="sendMessage"
                                    />
                                </div>
                                <div style="width: 10%;" >
                                    <div class="m-1">
                                        <div 
                                            class="btn-send"
                                            v-if="!loadingSendMessage"
                                            @click="sendMessage" 
                                        >
                                            <SendIcon size="1.5x"/>
                                        </div>
                                        <div v-else>
                                            <b-spinner 
                                                type="grow" 
                                                label="Spinning" 
                                            />
                                        </div>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
                    <div v-else>
                        <div style="height:400px;" 
                            class="d-flex justify-content-center align-items-center"
                        >
                            <div>
                                <div>
                                    <b-spinner 
                                        type="grow" 
                                        label="Spinning" 
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </b-modal>

        </div>
    <!-- Modal Conversation End -->
    </LayoutAccount>
</template>

<style>
    .btn-send {
        width: 100%;
        height: 100%;
        border-radius: 15px;
        display: flex;
        justify-content: center;
        align-content: center;
        cursor: pointer;
    }

    .box-messages {
        margin-top: 10px;
        padding-top: 5px;
        /* margin-bottom: 15px; */
        background: rgb(245, 245, 245);
        border: 2px solid #ddd;
        border-radius: 10px;
        overflow: scroll;
        display: flex;
        flex-direction: column;
        
    }

    .message {
        padding: 10px;
        margin: 5px;
        border-radius: 10px;
        max-width: 75%;
        height: auto;
        box-shadow: 1px 1px 1px 2px rgba(228, 228, 228, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.3);
    }

    .you-message {
        background: #FFF;
        /* border: 0.5px solid #ddd; */
        float: left;

    }

    .my-message {
        background: #DCF8C6;
        float: right;
    }

    h1 {
        color: #ff4b64;
    }

    .public-profile {
        padding: 30px;
    }

    .avatar {
        border: solid 1px #eeeeee;
        padding: 10px;
        background-clip: content-box; /* support: IE9+ */
        background-color: #ccc;
    }

    .accounts:hover, .accounts.active {
        background: rgb(244,124,59);
        background: linear-gradient(170deg, rgba(244,124,59,1) 0%, rgba(241,89,56,1) 51%);
    }

    #title {
        color: #f1905a;
    }

    .bg-primary, .btn-primary, .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.focus, .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-soft-primary:hover, .btn-soft-primary:focus, .btn-soft-primary:active, .btn-soft-primary.active, .btn-soft-primary.focus, .badge-primary, .pagination .page-item.active .page-link, .nav-pills .nav-link.active, .custom-control-input:checked ~ .custom-control-label::before, #preloader #status .spinner .double-bounce1, #preloader #status .spinner .double-bounce2, .social-icon li a:hover, #topnav .navbar-toggle.open span:hover, .gradient, .flex-control-paging li a.flex-active, .owl-theme .owl-dots .owl-dot span, .owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots.clickable .owl-dot:hover span, .watch-video a .play-icon-circle, .sidebar .widget .tagcloud > a:hover, .flatpickr-day.selected, .flatpickr-day.selected:hover, .bg-animation-left.crypto-home::after, .bg-animation-left.task-management-home::after, .classic-app-image .bg-app-shape::after, .classic-saas-image .bg-saas-shape::after, .work-container.work-modern .icons .work-icon:hover, .features.fea-primary:hover, .accounts:hover, .accounts.active, .timeline-page .timeline-item .date-label-left::after, .timeline-page .timeline-item .duration-right::after, .swiper-slider-hero .swiper-container .swiper-button-prev:hover, .swiper-slider-hero .swiper-container .swiper-button-next:hover {
            background-color: rgb(244,124,59) !important;
    }

    .caja {
        padding: 20px;
        margin-bottom: 10px;
        border-bottom: 1px solid #ff4b64;
    }

    .caja h2 {
        font-size: 30px;
        color: #8492a6;
    }

    .caja h3 {
        font-size: 30px;
        color: #ff4b64;
    }

    .row h3 {
        font-size: 30px;
        color: #ff4b64;
    }

    label span {
        font-size: 20px;
        color: #8492a6;
        margin-left: 10px;
        margin-bottom: 2px;
    }

    label input {
        padding: 20px;
    }

</style>
