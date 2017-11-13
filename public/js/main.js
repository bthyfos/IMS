const ERRORS = {
    nameField:'Fill in the product name',
    typeIdField:'Fill in the product type',
    specificationField:'Fill in the product specification',
    orderedDateField:'Fill in the product ordered date',
    receivedDateField:'Fill in the product received date',
    priceField:'Fill in the product price',
    unitField:'Fill in the product unit',
    minLength: 'The length should be minimum 8 characters.',
    invalidEmail: 'This is not a valid email address.',
    recipeintNameField:'Fill in the Recipeint name',
    productNameField:'Fill in the Product Name',
    quantityField:'Fill in the Product Quantity'
}

if (document.querySelector('#addProductsForm')) {
   new Vue({
    el: "#addProductsForm",
    data: {
        name: '',
        nameFB: '',
        type_id: '',
        type_idFB: '',
        specification: '',
        specificationFB: '',
        ordered_date: '',
        ordered_dateFB: '',
        received_date: '',
        received_dateFB: '',
        price: '',
        priceFB: '',
        unit: '',
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
        wrongTypeId() {  if(this.type_id === '') {
            this.type_idFB = ERRORS.typeIdField
            return true
        }
            return false },
        wrongSpecification() {  if(this.specification === '') {
            this.specificationFB = ERRORS.specificationField
            return true
        }
            return false },
        wrongOrderedDate() {  if(this.ordered_date === '') {
            this.ordered_dateFB = ERRORS.orderedDateField
            return true
        }
            return false },
        wrongReceivedDate() { if(this.received_date === '') {
            this.received_dateFB = ERRORS.receivedDateField
            return true
        }
            return false },
        wrongPrice() { if(this.price === '') {
            this.priceFB = ERRORS.priceField
            return true
        }
            return false },
        wrongUnit() {  if(this.unit === '') {
            this.unitFB = ERRORS.unitField
            return true
        }
            return false },
    },
    methods: {
        validateForm(event) {
            this.submition = true
            if(this.wrongName || this.wrongTypeId || this.wrongSpecification || this.wrongOrderedDate || this.wrongReceivedDate || this.wrongPrice || this.wrongUnit)
                event.preventDefault()
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
    methods: {
        validateForm(event) {
            this.submition = true
            if(this.wrongRname || this.wrongPname || this.wrongPquantity)
                event.preventDefault()
        }
    }
});
}



