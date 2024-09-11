export default {
	namespaced: true,
	state: () => {
		return {
			groupLinks: {
				quickLinks: [
					{ name: 'Home', link: { name: 'home' } },
		    	{ name: 'News', link: { name: 'news' } },
		    	{ name: 'Announcements', link: { name: 'announcements' } },
					{ name: 'Events', link: { name: 'events' } },
					{ name: 'Gallery', link: { name: 'gallery' } },
					{ name: 'Job Vacancies', link: { name: 'career' } }
				],
				academics: [
					{ name: 'Senior High School', link: { name: 'academics.shs' } },
					{ name: 'Basic Education', link: { name: 'academics.be' } },
					{ name: 'Golden Minds Calendar', link: { name: 'calendar' } },
					{ name: 'Office for Student Affairs', link: { name: 'osas' } },
					{ name: 'Guidance and Counseling', link: { name: 'ogc' } }
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