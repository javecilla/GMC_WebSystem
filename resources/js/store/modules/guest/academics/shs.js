export default {
	namespaced: true,
	state: () => {
		return {
			objectives: {
				ables: [
					{ description: `Realize their potentials in line with entrepreneurship, health, education, social work, etc. Or in any other chosen field/profession.` },
					{ description: `Recognize their significance as shown by substantial contribution in the community inform of their advocacy, leadership, and profession.` },
					{ description: `Applies strong leadership in their chosen field as expressed by extensive output in research and other scientific studies, innovations and other significant improvements in their area/profession in terms of practice and/delivery system.` },
					{ description: `Develop strong sense of spirituality by actively practicing Christian values as expressed in service for humanity and in all God’s creation.` }
				],
				programs: [
					{ description: `<i>Explore</i> - Refining foundational and advance affective, cognitive, and psychomotor aspect thru Research or scientific studies. Cultivating conscious exploration of interests and preference among students within their chosen field.` },
					{ description: `<i>Apply</i> - Appertains to affective, cognitive, and psychomotor process into an applicable platform that involves substantial contribution that promotes and improve the quality and preserves the integrity of life.` },
					{ description: `<i>Develop</i> - Transforming academic experience into construe of becoming a relevant Christian witness who advocates faith and pursues zealously stewardship of truth.` }
				]
			},
			tracks: {
				academics: [
					{

						name: 'Science, Technology, Engineering, and Mathematics (STEM)',
						image: '/resources/assets/images/strands/stem_logo.png',
						description: `The STEM strand offers an immersive journey into the realms of Science, Technology, Engineering, and Mathematics. It's not just a curriculum; it's a gateway to endless possibilities and future-proof careers.
							<br><br>Senior high school students in the STEM strand dive deep into complex mathematical and scientific theories and concepts, laying a robust foundation for their college courses and beyond. From exploring the mysteries of the universe to designing cutting-edge technologies, students in STEM are equipped with the knowledge, skills, and mindset to tackle the challenges of tomorrow.
							<br><br>Join us in the STEM strand and unlock the door to innovation, discovery, and boundless opportunities in the ever-evolving world of STEM.
						`,
					},
					{
						name: 'Accountancy, Business and Management (ABM)',
						image: '/resources/assets/images/strands/abm_logo.png',
						description: `Dive into the world of Accountancy, Business, and Management (ABM) and unlock the secrets of financial management, corporate operations, and strategic business planning. This strand is tailored for future entrepreneurs and business leaders, providing a solid foundation in business principles and practices.
							<br><br>Through comprehensive coursework and real-world applications, students in the ABM strand gain valuable insights into the dynamic world of commerce and enterprise. From analyzing financial data to devising effective marketing strategies, ABM students develop the skills and acumen necessary to thrive in the competitive business landscape.
							<br><br>Whether your goal is to launch your own venture or climb the corporate ladder, the ABM strand equips you with the knowledge and expertise to turn your aspirations into reality.
						`,
					},
					{
						name: 'Humanities and Social Sciences (HUMSS)',
						image: '/resources/assets/images/strands/humss_logo.png',
						description: `Embark on a journey of discovery and exploration with the Humanities and Social Sciences (HUMSS) strand. This strand is tailored for those with a curious mind and a passion for understanding the world around them.
		          <br><br>HUMSS offers a comprehensive curriculum that delves into various disciplines, including journalism, communication arts, liberal arts, education, and social sciences. Through engaging coursework and hands-on experiences, students in the HUMSS strand develop critical thinking skills, effective communication abilities, and a deep understanding of human behavior and society.
		          <br><br>Whether you aspire to be a journalist, educator, or advocate for social change, the HUMSS strand provides the foundation and skills necessary to pursue a wide range of career paths and make a meaningful impact in your community and beyond.
		        `,
					},
					{
						name: 'General Academic Strand (GAS)',
						image: '/resources/assets/images/strands/gas_logo.png',
						description: `The General Academic Strand (GAS) is a versatile pathway designed for students who want to explore a wide range of academic disciplines before specializing in college. GAS students have the flexibility to choose electives from various strands, allowing them to develop diverse skills and interests.
		          <br><br>With a balanced curriculum covering subjects such as mathematics, science, humanities, and social sciences, GAS students acquire a strong foundation in critical thinking, problem-solving, and communication. This strand prepares students for further studies in any field they choose to pursue, giving them the confidence to excel in their chosen path.
		          <br><br>Whether you're still exploring your options or preparing for a multidisciplinary career, the GAS strand empowers you to discover your passions and chart your own path to success.
		        `,
					},
				],
				vocational: [
					{
						name: 'Information and Communication Technology (ICT)',
						image: '/resources/assets/images/strands/ict_logo.png',
						description: `Step into the dynamic world of Information and Communication Technology (ICT) and unleash your potential in the digital age. The ICT strand, offered under the Technical-Vocational Livelihood (TVL) Track of the K-12 curriculum, equips students with essential skills and knowledge in information technology.
		          <br><br>Through hands-on learning experiences, ICT students delve into programming, web development, and other cutting-edge technologies, preparing them for a wide range of IT careers. Upon completion, students can pursue TESDA-backed certifications such as the Certificate of Competency (COC) and National Certifications (NC), enhancing their employability and career prospects.
		          <br><br>Join the ICT strand in Senior High School and embark on a journey to become a tech-savvy innovator and problem-solver, ready to thrive in the digital workforce of tomorrow.
		       	`,
					},
					{
						name: 'Home Economics (HE)',
						image: '/resources/assets/images/strands/he_logo.png',
						description: `Enter the world of practical skills and livelihood projects with the Home Economics (HE) strand. While the ICT strand focuses on technology, HE focuses on essential life skills and vocational training, including caregiving, cookery, bartending, baking, handicraft making, tourism, housekeeping, dressmaking, and more.
		          <br><br>Designed to equip students with hands-on experience and industry-relevant skills, the HE strand prepares graduates for immediate employment opportunities. Whether you aspire to become a skilled chef, hospitality professional, or entrepreneur, the HE strand offers a pathway to success in various fields.
		          <br><br>Join the HE strand and discover your passion for practical skills, culinary arts, and hospitality management, paving the way for a rewarding career and fulfilling livelihood projects.
		        `,
					},
				]
			},
			curriculum: {
				subjects: {
					core: [
						{
	            category: "Language",
	            rowspan: 5,
	            subjects: [
	              { name: "Oral Communication in Context" },
	              { name: "Reading and Writing" },
	              { name: "Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino" },
	              { name: "Pagbasa at Pagsusuri ng Iba’t Ibang Teksto Tungo sa Pananaliksik" }
	            ]
          	},
          	{
	            category: "Humanities",
	            rowspan: 3,
	            subjects: [
	              { name: "21<sup>st</sup> Century Literature from the Philippines and the World" },
	              { name: "Contemporary Philippine Arts from the Regions" }
	            ]
          	},
          	{
	            category: "Communication",
	            rowspan: 2,
	            subjects: [
	              { name: "Media &#038; Information Literacy" }
	            ]
          	},
          	{
	            category: "Mathematics",
	            rowspan: 3,
	            subjects: [
	              { name: "General Mathematics" },
	              { name: "Statistics &#038; Probability" }
	            ]
          	},
          	{
	            category: "Science",
	            rowspan: 3,
	            subjects: [
	              { name: "Earth and Life Science (Lecture and Laboratory)" },
	              { name: "Physical Science (Lecture and Laboratory)" }
	            ]
          	},
          	{
	            category: "Social Science",
	            rowspan: 3,
	            subjects: [
	              { name: "Personal Development / Pansariling Kaunlaran" },
	              { name: "Understanding Culture, Society and Politics" }
	            ]
          	},
          	{
	            category: "Philosophys",
	            rowspan: 2,
	            subjects: [
	              { name: "Introduction to the Philosophy of the Human Person / Pambungad sa Pilosopiya ng Tao" }
	            ]
          	},
          	{
	            category: "PE and Health",
	            rowspan: 2,
	            subjects: [
	              { name: "Physical Education and Health" }
	            ]
          	},
					],
					applied: [
						{
	            name: "Pagsulat sa Filipino sa Piling Larangan",
	            topics: [
	              { name: "Akademiko" },
	              { name: "Tech-Voc" }
	            ]
          	},
          	{
	            name: "English for Academic and Professional Purposes",
	            topics: [{}]
          	},
          	{
	            name: "Quantitative Practical Research 1",
	            topics: [{}]
          	},
          	{
	            name: "Qualitative Practical Research 2",
	            topics: [{}]
          	},
          	{
	            name: "Inquiries, Investigations and Immersion",
	            topics: [{}]
          	},
          	{
	            name: "Empowerment Technologies (E-Tech)",
	            topics: [{}]
          	},
          	{
	            name: "Entrepreneurship",
	            topics: [{}]
          	},
					],
					specialized: [
						{
	            strand: "Science, Technology, Engineering, and Mathematics (STEM)",
	            rowspan: 10,
	            subjects: [
	              { name: "Pre-Calculus" },
	              { name: "Basic Calculus" },
	              { name: "General Biology 1" },
	              { name: "General Biology 2" },
	              { name: "General Physics 1" },
	              { name: "General Physics 2" },
	              { name: "General Chemistry 1" },
	              { name: "General Chemistry 2" },
	              { name: "Work Immersion/Career Advocacy/Culminating Activity Research" },
	            ]
          	},
          	{
	            strand: "Accountancy, Business, and Management (ABM)",
	            rowspan: 10,
	            subjects: [
	              { name: "Applied Economics" },
	              { name: "Business Ethics and Social Responsibility" },
	              { name: "Fundamentals of Accountancy, Business and Management 1" },
	              { name: "Fundamentals of Accountancy, Business and Management 2" },
	              { name: "Business Math" },
	              { name: "Business Finance" },
	              { name: "Organization and Management" },
	              { name: "Principles of Marketing" },
	              { name: "Work Immersion/Research/Career Advocacy/Culminating Activity i.e. Business Enterprise Simulation" },
	            ]
          	},
          	{
	            strand: "Humanities and Social Sciences (HUMSS)",
	            rowspan: 11,
	            subjects: [
	              { name: "Creative Writing" },
	              { name: "Creative Nonfiction: The Literary Essay" },
	              { name: "World Religions and Belief Systems" },
	              { name: "Megatrends and Critical Thinking in the 21st Century Culture" },
	              { name: "Philippine Politics and Governance" },
	              { name: "Community Involvement and Social Issues" },
	              { name: "Introducing the Social Sciences" },
	              { name: "Introducing the Applied Social Sciences" },
	              { name: "(Communication, Journalism, Guidance and Counseling, Social Work)" },
	              { name: "Work Immersion/Career Advocacy/Culminating Activity" },
	            ]
          	},
          	{
	            strand: "General Academics Strand (GAS)",
	            rowspan: 8,
	            subjects: [
	              { name: "Humanities 1" },
	              { name: "Humanities 2" },
	              { name: "Social Science 1" },
	              { name: "Applied Economics" },
	              { name: "Elective 1 (from any Track/Strand)" },
	              { name: "Elective 2 (from any Track/Strand)" },
	              { name: "Work Immersion/Career Advocacy/Culminating Activity" },
	            ]
          	},
          	{
	            strand: "Information and Communication Technology (ICT)",
	            rowspan: 7,
	            subjects: [
	              { name: "Computer System Servicing 1 (Computer Hardware Components)" },
	              { name: "Computer System Servicing 2 (Computer Software Components & Networking)" },
	              { name: "Web Development (Front End)" },
	              { name: "Web Development (Back End)" },
	              { name: "Practical Research (Innovation)" },
	              { name: "Work Immersion" },
	            ]
          	},
          	{
	            strand: "Home Economics (HE)",
	            rowspan: 7,
	            subjects: [
	              { name: "Food &#038; Beverages 1" },
	              { name: "Fundamentals of Accountancy, Business, and Management 1" },
	              { name: "Food &#038; Beverages 2 (Procedure)" },
	              { name: "Food &#038; Beverages 3 (Production)" },
	              { name: "Bread and Pastry Production NCII" },
	              { name: "Cookery NCII" },
	            ]
          	},
					]
				}
			},
			requirements: {
				incoming: [
					{ description: "Original Form 138 / SF9-JHS (Learner's Progress Report Card)" },
					{ description: "Original Form 137 / SF10-JHS (Learner's Permanent Academic Record)" },
					{ description: "PSA-issued Birth Certificate" },
				],
				transferees: [
					{ description: "Certificate of Transfer (Honorable Dismissal)" },
					{ description: "Original Form 138 / SF9-SHS" },
					{ description: "Original Form 137 / SF10-SHS (Copy for GMC)" },
					{ description: "PSA-issued Birth Certificate" },
				]
			}
		}
	},
	getters: {
		getBenefitsObjectives: (state) => state.objectives.ables,
		getProgramsObjectives: (state) => state.objectives.programs,

		getAcademicTracks: (state) => state.tracks.academics,
		getVocationalTracks: (state) => state.tracks.vocational,

		getCurriculumCoreSubjects: (state) => state.curriculum.subjects.core,
		getCurriculumAppliedSubjects: (state) => state.curriculum.subjects.applied,
		getCurriculumSpecializedSubjects: (state) =>  state.curriculum.subjects.specialized,

		getAdmissionRequirementsIncoming: (state) =>  state.requirements.incoming,
		getAdmissionRequirementsTransferees: (state) =>  state.requirements.transferees,
	},
	mutations: {},
	action: {}
}