export default {
	namespaced: true,
	state: () => {
	  return {
	    offers: [
	      {
	        icon: "fa-gem",
	        label: "Quality Education",
	        description: "Golden Minds Colleges is committed to providing exceptional education tailored to each student's needs."
	      },
	      {
	        icon: "fa-users",
	        label: "Competent Faculty",
	        description: "Our highly qualified and experienced faculty members are dedicated to nurturing your academic growth."
	      },
	      {
	        icon: "fa-building",
	        label: "State-of-the-Art Facilities",
	        description: "Explore cutting-edge facilities designed to enhance your learning experience."
	      },
	      {
	        icon: "fa-circle-check",
	        label: "Tuition-Free Education",
	        description: "Enjoy the benefits of a tuition-free education, including regular uniforms, P.E. uniforms, student IDs, and more."
	      },
	      {
	        icon: "fa-people-line",
	        label: "Welcoming Environment",
	        description: "Immerse yourself in a nurturing and inclusive atmosphere that fosters personal growth and a strong community."
	      },
	      {
	        icon: "fa-check-to-slot",
	        label: "Extracurricular Activities",
	        description: "Engage in a diverse range of extracurricular activities to explore your interests and develop new skills."
	      }
	    ],
	  }
	},
	getters: {
		getOffers: (state) => {
			return state.offers;
		},
	},
	mutations: {},
	action: {}
}