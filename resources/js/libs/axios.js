import Axios from 'axios';

const axios = Axios.create({
	baseURL: 'http://goldenminds.test',
	timeout: 60000,
	withCredentials: true,
	xsrfCookieName: 'XSRF-TOKEN',
	xsrfHeaderName: 'X-XSRF-TOKEN',
	headers: {
		Accept: 'application/json'
	}
});

axios.interceptors.response.use(null, (error) => {
	const errorInfo = {
		status: error.response?.status,
		original: error,
		validation: {},
		message: null
	};

	switch (error.response.status) {
		case 422:
			for(let field in error.response.data.errors) {
      	errorInfo.validation[field] = error.response.data.errors[field][0];
    	}
    	break;
    case 403:
			errorInfo.message = 'Forbidden';
    	break;
    case 401:
			errorInfo.message = 'Unauthorized';
    	break;
    case 408:
			errorInfo.message = 'Request Timeout';
    	break;
    default:
    	errorInfo.message = 'Something went wrong.'; 
    	break;
	}
	error.errorInfo = errorInfo;

	return Promise.reject(errorInfo);
});

export default axios;