export default function useError() {

	const setError = (errorMsg) => {
  	return errorMsg ? errorMsg.charAt(0).toUpperCase() + errorMsg.slice(1) : '';
	};

	return {
		setError
	};
}