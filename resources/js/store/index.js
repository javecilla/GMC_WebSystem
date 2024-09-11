import { createStore } from 'vuex';
import guestModule from '@/store/modules/guest/index';
import authModule from '@/store/modules/auth/index';

const store = createStore({
  modules: {
  	guest: guestModule,
  	auth: authModule
  }
});

export default store;