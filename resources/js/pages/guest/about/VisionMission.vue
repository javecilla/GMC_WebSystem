<script setup>
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import WaveLine from '@/components/WaveLine.vue';
</script>

<template>
	<Section className="visionMission">
		<Container className="content">
			<div class="row">
				<div class="col-md-6">
					<label class="gradient-brown-text label">Vision</label>
					<p class="text">
				   	We are envisioned to cultivate and ignite a dynamic learning environtment that equips students with knowledge and skills to become ready in the fast changing technology, to seek excellence in their choosen endeavour, develops critical thinking and fair judgement.
					</p>
				</div>
				<div class="col-md-6">
					<label class="gradient-brown-text label">Mission</label>
					<p class="text">
						To create a supportive environment that nurture and empowers the learning spirit of our students to be more productive, goal-driven, academically explorative and thus become a good contributor to his environment fostering respect and love for others.
					</p>
				</div>
			</div>
			<hr class="text-muted"/>
			<div>
				<label class="gradient-brown-text label">Philosophy</label>
				<p class="text">
					Our philosophy lies in our mission of earnestly imparting knowledge and skill to our students. We wish to cater to the academic needs of interested individuals who are searching for high quality education. We aim to produce graduates that are competitive in the current global trends. Likewise, as an academic institution , we aim to develop young minds to become God-fearing, inteligent and multiskilled individuals who will be worthy citizens in the coming years. In line with our mission, we envisioned to become as excellent academic and technological training ground for our learners while incorporating love and concern for society and country.
				</p>
			</div>

			<div class="table-responsive">
				<table class="table table-light table-bordered caption-top">
					<caption><span class="gradient-brown-text label">Core Values</span></caption>
					<tbody>
						<tr>
							<th><i><b class="gradient-dark-text">GODLINESS</b></i></th>
							<td>GMCians should put God first in everything they do.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">OBEDIENCE</b></i></th>
							<td>GMCians should submit to the authorities and comply to the policies that were being implemented not only by the school but also by the society.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">LOVE</b></i></th>
							<td>GMCians should show compassion to other people inside and outside the school premises.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">DILIGENCE</b></i></th>
							<td>GMCians are expected to work hard and persevere.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">EXCELLENCE</b></i></th>
							<td>GMCians should strive to develop their knowledge and skills and excel in everything that they do to achieve their full potential.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">NURTURE</b></i></th>
							<td>GMCians should nourish and take care of their environment.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">MOTIVATION</b></i></th>
							<td>GMCians should share encouragement to one another to boost their morale.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">INTEGRITY</b></i></th>
							<td>GMCians should possess moral sprightness and word of honor.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">NATIONALISM</b></i></th>
							<td>GMCians will be molded to be loyal Filipino citizen with pride and make our country proud.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">DEDICATION</b></i></th>
							<td>GMCians should devote and commit themselves in their chosen field.</td>
						</tr>
						<tr>
							<th><i><b class="gradient-dark-text">SERVICE</b></i></th>
							<td>GMCians are expected to serve others to give back the skills, knowledge and values they gained by helping others.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</Container>
	</Section>
</template>

<style scoped>
.visionMission {
	background: #F8FAFC;
	padding-bottom: 30px;
} .visionMission .content {
	margin-top: -10px;
} .visionMission .label {
	font-size: 25px;
  font-weight: 600;
} .visionMission .text {
	font-size: 17px;
	line-height: 26px;
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.visionMission {
		padding-bottom: 30px;
	} .visionMission .content {
		margin-top: -10px;
		padding-top: 30px;
	} .visionMission .label {
		font-size: 18px;
	  font-weight: 600;
	} .visionMission .text {
		font-size: 14px;
	}
	tr {
		font-size: 14px;
	}
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}
</style>