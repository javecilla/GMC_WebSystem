import { useRouter } from 'vue-router';

export default function useHelper() {

	const router = useRouter();

	const goBackToPrevious = () => {
		router.go(-1);
	};

	const setError = (errorMsg) => {
  	return errorMsg ? errorMsg.charAt(0).toUpperCase() + errorMsg.slice(1) : '';
	};

	return {
		setError,
		goBackToPrevious
	};
}