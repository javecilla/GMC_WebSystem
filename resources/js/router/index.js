import { createRouter, createWebHistory } from 'vue-router';
import { defineAsyncComponent } from 'vue';
import store from '@/store/index';

const router = createRouter({
	history: createWebHistory(),
	routes: [
		{
			path: '/',
			name: 'home',
			//component: defineAsyncComponent(() => import('@/pages/guest/Home.vue')),
			component: () => import('@/pages/guest/Home.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/about',
			component: () => import('@/pages/guest/about/Layout.vue'),
			meta: { requiresAuth: false },
			children: [
				{
					path: 'information',
					name: 'about.info',
					component: () => import('@/pages/guest/about/Info.vue')
				},
				{
					path: 'school-seal',
					name: 'about.seal',
					component: () => import('@/pages/guest/about/Seal.vue')
				},
				{
					path: 'school-hymn',
					name: 'about.hymn',
					component: () => import('@/pages/guest/about/Hymn.vue')
				},
				{
					path: 'vision-and-mission',
					name: 'about.vision.mission',
					component: () => import('@/pages/guest/about/VisionMission.vue')
				},
				{
					path: 'campus-life',
					name: 'about.campus.life',
					component: () => import('@/pages/guest/about/CampusLife.vue')
				},
			]
		},
		//TODO:: gallery,events, news and announcement
		{
			path: '/academics/senior-high-school',
			name: 'academics.shs',
			component: () => import('@/pages/guest/academics/SeniorHigh.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/academics/basic-education',
			name: 'academics.be',
			//component: () => import('@/pages/guest/academics/BasicEducation.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/gallery',
			name: 'gallery',
			component: () => import('@/pages/extra/Maintenance.vue'),
			//component: () => import('@/pages/guest/Gallery.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/events',
			name: 'events',
			component: () => import('@/pages/extra/Maintenance.vue'),
			//component: () => import('@/pages/guest/Events.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/news',
			name: 'news',
			component: () => import('@/pages/extra/Maintenance.vue'),
			//component: () => import('@/pages/guest/News.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/announcement',
			name: 'announcements',
			//component: () => import('@/pages/guest/Announcement.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/contact',
			name: 'contact',
			//component: () => import('@/pages/extra/Contact.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/school-calendar',
			name: 'calendar',
			//component: () => import('@/pages/extra/Calendar.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/offices/osas',
			name: 'osas',
			component: () => import('@/pages/guest/OSAS.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/offices/ogc',
			name: 'ogc',
			component: () => import('@/pages/guest/OGC.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/ssg',
			name: 'ssg',
			// component: () => import('@/pages/guest/SSG.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/career',
			name: 'career',
			// component: () => import('@/pages/guest/Career.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/get-help',
			name: 'help',
			// component: () => import('@/pages/guest/Help.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/search',
			name: 'search',
			// component: () => import('@/pages/guest/Search.vue'),
			component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/term-of-use',
			name: 'policy.term',
			component: () => import('@/pages/guest/policies/TermOfUse.vue'),
			//component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/privacy-policy-and-statement',
			name: 'policy.statement',
			component: () => import('@/pages/guest/policies/Statement.vue'),
			//component: () => import('@/pages/extra/Maintenance.vue'),
			meta: { requiresAuth: false }
		},
		{
			path: '/auth/login',
			name: 'login',
			component: () => import('@/pages/guest/Login.vue'),
			meta: { requiresAuth: false }
		},
		/*
		 * [This routes that requires authentication]
		 * Specifically for admin panel routes
		 */
		{
			path: '/#:role/dashboard',
			name: 'u.dashboard',
			component: () => import('@/pages/auth/dashboard/Index.vue'),
			meta: { requiresAuth: true }
		},
		{
			path: '/#:role/pages/calendar',
			name: 'u.pages.calendar',
			component: () => import('@/pages/auth/calendar/Index.vue'),
			meta: { requiresAuth: true }
		},
		// If request route/url not found on  the router then load this 404 not found page
  	{
  		path: '/:pathMatch(.*)*',
  		name: 'errors.404',
  		component: () => import('@/pages/extra/NotFound.vue'),
  	},
	],
	scrollBehavior: (to, from, savedPosition) => {
		/*
		 * [Remember the router that users navigate]
		 * If savedPosition exists, return it
		 * Otherwise, scroll to top with smooth behavior after a delay
		 */
		return savedPosition || new Promise((resolve) => {
			setTimeout(() => resolve({
				top: 0,
				left: 0,
				behavior: 'smooth'
			}), 100);
		});
	},
	strict: true,
});

/**
  * [This check if the request routes/path is requires authenticate]
  * Redirect to home page when user is not authenticated
  * else proceed to the requested route (secure site)
*/
router.beforeEach(async (to, from, next) => {
  try {
    let isAuthenticated = await store.dispatch('auth/user/checkAuth');

    if (to.matched.some(routes => routes.meta.requiresAuth) && !isAuthenticated) {
			next({ name: 'login'});
    } else {
     	next();
    }
  } catch (error) {
    next({ name: 'home'});
  }
});


export default router;