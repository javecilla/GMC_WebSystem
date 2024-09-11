import navbarModule from './navbar.js';
import homeModule from './home.js';
import academicsModule from './academics/index.js';
import footerModule from './footer.js';
import policiesModule from './policies.js';

export default {
	namespaced: true,
	state() {
		return {
		}
	},
	getters: {},
	mutations: {},
	action: {},
	modules: {
		navbar: navbarModule,
		home: homeModule,
		academics: academicsModule,
		footer: footerModule,
		policy: policiesModule,
	}
}