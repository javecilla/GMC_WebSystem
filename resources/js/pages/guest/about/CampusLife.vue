<script setup>
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import WaveLine from '@/components/WaveLine.vue';
</script>

<template>
	<Section class="campuslife-academics">
		<Container class="content">
			<div class="row">
				<div class="col-md-6">
					<label class="gradient-brown-text label">Embracing Academic Life</label>
					<p class="text">
						Step onto our campus and witness the vibrant tapestry of academic life unfolding before your eyes. Here, students are more than learners; they are architects of their futures, sketching Golden Minds landmarks for assignments, immersing themselves in scholarly texts, and perfecting dance routines for their physical education exams.
						<br/><br/>
						It's a place where dedication meets creativity, and every moment is an opportunity for growth.
					</p>
				</div>
				<div class="col-md-6">
					<img src="@assets/images/about/campus3.png" class="rounded-4 academic-image" alt="image" loading="lazy"/>
				</div>
			</div>

			<div class="d-flex row flex-row-reverse mt-5">
				<div class="col-md-6">
					<label class="gradient-brown-text label">Artistic Expression</label>
					<p class="text">
						Immerse yourself in the vibrant corridors of Golden Minds, where creativity pulses through the very heart of campus life. Here, students don't just study art—they live it. From the rhythmic sway of dancers perfecting their moves to the harmonious melodies echoing from practice rooms, artistic expression permeates every aspect of our community.
            <br/><br/>
            Whether it's the vibrant strokes of a paintbrush on canvas or the soulful resonance of a musical performance, our campus is a canvas for creativity. Through collaborative projects, performances, and exhibitions, students find their voices and share their unique perspectives with the world. Join us as we celebrate the transformative power of art in shaping not only our campus but also our collective spirit.
					</p>
				</div>
				<div class="col-md-6">
					<img src="@assets/images/about/campus4.png" class="rounded-4 dance-image" alt="image" loading="lazy" />
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-6">
					<label class="gradient-brown-text label">Spirit of Sportsmanship</label>
					<p class="text">
						Step onto the fields of Golden Minds, where the air is charged with the electrifying energy of sportsmanship. Here, cheers of enthusiastic fans mingle with the determined strides of athletes, creating an atmosphere of exhilarating competition and unwavering camaraderie.
            <br><br>
            Students at Golden Minds don't just play sports—they embody the spirit of competition and excellence. From traditional sports to the cutting-edge world of e-sports, our campus is a melting pot of athletic prowess and digital innovation. It's a place where passion and skill collide, forging unforgettable moments of triumph and fostering lifelong bonds among teammates and competitors alike.
					</p>
				</div>
				<div class="col-md-6">
					<img src="@assets/images/about/campus5.png" class="rounded-4 sport-image" alt="image" loading="lazy"/>
				</div>
			</div>
		</Container>
	</Section>
</template>

<style scoped>
.campuslife-academics {
	background: #F8FAFC;
	padding: 15px 0 40px 0; /*top left bottom right*/
} .campuslife-academics .content {

}
.campuslife-academics .label {
	font-size: 25px;
  font-weight: 600;
} .campuslife-academics .text {
	font-size: 17px;
}
.academic-image {
	width: 470px;
	height: 320px;
} .dance-image {
	width: 450px;
	height: 390px;
} .sport-image {
	width: 480px;
	height: 340px;
}
.academic-image, .dance-image, .sport-image {
	pointer-events: none;
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.campuslife-academics {
		padding: 10px 0 40px 0;
	} .campuslife-academics .content {
		padding-top: 5px;
	}
	.campuslife-academics .label {
		font-size: 20px;
		margin-top: -40px;
	} .campuslife-academics .text {
		font-size: 14px;
	}
	.academic-image {
		width: 360px;
		height: 280px;
		margin-top: 20px;
	} .dance-image {
		width: 360px;
		height: 280px;
		margin-top: 20px;
	} .sport-image {
		width: 360px;
		height: 280px;
	}
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}
</style>