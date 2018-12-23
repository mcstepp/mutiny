<template>
    <button class="btn btn-outline-success m-1" @click="handleClick">
        <i class="fas" :class="pinned ? 'fa-level-down-alt' : 'fa-thumbtack'"aria-hidden="true"></i>
        {{ pinned ? 'Unpin' : 'Pin' }}
    </button>
</template>

<script>
    export default {
        props: ['thread'],
        mounted() {
            this.pinned = this.thread.pinned;
            this.path = `${this.thread.path}/update`;
        },
        data() {
            return {
                pinned: false,
                path: ''
            };
        },
        methods: {
            handleClick(){
                this.togglePin();
                axios.put(this.path, {
                    'pin': this.pinned
                }).then(function(){
                    window.location.reload();
                });
            },

            togglePin() {
                this.pinned = !this.pinned;
            }
        }
    }
</script>