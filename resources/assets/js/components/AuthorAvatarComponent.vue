<template>
    <div :class="hideSmall ? 'd-none d-md-block' : ''">
        <img v-if="hasGraphics" :src="author.graphics.avatar_url" class="m-avatar img-thumbnail" alt="Avatar">

        <img v-else src="https://via.placeholder.com/200x300" class="m-avatar img-thumbnail" alt="Avatar">
    </div>

</template>

<script>
    export default {
        props: ['author','hide-small'],

        computed: {
            hasGraphics() {
                return (this.author.graphics && this.author.graphics.avatar_url);
            }
        }
    }
</script>