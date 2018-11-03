<template>
    <div class="card-body">

        <div class="form-group row">
            <div class="col-md-2">
                <label for="birth_month" class="control-label">Birth Month:</label>
            </div>

            <div class="col-md-10 d-flex">
                <select v-model="birthMonth"
                        name="birth_month"
                        id="birth_month"
                        class="form-control"
                        @change="calcYears({birthMonth})">
                    <option disabled selected>Please Choose One</option>
                    <option v-for="_month in months"> {{ _month }}</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="birth_day" class="control-label">Birth Day:</label>
            </div>

            <div class="col-md-10 d-flex">
                <select v-model="birthDay"
                        name="birth_day"
                        id="birth_day"
                        class="form-control">
                    <option disabled selected>Please Choose One</option>
                    <option v-for="_day in days"> {{ _day }}</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="birth_year" class="control-label">Birth Year:</label>
            </div>

            <div class="col-md-10 d-flex">
                <select v-model="birthYear"
                        name="birth_year"
                        id="birth_year"
                        class="form-control"
                        @change="calcYears({birthYear})">
                    <option disabled selected>Please Choose One</option>
                    <option v-for="_year in years"> {{ _year }}</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="age" class="control-label">Age:</label>
            </div>

            <div class="col-md-10 d-flex">
                {{ current_age }}
                <input type="hidden" v-model="current_age" id="age" name="age">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="initiation_year" class="control-label">Initiation Year:</label>
            </div>

            <div class="col-md-10 d-flex">
                {{ clazz }}
                <input type="hidden" v-model="clazz" id="initiation_year" name="initiation_year">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'CharacterTime',

        props: [
            'month',
            'year',
            'years',
            'ages',
            'months',
            'clazzes'
        ],

        data() {
            return {
                current_age: 18,
                birthMonth: 'May',
                birthDay: 31,
                birthYear: 132,
                clazz: 150
            }
        },

        computed: {
            days() {
                let days = [];
                for (let i = 1; i <= 31; i++){
                    days.push(i);
                }
                return days;
            }
        },

        methods: {
            calcYears({birthMonth = this.birthMonth, birthYear = this.birthYear}) {
                    this._calcAge({
                        birthMonth,
                        birthYear,
                        current_year: parseInt(this.year),
                        months: this.months,
                        month: this.month
                    });
            },

            _calcAge({birthYear, birthMonth,current_year, months, month}) {

                let age = current_year - birthYear;
                let hasHadBirthday = months.indexOf(month) > months.indexOf(birthMonth);

                if (!hasHadBirthday) {
                    age -= 1;
                }
                this.current_age = age;

                let clazz = parseInt(birthYear) + 18;
                if (!hasHadBirthday) {
                    clazz += 1;
                }

                this.clazz = clazz;
            }
        }
    }
</script>