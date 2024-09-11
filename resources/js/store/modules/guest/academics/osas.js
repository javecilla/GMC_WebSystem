export default {
	namespaced: true,
	state: () => {
		return {
			objectives: [
				{ description: `To provide and develop the student programs and services data-driven and relevant to students’ changing needs through the use of standard assessment and evaluation mechanism.`},
				{ description: `To help students utilize their potentials to the fullest and plan their future in accordance to their abilities, interest and needs through necessary interventions and guidance programs. (Guidance & Counseling Office)`},
				{ description: `To reinforce the overall academic program of the Institution by providing efficient and effective learning support services. (Research Learning Center)`},
				{ description: `To train students become leaders and agent of change for development by providing them with opportunities for active involvement in co-curricular and extra-curricular activities. (Supreme Student Goverment)`},
				{ description: `To maintain and improve health and living conditions of the students through coordination and supervision of policies relative to health services. (Health Service)`},
				{ description: `To establish a peaceful and harmonious environment through consistent, prompt and just implementation of the policies on student discipline and mediation in student conflicts. (Discipline Office)`},
				{ description: `To create and establish a feeling of safety and security for all through active delivery of skillful quality law enforcement service.`},
				{ description: `To ensure full educational and community use by overseeing the maintenance of the physical school facilities and grounds in a condition of operating excellence, cleanliness and safety.`}
			]
		}
	},
	getters: {
		getObjectives: (state) => state.objectives,
	},
	mutations: {},
	action: {}
}