import { SET_AUTH, SET_USER } from '@/store/constants/auth/user';
import axios from '@/libs/axios';

export default {
	namespaced: true,
	state() {
		return {
			authenticated: false,
			user: null
		}
	},
 	getters: {
 		isAuthenticated: (state) => state.authenticated,
  	activeUser: (state) => state.user,
 	},
	mutations: {
		[SET_AUTH]: (state, token) => state.authenticated = token,
  	[SET_USER]: (state, data) => state.user = data,
	},
 	actions: {
 		onLogin: async ({ dispatch }, credentials) => {
 			try {
      	const login = await axios.post('/api/user/login', credentials);
		    dispatch('setAuth', login.data.success);
		    await dispatch('setUser');

		    return login.data.message;
	    } catch (error) {
	    	if(error.message !== null) {
	    		throw error.message;
	    	} else {
	    		if(error.validation.email) {
	    			throw error.validation.email;
	    		} else if(error.validation.password) {
	    			throw error.validation.password;
	    		} else if(error.validation.recaptcha) {
	    			throw error.validation.recaptcha;
	    		} else if(error.validation.role) {
	    			throw error.validation.role;
	    		}
	    	}
	    }
 		},
 		checkAuth: async ({ getters }) => {
 			return getters.isAuthenticated;
 		},
 		setAuth: ({ commit }, payload) => {
 			commit(SET_AUTH, payload);
 		},
 		setUser: async ({ commit }) => {
 			try {
	      const user = await axios.get('/api/user');
	      commit(SET_USER, user.data);
	    } catch (error) {
	    	console.log(error);
	    	return null;
	    }
 		},
 		getUser: async ({ getters }) => {
 			return getters.activeUser;
 		},
 		onLogout: async ({ commit }) => {
 			const result = await axios.post('/api/user/logout');
 			commit(SET_AUTH, false);
 			commit(SET_USER, null);
			return result.data.message;
 		}
 	}
}