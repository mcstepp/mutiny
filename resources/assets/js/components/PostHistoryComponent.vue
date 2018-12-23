<template>
    <div>
    <button class="btn btn-small btn-link text-gray-300" @click="handleClick()" data-toggle="modal" data-target="#postHistory">
        <i class="fa fa-history"></i>
        History
    </button>

    <div class="modal fade" id="postHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content m-card" style="text-transform:none;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="progress" v-show="!historyData.length">
                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-secondary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
                    <div v-show="historyData.length" class="text-left">
                        <div v-for="post in historyData" class="my-3">
                            Edited by: {{post.user.username}}<br><br>
                            Post: <span v-html="nl2br(post.old_values.body, false)"></span>
                            <hr class="glow-default">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>



</template>

<script>
    export default {
        props: ['path'],
        data() {
            return {
                historyPath: this.path + '/history',
                historyData: []
            }
        },
        methods: {
            handleClick() {
                if (!this.historyData.length) {
                    this.fetchPostHistory()
                        .then(res => res.data)
                        .then(data => {
                            this.historyData = data;
                        });
                }
            },
            fetchPostHistory() {
                return axios.get(this.historyPath);
            },
            nl2br(str, isXhtml) {
                const breakTag = isXhtml ? '<br />' : '<br>';
                return String(str).replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
            }
        }
    }
</script>