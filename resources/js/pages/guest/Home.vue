<script setup>
import { useStore, mapGetters } from 'vuex';
import { computed } from 'vue';
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import WaveLine from '@/components/WaveLine.vue';
import ExternalLink from '@/components/guest/ExternalLink.vue';

const store = useStore();
const offers = computed(() => store.getters['guest/home/getOffers']);
</script>
<template>
	<Section className="hero bg-grid">
		<Container className="text-center content">
			<div class="text-content">
				<label class="sub-title gradient-brown-text">
					Senior High School
				</label>
		    <h1 class="main-title gradient-brown-text">
		    	Applications for the Academic Year 2024-2025 are now open.
				</h1>
				<p class="description col-lg-10 mx-auto">
					Seize your future! Enroll now at GMC Senior High. Dream big, aim higher. New students and transferees are welcome at all levels. Your journey starts here!
				</p>
			</div>
	  </Container>
	  <div class="col-lg-6 mx-auto" >
	    <div class="button-content d-grid gap-2 d-sm-flex justify-content-sm-center">
        <RouterLink :to="{ name: 'help'}" class="button get-help btn btn-light gap-3">
          Get Help
        </RouterLink>
        <ExternalLink
          to="https://admission.goldenmindsbulacan.com/senior-high-school/registration?step=1&form_mode=applying-for"
          text="Register Now Online"
          icon="fa-solid fa-arrow-right"
          className="button register-now btn btn-light"
        />
	    </div>
	 	</div>
  </Section>

  <Section className="stats">
    <Container>
      <div class="d-flex justify-content-center align-items-center">
        <div class="row gap-3">
          <div class="col-auto">
            <span class="data">
              <i class="fa-solid fa-eye icon"></i>
              <span class="text">Views: -</span>
            </span>
          </div>
          <div class="col-auto">
            <span class="data">
              <i class="fa-solid fa-graduation-cap icon"></i>
              <span class="text">Students: -</span>
            </span>
          </div>
          <div class="col-auto">
            <span class="data">
              <i class="fa-solid fa-school icon"></i>
              <span class="text">Campus: -</span>
            </span>
          </div>
        </div>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="top" color="#F8FAFC" className="svg-between-stats-market-test"/>

  <Section className="market">
    <Container className="content">
      <div class="image-box d-flex justify-content-center align-items-center">
        <img src="@assets/images/561231hero.png" loading="lazy" class="image" alt="Golden Minds Colleges Hero"/>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="bottom" color="#F8FAFC" className="svg-between-market-strand-test"/>

  <Section className="strands">
    <Container>
      <div class="content position-relative text-center text-muted bg-body">
        <label class="gradient-brown-text label">Explore Our Senior High School Strands</label>
        <h1 class="gradient-dark-text header col-lg-10 mx-auto">Discover Your Path to Success</h1>
        <p class="col-lg-9 mx-auto text">
          Choosing the right strand to prepare for college is a pivotal decision that shapes your future. At Golden Minds Colleges, we offer a diverse range of specialized strands designed to align with your unique interests and career aspirations.
          <br/><br/>
          Whether you're passionate about STEM and ICT subjects, inclined towards the arts, or eager to delve into business and entrepreneurship, our Senior High School program provides tailored pathways to help you thrive.
        </p>
        <p>
          <RouterLink :to="{ name: 'academics.shs'}" class="link">
            Learn more about each strand <i class="fa-solid fa-arrow-right"></i>
          </RouterLink>
        </p>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="top" color="#F8FAFC" className="svg-between-strands-offer-test"/>

  <Section className="offers">
    <Container>
      <div class="content">
        <label class="gradient-brown-text label">Why Golden Minds?</label>
        <h1 class="gradient-dark-text header">Free Tuition Fee on<br/>your Senior High School</h1>
        <div>
          <ExternalLink
            to="https://admission.goldenmindsbulacan.com/senior-high-school/registration?step=1&form_mode=applying-for"
            text="Register Now Online"
            icon="fa-solid fa-arrow-right"
            className="link"
          />
        </div>
        <div id="offersData">
          <div class="box-group row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div v-for="(offer, i) in offers" :key="i" class="col d-flex align-items-start mt-3">
              <div class="icon-container text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="fa-solid icon" :class="offer.icon"></i>
              </div>
              <div>
                <h3 class="label-text">{{ offer.label }}</h3>
                <p class="text">{{ offer.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="bottom" color="#F8FAFC" className="svg-between-offers-als-test"/>

  <Section className="als">
    <Container>
      <div class="content position-relative text-center text-muted bg-body">
        <label class="gradient-brown-text label">Unlock Your Potential with Golden Minds</label>
        <h1 class="gradient-dark-text header">Welcome, ALS Graduates!</h1>
        <p class="col-lg-9 mx-auto text">
          At Golden Minds, we embrace diversity and believe in providing opportunities for all. If you're an ALS graduate seeking to further your education and pursue your dreams, our doors are open for you.
          <br/><br/>
          Experience our supportive learning environment, dedicated faculty, and enriching programs designed to help you thrive academically and personally. Join us and continue your journey towards success.
        </p>
        <p>
          <RouterLink :to="{ name: 'search'}" class="link">
          Learn How to Enroll <i class="fa-solid fa-arrow-right"></i>
          </RouterLink>
        </p>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="top" color="#493026" className="svg-between-als-benifits-test"/>

  <Section className="benifits">
    <Container>
      <div class="content">
        <h2 class="gradient-golden-text label">Benefits of Enrolling at Golden Minds</h2>
        <h1 class="header">Education for Everyone</h1>
        <p class="text">Discover the advantages of starting your academic journey at Golden Minds Colleges.</p>
        <div class="box-group row align-items-center g-5 py-5">
          <div class="col-lg-4 mt-3">
            <div class="card align-items-start">
               <div class="d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="fa-solid fa-circle-check icon"></i>
              </div>
              <div>
                <h3 class="card-label">Free Education</h3>
                <p class="text-container">
                  <ul style="line-height: 23px!important;">
                    <li class="card-text">Free Tuition Fee</li>
                    <li class="card-text">Free Regular Uniform</li>
                    <li class="card-text">Free P.E Uniform</li>
                    <li class="card-text">Free Student ID & Lace</li>
                    <li class="card-text">Student Incentives</li>
                  </ul>
                </p>
                <p>
                  <RouterLink :to="{ name: 'academics.shs'}" class="link">
                  Learn More <i class="fa-solid fa-arrow-right"></i>
                  </RouterLink>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-3">
            <div class="card align-items-start">
               <div class="d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="fa-solid fa-school icon"></i>
              </div>
              <div>
                <h3 class="card-label">Air-Conditioned</h3>
                <p class="text-container">
                  <ul>
                    <li class="card-text" style="line-height: 26px!important;">At Golden Minds Colleges, we prioritize your comfort and learning experience by providing air-conditioned classrooms and study areas throughout our campus.</li>
                  </ul>
                </p>
                <p>
                  <RouterLink :to="{ name: 'academics.shs'}" class="link">
                  Learn More <i class="fa-solid fa-arrow-right"></i>
                  </RouterLink>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-3">
            <div class="card align-items-start">
              <div class="d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <i class="fa-solid fa-people-line icon"></i>
              </div>
              <div>
                <h3 class="card-label">Friendly Environment</h3>
                <p class="text-container">
                  <ul>
                    <li class="card-text" style="line-height: 26px!important;">
                    Golden Minds fosters a nurturing and inclusive atmosphere that encourages personal growth and a strong community.</li>
                  </ul>
                </p>
                <p>
                  <RouterLink :to="{ name: 'academics.shs'}" class="link">
                  Learn More <i class="fa-solid fa-arrow-right"></i>
                  </RouterLink>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="bottom" color="#493026" className="svg-between-benifits-info-test"/>

  <Section className="info">
    <Container>
      <div class="content">
        <div class="row flex-lg-row-reverse align-items-center">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="@assets/images/51asfinf0.png" class="image"
              alt="Golden Minds Colleges Info" width="700" height="550" loading="lazy"/>
          </div>
          <div class="col-lg-6">
            <label class="gradient-brown-text label">What's Golden Minds Colleges?</label>
            <h1 class="gradient-dark-text header">About Us</h1>
            <p class="text">
              Is a distinguished private school providing tuition-free education. Our institution is committed to nurturing graduates who excel in the ever-evolving global landscape. Aim to produces graduates that are competitive in the current global trends. Develop young minds to become God-fearing, intelligent and multitask individuals.
            </p>
            <p>
              <RouterLink :to="{ name: 'academics.shs'}" class="link">
                Why students love Golden Minds <i class="fa-solid fa-arrow-right"></i>
              </RouterLink>
            </p>
            <p>
              <RouterLink :to="{ name: 'gallery'}" class="link">
                Navigate to our Gallery from Event Campus <i class="fa-solid fa-arrow-right"></i>
              </RouterLink>
            </p>
          </div>
        </div>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="bottom" color="#F8FAFC" className="svg-between-info-experience-test"/>

  <Section className="experience">
    <Container>
      <div class="content position-relative text-center text-muted">
        <label class="gradient-brown-text label">Golden Minds Colleges Experience</label>
        <h1 class="gradient-dark-text header">14 Years of <br/>Educational Excellence</h1>
        <p class="col-lg-10 mx-auto text">
          Experience the comforts of a home-away-from-home at Golden Minds Colleges, a Bulacan-based private institution offering tuition-free education across three campuses in Sta. Maria, Balagtas, and Guiguinto. Our cutting-edge academic programs are driven by a commitment to research and innovation, ensuring a leading-edge educational experience.
        </p>
        <p>
          <RouterLink :to="{ name: 'about.info'}" class="link">
            Read More <i class="fa-solid fa-arrow-right"></i>
          </RouterLink>
        </p>
      </div>
    </Container>
  </Section>

  <WaveLine stroke="top" color="#F5FAFE" className="svg-between-experience-footer-test"
    inlineStyle="margin-top: -180px!important;"/>
</template>
<style>
/*Hero*/
.hero {
  padding-top: 20px;
  padding-bottom: 20px;
} .hero .content {
  margin-top: -55px;
  max-width: 1250px;
}.hero .sub-title {
  font-size: 22px;
  font-weight: bolder;
} .hero .main-title {
  font-family: var(--app-font-poppins);
  font-size: 72px;
  font-weight: bolder;
  margin-top: 10px;
}  .hero .description {
  font-weight: 500;
  font-size: 20px;
  color: #1F1F1F;
  opacity: .9;
  margin-top: 20px;
}.hero .text-content {
  padding: 65px;
} .hero .button {
  -webkit-box-shadow: none;
  box-shadow: none;
  background-image: unset;
  text-align: center;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: -0.225px;
  position: relative;
  display: inline-block;
  -webkit-transition: all 300ms ease 0ms;
  transition: all 300ms ease 0ms;
  border-radius: 6px;
  min-height: 54px;
  min-width: 196px;
  padding: 18px 20px;
  border-width: 2px;
  border-style: solid;
  line-height: 1;
} .hero .button.get-help {
  /*  background-image: linear-gradient(to left, #373D3F, #373D3F, #555F61);*/
  background: #a87e49!important;
  font-weight: bolder;
  color: #f3f3f3;
  opacity: .9;
  border: none;
  transition: .9s all ease;
} .hero .button.register-now {
  border: none;
 /* background-image: linear-gradient(to left, #5a3b2f, #b4813f); */
 background: #86643a!important;
  font-weight: bolder;
  color: #f3f3f3;
  opacity: .9;
  transition: .5s all ease;
} .hero .button.get-help:hover,
  .hero .button.register-now:hover {
  transform: scale(1.02);
} .hero .button-content {
  margin-top: -55px;
  padding: 10px;
}
/*End hero*/

/*Stats*/
.stats {
  background: #fff;
  margin-top: 320px;
  border-top: 1px solid #dce1d8;
  border-bottom: 1px solid #dce1d8;
  padding: 15px;
  cursor: default;
} .stats .data {
  display: flex;
  align-items: center;
} .stats .data .icon {
  font-size: 25px;
  color: #1F1F1F;
  opacity: .7;
  transition: all ease .2s;
} .stats .data .text {
  font-family: var(--app-font-poppins);
  font-size: 16px;
  color: #1F1F1F;
  text-align: center;
  margin-left: 10px;
  opacity: .7;
  transition: all ease .2s;
} .stats .data:hover .icon,
  .stats .data:hover .text {
    color: var(--app-light-brown);
    opacity: .8;
}
/*END Stats*/
.svg-between-stats-market-test {
  margin-top: -150px;
}

/*Market*/
.market {
  pointer-events: none;
  background: #f8f9fa;
  padding: 10px 0px 10px 0px; /*left right top bottom*/
} .market .content {

} .market .image {
  border-radius: 15px;
  width: 930px;
  height: 500px;
  box-shadow: inset 0 0 10px rgba(0, 0, 0, .5);
  filter: drop-shadow(0 0 0.60rem rgba(0, 0, 0, .2));
  margin-top: -100px!important;
}
/*END Market*/
.svg-between-market-strand-test {
  margin-top: -110px;
}


/*strands*/
.strands {
  margin-top: -100px!important;
  padding: 30px 0px 10px 0px;
} .strands .content {
  background: #fff!important;
} .strands .label {
  font-size: 25px;
  font-weight: 600;
} .strands .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .strands .text {
  font-size: 18px;
  color: #212529BF;
} .strands .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .strands .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}
.svg-between-strands-offer-test {
  margin-top: -190px!important;
}

/* Offers*/
.offers {
  background: #F8FAFC;
  padding: 10px 0px 10px 0px;
} .offers .content {
  margin-top: -15px;
} .offers .label {
  font-size: 25px;
  font-weight: 600;
} .offers .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .offers .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .offers .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
} .offers .icon-container {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
  background: linear-gradient(to left, #5a3b2f, #b4813f)!important;
  color: #f3f3f3;
} .offers .icon {
  color: #f1f1f1;
} .offers .label-text {
  font-size: 21px;
  font-weight: 600;
  opacity: .8;
} .offers .label-text:hover {
  color: var(--app-light-brown);
  opacity: .7;
} .offers .text {
  font-size: 17.3px;
  opacity: .9;
} .offers .box-group {
  margin-top: -55px;
}
/* End Offers*/
.svg-between-offers-als-test {
  margin-top: -120px!important;
}
/*als*/
.als {
  margin-top: -100px!important;
  padding: 30px 0px 10px 0px;
} .als .content {
  background: #fff!important;
} .als .label {
  font-size: 25px;
  font-weight: 600;
} .als .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .als .text {
  font-size: 18px;
  color: #212529BF;
} .als .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .als .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}
/*End als*/
.svg-between-als-benifits-test {
  margin-top: -190px!important;
}

/* Benifits*/
.benifits {
  background: #493026;
  padding: 10px 0px 10px 0px; /*left right top bottom*/
} .benifits .label {
  font-size: 25px;
  font-weight: 600;
} .benifits .header {
  font-family: var(--app-font-poppins);
  color: #f3f3f3;
  font-size: 60px;
  margin-bottom: 20px;
} .benifits .text-container {
  margin-top: -5px;
} .benifits .text {
  font-size: 20px!important;
  color: #f3f3f3;
} .benifits .card {
  height: 350px;
  padding: 40px;
  background: rgb(103, 71, 52, .5);
  border-radius: 16px;
  box-shadow: 0 4px 30px rgb(0, 0, 0, 0.1);
  backdrop-filter: blur(6.9px);
  -webkit-backdrop-filter: blur(6.9px);
  border: 1px solid rgba(16, 29, 39, 0.19);
} .benifits .icon {
  color: #dcb336;
  margin-bottom: 10px;
} .benifits .card-label {
  font-size: 22px;
  font-weight: 600;
  color: #f3f3f3;
} .benifits .card-text {
  font-size: 17.2px;
  color: #f3f3f3;
  margin-top: 10px;
} .benifits .link {
  font-size: 18px;
  font-weight: bold;
  color: #dcb336;
  text-decoration: none;
  transition: all ease .3s;
} .benifits .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-light-brown);
}
/* End Benifits*/
.svg-between-benifits-info-test {
  margin-top: -110px;
}
/*Info*/
.info {
  background: #F8FAFC;
  margin-top: -180px;
  padding-top: 50px!important;
} .info .content {
  margin-top: 70px;
} .info .image {
  pointer-events: none;
  width: 570px;
  height: 400px;
} .info .label {
  font-size: 25px;
  font-weight: 600;
} .info .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .info .text {
  font-size: 18px;
  color: #212529BF;
} .info .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .info .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}
/*End Info*/
.svg-between-info-experience-test {
  margin-top: -10px;
}

/*Exeperience*/
.experience {
  margin-top: -90px;
} .experience .content {
  margin-top: 20px;
} .experience .label {
  font-size: 25px;
  font-weight: 600;
} .experience .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .experience .text {
  font-size: 18px;
  color: #212529BF;
} .experience .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .experience .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}
/*End Exeperience*/
.svg-between-experience-footer-test {
  margin-top: -110px;
}

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
  /*Hero*/
  .hero {
    padding-top: 5px;
    padding-bottom: 190px!important;
  } .hero .content {
    margin-top: -15px!important;
    max-width: 1350px!important;
  }.hero .sub-title {
    font-size: 18px!important;
  } .hero .main-title {
    font-size: 30px!important;
    margin-top: 5px;
  }  .hero .description {
    font-size: 14px!important;
    opacity: .9;
    margin-top: 15px;
  }.hero .text-content {
    padding: 25px!important;
  } .hero .button {
    font-size: 16px;
    font-weight: 600;
    letter-spacing: -0.225px;
    border-radius: 6px;
    min-height: 24px;
    min-width: 126px!important;
    padding: 16px 18px!important;
    border-width: 2px;
    line-height: 1;
  } .hero .button-content {
    margin-top: -40px!important;
    padding: 10px;
  }
  /*End hero*/

  /*Stats*/
  .stats {
    margin-top: 180px!important;
    padding: 15px;
  } .stats .data .icon {
    font-size: 20px!important;
    opacity: .7;
  } .stats .data .text {
    font-size: 14px!important;
    margin-left: 10px;
    opacity: .7;
  }
  /*END Stats*/
  .svg-between-stats-market-test {
    margin-top: -30px;
  }

  /*Market*/
  .market {
    padding: 10px 0px 10px 0px;
  } .market .content {

  } .market .image-box {
    margin-top: 80px!important;
  }
  .market .image {
    width: 340px!important;
    height: 190px!important;
  }
  /*END Market*/
  .svg-between-market-strand-test {
    margin-top: -30px;
  }

  /*strands*/
  .strands {
    margin-top: -40px!important;
    padding: 30px 0px 10px 0px;
  } .strands .content {
  } .strands .label {
    font-size: 18px;
  } .strands .header {
    font-size: 30px;
    margin-bottom: 20px;
  } .strands .text {
    font-size: 14px;
  } .strands .link {
    font-size: 14px;
  }
  /*End Strands*/
  .svg-between-strands-offer-test {
    margin-top: -50px!important;
  }

  /* Offers*/
  .offers {
    padding: 10px 0px 10px 0px;
  } .offers .content {
    margin-top: 5px;
  } .offers .label {
    font-size: 18px;
    margin-bottom: 5px;
  } .offers .header {
    font-size: 30px;
    margin-bottom: 15px;
  } .offers .link {
    font-size: 16px;
  } .offers .icon-container {
    width: 3rem;
    height: 3rem;
    border-radius: .75rem;
  } .offers .icon {
    color: #f1f1f1;
  } .offers .label-text {
    font-size: 16px;
  } .offers .text {
    font-size: 14px;
  } .offers .box-group {
    margin-top: -55px;
  }
  /* End Offers*/
  .svg-between-offers-als-test {
    margin-top: -40px!important;
  }

  /*als*/
  .als {
    margin-top: -30px!important;
    padding: 30px 0px 10px 0px;
  } .als .content {
  } .als .label {
    font-size: 18px;
  } .als .header {
    font-size: 30px;
    margin-bottom: 20px;
  } .als .text {
    font-size: 14px;
  } .als .link {
    font-size: 14px;
  }
  /*End als*/
  .svg-between-als-benifits-test {
    margin-top: -50px!important;
  }

  /* Benifits*/
  .benifits {
    padding: 10px 0px 10px 0px;
  } .benifits .label {
    font-size: 18px;
  } .benifits .header {
    font-size: 30px;
    margin-bottom: 20px;
  } .benifits .text-container {
    margin-top: -5px;
  } .benifits .text {
    font-size: 14px!important;
  } .benifits .card {
    height: 320px;
    width: auto;
    padding: 40px;
  } .benifits .icon {
    margin-bottom: 8px!important;
  } .benifits .card-label {
    font-size: 16px;
    font-weight: 600;
  } .benifits .card-text {
    font-size:14px;
    margin-top: 10px;
  } .benifits .link {
    font-size: 14px;
  }
  /* End Benifits*/
  .svg-between-benifits-info-test {
    margin-top: -25px!important;
  }

  /*Info*/
  .info {
    margin-top: -50px;
    padding-top: 10px!important;
  } .info .content {
    margin-top: 40px;
  } .info .image {
    width: 340px;
    height: 230px;
    margin-bottom: 15px;
  } .info .label {
    font-size: 18px;
    font-weight: 600;
  } .info .header {
    font-size: 30px;
    margin-bottom: 10px;
  } .info .text {
    font-size: 14px;
  } .info .link {
    font-size: 14px;
  }
  /*End Info*/
  .svg-between-info-experience-test {
    margin-top: -10px!important;
  }
  /*Exeperience*/
  .experience {
    margin-top: -20px;
    margin-bottom: 160px;
  } .experience .content {
    margin-top: 20px;
  } .experience .label {
    font-size: 18px;
    font-weight: 600;
  } .experience .header {
    font-size: 30px;
    margin-bottom: 20px;
  } .experience .text {
    font-size: 14px;
  } .experience .link {
    font-size: 14px;
  }
  /*End Exeperience*/
  .svg-between-experience-footer-test {
    margin-top: 200px;
  }
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {
  /*Hero*/
  .hero {
    padding-top: 10px;
    padding-bottom: 190px!important;
  } .hero .content {
    margin-top: -15px!important;
    max-width: 1350px!important;
  }.hero .sub-title {
    font-size: 20px!important;
  } .hero .main-title {
    font-size: 45px!important;
    margin-top: 5px;
  }  .hero .description {
    font-size: 16px!important;
    opacity: .9;
    margin-top: 15px;
  }.hero .text-content {
    padding: 25px!important;
  } .hero .button {
    font-size: 17px;
    font-weight: 600;
    letter-spacing: -0.225px;
    border-radius: 6px;
    min-height: 24px;
    min-width: 126px!important;
    padding: 16px 18px!important;
    border-width: 2px;
    line-height: 1;
  } .hero .button-content {
    margin-top: -20px!important;
    padding: 10px;
  }
  /*End hero*/

  /*Stats*/
  .stats {
    margin-top: 280px!important;
    padding: 15px;
  } .stats .data .icon {
    font-size: 20px!important;
    opacity: .7;
  } .stats .data .text {
    font-size: 14px!important;
    margin-left: 10px;
    opacity: .7;
  }
  /*END Stats*/
  .svg-between-stats-market-test {
    margin-top: -30px;
  }


  /*Market*/
  .market {
    padding: 10px 0px 10px 0px;
  } .market .content {

  } .market .image-box {
    margin-top: 80px!important;
  }
  .market .image {
    width: 440px!important;
    height: 270px!important;
  }
  /*END Market*/
  .svg-between-market-strand-test {
    margin-top: -30px;
  }

  /*strands*/
  .strands {
    margin-top: -40px!important;
    padding: 30px 0px 10px 0px;
  } .strands .content {
  } .strands .label {
    font-size: 20px;
  } .strands .header {
    font-size: 40px;
    margin-bottom: 20px;
  } .strands .text {
    font-size: 16px;
  } .strands .link {
    font-size: 16px;
  }
  /*End Strands*/
  .svg-between-strands-offer-test {
    margin-top: -50px!important;
  }

  /* Offers*/
  .offers {
    padding: 10px 0px 10px 0px;
  } .offers .content {
    margin-top: 5px;
  } .offers .label {
    font-size: 20px;
    margin-bottom: 5px;
  } .offers .header {
    font-size: 40px;
    margin-bottom: 15px;
  } .offers .link {
    font-size: 16px;
  } .offers .icon-container {
    width: 3rem;
    height: 3rem;
    border-radius: .75rem;
  } .offers .icon {
  } .offers .label-text {
    font-size: 18px;
  } .offers .text {
    font-size: 16px;
  } .offers .box-group {
    margin-top: -55px;
  }
  /* End Offers*/
  .svg-between-offers-als-test {
    margin-top: -40px!important;
  }

  /*als*/
  .als {
    margin-top: -30px!important;
    padding: 30px 0px 10px 0px;
  } .als .content {
  } .als .label {
    font-size: 20px;
  } .als .header {
    font-size: 40px;
    margin-bottom: 20px;
  } .als .text {
    font-size: 16px;
  } .als .link {
    font-size: 16px;
  }
  /*End als*/
  .svg-between-als-benifits-test {
    margin-top: -50px!important;
  }

  /* Benifits*/
  .benifits {
    padding: 10px 0px 10px 0px;
  } .benifits .label {
    font-size: 20px;
  } .benifits .header {
    font-size: 40px;
    margin-bottom: 20px;
  } .benifits .text-container {
    margin-top: -5px;
  } .benifits .text {
    font-size: 16px!important;
  } .benifits .card {
    height: 320px;
    width: auto;
    padding: 45px;
  } .benifits .icon {
    margin-bottom: 8px!important;
  } .benifits .card-label {
    font-size: 18px;
    font-weight: 600;
  } .benifits .card-text {
    font-size:16px;
    margin-top: 10px;
  } .benifits .link {
    font-size: 16px;
  }
  /* End Benifits*/
  .svg-between-benifits-info-test {
    margin-top: -25px!important;
  }

  /*Info*/
  .info {
    margin-top: -50px;
    padding-top: 10px!important;
  } .info .content {
    margin-top: 40px;
  } .info .image {
    width: 460px;
    height: 310px;
    margin-bottom: 15px;
  } .info .label {
    font-size: 20px;
    font-weight: 600;
  } .info .header {
    font-size: 40px;
    margin-bottom: 10px;
  } .info .text {
    font-size: 16px;
  } .info .link {
    font-size: 16px;
  }
  /*End Info*/
  .svg-between-info-experience-test {
    margin-top: -10px!important;
  }
  /*Exeperience*/
  .experience {
    margin-top: -20px;
    margin-bottom: 160px;
  } .experience .content {
    margin-top: 20px;
  } .experience .label {
    font-size: 20px;
    font-weight: 600;
  } .experience .header {
    font-size: 40px;
    margin-bottom: 20px;
  } .experience .text {
    font-size: 16px;
  } .experience .link {
    font-size: 16px;
  }
  /*End Exeperience*/
  .svg-between-experience-footer-test {
    margin-top: 200px;
  }
}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  /*Hero*/
  .hero {
    padding-top: 30px;
    padding-bottom: 190px!important;
  } .hero .content {
    margin-top: -15px!important;
    max-width: 1350px!important;
  }.hero .sub-title {
    font-size: 22px!important;
  } .hero .main-title {
    font-size: 50px!important;
    margin-top: 5px;
  }  .hero .description {
    font-size: 17px!important;
    opacity: .9;
    margin-top: 15px;
  }.hero .text-content {
    padding: 25px!important;
  } .hero .button {
    font-size: 17px;
    font-weight: 600;
    letter-spacing: -0.225px;
    border-radius: 6px;
    min-height: 24px;
    min-width: 126px!important;
    padding: 16px 18px!important;
    border-width: 2px;
    line-height: 1;
  } .hero .button-content {
    margin-top: -20px!important;
    padding: 10px;
  }
  /*End hero*/

  /*Stats*/
  .stats {
    margin-top: 210px!important;
    padding: 15px;
  } .stats .data .icon {
    font-size: 20px!important;
    opacity: .7;
  } .stats .data .text {
    font-size: 14px!important;
    margin-left: 10px;
    opacity: .7;
  }
  /*END Stats*/
  .svg-between-stats-market-test {
    margin-top: -30px;
  }


  /*Market*/
  .market {
    padding: 10px 0px 10px 0px;
  } .market .content {
    margin-top: -50px;
  } .market .image-box {
    margin-top: 80px!important;
  }
  .market .image {
    width: 740px!important;
    height: 400px!important;
  }
  /*END Market*/
  .svg-between-market-strand-test {
    margin-top: -30px;
  }

  /*strands*/
  .strands {
    margin-top: -40px!important;
    padding: 30px 0px 10px 0px;
  } .strands .content {
  } .strands .label {
    font-size: 22px;
  } .strands .header {
    font-size: 50px;
    margin-bottom: 20px;
  } .strands .text {
    font-size: 16px;
  } .strands .link {
    font-size: 16px;
  }
  /*End Strands*/
  .svg-between-strands-offer-test {
    margin-top: -50px!important;
  }

  /* Offers*/
  .offers {
    padding: 10px 0px 10px 0px;
  } .offers .content {
    margin-top: 5px;
  } .offers .label {
    font-size: 22px;
    margin-bottom: 5px;
  } .offers .header {
    font-size: 50px;
    margin-bottom: 15px;
  } .offers .link {
    font-size: 17px;
  } .offers .icon-container {
    width: 3rem;
    height: 3rem;
    border-radius: .75rem;
  } .offers .icon {
  } .offers .label-text {
    font-size: 19px;
  } .offers .text {
    font-size: 16px;
  } .offers .box-group {
    margin-top: -55px;
  }
  /* End Offers*/
  .svg-between-offers-als-test {
    margin-top: -40px!important;
  }

  /*als*/
  .als {
    margin-top: -30px!important;
    padding: 30px 0px 10px 0px;
  } .als .content {
  } .als .label {
    font-size: 22px;
  } .als .header {
    font-size: 50px;
    margin-bottom: 20px;
  } .als .text {
    font-size: 16px;
  } .als .link {
    font-size: 16px;
  }
  /*End als*/
  .svg-between-als-benifits-test {
    margin-top: -50px!important;
  }

  /* Benifits*/
  .benifits {
    padding: 10px 0px 10px 0px;
  } .benifits .label {
    font-size: 22px;
  } .benifits .header {
    font-size: 50px;
    margin-bottom: 8px;
  } .benifits .text-container {
    margin-top: -5px;
  } .benifits .text {
    font-size: 17px!important;
  } .benifits .card {
    height: 320px;
    width: auto;
    padding: 50px;
  } .benifits .icon {
    margin-bottom: 8px!important;
  } .benifits .card-label {
    font-size: 18px;
    font-weight: 600;
  } .benifits .card-text {
    font-size:16px;
    margin-top: 10px;
  } .benifits .link {
    font-size: 16px;
  }
  /* End Benifits*/
  .svg-between-benifits-info-test {
    margin-top: -25px!important;
  }

  /*Info*/
  .info {
    margin-top: -95px;
    padding-top: 10px!important;
  } .info .content {
    margin-top: 40px;
  } .info .image {
    width: 650px;
    height: 420px;
    margin-bottom: 15px;
    margin-left: 20px;
  } .info .label {
    font-size: 22px;
    font-weight: 600;
  } .info .header {
    font-size: 50px;
    margin-bottom: 10px;
  } .info .text {
    font-size: 16px;
  } .info .link {
    font-size: 16px;
  }
  /*End Info*/
  .svg-between-info-experience-test {
    margin-top: -10px!important;
  }
  /*Exeperience*/
  .experience {
    margin-top: -20px;
    margin-bottom: 160px;
  } .experience .content {
    margin-top: 20px;
  } .experience .label {
    font-size: 22px;
    font-weight: 600;
  } .experience .header {
    font-size: 50px;
    margin-bottom: 20px;
  } .experience .text {
    font-size: 16px;
  } .experience .link {
    font-size: 16px;
  }
  /*End Exeperience*/
  .svg-between-experience-footer-test {
    margin-top: 200px;
  }
}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {
  /*Hero*/
  .hero {
    padding-top: 30px;
    padding-bottom: 190px!important;
  } .hero .content {
    margin-top: -15px!important;
    max-width: 1350px!important;
  }.hero .sub-title {
    font-size: 23px!important;
  } .hero .main-title {
    font-size: 65px!important;
    margin-top: 5px;
  }  .hero .description {
    font-size: 17px!important;
    opacity: .9;
    margin-top: 15px;
  }.hero .text-content {
    padding: 25px!important;
  } .hero .button {
    font-size: 17px;
    font-weight: 600;
    letter-spacing: -0.225px;
    border-radius: 6px;
    min-height: 24px;
    min-width: 126px!important;
    padding: 16px 18px!important;
    border-width: 2px;
    line-height: 1;
  } .hero .button-content {
    margin-top: -20px!important;
    padding: 10px;
  }
  /*End hero*/

  /*Stats*/
  .stats {
    margin-top: 260px!important;
    padding: 15px;
  } .stats .data .icon {
    font-size: 20px!important;
    opacity: .7;
  } .stats .data .text {
    font-size: 14px!important;
    margin-left: 10px;
    opacity: .7;
  }
  /*END Stats*/
  .svg-between-stats-market-test {
    margin-top: -90px;
  }


  /*Market*/
  .market {
    padding: 10px 0px 10px 0px;
  } .market .content {
    margin-top: -50px;
  } .market .image-box {
    margin-top: 80px!important;
  }
  .market .image {
    width: 920px!important;
    height: 490px!important;
  }
  /*END Market*/
  .svg-between-market-strand-test {
    margin-top: -30px;
  }

  /*strands*/
  .strands {
    margin-top: -80px!important;
    padding: 30px 0px 10px 0px;
  } .strands .content {
  } .strands .label {
    font-size: 23px;
  } .strands .header {
    font-size: 55px;
    margin-bottom: 20px;
  } .strands .text {
    font-size: 16px;
  } .strands .link {
    font-size: 16px;
  }
  /*End Strands*/
  .svg-between-strands-offer-test {
    margin-top: -90px!important;
  }

  /* Offers*/
  .offers {
    padding: 10px 0px 10px 0px;
  } .offers .content {
    margin-top: 5px;
  } .offers .label {
    font-size: 23px;
    margin-bottom: 5px;
  } .offers .header {
    font-size: 55px;
    margin-bottom: 15px;
  } .offers .link {
    font-size: 18px;
  } .offers .icon-container {
    width: 3rem;
    height: 3rem;
    border-radius: .75rem;
  } .offers .icon {
  } .offers .label-text {
    font-size: 19px;
  } .offers .text {
    font-size: 16px;
  } .offers .box-group {
    margin-top: -55px;
  }
  /* End Offers*/
  .svg-between-offers-als-test {
    margin-top: -40px!important;
  }

  /*als*/
  .als {
    margin-top: -50px!important;
    padding: 30px 0px 10px 0px;
  } .als .content {
  } .als .label {
    font-size: 23px;
  } .als .header {
    font-size: 55px;
    margin-bottom: 20px;
  } .als .text {
    font-size: 16px;
  } .als .link {
    font-size: 16px;
  }
  /*End als*/
  .svg-between-als-benifits-test {
    margin-top: -100px!important;
  }

  /* Benifits*/
  .benifits {
    padding: 10px 0px 10px 0px;
  } .benifits .label {
    font-size: 23px;
  } .benifits .header {
    font-size: 55px;
    margin-bottom: 8px;
  } .benifits .text-container {
    margin-top: -5px;
  } .benifits .text {
    font-size: 17px!important;
  } .benifits .card {
    height: 470px;
    width: auto;
    padding: 50px;
  } .benifits .icon {
    margin-bottom: 8px!important;
  } .benifits .card-label {
    font-size: 18px;
  } .benifits .card-text {
    font-size:16px;
    margin-top: 10px;
  } .benifits .link {
    font-size: 16px;
  }
  /* End Benifits*/
  .svg-between-benifits-info-test {
    margin-top: -25px!important;
  }

  /*Info*/
  .info {
    margin-top: -130px;
    padding-top: 60px!important;
  } .info .content {
    margin-top: 40px;
  } .info .image {
    width: 450px;
    height: 320px;
    margin-bottom: 15px;
    margin-left: 20px;
  } .info .label {
    font-size: 22px;
    font-weight: 600;
  } .info .header {
    font-size: 50px;
    margin-bottom: 10px;
  } .info .text {
    font-size: 16px;
  } .info .link {
    font-size: 16px;
  }
  /*End Info*/
  .svg-between-info-experience-test {
    margin-top: -10px!important;
  }
  /*Exeperience*/
  .experience {
    margin-top: -20px;
    margin-bottom: 160px;
  } .experience .content {
    margin-top: 20px;
  } .experience .label {
    font-size: 24px;
    font-weight: 600;
  } .experience .header {
    font-size: 55px;
    margin-bottom: 20px;
  } .experience .text {
    font-size: 16px;
  } .experience .link {
    font-size: 16px;
  }
  /*End Exeperience*/
  .svg-between-experience-footer-test {
    margin-top: 190px;
  }
}
</style>