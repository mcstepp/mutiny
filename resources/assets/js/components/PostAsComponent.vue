<template>
    <div class="form-group row">
        <label class="control-label col-sm-2">Post As:</label>
        <div class="col-sm-10">
            <input type="hidden" name="author_type" v-model="author_type">
            <select v-model="author_id">
                <option v-if="characters.length"
                        v-for="character in characters"
                        :value="character.id">
                    {{ username(character) }}
                </option>

                <option v-if="user" value="u">{{ user.username }}</option>

            </select>
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

        computed: {
          post_as() {
              return
          }
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