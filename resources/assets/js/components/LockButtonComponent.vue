<template>
    <button class="btn btn-outline-warning m-1" @click="handleClick">
        <i class="fas" :class="locked ? 'fa-lock-open' : 'fa-lock'"aria-hidden="true"></i>
        {{ locked ? 'Unlock' : 'Lock' }}
    </button>
</template>

<script>
    export default {
        props: ['thread'],
        mounted() {
            this.locked = this.thread.locked;
        },
        data() {
            return {
                locked: false
            };
        },
        methods: {
            handleClick(){
                this.toggleLock();
                alert('Locked: ' + this.locked);
            },

            toggleLock() {
                this.locked = !this.locked;
            }
        }
    }
</script>