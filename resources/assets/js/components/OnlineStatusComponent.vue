<template>
    <span class="m-fancy-title">{{status}}</span>
</template>
<script>
    export default {
        name: 'OnlineStatus',
        props: ['online'],
        mounted() {
            if (this.online) {
                this.status = 'Online';
            }
        },
        data() {
            return {
                status: 'Offline'
            }
        }
    }
</script>