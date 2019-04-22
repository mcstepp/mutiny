<template>
    <div class="card-body container-fluid">

        <div class="form-group row">
            <label for="name" class="col-sm-2 control-label">Select Category:</label>
            <div class="col-sm-10">
                <select v-model="category_id" name="category">
                    <option value="" disabled>Please Select a Category</option>
                    <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                </select>
            </div>
        </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 control-label">Category Name:</label>
                <div class="col-sm-10">
                    <input v-model="selected_category.name" type="text" class="form-control" name="name" id="name" placeholder="Category Name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 control-label">Category Settings:</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" name="private" type="checkbox"  v-model="selected_category.private">
                            Private/Hidden
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-sm-2 control-label">Category Description:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description" placeholder="Category description" rows="5">{{ selected_category.description }}</textarea>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit Category</button>
                </div>
            </div>
    </div>
</template>

<script>
    export default {
        props: ['categories'],

        data() {
            return {
                category_id: '',
                default_category: {
                    id: '',
                    name: '',
                    description: '',
                    private: false
                }
            }
        },

        computed: {
            selected_category() {
                return this._selectCategory() || this.default_category;
            }
        },

        methods: {
          _selectCategory() {
              return this.categories.find(category => category.id === this.category_id);
          }
        }
    }
</script>