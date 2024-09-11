<script setup>
import { useStore } from 'vuex';
import { computed, ref, onMounted, onUnmounted } from 'vue';
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import Banner from '@/components/guest/Banner.vue';
import Sidebar from '@/components/base/Sidebar.vue';
import OnthisPage from '@/components/guest/OnthisPage.vue';
import RelatedPage from '@/components/guest/RelatedPage.vue';

const store = useStore();
const data = computed(() => ({
	relatedLinks:            store.getters['guest/getDropdownLinksAcademics'],
	objectives:              store.getters['guest/academics/osas/getObjectives']
}));

const articles = [
	{ id: 'about', name: 'About' },
	{ id: 'vision-and-mission', name: 'Vision & Mission' },
	{ id: 'objectives', name: 'Objectives' },
	{ id: 'services', name: 'Services' },
];
</script>

<template>
	<Banner :image="'bannerosas.png'" />

	<Section className="osas">
		<Container className="content">
			<div class="row">
				<div class="col-md-9">
					<hr class="mt-3 text-muted"/>
					<article :id="articles[0].id">
						<h3 class="gradient-brown-text heading hashtag">About</h3>
						<p class="text">
							The <i class="fw-bold">Golden Minds Office of Student Affairs and Services (OSAS)</i> is an administrative unit of the Institution that is within the supervision of the Administrator. The OSAS is responsible for the development and implementation of various programs and services that focus on the nonacademic aspects of the student’s life in the Institution. These student-centered activities and services that compliment overall academic program of the school are anticipated to support holistic student development towards responsible stewardship involvement in nation building. The Student Affairs and Services of the school are composed of student welfare and development programs and services.
						</p>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[1].id">
						<h3 class="gradient-brown-text heading hashtag">Vision &#038; Mission</h3>
						<div class="row">
							<div class="col-md-6">
								<label class="label">Vision</label>
								<p class="text">
                  The Office of the Student Affairs and Services (OSAS) is committed in the enhancement and provision of Student Welfare and Development Programs and Services responsive and sensitive to the changing needs of the students.
								</p>
							</div>
							<div class="col-md-6">
								<label class="label">Mission</label>
								<p class="text">
		              Guided by the GMC's ideals, the Office of the Student Affairs and Services (OSAS) envisions itself to be an integral part of the Institution in the holistic formation and development of the GMCians students.
								</p>
							</div>
						</div>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[2].id">
						<h3 class="gradient-brown-text heading hashtag">Objectives</h3>
						<div>
							<ul class="list-group list-group-flush">
								<template v-for="(item, i) in data.objectives" :key="i">
									<li class="list-group-item text">{{ item.description }}</li>
								</template>
						</ul>
						</div>
					</article>

					<hr class="mt-3 text-muted"/>
					<article :id="articles[3].id">
						<h3 class="gradient-brown-text heading hashtag">Services</h3>
						<div>
							<label class="label"> Golden Minds offers the following Student Services to reinforce and complement Students Academic formation.</label>
							<div class="light-accordion accordion accordion-flush" id="studentServices">
								<div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#welfareService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Student Welfare Programs and Services</b>
                    </button>
                  </h2>
                  <div id="welfareService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                  			These basic services are necessary to promote the wellbeing of students. These include the Admission, Information and Orientation, Guidance and Counseling, Scholarships and Financial Assistance, Career and Placement Service, Food Service, Safety and Security, Student Discipline, and Research, Monitoring, and Evaluation.
											</p>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#developmentService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Student Development Programs and Services</b>
                    </button>
                  </h2>
                  <div id="developmentService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                  			These are programs, activities, and services designed to enhance and build up the students’ leadership skills and social responsibility. These comprise of the Student Activities and Leadership Training Programs, Sports, and Cultural Programs.
											</p>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#guidanceService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Guidance Services (Guidance &#038; Counseling Office)</b>
                    </button>
                  </h2>
                  <div id="guidanceService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        The Guidance Office is central to the maintenance of campus environment that is conductive to learning. the office serves as the arbiterin time of conflict or dispute among members of the school community.
                        <br/><br/>
                        The Guidance Service Program is designed to improve each student’s program selection, academic achievement and career success.
												<br/><br/>
												The Guidance office offers services designed to meet the development adjustment needs of the students, like counseling , ( individual and group) information, and conferences with parents, values development and other trainings.
												<br/><br/>
												It provides the students opportunities to identify and develop their potential; maximize and utilize their abilities and interest for their personality growth and development; enhance their skills in problem solving, career planning and development, decision making, communication and interpersonal relationships.
											</p>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#recordService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Record Services (Office of the College Registrar)</b>
                    </button>
                  </h2>
                  <div id="recordService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        Maintenance and security of students’ academic records are primarily handled by the Office of the Registrar. The office is repository of the academic record of students, both enrolled and graduated- the proper management of these highly important and delicate records is it utmost concern.<br/><br/>
                        It provides the following services:
											</p>
											<ol>
                          <li>Evaluates and accredits subjects/ units earned by students</li>
                          <li>Processes student admission and other academic credentials; the office receives the application, screen applicants, validates student transfer credentials and ensures completion of admission requirements.</li>
                          <li>The office issues official list of students qualified for graduation ensures completion of pre- graduation requirements.</li>
                          <li>Updates records, issues transcript of records, Diploma, Honorable dismissal and other school documents to students.</li>
                          <li>Verifies, Authenticates, and certifies school records upon request.</li>
                        </ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#facilityService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Laboratory and Facility Services (Laboratory- in-Charge and Property Custodian)</b>
                    </button>
                  </h2>
                  <div id="facilityService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                       	The school provides laboratory, facilities, equipment, and personnel to support the academic requirements of program offered. Any equipment or facility intended to be used must have first secured the consent of the laboratory- in-charge. In the absence of the laboratory –in-charge, one can approach the department head or the property custodian for consent and assistance.
												<br/><br/>
												For maximum protection, care and handling of school properties, the following guidelines are implemented.
											</p>
											<ol>
                        <li>School facilities and equipment to be borrowed is for school official only.</li>
                        <li>Borrower should secure requisition form or log for any reservation.</li>
                        <li>Only officers and members of an officially recognized organization any use campus facility/ laboratory in conducting any students or organizational activity</li>
                        <li>No student is allowed to borrow equipment or use facility without the consent of the concerned faculty, adviser or any school staff.</li>
                        <li>Borrower should deposit his/her ID upon receiving the equipment or upon use of facility.</li>
                        <li>Lost or damage of the borrowed equipment should be reported immediately to the property custodian for investigation.</li>
                        <li>Return equipment will be checked for any damage or lost of accessories or parts by the custodian</li>
                        <li>ID can be retrieved after the return item checked.</li>
                        <li>The borrower will be accountable to any lost or damage of borrowed item due to negligence.</li>
                        <li>Individual or groups using any campus facility are also fully accountable for any breakage, damage, or lost of facilities or parts of contents thereof.</li>
                        <li>Extension will only be allowed if no other individual made reservation of the equipment on the same schedule.</li>
                        <li>The property custodian or laboratory personnel in charge deserves the right not to clear students (Through clearance form) with pending property accountabilities.</li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#libraryService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Library Services (Learning Resource Center)</b>
                    </button>
                  </h2>
                  <div id="libraryService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
												[ No data found. ]
											</p>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#characterService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Character Formation Services (Discipline)</b>
                    </button>
                  </h2>
                  <div id="characterService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                       	The office is committed to prepare a student handbook, policies, rules and relation affecting student formation, development, conduct, behavior and discipline.<br/><br/>The Office exist to;
											</p>
											<ol>
                        <li>Advise the Student Body Organization in its functions, Programs and activities.</li>
                        <li>Recommend request of student groups for the use of school facilities to the Property Custodian with the approval of the Director for Administration.</li>
                        <li>Conduct Freshmen and Transferees Orientation programs;</li>
                        <li>Coordinate with school offices concerned with student services in the following areas;
                          <ol style="list-style-type: lower-alpha;">
                            <li>Extra-curricular student development programs.</li>
                            <li>Guidance and counseling services.</li>
                            <li>Student community and extension services.</li>
                          </ol>
                        </li>
                        <li>Implementation of guidelines on the prescribed uniforms of students.</li>
                        <li>Issuance and validation of students’ ID’s.</li>
                        <li>Assist and implements the Scholarship and Grants Program, with the approval of the Vice President and Administrator.</li>
                        <li>Continues to institutionalize the Office of the Students Affairs by developing policies regarding students affairs, with coordination from different departments upon the approval of the Administrator for Academic Affairs.</li>
                        <li>Recommends disciplinary actions for students who committed serious offense to the Council of Discipline</li>
                        <li>The OSA deserves the right not to clear students (through clearance form) with pending library accountabilities.</li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#informationService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Information Service (Information Desk)</b>
                    </button>
                  </h2>
                  <div id="informationService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        Information Desk is located at the ground floor near the main entrance of the Campus. The information Area is manned by the Reception Officer to perform the following functions:
											</p>
											<ol>
                        <li>Entertains inquiries concerning the school program, fees, and enrollment procedure.</li>
                        <li>Provides updates information concerning school announcement, student services, offices and procedures and other information deemed helpful to students.</li>
                        <li>Refers guest, parents and students to the appropriate offices.</li>
                        <li>Answer phone calls.</li>
                        <li>Assumes the responsibility in the production and issuance of student and administrative form like, Re- Admission Slip, Early Dismissal Form, ID Application.</li>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#maintenanceService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Maintenance Services (Physical Plant Office)</b>
                    </button>
                  </h2>
                  <div id="maintenanceService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        Maintenance Group of Golden Minds is committed in keeping the physical environment of the institution conducive and effective for the students’ academic formation.
											</p>
											<ol>
                        <li>Keep the campus clean and orderly at all times: Lecture Rooms, Laboratory, Hallways, Comfort Rooms and Offices.</li>
                        <li>Dispose trash properly.</li>
                        <li>Coordinate with laboratory personnel-in-charge or Property Custodian for the maintenance and repair of any reported damaged school property; air condition unit, doors, cupboards, etc.</li>
                        <li>Check and repair any faulty wiring system in the Building.</li>
                     	</ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#securityService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Security Services (Security-in-charge)</b>
                    </button>
                  </h2>
                  <div id="securityService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        Golden Minds maintains the following standard operational procedures in security.
											</p>
											<ol>
                       	<li>Protect from harm and intimidation all the Golden Minds students, employees, visitors and guest.</li>
                       	<li>Enforce regulations especially in the proper wearing of IDs as well as the uniform codes for students and employees.</li>
                       	<li>Observe utmost courtesy in dealing with students, faculty members, employees, and visitors and provide assistance if needed.</li>
                       	<li>Observe and enforce compliance to school regulations, particularly uniform and dress code and the wearing of IDs of the students within the area of responsibility.</li>
                       	<li>Inform students regarding their violation in the Student Manual and School Policies.</li>
                       	<li>Provide assistance to the student in case of accident, threat and harm inside campus.</li>
                       	<li>Conduct and facilitate smooth pedestrian traffic.</li>
                       	<li>Implement visitor control procedures.</li>

                        <br/>
                        <h6 class="fw-bold">Limitations of Security Services:</h6>
                        <p>School security is not liable to any loss of personal belongings even inside the school campus, specially those left unattended. However lost and found items may be referred to the security.</p>
                        <ol style="list-style-type: none">
                          <li>
                            <p class="fw-bold">Request for CCTV Review:</p>
                            Request for CCTV Review maybe done through the office of the Students Affairs
                          </li>
                          <li>
                            <p class="fw-bold">No individuals is allowed to review CCTV Without the assistance of the following:</p>
                            Maintenance Officer, and Security Guard.
                          </li>
                        </ol>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#PEService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Physical Education Services (PE Coordinator)</b>
                    </button>
                  </h2>
                  <div id="PEService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
												The Physical Education staff is responsible for recommending and implementing programs designed to develop and maintain excellent physical condition of students and school personnel. They teach and supervise sports, games, and other school activities;
												<br/><br/>
                        Staff assumes the responsibility in handling the School Varsity team, recruiting members and scholarship recommendation.
                        <br/><br/>
                        Any sports equipment to be borrowed by the students must be properly coursed through the PE Coordinator in the absence of the Property Custodian:
											</p>
											<ol>
                        <li>Student I.D Must be surrendered upon getting the equipment, no I.D no borrowing.</li>
                        <li>The borrower is accountable for the sports equipment lost or damaged and will be charged with repair and replacement.</li>
                        <li>Student I.D can be retrieved after the returned sports equipment is checked.</li>
                    	</ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#clinicService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Health Services (School Clinic)</b>
                    </button>
                  </h2>
                  <div id="clinicService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        The Medical-Dental Clinic offers the following services:
											</p>
											<ol>
                       	<li>First-Aid treatment to students, faculty members and staff.</li>
                       	<li>Free consultation, free starter dose for medication.</li>
                       	<li>Free referral in case that require further examination or treatment.</li>
                       	<li>Validate and coordinate other health services that maybe required by the school.</li>
                       	<li>Advise student for early dismissal from classes due to diagnosed health problem.</li>
                     	</ol>
                    </div>
                  </div>
                </div>
                <div class="item mt-2">
                  <h2 class="header">
                    <button class="button accordion-button collapsed"
                    	type="button"
                    	data-bs-toggle="collapse"
                    	data-bs-target="#canteenService"
                    	aria-expanded="false"
                    	aria-controls="flush-collapseOne">
                      <b>Canteen Services (School Canteen)</b>
                    </button>
                  </h2>
                  <div id="canteenService" class="accordion-collapse collapse" data-bs-parent="#studentServices">
                    <div class="accordion-body">
                      <p class="text">
                        The primary responsibility of canteen personnel is to provide sanitary, affordable, adequate and nutritious meals and snacks to students, faculty members, and staff of the school.
											</p>
                    </div>
                  </div>
                </div>
							</div>
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
.osas {}
.osas .content {
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
#about, #vision-and-mission, #objectives, #services {
	padding-bottom: 30px;
}
/*end content*/

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
  .osas {}
  .osas .content {
    margin-top: 20px;
    padding-bottom: 20px;
  }
  .heading {
    font-size: 18px;
  } .text {
  font-size: 14px;
  }
  .label {
    font-size: 16px;
    margin-bottom: 5px;
  }
  #about, #vision-and-mission, #objectives, #services {
    padding-bottom: 30px;
  }
}
</style>