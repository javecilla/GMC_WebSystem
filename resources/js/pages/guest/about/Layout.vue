<script setup>
import { ref, watchEffect } from 'vue';
import { useRoute } from 'vue-router';

import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import WaveLine from '@/components/WaveLine.vue';

const pageTitle = ref('');
const pageDescription = ref('');
const route = useRoute();
const currentRoute = route.name;

watchEffect(() => {
  switch(currentRoute) {
    case 'about.info':
      pageTitle.value = `Discover <span class="gradient-brown-text">About</span>`;
      pageDescription.value = `Golden Minds Colleges, a distinguished private institution dedicated to providing tuition-free education. Delve into our rich heritage, where excellence meets tradition, and witness how we've shaped generations of learners to excel in the ever-evolving global landscape. Our aim to produces graduates that are competitive in the current global trends. Develop young minds to become God-fearing, intelligent and multitask individuals.`;
      break;
    case 'about.seal':
      pageTitle.value = `School <span class="gradient-brown-text">Seal</span> of`;
      pageDescription.value = `
        ...where passion of imparting knowledge and preserving values that nurture a person's character to help him become a better citizen. There are five elements that summarize the totality of the institution.Building a community of lifelong learners! Dedicated Educators. We know that learning is easier when you have an excellent teacher. That's why most of our educators have achieved an advanced degree in their field. Our faculty are passionate about the subjects they teach and bring this enthusiasm into their lessons.
      `;
      break;
    case 'about.hymn':
      pageTitle.value = `Official <span class="gradient-brown-text">Hymn</span> of`;
      pageDescription.value = `<p class="text text-center">
            We have found the Golden Vision,<br/>
            We are part of its New Mission,<br/>
            We recieved knowledge for future,<br/>
            The Shield and Torch now we hold,<br/>
            <br/>
            Golden Minds, GMC,<br/>
            You have shaped our destiny,<br/>
            Thank you for what we've learned,<br/>
            We will cherish till the end,<br/>
            <br/>
            Golden teaching that you've shown,<br/>
            Golden thoughts now we've known,<br/>
            You have taught us how to strive,<br/>
            We will keep the flame alive,<br/>
            <br/>
             Golden Minds, GMC,<br/>
            Telling goodbye is hard to say,<br/>
            For as we leave We will carry,<br/>
            Sweet memories during our stay,<br/>
            <br/>
            Golden Values that you've shared<br/>
            Golden Hearts we will serve<br/>
            To bring honor and glory<br/>
            To alma mater and thy country<br/>
            <br/>
            Forever we will be<br/>
            The best GMCians for our Lord thee (2x)
          </p>`;
      break;
    case 'about.vision.mission':
      pageTitle.value = `<span class="gradient-brown-text">Vision</span> and <span class="gradient-brown-text">Mission</span> `;
      pageDescription.value =  `Our Vision and Mission statements embody our commitment to fostering dynamic learning environments, equipping students with the skills and mindset to excel in an ever-changing world. Discover how we cultivate a supportive community that empowers students to achieve their goals, contribute meaningfully to society, and foster respect and compassion for others.`;
      break;
    case 'about.campus.life':
      pageTitle.value = `Discover <span class="gradient-brown-text">Campus Life</span> in`;
      pageDescription.value = `Embark on a journey into the heart of campus life at Golden Minds Colleges. Experience the vibrant pulse of student activities, from academic pursuits to extracurricular adventures. Engage in dynamic learning environments, forge lifelong friendships, and cultivate personal growth within our supportive community. Explore the essence of campus life where every moment is an opportunity to thrive.`;
      break;
    default:
      //router not found
      break;
  }
});
</script>

<template>
	<Section className="about-us-header bg-dot">
		<Container className="content text-center">
			<div class="text-content">
				<label class="sub-title gradient-brown-text">
					About Us
				</label>
		    <h1 class="main-title gradient-dark-text col-lg-11 mx-auto">
		    	<span v-html="pageTitle"></span> <br/> Golden Minds Colleges
				</h1>
				<p class="text col-lg-10 mx-auto">
					<span v-html="pageDescription"></span>
				</p>
			</div>
		</Container>
	</Section>

	<WaveLine stroke="top" color="#F8FAFC" className="svg-between-about-header-content"/>

  <RouterView />
</template>

<style>
/*about-us-header*/
.about-us-header {
  padding-top: 20px;
  padding-bottom: 20px;
} .about-us-header .content {
  margin-top: -25px;
  max-width: 1250px;
}.about-us-header .sub-title {
  font-size: 22px;
  font-weight: bolder;
} .about-us-header .main-title {
  font-family: var(--app-font-poppins);
  font-size: 72px;
  font-weight: bolder;
  margin-top: 10px;
}  .about-us-header .text-content {
  padding: 65px;
}  .about-us-header .text {
  font-weight: 500;
  font-size: 20px;
  color: #1F1F1F;
  opacity: .9;
  margin-top: 20px;
}
/*End about-us-header*/
.svg-between-about-header-content {
  margin-top: -200px!important;
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
  /*about-us-header*/
  .about-us-header {
    padding-top: 30px;
    padding-bottom: 5px;
  } .about-us-header .content {
    margin-top: -50px!important;
    max-width: 1350px!important;
  }.about-us-header .sub-title {
    font-size: 18px;
  } .about-us-header .main-title {
    font-size: 30px;
    margin-top: 8px;
  }  .about-us-header .text-content {
    padding: 45px;
  }  .about-us-header .text {
    font-weight: 500;
    font-size: 14px;
    margin-top: 15px;
  }
  /*End about-us-header*/
  .svg-between-about-header-content {
    margin-top: -80px!important;
  }
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}
</style>
