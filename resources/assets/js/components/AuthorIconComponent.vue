<template>
        <img v-if="hasGraphics" :src="author.graphics.icon_url" class="img-fluid img-avatar" alt="Icon">

        <img v-else-if="!hasGraphics && useDefault" src="https://via.placeholder.com/150" class="img-avatar" alt="Icon">
</template>

<script>
    export default {
        props: ['author', 'use-default', 'size'],

        computed: {
            hasGraphics() {
                return (this.author.graphics && this.author.graphics.icon_url);
            },
        }
    }
</script>