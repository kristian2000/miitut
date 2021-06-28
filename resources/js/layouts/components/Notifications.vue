<script>
import {
    BellIcon,
    UserIcon,
    SearchIcon,
    XIcon,
    HomeIcon,
    MailIcon
} from 'vue-feather-icons';
export default {
    data(){
        return {

        }
    },
    computed: {
        notifications(){
            return this.$store.state.notifications;
        }
    },
    methods: {
        async notificationsMarkAsReads(){
            const res = await this.callApi('get', '/app/users/notifications/markAsReads')

            this.getNotifications();
        },
        redirectNotification(notification){
            // console.log('notification', notification)
            // console.log('router', this.$route.fullPath)
            let pathRedirect = `/${notification.data.redirect}`;

            if (this.$route.fullPath !== pathRedirect){
                this.$router.push(`/${notification.data.redirect}`);
            }
        }
    }
}
</script>
<template>
    <!-- Notificaciones -->
    <div>
        <b-sidebar id="sidebar-right" title="Notificaciones" right shadow>
        <div class="p-2  border-bottom" v-if="notifications.length">
            <div class="d-flex justify-content-center">
                <b-button pill variant="outline-secondary" size="sm"
                    @click="notificationsMarkAsReads"
                >
                    Marcar como Leidas
                </b-button>
            </div>
        </div>
        <div class="px-3 py-2">
            <div 
                class="notif" 
                v-for="notif in notifications" :key="notif.id"
            >
                <div @click="redirectNotification(notif)">
                    <!-- <div 
                        class="mb-1 d-flex justify-content-end align-item-center"
                        style="position: relative;"
                    >
                        <span 
                            class="notif-close"
                            style="position: absolute;"
                            @click="destroyNotification(notif)"
                        >
                            <XIcon size="1x"/>
                        </span>
                    </div> -->
                    <div class="pt-3">
                        <h3>{{ notif.data.title }}</h3>
                    </div>
                    <div class="">
                        <div>
                            <div class="desc">
                                {{ notif.data.description }}
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>

        </div>
        </b-sidebar>
    </div>
</template>

<style scoped>
    .notif-close:hover {
        background: rgb(231, 231, 231);
        border: 1px solid #666;
        cursor: pointer;
        border-radius: 25%;
        padding-right: 2px;
        padding-left: 2px;
    }

    .notif {
        cursor: pointer;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2), 1px 1px 1px 1px rgba(0, 0, 0, 0.19);
    }

    .notif h3 {
        font-size: 16px;
        font-weight: bold;
        border-bottom: 1px solid #ddd;
    }

    .notif .desc {
        font-size: 12px;
    }
</style>