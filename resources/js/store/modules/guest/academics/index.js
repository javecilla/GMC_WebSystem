import shsModule from './shs.js';
import osasModule from './osas.js';

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
		shs: shsModule,
		osas: osasModule
	}
}