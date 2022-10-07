<template>
  <div class="container">
    <li class="nav-item">
      <a
        href="/dashboard"
        class="btn btn-warning btn-sm"
        >Fotos {{itemCount}}</a
      >
    </li>
    <li class="nav-item">
      <a
        href="/checkout"
        class="btn btn-warning btn-sm"
        >Pago {{itemCount}}</a
      >
    </li>
  </div>
</template>

<script>
export default {
  data() {
    return{
        itemCount: '',
    }
  },
  mounted() {
    let me= this;
    this.$root.$on('changeInCart', (item)=>{
        me.itemCount= item;
    })
    console.log("Component mounted.");
  },
  methods:{
    async getCartItemsOnPageLoad(){
        let me= this;
        let response= await axios.post('/cart');
        me.itemCount= response.data.items;
        // alert(me.itemCount);
    }
  },
  created(){
    let me= this;
    me.getCartItemsOnPageLoad();
  }
};
</script>
