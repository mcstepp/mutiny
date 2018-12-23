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
        },
        data() {
            return {
                pinned: false
            };
        },
        methods: {
            handleClick(){
                this.togglePin();
                alert('Pinned: ' + this.pinned);
            },

            togglePin() {
                this.pinned = !this.pinned;
            }
        }
    }
</script>