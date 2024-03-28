import { createRouter, createWebHistory } from 'vue-router';
import store from '@/store/index';

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes: [
		{
			path: '/',
			name: 'home',
			component: () => import('@/pages/guest/Home.vue'),
		},
		{
			path: '/auth/login',
			name: 'login',
			component: () => import('@/pages/guest/Login.vue'),
			meta: {
				requiresAuth: false
			}
		},
		{
			path: '/u/dashboard',
			name: 'admin.dashboard',
			component: () => import('@/pages/auth/dashboard/Index.vue'),
			meta: {
				requiresAuth: true
			}
		}
	]
});

/**
  * [This check if the reques routes/path is requires authenticate]
  * redirect to home page user is not authenticated else proceed to 
  * the requested route
*/
router.beforeEach(async (to, from, next) => {
  try {
    let isLogin = await store.dispatch('auth/user/checkAuth');
    if (to.matched.some(record => record.meta.requiresAuth) && !isLogin) {
			next({ name: 'home'});
    } else {
     	next();
    }
  } catch (error) {
    next({ name: 'login'});
  }
});


export default router;