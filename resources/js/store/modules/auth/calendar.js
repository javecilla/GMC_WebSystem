import { SET_CALENDARS } from '@/store/constants/auth/calendar';
import axios from '@/libs/axios';

export default {
	namespaced: true,
	state() {
		return {
			calendars: null,
		}
	},
 	getters: {
 		calendars: (state) => state.calendars,
 	},
	mutations: {
		[SET_CALENDARS]: (state, data) => state.calendars = data,
	},
 	actions: {
 		onCreate: async ({ dispatch }, formData) => {
 			try {
      	const created = await axios.post('/api/calendars/store', formData);
		    return created.data.message;
	    } catch (error) {
	    	if(error.message !== null) {
	    		throw error.message;
	    	} else {
	    		if(error.validation.event) {
	    			throw error.validation.event;
	    		} else if(error.validation.startDate) {
	    			throw error.validation.startDate;
	    		} else if(error.validation.endDate) {
	    			throw error.validation.endDate;
	    		} else if(error.validation.schoolYear) {
	    			throw error.validation.schoolYear;
	    		}
	    	}
	    }
 		},
 		setCalendars: async ({ commit}, payload) => {
 			try {
 				const calendars = await axios.get(`/api/calendars/school-year/${payload}`);
 				commit(SET_CALENDARS, calendars.data);
 			} catch(error) {
 				console.log(error);
 				return null;
 			}
 		},
 		onToggleStatus: async ({ dispatch }, formData) => {
 			try {
 				const pin = formData.status === 'not' ? 'yes' : 'not';
	 			const id = formData.eventId;
	 			const schoolYear = formData.schoolYear;

	 			const toggled = await axios.patch(`/api/calendar/${id}/school-year/${schoolYear}/pin-status/${pin}`);
	 			return toggled.data.message;
 			} catch (error) {
	    	throw error.message;
	    }
 		},
 		onUpdate: async ({ dispatch }, formData) => {
 			try {
 				const updated = await axios.patch('/api/calendar/update', formData);

	 			return updated.data.message;
 			} catch(error) {
 				throw error.message;
 			}
 		},
 		onDelete: async ({ dispatch }, id) => {
 			try {
 				const deleted = await axios.delete(`/api/calendar/${id}/destroy`);
	 			return deleted.data.message;
 			} catch (error) {
	    	throw error.message;
	    }
 		},

 		getCalendars: async ({ getters }) => {
 			return getters.calendars;
 		},
 	}
}