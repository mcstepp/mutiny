<template>
    <div class="form-group form-row">
        <label for="query" class="m-fancy-title text-uppercase col-form-label col-md-2">Search For Character: </label>

        <div class="col-md-10">
            <input type="text" id="query" class="form-control" v-model="query">

            <ul class="filtered-list" v-if="filtered_list.length">
                <li v-for="item in filtered_list" class="m-fancy-title text-uppercase">
                    <h5><a :href="edit_character(item.slug)" :class="faction_class(item.faction.name)"><i :class="faction_icon(item.faction.icon)"></i> {{ item.username }}</a>
                    </h5>
                </li>
            </ul>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['list'],

        data() {
            return {
                query: ""
            }
        },

        computed: {
            filtered_list() {
                let query = this.query.toLowerCase(),
                    allList = this.list || [],
                    newList = [];

                if (query && allList.length) {
                    newList = allList.filter(item => item.username.toLowerCase().indexOf(query) > -1);
                }

                return newList;
            }
        },

        methods: {

            edit_character(character) {
                return `/admin/character/${character}/edit`
            },

            faction_class(faction) {
                return `text-${faction}`.toLowerCase();
            },

            faction_icon(faction) {
                return `fas fa-${faction}`;
            }
        }
    }
</script>

<style lang="scss">
    ul.filtered-list {
        margin: 2em 0;
        li {
            list-style: none;
            margin: 1em 0;

            i {
                display: inline-block;
                width: 2em;
                margin-left: 0.5em;
            }
        }
    }
</style>