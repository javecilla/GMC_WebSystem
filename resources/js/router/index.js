import { createRouter, createWebHistory } from 'vue-router';

//guest
import HomePageIndex from '@/pages/guest/home/HomeIndex.vue';
//auth
import LoginPage from '@/pages/auth/Login.vue';
//admin
import DashboardPageIndex from '@/pages/admin/dashboard/DashboardIndex.vue';

const routes = [
	{
		path: '/',
		name: 'home',
		component: HomePageIndex
	},
	{
		path: '/auth/login',
		name: 'login',
		component: LoginPage
	},
	{
		path: '/u/dashboard',
		name: 'admin.dashboard',
		component: DashboardPageIndex
	}
];

export default createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes
});