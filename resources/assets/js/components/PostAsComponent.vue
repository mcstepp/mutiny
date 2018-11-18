<template>
    <div class="form-group row">
        <label class="control-label col-sm-2">Post As:</label>
        <div class="col-sm-10">
            <input type="hidden" name="author_type" v-model="author_type">
            <template v-if="characters">
                <label v-for="character in characters">
                    <input type="radio"
                           name="author_id"
                           :value="character.id"
                           @change="setType('character')"
                           v-model="author_id">
                    {{ username(character) }}
                </label>
            </template>
            <label v-if="user">
                <input type="radio"
                       name="author_id"
                       value="u"
                       @change="setType('user')"
                       v-model="author_id">
                {{ user.username }}
            </label>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'PostAs',

        props: [
            'characters',
            'user',
        ],

        created() {
            if (this.characters && this.characters.length) {
                let character = this.characters.find(character => character.current === 1);
                this.author_id = character.id;
                this.author_type = 'character';
            }

            else if (this.user) {
                this.author_id = "u";
                this.author_type = 'user';
            }
        },

        data() {
            return {
                author_type: 'user',
                author_id: ''
            };
        },


        methods: {
            setType(type) {
                if (this.author_type !== type) {
                    this.author_type = type;
                }
            },

            username(character) {
                let name = character.chosen_name || character.first_name;
                return `${name} ${character.last_name}`;
            }
        },

    }
</script>