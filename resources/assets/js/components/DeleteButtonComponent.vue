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
                let deleteConfirm = confirm(`Are you sure you want to delete this ${this.deleteType}?`);
                if (deleteConfirm) {
                    this.delete();
                }
            },
            delete() {
                let url;
                if (this.post) {
                    url = `/f/${this.forum.id}/t/${this.thread.slug}/${this.post.id}`;
                }

                else {
                    url = `/f/${this.forum.id}/t/${this.thread.slug}`;
                }

                axios.delete(url, {})
                    .then(res => {
                        if (res.status === 204) {
                            window.location.href = `/f/${this.forum.id}`;
                        }

                        window.location.reload(true)
                    })
                    .catch(err => {
                        let message = err.message;
                        if (err.response) {
                            // The request was made and the server responded with a status code
                            // that falls out of the range of 2xx
                            message = err.response.status === 403 ? 'You do not have permission to perform this action.': message;
                        } else if (err.request) {
                            // The request was made but no response was received
                            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                            // http.ClientRequest in node.js
                            console.log(err.request);
                        } else {
                            // Something happened in setting up the request that triggered an Error
                            console.log('Error', err.message);
                        }
                        alert(message);
                        console.log(err.config);
                    });
            }
        }

    }
</script>