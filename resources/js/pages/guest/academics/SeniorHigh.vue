<script setup>
import { computed, ref} from 'vue';
import { useStore } from 'vuex';
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import Banner from '@/components/guest/Banner.vue';
import Sidebar from '@/components/base/Sidebar.vue';
import OnthisPage from '@/components/guest/OnthisPage.vue';
import RelatedPage from '@/components/guest/RelatedPage.vue';

const store = useStore();
const data = computed(() => ({
	benefitsObjectives: 		 store.getters['guest/academics/shs/getBenefitsObjectives'],
	programObjectives: 			 store.getters['guest/academics/shs/getProgramsObjectives'],
	academicTracks: 				 store.getters['guest/academics/shs/getAcademicTracks'],
	vocationalTracks: 			 store.getters['guest/academics/shs/getVocationalTracks'],
	coreSubjects: 					 store.getters['guest/academics/shs/getCurriculumCoreSubjects'],
	appliedSubjects: 				 store.getters['guest/academics/shs/getCurriculumAppliedSubjects'],
	specializedSubjects: 		 store.getters['guest/academics/shs/getCurriculumSpecializedSubjects'],
	incomingRequirements: 	 store.getters['guest/academics/shs/getAdmissionRequirementsIncoming'],
	transfereesRequirements: store.getters['guest/academics/shs/getAdmissionRequirementsTransferees'],
	relatedLinks:            store.getters['guest/getDropdownLinksAcademics']
}));

const articles = [
	{ id: 'department', name: 'Department' },
	{ id: 'objectives', name: 'Objectives' },
	{ id: 'tracks-offered', name: 'Tracks Offered' },
	{ id: 'curriculum', name: 'Curriculum' },
	{ id: 'admission-requirements', name: 'Admission Requirements' },
];

const activeTab = ref('nav-core-subjects'); //as default core subj is open
const changeTab = (tabContentId) => {
	activeTab.value = tabContentId;
};
</script>

<template>
	<Banner :image="'bannershs.png'" />

	<Section className="shs">
		<Container className="content">
			<div class="row">
				<div class="col-md-9">
					<hr class="mt-3 text-muted"/>
					<article :id="articles[0].id">
						<h3 class="gradient-brown-text heading hashtag">Senior High School Department</h3>
						<p class="text">
							Elevate your high school experience with Golden Minds Colleges' Senior High program. Prepare yourself for the future with a comprehensive curriculum designed to equip you with the knowledge, skills, and confidence to succeed in college, launch your own business, or enter the workforce.
    					<br><br>
    					Immerse yourself in a dynamic campus environment where learning goes beyond the classroom. Engage in interactive classes, join sports teams and clubs, receive personalized academic support, and participate in community activities that enrich your overall experience.Experience a learner-centered approach that prioritizes your growth and development as future leaders and achievers. Through exciting research projects and hands-on learning opportunities, you'll tackle real-world challenges and develop innovative solutions.
						</p>
						<div class="row">
							<div class="col-md-4">
								<label class="label">Free Education</label>
	              <p>
	                <ul>
	                  <li>Free Tuition Fee</li>
	                  <li>Free Regular Uniform</li>
	                  <li>Free P.E Uniform</li>
	                  <li>Free Student ID &#038; Lace</li>
	                  <li>Student Incentives</li>
	                </ul>
	              </p>
              </div>
              <div class="col-md-4">
              	<label class="label">Air-Conditioned</label>
              	<p class="text">At Golden Minds Colleges, we prioritize your comfort and learning experience by providing air-conditioned classrooms and study areas throughout our campus.</p>
              </div>
              <div class="col-md-4">
              	<label class="label">Friendly Environment</label>
              	<p class="text">Golden Minds fosters a nurturing and inclusive atmosphere that encourages personal growth and a strong community.</p>
              </div>
						</div>
		      </article>

					<hr class="mt-3 text-muted"/>
		      <article :id="articles[1].id">
						<h3 class="gradient-brown-text heading hashtag">Objectives</h3>
						<div>
							<label class="label">After 2 years students will be able to:</label>
							<p class="text">
								<ol>
		              <li v-for="(item, i) in data.benefitsObjectives" :key="i">
		              	<p v-html="item.description"></p>
		              </li>
	            	</ol>
							</p>
						</div>
						<div>
							<label class="label">Program Tri-focalization</label>
							<p>
		            <ul>
		            	<li v-for="(item, i) in data.programObjectives" :key="i">
		                <p v-html="item.description"></p>
		              </li>
		            </ul>
							</p>
						</div>
		      </article>

					<hr class="mt-3 text-muted"/>
		      <article :id="articles[2].id">
						<h3 class="gradient-brown-text heading hashtag">Tracks Offered</h3>
						<div>
							<label class="label">Academic Track</label>
							<div id="academicTrack" class="light-accordion accordion accordion-flush mb-2">
								<div v-for="(item, i) in data.academicTracks" :key="i">
									<div class="item mt-2">
	                  <h2 class="header">
	                    <button class="button accordion-button collapsed"
	                    	data-bs-toggle="collapse"
	                    	:data-bs-target="`#academic-${i}`"
	                    	type="button"
	                    	aria-expanded="false"
	                    	aria-controls="`academic-${i}`">
	                      <b>{{ item.name }}</b>
	                    </button>
	                  </h2>
	                  <div :id="`academic-${i}`" data-bs-parent="#academicTrack" class="accordion-collapse collapse">
	                    <div class="accordion-body">
	                    	<div class="row">
	                    		<div class="col-md-4">
	                    			<div class="float-end header">
	                    				<img :src="item.image" class="img-fluid image" loading="lazy" alt="image"/>
	                    			</div>
	                    		</div>
	                    		<div class="col-md-8">
	                    			<p class="text">
	                 					 	<span v-html="item.description"></span>
	                      		</p>
	                    		</div>
	                    	</div>
	                    </div>
	                  </div>
	                </div>
                </div>
							</div>

							<label class="label mt-3">Technical-Vocational-Livelihood Track</label>
							<div id="vocationalTrack" class="light-accordion accordion accordion-flush">
								<div v-for="(item, i) in data.vocationalTracks" :key="i">
									<div class="item mt-2">
	                  <h2 class="header">
	                    <button class="button accordion-button collapsed"
	                    	data-bs-toggle="collapse"
	                    	:data-bs-target="`#vocational-${i}`"
	                    	type="button"
	                    	aria-expanded="false"
	                    	aria-controls="`vocational-${i}`">
	                      <b>{{ item.name }}</b>
	                    </button>
	                  </h2>
	                  <div :id="`vocational-${i}`" data-bs-parent="#vocationalTrack" class="accordion-collapse collapse">
	                    <div class="accordion-body">
	                    	<div class="row">
	                    		<div class="col-md-4">
	                    			<div class="float-end header">
	                    				<img :src="item.image" class="img-fluid image" loading="lazy" alt="image"/>
	                    			</div>
	                    		</div>
	                    		<div class="col-md-8">
	                    			<p class="text">
	                 					 	<span v-html="item.description"></span>
	                      		</p>
	                    		</div>
	                    	</div>
	                    </div>
	                  </div>
	                </div>
                </div>
							</div>
						</div>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[3].id">
						<h3 class="gradient-brown-text heading hashtag">Curriculum</h3>
						 <div class="row">
                <div class="col-xs-12 ">
                	<div class="nav-tab-light">
	                  <nav>
	                    <div class="nav nav-tabs nav-fill" id="nav-tab">
	                      <a class="nav-item nav-link" :class="{ 'active': activeTab === 'nav-core-subjects' }" @click="changeTab('nav-core-subjects')"><b>Core Subjects</b></a>
	                    	<a class="nav-item nav-link" :class="{ 'active': activeTab === 'nav-applied-subjects' }" @click="changeTab('nav-applied-subjects')"><b>Applied Subjects</b></a>
	                     	<a class="nav-item nav-link" :class="{ 'active': activeTab === 'nav-specialized-subjects' }" @click="changeTab('nav-specialized-subjects')"><b>Specialized Subjects</b></a>
	                    </div>
	                  </nav>
	                  <div class="tab-content" id="nav-tabContent">
	                    <div class="tab-pane fade" :class="{ 'show active': activeTab === 'nav-core-subjects' }" id="nav-core-subjects">
	                    	<div class="table-responsive">
						              <table class="table">
						                <thead>
						                  <tr>
						                    <th class="text-uppercase">Learning Areas</th>
						                    <th class="text-center text-uppercase">Subjects</th>
						                  </tr>
						                </thead>
						                <tbody>
						                  <template v-for="category in data.coreSubjects" :key="category.category">
													      <tr>
													        <td :rowspan="category.rowspan"><i><b>{{ category.category }}</b></i></td>
													      </tr>
													      <tr v-for="subject in category.subjects" :key="subject.name">
													        <td><span v-html="subject.name"></span></td>
													      </tr>
													    </template>
						                </tbody>
						              </table>
						            </div>
	                    </div>
	                    <div class="tab-pane fade" :class="{ 'show active': activeTab === 'nav-applied-subjects' }" id="nav-applied-subjects">
												<div>
													<ul>
														<template v-for="subject in data.appliedSubjects" :key="subject.name">
															<li>{{ subject.name }}</li>
															<ul class="list-group-flush">
											          <li v-for="topic in subject.topics" :key="topic.name" class="list-group-item">
											          	{{ topic.name }}
											          </li>
											        </ul>
														</template>
						              </ul>
												</div>
											</div>
	                    <div class="tab-pane fade" :class="{ 'show active': activeTab === 'nav-specialized-subjects' }" id="nav-specialized-subjects">
												<div class="table-responsive">
						              <table class="table">
						                <thead>
						                  <tr>
						                    <th colspan="2">Specialized Subjects For Each Strands (Grade 11 to Grade 12)</th>
						                  </tr>
						                </thead>
						                <tbody>
						                  <template v-for="strand in data.specializedSubjects" :key="strand.strand">
													      <tr>
													        <td :rowspan="strand.rowspan"><i><b>{{ strand.strand }}</b></i></td>
													      </tr>
													      <tr v-for="subject in strand.subjects" :key="subject.name">
													        <td><span v-html="subject.name"></span></td>
													      </tr>
													    </template>
						                </tbody>
						              </table>
						            </div>
											</div>
	                  </div>
                  </div>
                </div>
              </div>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[4].id">
						<h3 class="gradient-brown-text heading hashtag">Admission Requirements</h3>
						<div class="d-flex justify-content-center">
							<img src="@assets/images/shs.png" alt="image" loading="lazy" class="img-fluid image" />
						</div>
						<div>
							<p class="text">
			          The following requirements must be submitted to the Registrar's Office before admission to any academic program:
			        </p>
			        <div class="details_text row">
			          <div class="col-md-6">
			            <p class="label"><strong><i>Senior High School (Incoming Grade 11)</i></strong></p>
			            <ul v-for="(item, i) in data.incomingRequirements" :key="i">
			              <li>{{ item.description }}</li>
			            </ul>
			          </div>
			          <div class="col-md-6">
			            <p><strong><i>Senior High School Transferees</i></strong></p>
			            <ul v-for="(item, i) in data.transfereesRequirements" :key="i">
			                <li>{{ item.description }}</li>
			              </ul>
			          </div>
			        </div>
			       	<p class="text">Start you Senior High School and Become a GMCians,
			       		<a rel="noopener noreferrer" class="link-light-brown"
                  href="https://admission.goldenmindsbulacan.com/senior-high-school/registration?step=1&form_mode=applying-for" target="_blank">
                  Enroll Now <i class="fa-solid fa-arrow-right"></i>
                </a>
			       	</p>
						</div>
					</article>
				</div>
				<div class="col-md-3">
					<Sidebar>
						<OnthisPage :data="articles"/>
						<RelatedPage :data="data.relatedLinks"/>
					</Sidebar>
				</div>
			</div>
		</Container>
	</Section>
</template>

<style scoped>
/*content*/
.shs {}
.shs .content {
	margin-top: 40px;
}
.heading {
	margin-bottom: 20px;
	margin-top: 30px;
	font-weight: 600;
} .label {
	font-size: 20px;
	margin-bottom: 10px;
}
.table {
	--bs-table-bg: transparent!important;
}
#department, #objectives, #tracks-offered, #curriculum, #admission-requirements {
	padding-bottom: 30px;
}

#admission-requirements .image {
	margin-top: -90px;
	margin-bottom: 10px;
	pointer-events: none;
}
/*end content*/

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.shs {}
	.shs .content {
		margin-top: 10px;
	}
	.heading {
		font-size: 18px;
	} .label {
		font-size: 16px;
		margin-bottom: 10px;
	} .text {
		font-size: 14px;
	} ul {
		font-size: 14px;
	}
	.table {
		--bs-table-bg: transparent!important;
	}
	#department, #objectives, #tracks-offered, #curriculum, #admission-requirements {
		padding-bottom: 25px;
	}

	#admission-requirements .image {
		margin-top: -50px;
		margin-bottom: 10px;
		pointer-events: none;
	}
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}
</style>