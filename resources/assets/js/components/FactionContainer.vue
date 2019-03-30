<template>
    <span>
        <div class="form-group row">
            <label for="origin_faction" class="control-label col-md-2">Faction of Origin:</label>
            <div class="col-md-10">
                <faction-select name="origin_faction" id="origin_faction" :factions="factions" :faction="origin_faction" @select:faction="handleOriginFaction"></faction-select>
            </div>
        </div>

        <div class="form-group row">
            <label for="faction" class="control-label col-md-2">Current Faction:</label>
            <div class="col-md-10">
                <faction-select name="faction" id="faction" :factions="factions" :faction="current_faction" @select:faction="handleCurrentFaction"></faction-select>
            </div>
        </div>
    </span>
</template>

<script>
    export default {
        props: ['factions', 'current_faction', 'origin_faction'],

        methods: {
            handleOriginFaction(faction_id) {
               this.$store.commit('updateOriginFaction', faction_id);

            },
            handleCurrentFaction(faction_id) {
                this.$store.commit('updateFaction', faction_id);

            }
        }
    }
</script>