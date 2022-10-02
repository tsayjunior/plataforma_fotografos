<template>
    <div>
        <hr>
        <button class="btn btn-warning"
            v-on:click.prevent="addProductToCar()"
        >Add To Cart</button>
        
    </div>
</template>

<script>
export default {
    data(){
        return{
            
        }
    },
    props:['photographyId','userId'],
    methods:{
        async addProductToCar(){
            let me= this;

            //comprueba si el usuario esta logueado, usa la libreria Toastr
            if(me.userId== 0){
                me.$toastr.e("Necesitas iniciar sesion para agregar este producto al carrito");
                return;
            }
            //si el usuario esta logueado, introduce al carrito
            let response= await axios.post('/cart', {
                'photography_id' : me.photographyId
            })
            me.$root.$emit('changeInCart', response.data.items);
            // console.log(response.data);
        }
        
    },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
