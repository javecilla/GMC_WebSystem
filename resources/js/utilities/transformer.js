export default function useTransformer() {
	//capitalize first letter
	const ucfirst = (text) => {
  	return text.charAt(0).toUpperCase() + text.slice(1);
	};

	return {
		ucfirst
	};
}