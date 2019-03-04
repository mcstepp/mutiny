<template>
    <div :class="hideSmall || hideDiv ? 'd-none d-md-block' : ''" class="text-center">
        <img v-if="hasGraphics" :src="author.graphics.avatar_url" class="m-avatar img-thumbnail mb-4" alt="Avatar">

        <img v-if="!hasGraphics && useDefault" src="https://via.placeholder.com/200x300" class="m-avatar img-thumbnail mb-4" alt="Avatar">
    </div>

</template>

<script>
    export default {
        props: ['author','hide-small', 'use-default'],

        computed: {
            hasGraphics() {
                return (this.author.graphics && this.author.graphics.avatar_url);
            },

            hideDiv() {
                return !(this.hasGraphics() && this.useDefault);
            }
        }
    }
</script>