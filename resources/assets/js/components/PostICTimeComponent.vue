<template>
    <div class="row">
        <label class="col-sm-2">IC Time:</label>
        <div class="col-sm-10">
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
        </div>
    </div>
</template>

<script>
    export default {



    }
</script>