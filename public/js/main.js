const ERRORS = {

    pwdField:'Fill in the password',
    minLength: 'The length should be minimum 8 characters.',
    passwordMisMatch: 'This is not a valid email address.',
    confirmPasswordField:'Fill in the confirm password',
    nameField:'Fill in the product name',
    typeIdField:'Fill in the product type',
    specificationField:'Fill in the product specification',
    orderedDateField:'Fill in the product ordered date',
    receivedDateField:'Fill in the product received date',
    priceField:'Fill in the product price',
    unitField:'Fill in the product unit',
    recipeintNameField:'Fill in the Recipeint name',
    confirmPwdField:'Fill in the Password',
    productNameField:'Fill in the Product Name',
    quantityField:'Fill in the Product Quantity'
};

if (document.querySelector('#addProductsForm')) {
   new Vue({
    el: "#addProductsForm",
    data: {
        name: '',
        nameFB: '',
        productTypeId: '',
        type_idFB: '',
        specification: '',
        specificationFB: '',
        price: '',
        priceFB: '',
        initialQty: '',
        unitFB: '',
        submition: false,
    },
    computed: {
        wrongName() {
            if(this.name === '') {
            this.nameFB = ERRORS.nameField
            return true
            }
            return false
        },
        wrongTypeId() {  if(this.productTypeId === '') {
            this.type_idFB = ERRORS.typeIdField
            return true
        }
            return false },
        wrongSpecification() {  if(this.specification === '') {
            this.specificationFB = ERRORS.specificationField
            return true
        }
            return false },
        wrongPrice() { if(this.price === '') {
            this.priceFB = ERRORS.priceField
            return true
        }
            return false },
        wrongUnit() {  if(this.initialQty === '') {
            this.unitFB = ERRORS.unitField
            return true
        }
            return false },
    },
    methods: {
        validateForm(event) {
            this.submition = true
            if(this.wrongName || this.wrongTypeId || this.wrongSpecification ||  this.wrongPrice || this.wrongUnit)
                event.preventDefault()
            else {
                    axios.post('/createProduct')
                        .then(function (response) {
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
        },

        updateDroneType: function (value) {
                if (value !== '') {
                    this.serviceTypeData = [];
                    axios.get('/api/v1/droneSubType/' + value)
                        .then(function (response) {
                            $.each(response.data, function (key, value) {
                                this.serviceTypeData.push(value);
                            }.bind(this));
                            return this.serviceTypeData;
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            }

    }
})
}

if (document.querySelector('#recipientForm')) {
new Vue({
    el: "#recipientForm",
       data: {
        name: '',
        nameFB: '',
        product_name: '',
        product_nameFB: '',
        quantity: '',
        quantityFB: '',
        submition: false,
           query:'',
        users:[],
    },
    computed: {
        wrongRname() {
            if(this.name === '') {
            this.nameFB = ERRORS.recipeintNameField
            return true
            }
            return false
        },
        wrongPname() {  if(this.product_name === '') {
            this.product_nameFB = ERRORS.productNameField
            return true
        }
            return false },
        wrongPquantity() {  if(this.quantity === '') {
            this.quantityFB = ERRORS.quantityField
            return true
        }
            return false },
    },
     // render: {
     //    require: false,
     //    type: Function,
     //    default: function (users) {
     //      return users
     //    }
     //  },
    methods: {
        recipientValidateForm:function(event) {
            this.submition = true;
            if(this.wrongRname || this.wrongPname || this.wrongPquantity)
                event.preventDefault()
        },
        getResults(){
            this.users =[];
            axios.get('/recipientList',{ params:{query:this.query}})
                 .then(response=>{
                    response.data.forEach((user) =>{
                        this.users.push(user);
                    });
                   // console.log(response.data);
                 });
        }
    }

});
}

if (document.querySelector('#userPreferenceForm')) {
   new Vue({
    el: "#userPreferenceForm",
    data: {
        password: '',
        passwordFB: '',
        passwordVerificationFB: '',
        confirm_password: '',
        submition: false,
    },
    computed: {
        wrongPassword() {  if(this.password === '') {
            this.passwordFB = ERRORS.pwdField
            return true
        }
            return false },
        wrongPwdVerification() {  if(this.confirm_password === '') {
            this.passwordVerificationFB = ERRORS.confirmPasswordField
            return true
        }
            return false },
    },
    methods: {
        preferenceForm(event) {
            this.submition = true
            if(this.wrongPassword || this.wrongPwdVerification)
                event.preventDefault()
            else {
                    axios.post('/createProduct')
                        .then(function (response) {
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
        },

        updateDroneType: function (value) {
                if (value !== '') {
                    this.serviceTypeData = [];
                    axios.get('/api/v1/droneSubType/' + value)
                        .then(function (response) {
                            $.each(response.data, function (key, value) {
                                this.serviceTypeData.push(value);
                            }.bind(this));
                            return this.serviceTypeData;
                        }.bind(this))
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            }

    }
})
}


if (document.querySelector('#passwordChangeForm')) {
    new Vue({
        el: "#passwordChangeForm",
        data: {
            password: '',
            pwdFB: '',
            confirm_password: '',
            confirmPwdFB: '',
            submition: false
        },
        computed: {
            wrongPassword: function () {
                if (this.password === '') {
                    this.pwdFB = ERRORS.pwdField;
                    return true
                }
                return false
            },
            wrongConfirmPassword: function () {
                if (this.confirm_password === '') {
                    this.confirmPwdFB = ERRORS.confirmPwdField;
                    return true
                }

                return false
            }
        },
        methods: {
            passwordChangeForm: function (event) {
                this.submition = true;
                if (this.wrongPassword || this.wrongConfirmPassword)
                    event.preventDefault()
            }
        }


    });
}

