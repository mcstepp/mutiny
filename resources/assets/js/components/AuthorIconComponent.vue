<template>
        <img v-if="hasGraphics" :src="author.graphics.icon_url" class="img-avatar img-thumbnail m-icon" alt="Icon">

        <img v-else-if="!hasGraphics && useDefault" src="https://via.placeholder.com/150" class="img-thumbnail img-avatar m-icon" alt="Icon">
</template>

<script>
    export default {
        props: ['author', 'use-default'],

        computed: {
            hasGraphics() {
                return (this.author.graphics && this.author.graphics.icon_url);
            }
        }
    }
</script>