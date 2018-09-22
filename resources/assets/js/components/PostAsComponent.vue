<template>
    <div class="form-group row">
        <label for="body" class="control-label col-sm-2">Post As:</label>
        <div class="col-sm-10">
            <input type="hidden" name="author_type" v-model="author_type">
            <label>
                <input type="radio"
                       name="author_id"
                       v-if="user_data"
                       value="u"
                       @change="setType('user')"
                       v-model="author_id">
                {{ user.username }}
            </label>
            <template v-for="character in listJson">
                <label>
                    <input type="radio"
                           name="author_id"
                           :value="character.id"
                           @change="setType('character')"
                           v-model="author_id">
                    {{ character.username }}
                </label>
            </template>

        </div>
    </div>
</template>

<script>
    export default {
        name: 'PostAs',

        props: [
            'character_list',
            'user_data',
            'default'
        ],

        data() {
            return {
                author_type: 'user',
                author_id: '',
                characters: [],
                user: {},
            };
        },

        created() {

            if (this.user_data) {
                this.user = JSON.parse(this.user_data);
                this.author_id = 'u';
            }

            if (this.default) {
                this.author_type = 'character';
                this.author_id = this.default;
            }

            if (this.character_list) {
                this.characters = JSON.parse(this.character_list);
            }


        },

        methods: {
            setType(type) {
                if (this.author_type !== type) {
                    this.author_type = type;
                }
            }
        },

        computed: {
            listJson() {
                return this.characters;
            }
        }

    }
</script>