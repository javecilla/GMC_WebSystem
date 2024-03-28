import { ref } from 'vue';
import axios from '@/libs/axios';

export default function useAuth() {
	const login = async (credentials) => {
		try {
      const res = await axios.post('/api/user/login', credentials)
      return res.data.message;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
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