<template>
    <div>
        <div class="container checkoutBox">

            

        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            items: [],
            firstName: "",
            lastName: "",
            email: "",
            phone: "",
            address: "",
            city: "",
            state: "",
            zipCode: "",
            country: "",

            cardType: '',
            expirationMonth: '',
            expirationYear: '',
            cvv: '',
            cardNumber: '',
        };
    },
    methods: {
        async getCartItems() {
            let me = this;
            let response = await axios.get("/checkout/get/items");
            me.items = response.data;
            console.log(me.items);
        },

        async getUserAddress() {
            let me = this;
            if (me.firstName != '' && me.address != '' && me.cardNumber && me.cvv) {
                // alert("entra");
                //proceso de pago
                let response = await axios.post('/process/user/payment', {
                    'firstName': me.firstName,
                    'lastName': me.lastName,
                    'email': me.email, 
                    'phone': me.phone,
                    'address': me.address,
                    'city': me.city,
                    'state': me.state,
                    'zipCode': me.zipCode,
                    'country': me.country,

                    'cardType': me.cardType,
                    'expirationMonth': me.expirationMonth,
                    'expirationYear': me.expirationYear,
                    'cvv': me.cvv,
                    'cardNumber': me.cardNumber,
                    
                });
                console.log(response.data);
            } else {
                me.$toastr.e("Informacion de usuario incompleto");
            }

        },
    },
    created() {
        let me = this;
        me.getCartItems();
    },
};
</script>
