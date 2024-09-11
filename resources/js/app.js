import { createApp } from 'vue';
import App from './App.vue';

import router from './router/index';
import store from './store/index';

import * as yup from 'yup';
window.yup = yup;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;
import 'bootstrap/dist/css/bootstrap.min.css';

import ToastPlugin from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-bootstrap.css';

import { setupCalendar } from 'v-calendar';
import 'v-calendar/dist/style.css';

const app = createApp({});
app.component('app-root', App);

app.use(store);
app.use(router);
app.use(ToastPlugin);
app.use(setupCalendar, {})

app.mount('#app');