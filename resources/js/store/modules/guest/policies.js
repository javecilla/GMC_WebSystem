export default {
	namespaced: true,
	state: () => {
		return {
			privacyStatement: [
				{
	        title: "Collection of Information",
	        rowspan: 2,
	        descriptions: [
	          { data: "Golden Minds may collect Personal Information of a Data Subject when the Data Subject has given his or her consent. Golden Minds uses a Data Privacy Agreement form which is signed upon enrollment/employment. The Personal Information collected shall be processed solely in connection with the Data Subject’s application for school admission or employment, access to and use of electronic services or other transaction with Golden Minds All Personal Information collected may be retained by Golden Minds until necessary to the above-mentioned purposes and in accordance with applicable laws and with the school policy." },
	        ]
        },
        {
	        title: "Use of Personal Information",
	        rowspan: 3,
	        descriptions: [
	          { data: "Golden Minds may collect Personal Information to be used in accordance with its declared and legitimate purpose specified and consented to by the Data Subject at the time such information is collected. Golden Minds may also use such Personal Information to contact the Data Subject regarding its services and products, and with the Data Subject’s specific consent, for official publication or posting purposes. Golden Minds may also use the Personal Information for research and survey purposes to understand and determine the needs for the continuous improvement of its services and products." },
	        	{ data: "Golden Minds upholds the Data Subject’s right to refuse, withdraw consent, or object to the use of his or her Personal Information. Golden Minds may, however, be constrained to deny the Data Subject’s application for admission or employment, request, access and use of school services, and other transactions." },
	        ]
        },
        {
	        title: "Disclosure of Personal Information",
	        rowspan: 3,
	        descriptions: [
	          { data: "Golden Minds may disclose Personal Information to third parties with the consent of the Data Subject as to the purpose of the disclosure and the identity of said third parties. Golden Minds shall ensure that the privacy policies of said third parties provide a comparable level of protection as that of Golden Minds and are compliant with the relevant laws and guidelines of the Philippines, including the Data Privacy Act of 2012 and its Implementing Rules and Regulations." },
	        	{ data: "Golden Minds may disclose Personal Information to law enforcement authorities, regulators, or other public authority in connection with any alleged violations by the Data Subject of the terms and conditions of his or her contract or agreement with Golden Minds, violations of law, subpoena, or inquiry by a governmental authority. Golden Minds reserves the right to report to law enforcement authorities any activity that its personnel believe in good faith to be unlawful." },
	        ]
        },
        {
	        title: "Data Security and Storage",
	        rowspan: 4,
	        descriptions: [
	          { data: "Manually collected Personal Information is stored and secured physically. Electronically collected Personal Information is stored and secured in the database of Golden Minds. The electronic database is secured by the Information Technology department of Golden Minds." },
	        	{ data: "Golden Minds uses reasonable efforts to secure electronically collected Personal Information. Only authorized Golden Minds personnel and contractors who have agreed to keep information secure and confidential have access to this information. Their access to Personal Information is limited only for the declared and specified legitimate purpose." },
	        	{ data: "The Data Subject shall have reasonable access, upon demand, of his or her Personal Information. The Data Subject shall likewise have the right to dispute any inaccuracy or error in his or her Personal Information and have Golden Minds correct said inaccuracy or error unless the request is vexatious or otherwise unreasonable." },
	        ]
        },
        {
	        title: "Liability and Exclusion",
	        rowspan: 2,
	        descriptions: [
	          { data: "Golden Minds shall not be liable for any loss, expense, or damage arising out of or in connection with the wrongful use or reliance by the Data Subject or other third party upon the information in this privacy notice." },
	        ]
        },
        {
	        title: "Privacy Contact Information",
	        rowspan: 2,
	        descriptions: [
	          { data: "For any questions, concerns, or comments about Golden Minds Privacy Notice, contact us at <a href='mailto:admin@goldenmindsbulacan.com' style='color: #000'><b>admin@goldenmindsbulacan.com</b></a>" },
	        ]
        },
			],
			termOfUse: [
				{
	        title: "Acceptance of Terms",
	        rowspan: 2,
	        descriptions: [
	          { data: "Your use of Golden Minds Bulacan services is subject to these Terms of Use. If you do not agree with these terms, please refrain from using our services." },
	        ]
        },
        {
	        title: "User Consent",
	        rowspan: 2,
	        descriptions: [
	          { data: `By using our services, you consent to the collection and processing of your personal information in accordance with our Privacy Policy. Please review our Privacy Policy for more details.` },
	        ]
        },
        {
	        title: "Cookies",
	        rowspan: 2,
	        descriptions: [
	          { data: `Golden Minds may utilize cookies to enhance your browsing experience. By using our services, you consent to the use of cookies as described in our Privacy Policy. You can manage cookie preferences through your browser settings.` },
	        ]
        },
        {
	        title: "Personal Information",
	        rowspan: 2,
	        descriptions: [
	          { data: `Any personal information provided by you will be treated in accordance with our Privacy Policy. We prioritize the security and confidentiality of your data.` },
	        ]
        },
        {
	        title: "User Responsibilities",
	        rowspan: 2,
	        descriptions: [
	          { data: `You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account. Notify us immediately of any unauthorized use or security breach.` },
	        ]
        },
        {
	        title: "User Responsibilities",
	        rowspan: 2,
	        descriptions: [
	          { data: `Users must not engage in any activities that violate applicable laws, regulations, or the rights of others. Golden Minds reserves the right to suspend or terminate accounts engaging in prohibited activities.` },
	        ]
        },
        {
	        title: "Intellectual Property",
	        rowspan: 2,
	        descriptions: [
	          { data: `The content and materials provided by Golden Minds are protected by intellectual property laws. Users are prohibited from unauthorized reproduction, distribution, or use of such materials.` },
	        ]
        },
        {
	        title: "Changes to Terms",
	        rowspan: 2,
	        descriptions: [
	          { data: `Golden Minds reserves the right to update these Terms of Use. Users are encouraged to review the terms periodically. Continued use of our services implies acceptance of any changes.` },
	        ]
        },
        {
	        title: "Termination",
	        rowspan: 2,
	        descriptions: [
	          { data: `Golden Minds may terminate or suspend access to services at its discretion for any reason, including violation of these Terms of Use.` },
	        ]
        },
        {
	        title: "Contact Us",
	        rowspan: 2,
	        descriptions: [
	          { data: "For any questions, concerns, or comments about Golden Minds Privacy Notice, contact us at <a href='mailto:admin@goldenmindsbulacan.com' style='color: #000'><b>admin@goldenmindsbulacan.com</b></a>" },
	        ]
        },
			]
		}
	},
	getters: {
		getInfos: (state) => {
			return state.privacyStatement;
		},
		getTermOfUse: (state) => {
			return state.termOfUse;
		}
	},
	mutations: {},
	action: {}
}