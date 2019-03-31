<template>
    <div>
        <select>
            <option v-for="industry in industry_list">
                {{ industry.name }}
            </option>
        </select>

        <select>
            <option v-for="job in filtered_jobs">
                {{ job.name }}
            </option>
        </select>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                selected_industry: 0,
                selected_job: 0,
                other_job: '',
            }
        },

        computed: {
            industry_list() {
                const factionId = this.faction_id();
                const url = `/industry?faction=${factionId}`;


                return axios.get(url)
                    .then(res => res.data.json)
                    .catch(err => console.error(err));
            },

            faction_id() {
                return this.$store.state.faction_id;
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