<template>
    <button @click="subscribeHandler()"
            class="btn btn-outline-info m-fancy-title text-uppercase"
            >
        <i class="fas fa-rss-square"></i>
        {{subscriptionStatus}}
    </button>
</template>

<script>
    export default {
        name: 'SubscribeButton',
        props: ['isSubscribed', 'path'],

        data() {
            return {
                subscriptionStatus: 'Subscribe',
                subscribed: false
            }
        },

        mounted() {
          if (this.isSubscribed) {
              this.toggleSubscription();
          }
        },

        watch: {
          subscribed(){
              if(this.subscribed) {
                  this.subscriptionStatus = 'Unsubscribe'
              } else {
                  this.subscriptionStatus = 'Subscribe'
              }
          }
        },

        methods: {
            subscribeHandler(){
                if (this.subscribed) {
                    this.unsubscribe().then(this.toggleSubscription());
                }

                else {
                    this.subscribe().then(this.toggleSubscription());
                }
            },

            toggleSubscription(){
                this.subscribed = !this.subscribed;
            },

            subscribe() {
               return axios.post(`${this.path}/subscription`,{});
            },

            unsubscribe() {
                return axios.delete(`${this.path}/subscription`,{});
            },
        }
    }
</script>