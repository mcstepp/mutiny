<template>
    <button @click="deleteHandler()"
            class="btn btn-outline-danger btn-block mb-4 m-fancy-title text-uppercase">
        <i class="fas fa-trash-alt"></i>
        Delete
    </button>
</template>

<script>
    export default {
        name: 'DeleteButton',

        props: [
            'forum',
            'thread',
            'post',
            'type'
        ],

        methods: {
            deleteHandler() {
                confirm(`Are you sure you want to delete this ${type}?`, this.delete())
            },
            delete() {

                if (type === "post") {
                    let url =  `/f/${this.forum.id}/t/${this.thread.id}/${this.post.id}`;
                }

                else if (type === 'thread') {
                    let url =  `/f/${this.forum.id}/t/${this.thread.id}`;
                }

                axios.delete(url, {})
                    .then(() => window.location.reload(true))
                    .catch(err => console.error(err));
            }
        }

    }
</script>