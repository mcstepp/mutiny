<template>
    <div class="card-body container-fluid">

        <div class="form-group row">
            <label for="name" class="col-sm-2 control-label">Select Forum:</label>
            <div class="col-sm-10">
                <select v-model="forum_id" name="forum">
                    <option value="" disabled>Please Select a Forum</option>
                    <option v-for="forum in forums" :value="forum.id">{{ forum.name }}</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-sm-2 control-label">Category Name:</label>
            <div class="col-sm-10">
                <select v-model="selected_category.id" name="category">
                    <option value="" disabled>Please Select a Category</option>
                    <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 control-label">Forum Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Forum Name" v-model="selected_forum.name">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 control-label">Forum Settings:</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="private" type="checkbox" v-model="selected_forum.private">
                        Private/Hidden
                    </label>
                </div>

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="ic" type="checkbox" v-model="selected_forum.ic">
                        In-Character
                    </label>
                </div>
            </div>
        </div>


        <div class="form-group row">
            <label for="description" class="col-sm-2 control-label">Forum Description:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description" placeholder="Forum description" rows="5">{{ selected_forum.description }}</textarea>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit Forum</button>
            </div>
        </div>

    </div>
</template>



<script>
    export default {
        props: ['categories', 'forums'],

        data() {
            return {
                category_id: '',
                default_category: {
                    id: '',
                    name: '',
                    description: '',
                    private: false
                },
                forum_id: '',
                default_forum: {
                    id: '',
                    category_id: '',
                    name: '',
                    description: '',
                    ic: false,
                    private: false,
                }
            }
        },

        computed: {
            selected_category() {
                return this._selectCategory() || this.default_category;
            },

            selected_forum() {
                return this._selectForum() || this.default_forum;
            },
        },

        methods: {
            _selectCategory() {
                return this.categories.find(category => category.id === this.selected_forum.category_id);
            },
            _selectForum() {
                return this.forums.find(forum => forum.id === this.forum_id);
            }
        }
    }
</script>