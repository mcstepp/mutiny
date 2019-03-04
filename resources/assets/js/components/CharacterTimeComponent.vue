<template>
    <div class="card-body">

        <div class="form-group row">
            <div class="col-md-2">
                <label for="birth_month" class="control-label">Birth Month:</label>
            </div>

            <div class="col-md-10 d-flex">
                <input name="ic_birth_month" type="hidden" v-model="ic_birth_month">
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
                <input name="ic_birth_day" type="hidden" v-model="birthDay">
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
                <input name="ic_birth_year" type="hidden" v-model="birthYear">
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

            <div class="col-md-10 d-flex" :class="{'text-danger': hasAgeError}">
                {{ current_age }}
                <span class="d-none ml-2" :class="{'d-inline-block': hasAgeError}">Age not allowed</span>
                <input type="hidden" v-model="current_age" id="age" name="age">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2">
                <label for="initiation_year" class="control-label">Initiation Year:</label>
            </div>

            <div class="col-md-10 d-flex" :class="{'text-danger': hasClazzError}">
            {{ clazz }}
                <span class="d-none ml-2" :class="{'d-inline-block': hasClazzError}">Initiation year not allowed</span>
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
            'character',
            'old'
        ],

        data() {
            return {
                current_age: 18,
                birthMonth: 'May',
                ic_birth_month: 5,
                birthDay: 31,
                birthYear: 132,
                clazz: 150,
                hasAgeError: false,
                hasClazzError: false
            }
        },

        created() {
            if(this.character || this.old) {
                this.ic_birth_month = this.old.ic_birth_month ||
                    this.character.ic_birth_month ||
                    this.ic_birth_month;

                this.birthDay = this.old.ic_birth_day ||
                    this.character.ic_birth_day ||
                    this.birthDay;

                this.birthYear = this.old.ic_birth_year ||
                    this.character.ic_birth_year ||
                    this.birthYear;

                this.clazz = this.old.initiation_year ||
                    this.character.initiation_year ||
                    this.clazz;

                this.calcYears(this.birthYear);
            }
        },

        watch: {
            current_age(newAge) {
                this.hasAgeError = newAge < 18;
            },

            clazz(newClazz) {
                this.hasClazzError = newClazz > this.year;
            },

            birthMonth(newMonth, oldMonth) {
                if (newMonth !== oldMonth) {
                    this.ic_birth_month = this.months.indexOf(newMonth) + 1;
                }
            },

            ic_birth_month(newMonth, oldMonth) {
                if (newMonth !== oldMonth) {
                    this.birthMonth = this.months[newMonth - 1];
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
            }
        },

        methods: {
            calcYears({birthMonth = this.birthMonth, birthYear = this.birthYear}) {
                    this._calcAge({
                        birthMonth: parseInt(birthMonth),
                        birthYear: parseInt(birthYear),
                        current_year: parseInt(this.year),
                        months: this.months,
                        month: this.month
                    });
            },

            _calcAge({birthYear, birthMonth,current_year, months, month}) {

                let age = current_year - birthYear;
                let hasHadBirthday = months.indexOf(month) >= months.indexOf(birthMonth);

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