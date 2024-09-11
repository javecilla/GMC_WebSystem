<script setup>
import { computed } from 'vue';
import { useStore } from 'vuex';
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import Banner from '@/components/guest/Banner.vue';
import Sidebar from '@/components/base/Sidebar.vue';
import OnthisPage from '@/components/guest/OnthisPage.vue';
import RelatedPage from '@/components/guest/RelatedPage.vue';

const store = useStore();
const data = computed(() => ({
	relatedLinks:            store.getters['guest/getDropdownLinksAcademics']
}));

const articles = [
	{ id: 'about', name: 'About' },
	{ id: 'objectives-and-goal', name: 'Objectives & Goal' },
	{ id: 'vision-and-mission', name: 'Vision & Mission' },
	{ id: 'program-and-services', name: 'Program & Services' },
	{ id: 'activities', name: 'Activities' },
];
</script>

<template>
	<Banner :image="'bannerogc.png'" />

	<Section className="ogc">
		<Container className="content">
			<div class="row">
				<div class="col-md-9">
					<hr class="mt-3 text-muted"/>
					<article :id="articles[0].id">
						<h3 class="gradient-brown-text heading hashtag">About</h3>
						<p class="text">
							The Guidance Program aims to serve the needs of individual students in terms of personal growth and development. It is designed to help students enhance the best in him/her, to responsibly adjust to situations as he/she progresses and contribute to the growth and development of others and the community.
						</p>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[1].id">
						<h3 class="gradient-brown-text heading hashtag">Objectives &#038; Goal</h3>
						<p class="text">
							The Guidance and Counseling Office commits itself to drive developmentally appropriate academic, career, and social/emotional growth of all students.
						</p>
						<ul class="text">
              <li>Assist the students in their interaction with members of both sexes through knowledge, acceptance and appreciation of their own individuality.</li>
              <li>Give instruction and various activities to students that can help them develop the application of proper communication skills for academic success.</li>
              <li>Assist the students in their search for identity by providing an avenue for them to identify, express and share their distinctive traits with others.</li>
              <li>Provide situations for the students that could help them interact well with others through socially responsible behavior.</li>
              <li>To maintain and improve health and living conditions of the students through coordination and supervision of policies relative to health services. (Health Service)</li>
           		<li>Expose the students to different career opportunities that would guide and help them decide logically, prudently and cleverly on what courses are best suited to their capabilities, aptitude and interest.</li>
           		<li>To assist the students in addressing their educational, personal, and social issues.</li>
           		<li>To recognize the wide range of abilities, talents, and needs of our student body by offering individualized career information and guidance.</li>
           </ul>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[2].id">
						<h3 class="gradient-brown-text heading hashtag">Vision &#038; Mission</h3>
						<div class="row">
							<div class="col-md-6">
								<label class="label">Vision</label>
								<p class="text">
									The vision of the Guidance and Counseling Office is to provide a preventative, responsive and comprehensive program that cultivates academic, personal/social, and career connections for all students. Through advocacy, character development, leadership, and collaboration, self- awareness and academic achievement. Our vision is that this will ensure that all students understand and embrace their own value and have an intrinsic motivation to contribute to their community and a diverse world, as they become members of a global work force.
								</p>
							</div>
							<div class="col-md-6">
								<label class="label">Mission</label>
								<p class="text">
                  The Guidance and Counseling Office mission, in alignment with the Golden Minds Colleges and Academy, is to drive developmentally appropriate academic, career, and social/emotional growth of all students. The professional school counselor will maintain a collaborative partnership with all including parents/guardians, school personnel, and community members, as a student advocate, to support student success. Together we will provide a safe, positive environment where all students feel a sense of belonging and connectedness. By fostering life-long learning and respect for self and others, we will promote a foundation of success that will support them beyond their school years.
								</p>
							</div>
						</div>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[3].id">
						<h3 class="gradient-brown-text heading hashtag">Program and Services</h3>
						<ul class="li-font-awesome mt-2">
              <li class="li-check-circle">
                <b>Orientation</b>
                <p class="text">
                  This service welcomes students and makes them feel comfortable in the school environment. It assists the students in their adjustment to a new phase of life.
                </p>
              </li>
              <li class="li-check-circle">
                <b>Individual Inventory</b>
                <p class="text">
                  This service gathers necessary information about individual students that will help in charting their progress/ development. It enables students to know themselves better and plan for their future with confidence.
                </p>
              </li>
              <li class="li-check-circle">
                <b>Testing</b>
                <p class="text">
                  This service assesses students’ capacities and diagnoses their strengths and weaknesses in different learning areas.
                </p>
              </li>
              <li class="li-check-circle">
                <b>Counseling</b>
                <p class="text">
                  This is the heart of the guidance services. It provides proper assistance according to every student’s needs thereby develop in them desirable attitudes and values. It gives opportunity for individual students to understand their problems more clearly, to make choices and decisions, and to resolve conflicts.
                </p>
              </li>
              <li class="li-check-circle">
                <b>Information</b>
                <p class="text">
                  This service provides students with pertinent information that is not ordinarily supplied through instructional programs.
                </p>
              </li>
              <li class="li-check-circle">
                <b>Research and Evaluation</b>
                <p class="text">
                  This service aims to gather vital information and feedback and use them in the revision and strengthening of the curriculum and school service.
                </p>
              </li>
            </ul>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[4].id">
						<h3 class="gradient-brown-text heading hashtag">Activities</h3>
						<div class="align-items-center justify-content-center ">
						 	<div class="row g-3 py-3  border-bottom">
							 	<div class="col-10 col-sm-8 col-lg-5">
									<img src="@assets/images/ogc/s1.jpg" class="d-block mx-lg-auto img-fluid rounded-4" alt="image" width="700" height="800" loading="lazy"/>
							 	</div>
							 	<div class="col-lg-7">
		              <label class="label">Elevate your Work Immersion Journey: Cultivating the right attitude for success</label>
		              <p class="text">
		                Embark on a transformative work immersion journey with 'Elevate Your Work Immersion: Cultivating the Right Attitude for Success.' Discover the keys to success as we delve into fostering the essential mindset and approach vital for a fruitful and rewarding immersion experience.
		              </p>
		              <p>
										<RouterLink :to="{ name: 'gallery'}" class="link">
	                  See all photos <i class="fa-solid fa-arrow-right"></i>
	                  </RouterLink>
		              </p>
		            </div>
						 	</div>
						 	<div class="row g-3 py-3  border-bottom">
							 	<div class="col-10 col-sm-8 col-lg-5">
									<img src="@assets/images/ogc/s3.jpg" class="d-block mx-lg-auto img-fluid rounded-4 image" alt="image" width="700" height="800" loading="lazy"/>
							 	</div>
							 	<div class="col-lg-7">
		              <label class="label">Fire Safety Seminar and Fire Drill.</label>
		              <p class="text">
                		Join us for an essential session on Fire Safety featuring a comprehensive seminar followed by a practical Fire Drill. Learn crucial safety measures and actively engage in hands-on training to ensure preparedness in handling fire emergencies.
		              </p>
									<p>
										<RouterLink :to="{ name: 'gallery'}" class="link">
	                  See all photos <i class="fa-solid fa-arrow-right"></i>
	                  </RouterLink>
		              </p>
		            </div>
						 	</div>
						 	<div class="row g-3 py-3  border-bottom">
							 	<div class="col-10 col-sm-8 col-lg-5">
									<img src="@assets/images/ogc/s2.jpg" class="d-block mx-lg-auto img-fluid rounded-4" alt="image" width="700" height="800" loading="lazy"/>
							 	</div>
							 	<div class="col-lg-7">
		              <label class="label">Charting the Roadmap to Student Dev't Senior High School</label>
		              <p class="text">
                		Charting the Roadmap to Student Development: Senior High School Edition. Join us as we navigate the pathways toward holistic growth, shaping a transformative journey focused on the comprehensive development of our Senior High School students.
		              </p>
		              <p>
										<RouterLink :to="{ name: 'gallery'}" class="link">
	                  See all photos <i class="fa-solid fa-arrow-right"></i>
	                  </RouterLink>
		              </p>
		            </div>
						 	</div>
						</div>
					</article>
				</div>
				<div class="col-md-3">
					<Sidebar>
						<OnthisPage :data="articles" />
						<RelatedPage :data="data.relatedLinks" />
					</Sidebar>
				</div>
			</div>
		</Container>
	</Section>
</template>

<style scoped>
/*content*/
.ogc {}
.ogc .content {
	margin-top: 40px;
}
.link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
}
.link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
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
#about, #vision-and-mission, #objectives, #services {
	padding-bottom: 30px;
}
/*end content*/

@media only screen and (min-width: 320px) and (max-width: 480px) {
	.ogc {}
	.ogc .content {
		margin-top: 20px;
		padding-bottom:20px;
	}
	.link {
	  font-size: 14px;
	}
	.heading {
		font-size: 18px;
	} .label {
		font-size: 16px;
    margin-bottom: 5px;
	}
	.text {
  font-size: 14px;
  }
	.table {
		--bs-table-bg: transparent!important;
	}
	#about, #vision-and-mission, #objectives, #services {
		padding-bottom: 30px;
	}
}
</style>