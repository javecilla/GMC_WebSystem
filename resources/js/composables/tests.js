import { ref } from 'vue';
import axios from '@/libs/axios';

export default function useTest() {
	const tests = ref([]);
	const test = ref([]);
	const errors = ref('');

	//all
	const getTests = async () => {
		try {
      const res = await axios.get(`/api/tests`);
			tests.value = res.data;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
    }
	};

	//single
	const getTest = async (id) => {
		try {
      const res = await axios.get(`/api/tests/${id}`);
			test.value = res.data;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
    }
	};

	const createTest = async (data) => {
		try {
      const res = await axios.post(`/api/tests`, data);
      return res.data;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
    }
	};

	const updateTest = async (id) => {
		try {
      const res = await axios.patch(`/api/tests/${id}`, test.value);
      return res.data;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
    }
	};

	const deleteTest = async (id) => {
		try {
      const res = await axios.delete(`/api/tests/${id}`);
      return res.data;
    } catch (err) {
    	throw err.message === null ? err.validation.message : err.message;
    }
	};

	return {
		tests,
		test,
		errors,
		getTests,
		getTest,
		createTest,
		updateTest,
		deleteTest
	};
};