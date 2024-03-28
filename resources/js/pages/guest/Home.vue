<script setup>
import { useStore, mapGetters } from 'vuex';
import { computed, defineAsyncComponent} from 'vue';

const store = useStore();
const offers = computed(() => store.getters['guest/home/getOffers']);

const WaveLine = defineAsyncComponent(() => 
  import('@/components/WaveLine.vue')
);
</script>
<template>
	<section class="hero bg-grid">
		<div class="text-center container content">
			<div class="text-content">
				<label class="sub-title gradient-brown-text">
					Senior High School
				</label>
		    <h1 class="main-title gradient-brown-text col-lg-11 mx-auto">
		    	Applications for the Academic Year 2024-2025 are now open.
				</h1>
				<p class="description col-lg-10 mx-auto">
					Seize your future! Enroll now at GMC Senior High. Dream big, aim higher. New students and transferees are welcome at all levels. Your journey starts here!
				</p>
			</div>
	  </div>
	  <div class="col-lg-6 mx-auto" >
	    <div class="button-content d-grid gap-2 d-sm-flex justify-content-sm-center">
	      <a href="#" class="button get-help btn btn-light gap-3">
	        Get Help
	      </a>
	      <a href="#" class="button register-now btn btn-light">
	       	Register Now Online <i class="fa-solid fa-arrow-right"></i>
	      </a>
	    </div>
	 	</div>
  </section>

  <section class="stats">
    <div class="container">
      <div class="d-flex justify-content-center align-items-center">
        <div class="row gap-3">
          <div class="col-auto">
            <span class="data">
              <i class="fa-solid fa-eye icon"></i>
              <span class="text">Views: 0</span>
            </span>
          </div>
          <div class="col-auto">
            <span class="data">
              <i class="fa-solid fa-graduation-cap icon"></i>
              <span class="text">Students: 0</span>
            </span>
          </div>
          <div class="col-auto">
            <span class="data">
              <i class="fa-solid fa-school icon"></i>
              <span class="text">Campus: 0</span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <WaveLine stroke="top" color="#F8FAFC" className="svg-between-stats-market" 
    inlineStyle="margin-top: -130px!important;"/>

  <section class="market">
    <div class="container content">
      <div class="d-flex justify-content-center align-items-center">
        <img src="@assets/images/561231hero.png" loading="lazy" class="image" />
      </div>
    </div>
  </section>

  <WaveLine stroke="bottom" color="#F8FAFC" className="svg-between-market-strand" 
    inlineStyle="margin-top: -110px!important;"/>

  <section class="strands">
    <div class="container">
      <div class="content position-relative text-center text-muted bg-body">
        <label class="gradient-brown-text label">Explore Our Senior High School Strands</label>
        <h1 class="gradient-dark-text header col-lg-10 mx-auto">Discover Your Path to Success</h1>
        <p class="col-lg-9 mx-auto text">
          Choosing the right strand to prepare for college is a pivotal decision that shapes your future. At Golden Minds Colleges, we offer a diverse range of specialized strands designed to align with your unique interests and career aspirations.
          <br/><br/>
          Whether you're passionate about STEM and ICT subjects, inclined towards the arts, or eager to delve into business and entrepreneurship, our Senior High School program provides tailored pathways to help you thrive.
        </p>
        <p><a href="#" class="link">Learn more about each strand
        <i class="fa-solid fa-arrow-right"></i></a></p>
      </div>
    </div>
  </section>

  <WaveLine stroke="top" color="#F8FAFC" className="svg-between-strands-offers" 
    inlineStyle="margin-top: -190px!important;"/>

  <section class="offers">
    <div class="container">
      <div class="content">
        <label class="gradient-brown-text label">Why Golden Minds?</label>
        <h1 class="gradient-dark-text header">Free Tuition Fee on<br/>your Senior High School</h1>
        <p><a href="#" class="link">Register Now Online<i class="fa-solid fa-arrow-right"></i></a></p>
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
    </div>
  </section>

  <WaveLine stroke="bottom" color="#F8FAFC" className="svg-between-offers-als" 
    inlineStyle="margin-top: -120px!important;"/>

  <section class="als">
    <div class="container">
      <div class="content position-relative text-center text-muted bg-body">
        <label class="gradient-brown-text label">Unlock Your Potential with Golden Minds</label>
        <h1 class="gradient-dark-text header">Welcome, ALS Graduates!</h1>
        <p class="col-lg-9 mx-auto text">
          At Golden Minds, we embrace diversity and believe in providing opportunities for all. If you're an ALS graduate seeking to further your education and pursue your dreams, our doors are open for you.
          <br/><br/>
          Experience our supportive learning environment, dedicated faculty, and enriching programs designed to help you thrive academically and personally. Join us and continue your journey towards success.
        </p>
        <p><a href="#" class="link">Learn How to Enroll
        <i class="fa-solid fa-arrow-right"></i></a></p>
      </div>
    </div>
  </section>

 
  <WaveLine stroke="top" color="#493026" className="svg-between-als-benifits" 
    inlineStyle="margin-top: -190px!important;"/>

  <section class="benifits">
    <div class="container">
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
                <p><a href="#" class="link">Learn More
                  <i class="fa-solid fa-arrow-right"></i></a></p>
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
                <p><a href="#" class="link">Learn More
                  <i class="fa-solid fa-arrow-right"></i></a></p>
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
                <p><a href="#" class="link">Learn More
                  <i class="fa-solid fa-arrow-right"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <WaveLine stroke="bottom" color="#493026" className="svg-between-benifits-info" 
    inlineStyle="margin-top: -120px!important;"/>

  <section class="info">
    <div class="container">
      <div class="content" >
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="@assets/images/51asfinf0.png" class="d-block mx-lg-auto img-fluid image" 
              alt="img" width="700" height="550" loading="lazy"/>
          </div>
          <div class="col-lg-6">
            <label class="gradient-brown-text label">What's Golden Minds Colleges?</label>
            <h1 class="gradient-dark-text header">About Us</h1>
            <p class="text">
              Is a distinguished private school providing tuition-free education. Our institution is committed to nurturing graduates who excel in the ever-evolving global landscape. Aim to produces graduates that are competitive in the current global trends. Develop young minds to become God-fearing, intelligent and multitask individuals.
            </p>
            <p><a href="#" class="link">Why students love Golden Minds
            <i class="fa-solid fa-arrow-right"></i></a></p>
            <p><a href="#" class="link">Navigate to our Gallery from Event Campus
            <i class="fa-solid fa-arrow-right"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <WaveLine stroke="bottom" color="#F8FAFC" className="svg-between-info-experience" 
    inlineStyle="margin-top: -60px!important;"/>

  <section class="experience">
    <div class="container">
      <div class="content position-relative text-center text-muted">
        <label class="gradient-brown-text label">Golden Minds Colleges Experience</label>
        <h1 class="gradient-dark-text header">14 Years of <br/>Educational Excellence</h1>
        <p class="col-lg-10 mx-auto text">
          Experience the comforts of a home-away-from-home at Golden Minds Colleges, a Bulacan-based private institution offering tuition-free education across three campuses in Sta. Maria, Balagtas, and Guiguinto. Our cutting-edge academic programs are driven by a commitment to research and innovation, ensuring a leading-edge educational experience.
        </p>
        <p><a href="#" class="link">Read More
        <i class="fa-solid fa-arrow-right"></i></a></p>
      </div>
    </div>
  </section>

  
  <WaveLine stroke="top" color="#F5FAFE" className="svg-between-benifits-info" 
    inlineStyle="margin-top: -180px!important;"/>
</template>
<style scoped>
/*Hero*/
.hero {
  padding-top: 20px;
  padding-bottom: 20px;
} .hero .content {
  margin-top: -55px;
  max-width: 1250px;
}.hero .sub-title {
  font-family: var(--app-font-roboto); 
  font-size: 22px;
  font-weight: bolder;
} .hero .main-title {
  font-family: var(--app-font-poppins); 
  font-size: 72px;
  font-weight: bolder;
  margin-top: 10px;
}  .hero .description {
  font-weight: 500;
  font-family: var(--app-font-roboto); 
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
  font-family: var(--app-font-roboto);
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
.svg-between-stats-market {
  margin-top: -150px!important;
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
.svg-between-market-strands {
  margin-top: -110px;
}

/*strands*/
.strands {
  margin-top: -100px!important; 
  padding: 30px 0px 10px 0px;
} .strands .content {
  background: #fff!important;
} .strands .label {
  font-family: var(--app-font-roboto);
  font-size: 25px;
  font-weight: 600;
} .strands .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .strands .text {
  font-family: var(--app-font-roboto);
  font-size: 18px;
  color: #212529BF;
} .strands .link {
  font-family: var(--app-font-roboto);
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
.svg-between-strands-offers {
  margin-top: -190px!important;
}

/* Offers*/
.offers {
  cursor: default;
  background: #F8FAFC;
  padding: 10px 0px 10px 0px;
} .offers .content {
  margin-top: -15px;
} .offers .label {
  font-family: var(--app-font-roboto);
  font-size: 25px;
  font-weight: 600;
} .offers .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .offers .link {
  font-family: var(--app-font-roboto);
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
  font-family: var(--app-font-roboto);
  font-size: 21px;
  font-weight: 600;
  color: #212529BF;
} .offers .label-text:hover {
  color: var(--app-light-brown);
  opacity: .7;
} .offers .text {
  font-family: var(--app-font-roboto);
  font-size: 17.3px;
  opacity: .8;
} .offers .box-group {
  margin-top: -55px;
}
/* End Offers*/
.svg-between-offers-als {
  margin-top: -120px!important;
}
/*als*/
.als {
  margin-top: -100px!important; 
  padding: 30px 0px 10px 0px;
} .als .content {
  background: #fff!important;
} .als .label {
  font-family: var(--app-font-roboto);
  font-size: 25px;
  font-weight: 600;
} .als .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .als .text {
  font-family: var(--app-font-roboto);
  font-size: 18px;
  color: #212529BF;
} .als .link {
  font-family: var(--app-font-roboto);
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
.svg-between-als-benifits {
  margin-top: -190px!important;
}

/* Benifits*/
.benifits {
  background: #493026;
  padding: 10px 0px 10px 0px; /*left right top bottom*/
} .benifits .label {
  font-family: var(--app-font-roboto);
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
  font-family: var(--app-font-roboto);
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
  font-family: var(--app-font-roboto);
  font-size: 22px;
  font-weight: 600;
  color: #f3f3f3;
} .benifits .card-text {
  font-family: var(--app-font-roboto);
  font-size: 17.2px;
  color: #f3f3f3;
  margin-top: 10px;
} .benifits .link {
  font-family: var(--app-font-roboto);
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

/*Info*/
.info {
  background: #f8f9fa!important;
  margin-top: -180px;
  padding-top: 50px!important;
} .info .content {
  
} .info .image {
  pointer-events: none;
} .info .label {
  font-family: var(--app-font-roboto);
  font-size: 25px;
  font-weight: 600;
} .info .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .info .text {
  font-family: var(--app-font-roboto);
  font-size: 18px;
  color: #212529BF;
} .info .link {
  font-family: var(--app-font-roboto);
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

/*Exeperience*/
.experience {
  margin-top: -90px;
} .experience .content {

} .experience .label {
  font-family: var(--app-font-roboto);
  font-size: 25px;
  font-weight: 600;
} .experience .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .experience .text {
  font-family: var(--app-font-roboto);
  font-size: 18px;
  color: #212529BF;
} .experience .link {
  font-family: var(--app-font-roboto);
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
</style>