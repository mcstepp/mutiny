<template>
    <button @click="deleteHandler()"
            class="btn btn-outline-danger"
            :class="{
                'btn-block mb-4 m-fancy-title text-uppercase': post,
                'm-1': !post
                }">
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
            'post'
        ],

        computed: {
            deleteType() {
                if (this.post) return 'post';
                else return 'thread';
            }
        },

        methods: {
            deleteHandler() {
                confirm(`Are you sure you want to delete this ${this.deleteType}?`, this.delete())
            },
            delete() {
                let url;
                if (this.post) {
                    url = `/f/${this.forum.id}/t/${this.thread.id}/${this.post.id}`;
                }

                else {
                    url = `/f/${this.forum.id}/t/${this.thread.id}`;
                }

                axios.delete(url, {})
                    .then(res => {
                        if (res.status === 204) {
                            window.location.href = `/f/${this.forum.id}`;
                        }

                        window.location.reload(true)
                    })
                    .catch(err => console.error(err));
            }
        }

    }
</script>