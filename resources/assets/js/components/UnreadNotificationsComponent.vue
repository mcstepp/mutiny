<template>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg m-userbar-notifications">
        <div class="dropdown-header text-center">
            <strong>You have {{ notifications.length }} unread notifications.</strong>
        </div>
        <template v-for="notification in notifications">
        <a :href="notification.data.link" class="dropdown-item" @click="markAsRead(notification)">
            <div class="container-fluid m-0">
                <div class="row">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <i class="fas" :class="notification.data.icon"></i>
                    </div>
                    <div class="col-10">
                        {{ notification.data.message}}
                    </div>
                </div>

            </div>
        </a></template>
        <!--<a href="#" class="dropdown-item">-->
            <!--<div class="container-fluid m-0">-->
                <!--<div class="row">-->
                    <!--<div class="col-2 d-flex align-items-center justify-content-center">-->
                        <!--<i class="fas fa-user-check text-success"></i>-->
                    <!--</div>-->
                    <!--<div class="col-10">-->
                        <!--Your character application has been approved.-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</a>-->

        <!--<a href="#" class="dropdown-item">-->
            <!--<div class="container-fluid m-0">-->
                <!--<div class="row">-->
                    <!--<div class="col-2 d-flex align-items-center justify-content-center">-->
                        <!--<i class="fas fa-user-times text-danger"></i>-->
                    <!--</div>-->
                    <!--<div class="col-10">-->
                        <!--Your character application has been pended.-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</a>-->

        <a href="#" class="dropdown-item text-center">
            <strong>View all notifications</strong>
        </a>
        <a href="#" class="dropdown-item text-center">
            <strong>Clear all notifications</strong>
        </a>
    </div>
</template>

<script>
    export default {
        name: 'UnreadNotifications',
        props: ['notifications'],
        data() {
            return {

            };
        },

        methods: {
            markAsRead(notification) {
                axios.delete(`/notifications/${notification.id}`);
            }
        }
    }
</script>