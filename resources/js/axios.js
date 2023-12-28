import axios from 'axios';

// Atur baseURL sesuai dengan URL backend Laravel Anda
const axiosInstance = axios.create({
  baseURL: 'http://localhost:8000/api', // Gantilah dengan URL backend Anda
});

export default axiosInstance;
