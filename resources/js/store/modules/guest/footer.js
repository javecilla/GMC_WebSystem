export default {
	namespaced: true,
	state: () => {
		return {
			groupLinks: {
				quickLinks: [
					{ name: 'Home', link: { name: 'home' } },
		    	{ name: 'News', link: { name: 'home' } },
		    	{ name: 'Announcements', link: { name: 'home' } },
					{ name: 'Events', link: { name: 'home' } },
					{ name: 'Gallery', link: { name: 'home' } },
					{ name: 'Job Vacancies', link: { name: 'home' } }
				],
				academics: [
					{ name: 'Senior High School', link: { name: 'home' } },
					{ name: 'Basic Education', link: { name: 'home' } },
					{ name: 'Golden Minds Calendar', link: { name: 'home' } },
					{ name: 'Office for Student Affairs', link: { name: 'home' } },
					{ name: 'Guidance and Counseling', link: { name: 'home' } }
				]
			}
		}
	},
	getters: {
		getQuickLinks: (state) => {
			return state.groupLinks.quickLinks;
		},
		getLinksAcademics: (state) => {
			return state.groupLinks.academics;
		}
	},
	mutations: {},
	action: {}
}