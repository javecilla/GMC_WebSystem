export default function useHelpers() {
	const setError = (errorMsg) => {
  	return errorMsg ? errorMsg.charAt(0).toUpperCase() + errorMsg.slice(1) : '';
	};

	return {
		setError
	};
}