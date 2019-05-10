<template>
    <div class="row">
        <div class="col-md-2">
            <label>IC Time:</label>
            <a @click="handleClick" class="font-xs d-block mb-3" href="#">[ {{ show ? 'Hide' : 'Show' }} IC Time ]</a>

            <div class="form-group" v-if="show">
                <label class="switch switch-sm switch-default switch-pill switch-primary">
                    <input type="checkbox" class="switch-input" v-model="use_current" id="use_current">
                    <span class="switch-label"></span>
                    <span class="switch-handle"></span>
                </label>

                <label class="font-xs" for="use_current">Use Current Time</label>
            </div>


            <div class="form-group" v-if="show">
                <label class="switch switch-sm switch-default switch-pill switch-primary">
                    <input type="checkbox" class="switch-input" v-model="use_period" id="use_period">
                    <span class="switch-label"></span>
                    <span class="switch-handle"></span>
                </label>


                <label for="use_period" class="font-xs">Use Period</label>
            </div>

        </div>

        <div class="col-md-10">
            <div v-if="!show">Hidden</div>
            <div v-else class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="monthWord" class="control-label m-fancy-title text-uppercase">Month:</label>

                        <input name="ic_month" type="hidden" v-model="ic_month">

                        <select v-model="monthWord"
                                id="monthWord"
                                class="form-control form-control-lg">
                            <option disabled selected>Please Choose One</option>
                            <option v-for="month in cmpMonths"> {{ month }}</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ic_day" class="control-label m-fancy-title text-uppercase">Day:</label>

                        <select v-model="ic_day"
                                name="ic_day"
                                id="ic_day"
                                class="form-control form-control-lg">
                            <option disabled selected>Please Choose One</option>
                            <option v-for="day in days"> {{ day }}</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ic_year" class="control-label m-fancy-title text-uppercase">Year:</label>

                        <select v-model="ic_year"
                                name="ic_year"
                                id="ic_year"
                                class="form-control form-control-lg">
                            <option disabled selected>Please Choose One</option>
                            <option v-for="_year in years"> {{ _year }}</option>
                        </select>

                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'old',
            'period',
            'current',
            'asof',
            'years',
            'months'
        ],

        data() {
            return {
                show: true,
                ic_day: 1,
                ic_month: '',
                ic_year: '',
                monthWord: '',

                use_current: true,
                use_period: true,
            }
        },

        computed: {
            days() {
                let days = [];
                for (let i = 1; i <= 31; i++) {
                    days.push(i);
                }
                return days;
            },

            cmpMonths() {
                let months = this.months;
                if (this.use_period) {
                    months = this.months.filter(monthWord => {
                        return (
                            // if the month is between the start and end of period, return true
                            this._showMonthInt(monthWord) >= this.period.startMonth &&
                            this._showMonthInt(monthWord) <= this.period.endMonth
                        );
                    })
                }

                return months;
            }
        },

        created() {
            if(this.old && this.old.length) {
                this.use_current = false;
                this.use_period = false;

                this.monthWord = this._showMonthWord(this.old.ic_month);
                this.ic_day = this.old.ic_day;
                this.ic_year = this.old.ic_year;
            }
        },

        mounted() {
            if(this.use_current) this._setTime();
        },

        watch: {
            use_current(newVal) {
                if(newVal) {
                  this._setTime();
                }
            },

            monthWord(newVal) {
                if (newVal) {
                    this.ic_month = this._showMonthInt(newVal);
                }
            }
        },

        methods: {
            handleClick(evt) {
                evt.preventDefault();
                this._toggleDisplay();
            },

            _toggleDisplay() {
                this.show = !this.show;
            },

            _showMonthWord(monthInt) {
                return this.months[monthInt - 1];
            },

            _showMonthInt(monthWord) {
                return this.months.indexOf(monthWord) + 1;
            },

            _setTime() {
                this.monthWord = this._showMonthWord(this.current.currentMonth);
                this.ic_day = this.current.currentDay;
                this.ic_year = this.current.currentYear;
            }
        }

    }
</script>