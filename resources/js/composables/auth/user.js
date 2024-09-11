import { ref } from 'vue';
import axios from '@/libs/axios';

export default function useAuth() {
	const login = async (credentials) => {
		try {
      const res = await axios.post('/api/user/login', credentials);
      console.log(res);
      return res.data.message;
    } catch (err) {
		 if(err.message !== null) {
    		throw err.message;
    	} else {
    		if(err.validation.email) {
    			throw err.validation.email;
    		} else if(err.validation.password) {
    			throw err.validation.password;
    		} else if(err.validation.recaptcha) {
    			throw err.validation.recaptcha;
    		}
    	}
    }
	};

	const getUser = async () => {
		const res = await axios.get('/api/user');
		return res.data;
	};

	const logout = async () => {
		const res = await axios.post('/api/user/logout');
		return res.data.message;
	};

	return {
		login,
		getUser,
		logout
	};
}