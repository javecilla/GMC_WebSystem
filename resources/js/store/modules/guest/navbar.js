export default {
	state() {
		return {
			dropdownLinks: {
				about: [
					{ name: 'History', link: { name: 'home' } },
		    	{ name: 'Seal', link: { name: 'home' } },
		    	{ name: 'Hymn', link: { name: 'home' } },
					{ name: 'Mission and Vision', link: { name: 'home' } },
					{ name: 'Administration', link: { name: 'home' } },
					{ name: 'Faculty and Staff', link: { name: 'home' } },
					{ name: 'Campus Life', link: { name: 'home' } },
					{ name: 'Events', link: { name: 'home' } },
					{ name: 'Gallery', link: { name: 'home' } },
				],
				academics: [
					{ name: 'Senior High School', link: { name: 'home' } },
					{ name: 'Basic Education', link: { name: 'home' } },
					{ name: 'Golden Minds Calendar', link: { name: 'home' } },
					{ name: 'Office for Student Affairs', link: { name: 'home' } },
					{ name: 'Guidance and Counseling', link: { name: 'home' } },
					{ name: 'Supreme Student Goverment', link: { name: 'home' } },
				]
			}
		}
	},
	getters: {
		getDropdownLinksAbout(state) {
			return state.dropdownLinks.about;
		},
		getDropdownLinksAcademics(state) {
			return state.dropdownLinks.academics;
		}
	},
	mutations: {},
	action: {}
}