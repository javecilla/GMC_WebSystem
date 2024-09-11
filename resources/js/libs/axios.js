import Axios from 'axios';

const axios = Axios.create({
	baseURL: 'http://goldenmindsbulacan.test',
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
		case 422: //Unproccessable Content
			for(let field in error.response.data.errors) {
      	errorInfo.validation[field] = error.response.data.errors[field][0];
    	}
    	break;
    case 400: //Bad Request
			errorInfo.message = 'Bad Request';
    	break;
    case 403: //Forbidden
			errorInfo.message = error.response.data.message;
    	break;
    case 401: //Unauthorized
			errorInfo.message = error.response.data.message;
    	break;
     case 409: //Conflict
			errorInfo.message = error.response.data.message;
    	break;
    case 408: //Request Timeout
			errorInfo.message = 'Request Timeout';
    	break;
    case 429: //Too Many Request
			errorInfo.message = error.response.data.message;
    	break;
    default:
    	errorInfo.message = 'Something went wrong.';
    	break;
	}
	error.errorInfo = errorInfo;

	return Promise.reject(errorInfo);
});

export default axios;