import * as bootstrap from 'bootstrap';

import { createApp } from 'vue';
import App from './App.vue';

import router from './router/index';
import store from './store/index';

import 'vue-toast-notification/dist/theme-bootstrap.css';
import ToastPlugin from 'vue-toast-notification';

const app = createApp({});
app.component('app-layout', App);

app.use(ToastPlugin);
app.use(router);
app.use(store);
app.mount('#app');