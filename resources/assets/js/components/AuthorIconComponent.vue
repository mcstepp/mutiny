<template>
        <img v-if="hasGraphics" :src="author.graphics.icon_url" class="img-avatar img-thumbnail m-icon" alt="Icon" :style="{maxWidth: sized, maxHeight: sized}">

        <img v-else-if="!hasGraphics && useDefault" src="https://via.placeholder.com/150" class="img-thumbnail img-avatar m-icon" alt="Icon" :style="{maxWidth: sized, maxHeight: sized}">
</template>

<script>
    export default {
        props: ['author', 'use-default', 'size'],

        computed: {
            hasGraphics() {
                return (this.author.graphics && this.author.graphics.icon_url);
            },

            sized() {
                let newSize = this.size || 0;
                return newSize > 0 ? `${newSize}px` : 'auto';
            }

        }
    }
</script>