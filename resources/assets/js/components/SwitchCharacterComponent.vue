<template>
    <div class="btn-group">
        <button class="btn-link flicker" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Switch Character">
            <i class="fas fa-exchange-alt"></i>
        </button>
        <div class="dropdown-menu">
            <a href="#"
               v-for="character in characters"
               v-if="!character.current"
               class="dropdown-item"
               @click="handleSwitch(character.id)">
                {{ character.username }}
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SwitchCharacter',

        props: ['characters'],

        data() {
            return {
                current: ''
            }
        },

        methods: {
            handleSwitch(characterId)
            {
                this.current = characterId;
                this.switch();
            },
            switch() {
                axios.put('/c/current', {
                    character: this.current
                }).then(function(){
                    window.location.reload();
                });
            }
        }
    }
</script>