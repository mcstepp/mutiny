<template>
    <button @click="toggleExpand"
            class="btn btn-outline-primary m-1"
            data-toggle="collapse"
            :data-target="dataTarget">
        <i class="fa fa-chevron-circle-right" aria-hidden="true"
            v-if="expand"></i>
        <i class="fa fa-chevron-circle-up" aria-hidden="true"
            v-else></i>
        {{ status }}
    </button>
</template>
<script>
    export default {
        name: 'ShowMore',
        props: ['thread', 'collapse'],
        mounted() {
            if (!this.collapse) {
                this.status = 'Collapse';
                this.expand = true;
            }
        },
        data() {
            return {
                expand: false,
                status: 'Expand',
                dataTarget: `#thread${this.thread}`
            }
        },
        watch: {
          expand() {
              if (this.expand) {
                  this.status = 'Expand';
              }

              else {
                  this.status = 'Collapse'
              }
          }
        },
        methods: {
            toggleExpand() {
                this.expand = !this.expand;
            }
        }
    }
</script>