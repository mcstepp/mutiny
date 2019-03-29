<template>
    <div>
        <select>
            <option v-for="industry in filtered_industry">
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
        props: {
            faction: {
                type: Number,
                default: 0
            },

            jobs: {
                type: Array,
                default: () => []
            }

        },

        data() {
            return {
                selected_industry: 0
            }
        },

        computed: {
            filtered_jobs() {
                return this.jobs.map(role => role.industry_id === this.selected_industry)
            },

            filtered_industry() {
                return this.jobs.map(role => role.faction_id === this.faction);
            }
        }


    }
</script>