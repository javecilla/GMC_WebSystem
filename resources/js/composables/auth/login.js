import { ref } from 'vue';
import axios from '@/libs/axios';

export default function useLogin() {
	const sendLoginRequest = async (credentials) => {
		try {
      const res = await axios.post('/api/user/login', credentials)
      return res.data;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
    }
	}; 

	return {
		sendLoginRequest,
	};
};