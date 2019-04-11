<template>
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-4">
            <select v-model="selected_industry" class="form-control form-control-lg" name="industry" id="industry">
                <option value="" disabled>Please Select Industry</option>
                <option v-for="myindustry in industry_list" :value="myindustry.id">
                    {{ myindustry.name }}
                </option>
            </select>

            <p>{{ industry_description }}</p>
        </div>

            <div class="col-md-4">
                <select v-model="selected_job" class="form-control form-control-lg" name="job_id" id="industry_job">
                    <option value="" disabled>Please Select Job</option>
                    <option v-for="myjob in jobs_list" :value="myjob.id">
                        {{ myjob.name }}
                    </option>
                </select>

                <p>{{ job_description }}</p>
            </div>
            <div class="col-md-4">
                <input v-if="showOther" type="text" class="form-control form-control-lg" v-model="other_job" placeholder="Enter job" required name="job_other" id="other_job">
                <p v-if="showOther">Specific Job Title</p>
            </div>
        </div>

    </div>

</template>

<script>
    export default {
        props: ['current','old'],

        data() {
            return {
                selected_industry: '',
                selected_job: '',
                other_job: '',
                industries: [],
                jobs: []
            }
        },

        created() {
            this.fetchIndustryList()
                .then(this.setOccupation);
        },

        methods: {
            fetchIndustryList() {
                const factionId = this.faction_id;
                const url = `/industry?faction=${factionId}`;

                return axios.get(url)
                    .then(res => this.industries = res.data)
                    .catch(err => console.error(err));
            },

            fetchJobsList() {
                const industryId = this.selected_industry;
                const url = `/industry/jobs?industry=${industryId}`;

                console.log("fetching jobs");
                return axios.get(url)
                    .then(res => this.jobs = res.data)
                    .catch(err => console.error(err));
            },

            setOccupation() {
                if (this.old || this.current) {
                    this.selected_industry = this.old.industry || this.current.job.industry_id;
                }
            },

            setJob() {
                if (this.old || this.current) {
                    this.selected_job = this.old.job || this.current.job.id;
                    this.other_job = this.old.other_job || this.current.other;
                }
            }
        },

        watch: {
            faction_id() {
                this.fetchIndustryList();
            },

            selected_industry() {
                this.fetchJobsList()
                    .then(this.setJob);
            },

            jobs() {
                this.selected_job = '';
            }
        },

        computed: {
            industry_list() {
                return this.industries;
            },

            faction_id() {
                return this.$store.getters.faction
            },

            jobs_list() {
                return this.jobs;
            },

            industry_description() {
                const industry_id = this.selected_industry;
                const industry = this.industry_list.length && industry_id
                    ? this.industry_list
                        .find(industry => industry.id == industry_id)
                    : {id: '', description: ''};

                return industry ? industry.description : '';
            },

            job_description() {
                const job_id = this.selected_job;
                const job = this.jobs_list.length && job_id
                    ? this.jobs_list
                        .find(job => job.id == job_id)
                    : {id: '', description: ''};

                return job ? job.description : '';
            },

            showOther() {
                const job_id = this.selected_job;
                let job = this.jobs_list.length && job_id
                    ? this.jobs_list
                        .find(job => job.id == job_id)
                    : {id: '', name: ''};

                return job ? job.name == 'Other': '';
            }
        }


    }
</script>