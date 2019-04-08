<template>
    <div class="card-body">
        <div class="row mb-5">
            <div class="col">
                <h4 class="m-fancy-header text-center text-uppercase neon-default">As of {{ asOfDate }}</h4>
                <hr class="glow-default">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-3">
                <h5 class="m-fancy-title text-uppercase">Current Period:</h5>
            </div>
            <div class="col-md-9">
                <h6 class="m-fancy-header text-uppercase neon-default">{{ periodStart }} - {{ periodEnd }}</h6>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-3">
                <h5 class="m-fancy-title text-uppercase">Current Date:</h5>
            </div>
            <div class="col-md-9">
                <h6 class="m-fancy-header text-uppercase neon-default">{{ currentDate }}</h6>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="birth_month" class="control-label m-fancy-title text-uppercase">Birth Month:</label>

                    <input name="ic_birth_month" type="hidden" v-model="ic_birth_month">

                    <select v-model="birthMonth"
                            name="birth_month"
                            id="birth_month"
                            class="form-control form-control-lg">
                        <option disabled selected>Please Choose One</option>
                        <option v-for="_month in months"> {{ _month }}</option>
                    </select>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="birth_day" class="control-label m-fancy-title text-uppercase">Birth Day:</label>

                    <select v-model="birthDay"
                            name="ic_birth_day"
                            id="birth_day"
                            class="form-control form-control-lg">
                        <option disabled selected>Please Choose One</option>
                        <option v-for="_day in days"> {{ _day }}</option>
                    </select>

                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="birth_year" class="control-label m-fancy-title text-uppercase">Birth Year:</label>

                    <select v-model="birthYear"
                            name="ic_birth_year"
                            id="birth_year"
                            class="form-control form-control-lg">
                        <option disabled selected>Please Choose One</option>
                        <option v-for="_year in years"> {{ _year }}</option>
                    </select>
                </div>
            </div>

        </div>

        <div class="form-group mb-5 h5 row">
            <div class="col-md-6">
                <label class="control-label m-fancy-title text-uppercase">Current Age:</label>

                <span :class="{'text-danger': hasAgeError}">
                {{ current_age }}
                <span class="d-none ml-2" :class="{'d-inline-block': hasAgeError}">Age not allowed</span>
            </span>
            </div>
            <div class="col-md-6">
                <label class="control-label m-fancy-title text-uppercase">Age as of {{ asOfDate }}:</label>

                <span :class="{'text-danger': hasAgeError}">
                {{ asOf_age }}
                    <span class="d-none ml-2" :class="{'d-inline-block': hasAgeError}">Age not allowed</span>
                </span>
            </div>

        </div>

        <div class="form-group mb-5 h5">
                <label for="initiation_year" class="control-label m-fancy-title text-uppercase">
                    Initiation Year:</label>

            <span :class="{'text-danger': hasClazzError}">
            {{ initiationYear }}
                <span class="d-none ml-2" :class="{'d-inline-block': hasClazzError}">Initiation year not allowed</span>
                <input type="hidden" :value="initiationYear" id="initiation_year" name="initiation_year">
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'CharacterTime',

        props: [
            'current',
            'period',
            'asof',
            'character',
            'old',
            'years',
            'ages',
            'months',
            'clazzes'
        ],

        data() {
            return {
                ic_birth_month: 5,
                birthMonth: 'May',
                birthDay: 31,
                birthYear: 132,
                hasAgeError: false,
                hasClazzError: false
            }
        },

        created() {

            if(this.old || this.character) {

                this.ic_birth_month = this.old.ic_birth_month ||
                    this.character.ic_birth_month;

                this.birthDay = this.old.ic_birth_day ||
                    this.character.ic_birth_day;

                this.birthYear = this.old.ic_birth_year ||
                    this.character.ic_birth_year;
            }
        },

        watch: {
            asOf_age(newAge) {
                this.hasAgeError = newAge < 18;
            },

            current_age(newAge) {
                this.hasAgeError = newAge < 18;
            },

            initiationYear(newClazz) {
                this.hasClazzError = newClazz > this.asof.asOfYear;
            },

            birthMonth(newMonth, oldMonth) {
                if (newMonth !== oldMonth) {
                    this.ic_birth_month = this._showMonthInt(newMonth);
                }
            },

            ic_birth_month(newMonth, oldMonth) {
                if (newMonth !== oldMonth) {
                    this.birthMonth = this._showMonthWord(newMonth);
                }
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

            asOfDate() {
                const asOfMonth = this.showMonthWord(this.asof.asOfMonth);

                return `${asOfMonth} ${this.asof.asOfDay}, Year ${this.asof.asOfYear}`;
            },

            currentDate() {
                const currentMonth = this.showMonthWord(this.current.currentMonth);

                return `${currentMonth} ${this.current.currentDay}, Year ${this.current.currentYear}`;
            },

            periodStart() {
                const startMonth = this.showMonthWord(this.period.startMonth);

                return `${startMonth} ${this.period.startDay}, Year ${this.period.startYear}`;
            },

            periodEnd() {
                const endMonth = this.showMonthWord(this.period.endMonth);

                return `${endMonth} ${this.period.endDay}, Year ${this.period.endYear}`;
            },

            current_age() {
                return this._calcAge({
                    birthYear: this.birthYear,
                    birthMonth: this.ic_birth_month,
                    birthDay: this.birthDay,
                    year: this.current.currentYear,
                    month: this.current.currentMonth,
                    day: this.current.currentDay
                });
            },

            asOf_age() {
                return this._calcAge({
                    birthYear: this.birthYear,
                    birthMonth: this.ic_birth_month,
                    birthDay: this.birthDay,
                    year: this.asof.asOfYear,
                    month: this.asof.asOfMonth,
                    day: this.asof.asOfDay
                });
            },

            initiationYear() {
                return this._calcInitiationYear();
            }
        },

        methods: {

            _calcAge({birthYear, birthMonth, birthDay, year, month, day}) {

                let age = year - birthYear;

                let hasHadBirthday = this._hasHadBirthday({birthMonth, birthDay, month, day});

                if (!hasHadBirthday) {
                    age -= 1;
                }
                return age;

            },

            _calcInitiationYear() {
                let clazz = parseInt(this.birthYear) + 18;
                if (this.months.indexOf(this.birthMonth) > (this.asof.asOfMonth - 1)) {
                    clazz += 1;
                }

                return clazz;
            },

            _hasHadBirthday({birthMonth, birthDay, month, day}) {
                if (birthMonth < month) return true;

                return (birthMonth === month) && (birthDay <= day);
            },

            _showMonthWord(monthInt) {
                return this.months[monthInt - 1];
            },

            _showMonthInt(monthWord) {
                return this.months.indexOf(monthWord) + 1;
            }
        }
    }
</script>