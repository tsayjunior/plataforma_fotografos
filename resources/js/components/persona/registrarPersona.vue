<template>
    <!-- <div> -->
    <div class="container center checkoutBox">
        <div class="card bg-light">

            <div class="text-center col-md-12 col-xs-12">
                <h2>Formulario de registro</h2>
            </div>
            <article class="card-body mx-auto" style="max-width: 400px">
                <div class="form-group">
                    <div class="col-md-12 col-xs-12">
                        <strong>Carnet de Identidad (*)</strong>

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="ci" v-model="form.ci" class="form-control" placeholder="C.I." />
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>Nombre (*)</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="nombre" v-model="form.nombre" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>Apellido (*)</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="apellido" v-model="form.apellido" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>Descripcion</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="descripcion" v-model="form.descripcion" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <strong>Fecha Nacimiento (*)</strong>
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="date" name="fecha_nac" v-model="form.fecha_nac" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <strong>Celular (*)</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="celular" v-model="form.celular" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>Profesion</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="profesion" v-model="form.profesion" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>Lugar de Trabajo</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="lugar_trabajo" v-model="form.lugar_trabajo" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>residencia</strong>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="residencia" v-model="form.residencia" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <strong>Sexo</strong>
                            <!-- <input type="text" name="sexo" v-model="form.sexo" class="form-control" /> -->
                            <div class="form-group input-group">
                                <div id="example-3">

                                    <input type="radio" id="uno" value="M" v-model="form.sexo">
                                    <label for="uno">Maculino</label>
                                    <input type="radio" id="Dos" value="F" v-model="form.sexo">
                                    <label for="Dos">Femenino</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <strong>Registrarse como Fotografo?  (*)</strong>
                        <!-- <input type="text" name="tipo" v-model="form.tipo" class="form-control" /> -->
                        <div id="example-3">
                            <!-- <input type="checkbox" id="jack" value="M" v-model="form.tipo" />
                    <label for="jack">Fotografo</label>
                    <input type="checkbox" id="john" value="F" v-model="form.tipo" />
                    <label for="john">Otro</label> -->
                            <input type="checkbox" v-model="form.tipo" id="checkbox" />
                            <label for="checkbox">{{ form.tipo ? "No" : "Si" }}</label>
                        </div>
                    </div>

                    <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" @click="registrarse()">
                            Registrarse
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            form: {
                ci: "",
                nombre: "",
                apellido: "",
                descripcion: "",
                fecha_nac: "",
                sexo: "",
                celular: "",
                profesion: "",
                lugar_trabajo: "",
                residencia: "",
                tipo: "",
            },
            url:{
                registrar_persona:'persona',
            }
        };
    },
    methods: {
        registrarse() {
            let me = this;
            axios
                .post(me.url.registrar_persona, {
                    // params: {
                    //     id: me.company_department.id,
                    // },
                    params:me.form
                })
                .then(function (response) {
                    me.array_warehouses = response.data;
                    // me.array_warehouses.splice(0, 0, me.default_data);
                    me.warehouse.id = "";
                });
        },
        // async getCartItems() {
        //     let me = this;
        //     let response = await axios.get("/checkout/get/items");
        //     me.items = response.data;
        //     console.log(me.items);
        // },
        // async getUserAddress() {
        //     let me = this;
        //     if (
        //         me.firstName != "" &&
        //         me.address != "" &&
        //         me.cardNumber &&
        //         me.cvv
        //     ) {
        //         // alert("entra");
        //         //proceso de pago
        //         let response = await axios.post("/process/user/payment", {
        //             firstName: me.firstName,
        //             lastName: me.lastName,
        //             email: me.email,
        //             phone: me.phone,
        //             address: me.address,
        //             city: me.city,
        //             state: me.state,
        //             zipCode: me.zipCode,
        //             country: me.country,
        //             cardType: me.cardType,
        //             expirationMonth: me.expirationMonth,
        //             expirationYear: me.expirationYear,
        //             cvv: me.cvv,
        //             cardNumber: me.cardNumber,
        //         });
        //         console.log(response.data);
        //     } else {
        //         me.$toastr.e("Informacion de usuario incompleto");
        //     }
        // },
    },
    created() {
        let me = this;
    },
};
</script>

<style>
.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}

.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;
    z-index: 2;
}

.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405d9d;
    color: #fff;
}

.btn-twitter {
    background-color: #42aeec;
    color: #fff;
}
</style>
