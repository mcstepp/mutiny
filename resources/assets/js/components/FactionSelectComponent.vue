<template>
    <select class="form-control" v-model="selected_faction" required>
        <option selected disabled>Please Choose One</option>

        <option v-for="faction in factions">{{ faction.name }}</option>

    </select>
</template>

<script>
    export default {
        props: ['factions', 'selected_faction'],

    }
</script>