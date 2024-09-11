import userModule from './user';
import calendarModule from './calendar';

export default {
	namespaced: true,
	state() {
		return {
			name: 'State for authentication',
			description: 'This Module is handling all the getters, mutations and actions related to authenticated users.',
		}
	},
 	getters: {},
	mutations: {},
 	actions: {},
 	modules: {
 		user: userModule,
 		calendar: calendarModule
 	}
}