<template>
    <select class="form-control form-control-lg" v-model="selected_faction" @change="handleChange" required>
        <option disabled value="">Please Choose One</option>

        <option v-for="faction in factions" :value="faction.id">{{ faction.name }}</option>

    </select>
</template>

<script>
    export default {
        props: ['factions', 'faction'],

        data() {
            return {
                selected_faction: ""
            }
        },

        created() {
          if (this.faction) this.selected_faction = this.faction;

          this.$emit('select:faction', this.selected_faction);
        },

        methods: {
            handleChange() {
                this.$emit('select:faction', this.selected_faction);
            }
        }

    }
</script>