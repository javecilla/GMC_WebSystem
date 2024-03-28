import navbarModule from './navbar.js';
import homeModule from './home.js';
import footerModule from './footer.js';

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
		footer: footerModule,
	}
}