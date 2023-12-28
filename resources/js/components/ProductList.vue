<template>
  <div>
    <h2>Product List</h2>
    <ul>
      <li v-for="product in products" :key="product.id">
        {{ product.name }} - ${{ product.price }}
      </li>
    </ul>

    <form @submit.prevent="addProduct">
      <!-- ... Formulir input lainnya ... -->

      <button type="submit">Add Product</button>
    </form>
  </div>
</template>

<script>
import axios from '@/axios'; // Sesuaikan dengan path file axios.js

export default {
  props: {
    products: {
      type: Array,
      default: () => [],
    },
  },
  computed: {
    localProducts() {
      return this.products;
    },
  },
  data() {
    return {
      newProduct: {
        name: '',
        price: null,
      },
    };
  },
  methods: {
    addProduct() {
      // Validasi formulir sebelum menambahkan produk

      // Kirim permintaan POST ke backend Laravel menggunakan Axios
      axios.post('/products', {
        name: this.newProduct.name,
        price: this.newProduct.price,
      })
      .then(response => {
        // Produk berhasil ditambahkan
        // Tambahkan produk baru ke dalam array produk lokal
        this.localProducts.push(response.data);

        // Reset formulir setelah menambahkan produk
        this.newProduct = { name: '', price: null };
      })
      .catch(error => {
        // Tangani kesalahan jika diperlukan
        console.error('Error adding product:', error);
      });
    },
  },
};
</script>

<style scoped>
/* Styles khusus untuk komponen ini */
</style>
