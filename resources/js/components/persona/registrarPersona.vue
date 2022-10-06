<template>
    <!-- <div> -->
        <div class="container checkoutBox">
            <h1>prueba</h1>
            <!-- <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Carrito de fotografias</h3>
                        <div class="plan-selection" v-for="item in items" :key="item.id">
                            <div class="plan-data" v-if="item.name">
                                <input id="question1" name="question" type="radio" class="with-font" value="sel" />
                                <label for="question1">{{ item.name }}</label>
                                <p class="plan-text">
                                    Cantidad: {{ item.quantity }}
                                </p>
                                <span class="plan-price">
                                    Precio: {{ item.sale_price }}
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <strong>Pais</strong>
                                <input type="text" name="country" v-model="country" class="form-control" value="" />
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <strong>Nombre</strong>
                                <input type="text" name="first-name" v-model="firstName" class="form-control"
                                    value="" />
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <strong>Apellido</strong>
                                <input type="text" name="last-name" v-model="lastName" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Direccion</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="address" v-model="address" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Ciudad</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="city" v-model="city" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Estado</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="state" v-model="state" class="form-control" value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Codigo Postal</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="zip_code" v-model="zipCode" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Celular</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="phone_number" v-model="phone" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Correo electrónico</strong>
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email_address" v-model="email" class="form-control" value="" />
                            </div>
                        </div>

                        <br />
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Card Type: </strong>
                                </div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" v-model="cardType" name="CreditCardType"
                                        class="form-control">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">
                                            American Express
                                        </option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Credit Card Number: </strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text " v-model="cardNumber" class="form-control" name="car_number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Card cvv: </strong>
                            </div>
                            <div class="col-md-12">
                                <input type="text " v-model="cvv" class="form-control" name="car_code" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong> Fecha de expiracion </strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="" v-model="expirationMonth">
                                    <option value="">Mes</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="02">05</option>
                                    <option value="03">06</option>
                                    <option value="04">07</option>
                                    <option value="02">08</option>
                                    <option value="03">09</option>
                                    <option value="04">10</option>
                                    <option value="02">11</option>
                                    <option value="03">12</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <strong> Año de expiracion </strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="" v-model="expirationYear">
                                    <option value="">Año</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-xs-12">
                                <button type="submit" class="btn btn-primary btn-submit-fix"
                                    v-on:click.prevent="getUserAddress()">
                                    Realizar pedido
                                </button>
                            </div>
                        </div>
                    </div>

                     <div class="box">
                        <h3 class="box-title">Select term length</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input
                                    id="question4"
                                    name="question"
                                    type="radio"
                                    class="with-font"
                                    value="sel"
                                />
                                <label for="question4">1 Month</label>
                                <span class="plan-price term-price"
                                    >$29 / mo</span
                                >
                            </div>
                        </div>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input
                                    id="question5"
                                    name="question"
                                    type="radio"
                                    class="with-font"
                                    value="sel"
                                />
                                <label for="question5">12 Month</label>
                                <span class="plan-price term-price"
                                    >$348 / mo</span
                                >
                            </div>
                        </div>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input
                                    id="question6"
                                    name="question"
                                    type="radio"
                                    class="with-font"
                                    value="sel"
                                />
                                <label for="question6">24 Month</label>
                                <span class="plan-price term-price"
                                    >$696 / mo</span
                                >
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="box-title">Secure your site</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input
                                    id="box1"
                                    type="checkbox"
                                    class="with-font"
                                />
                                <label for="box1"
                                    >Add malware scan and removal</label
                                >
                                <p class="plan-text">
                                    Nam sodales exviverra pretium erat ifermeoin
                                    accumsan ligula duiin ornare tortor euismod
                                    nece.
                                </p>
                                <span class="plan-price secure-price"
                                    >$229 / mo</span
                                >
                            </div>
                        </div>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <input
                                    id="box2"
                                    type="checkbox"
                                    class="with-font"
                                />
                                <label for="box2"
                                    >Add standard SSL Certificate</label
                                >
                                <p class="plan-text">
                                    Class aptent taciti sociosqu ad litora
                                    torquent perconu bia nostrper inceptos
                                    himenelquet dui.
                                </p>
                                <span class="plan-price secure-price"
                                    >$429 / mo</span
                                >
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg mb30"
                        >Continue With Plans</a
                    >
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="widget">
                        <h4 class="widget-title">Order Summary</h4>
                        <div class="summary-block" v-for="sumaryItem in items" :key="sumaryItem.id">
                            <div class="summary-content" v-if="sumaryItem.name">
                                <div class="summary-head">
                                    <h5 class="summary-title">
                                        {{ sumaryItem.name }}
                                    </h5>
                                </div>
                                <div class="summary-price">
                                    <p class="summary-text">
                                        $ {{ sumaryItem.total }}
                                    </p>
                                    <span class="summary-small-text pull-right">
                                        cantidad: {{ sumaryItem.quantity }} x
                                        precio: {{ sumaryItem.sale_price }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="summary-block">
                            <div class="summary-content">
                                <div class="summary-head">
                                    <h5 class="summary-title">
                                        Website Security Essential
                                    </h5>
                                </div>
                                <div class="summary-price">
                                    <p class="summary-text">$229 / mo</p>
                                    <span class="summary-small-text pull-right"
                                        >1 month</span
                                    >
                                </div>
                            </div>
                        </div> 
                        <div class="summary-block">
                            <div class="summary-content">
                                <div class="summary-head">
                                    <h5 class="summary-title">Total</h5>
                                </div>
                                <div class="summary-price">
                                    <p class="summary-text">
                                        {{ items.totalAmount }}
                                    </p>
                                    <span class="summary-small-text pull-right"></span>
                                </div>
                                <div class="text-right">
                                    <hr />
                                    <button class="btn btn-warning">
                                        Realizar pedido
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> -->
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
