export default {
	state: () => {
		return {
			dropdownLinks: {
				about: [
					{ status: "Primary", name: 'Information', link: { name: 'about.info' } },
		    	{ status: "Primary", name: 'Seal', link: { name: 'about.seal' } },
		    	{ status: "Primary", name: 'Hymn', link: { name: 'about.hymn' } },
					{ status: "Primary", name: 'Mission and Vision', link: { name: 'about.vision.mission' } },
					{ status: "Primary", name: 'Campus Life', link: { name: 'about.campus.life' } },
					{ status: "Secondary", name: 'Gallery', link: { name: 'gallery' } },
					{ status: "Secondary", name: 'Events', link: { name: 'events' } },
					{ status: "Secondary", name: 'News', link: { name: 'news' } },
					{ status: "Secondary", name: 'Announcement', link: { name: 'announcements' } },
				],
				academics: [
					{ status: "Primary", name: 'Senior High School', link: { name: 'academics.shs' } },
					{ status: "Primary", name: 'Basic Education', link: { name: 'academics.be' } },
					{ status: "Secondary", name: 'Golden Minds Calendar', link: { name: 'calendar' } },
					{ status: "Secondary", name: 'Office for Student Affairs', link: { name: 'osas' } },
					{ status: "Secondary", name: 'Guidance and Counseling', link: { name: 'ogc' } },
					{ status: "Secondary", name: 'Supreme Student Goverment', link: { name: 'ssg' } },
				],
				policies: [
					{ status: "Secondary", name: 'Term of Use', link: { name: 'policy.term' } },
					{ status: "Secondary", name: 'Privacy Statement', link: { name: 'policy.statement' } },
				]
			},
		}
	},
	getters: {
		getDropdownLinksAbout: (state) => {
			return state.dropdownLinks.about;
		},
		getDropdownLinksAcademics: (state) => {
			return state.dropdownLinks.academics;
		},
		getPoliciesLinks: (state) => {
			return state.dropdownLinks.policies;
		}
	},
	mutations: {},
	action: {}
}