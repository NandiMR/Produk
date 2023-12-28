<template>
  <div id="app">
    <HelloWorld />
    <ProductList :products="sampleProducts" />
  </div>
</template>

<script>
import HelloWorld from "@/components/HelloWorld.vue";
import ProductList from "@/components/ProductList.vue";

export default {
  components: {
    HelloWorld,
    ProductList
  },
  data() {
    return {
      sampleProducts: [
        { id: 1, name: 'Product A', price: 50 },
        { id: 2, name: 'Product B', price: 75 },
        { id: 3, name: 'Product C', price: 100 },
        // Tambahkan data produk baru di sini
        { id: 4, name: 'Product D', price: 120 },
        { id: 5, name: 'Product E', price: 90 },
      ]
    };
  }
};
</script>

<style>
/* Styles global */
</style>
