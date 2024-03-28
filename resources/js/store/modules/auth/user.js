import { SET_AUTH } from '@/store/constants/auth/index';

export default {
	namespaced: true,
	state() {
		return {
			authenticated: false
		}
	},
 	getters: {
 		isAuthenticated: (state) => {
    	return state.authenticated;
  	}
 	},
	mutations: {
		[SET_AUTH]: (state, payload) => {
    	state.authenticated = payload;
  	}
	},
 	actions: {
  	setAuth: ({ commit }, payload) => {
    	commit(SET_AUTH, payload);
 		},
 		checkAuth: async ({getters}) => {
 			return getters.isAuthenticated;
 		}
 	}
}