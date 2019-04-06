<template>
    <span>
        <select>
            <option v-for="industry in industry_list">
                {{ industry.name }}
            </option>
        </select>

        <!--<select>-->
            <!--<option v-for="job in filtered_jobs">-->
                <!--{{ job.name }}-->
            <!--</option>-->
        <!--</select>-->
    </span>

</template>

<script>
    export default {
        data() {
            return {
                selected_industry: 0,
                selected_job: 0,
                other_job: '',
                industries: []
            }
        },

        created() {
          this.fetchIndustryList();
        },

        methods: {
            fetchIndustryList() {
                const factionId = this.faction_id;
                const url = `/industry?faction=${factionId}`;


                return axios.get(url)
                    .then(res => this.industries = res.data)
                    .catch(err => console.error(err));
            }
        },

        watch: {
            faction_id() {
                this.fetchIndustryList();
            }
        },

        computed: {
            industry_list() {
                return this.industries;
            },

            faction_id() {
                return this.$store.getters.faction
            }

            // filtered_jobs() {
            //     return this.jobs.map(role => role.industry_id === this.selected_industry)
            // },
            //
            // filtered_industry() {
            //     return this.jobs.map(role => role.faction_id === this.faction);
            // }
        }


    }
</script>