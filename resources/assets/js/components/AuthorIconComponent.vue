<template>
    <div>
        <img v-if="hasGraphics" :src="author.graphics.icon_url" class="img-avatar img-thumbnail m-icon" alt="Icon">

        <img v-else src="https://via.placeholder.com/150" class="img-thumbnail img-avatar m-icon" alt="Icon">
    </div>

</template>

<script>
    export default {
        props: ['author'],

        computed: {
            hasGraphics() {
                return (this.author.graphics && this.author.graphics.icon_url);
            }
        }
    }
</script>