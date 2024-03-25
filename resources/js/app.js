import * as bootstrap from 'bootstrap';
import 'vue-toast-notification/dist/theme-bootstrap.css';
// import '@asset/scripts/guest/home';

import { createApp } from 'vue';
import App from './App.vue';

import router from './router/index';
import ToastPlugin from 'vue-toast-notification';

const app = createApp({});

app.component('app-layout', App);
app.use(ToastPlugin);
app.use(router);
app.mount('#app');
