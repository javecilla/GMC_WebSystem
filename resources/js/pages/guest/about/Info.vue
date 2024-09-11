<script setup>
import Section from '@/components/base/Section.vue';
import Container from '@/components/base/Container.vue';
import WaveLine from '@/components/WaveLine.vue';
</script>

<template>
	<Section className="info">
    <Container className="content">
      <div>
        <label class="gradient-brown-text label">History of Golden Minds Colleges</label>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <p class="text">
              Golden Minds Colleges was established in February 2010. Initially offering Technical-Vocational Livelihood Programs regulated by TESDA, including Hardware Servicing NC2, Visual Graphic Design NC3, Bookkeeping NC2, Housekeeping NC2, and Food and Beverage NC2. Originally located in Barangay Tabang, Guiguinto, Bulacan, under the name Golden Minds Academy and Information Technology.
            </p>
          </div>
          <div class="col-lg-6">
            <img src="@assets/images/about/scolae12a.png" class="d-block mx-lg-auto img-fluid image" alt="img" loading="lazy"/>
          </div>
          <div class="col-lg-12">
            <p class="text">
              After two years, the institution relocated to Balagtas, Bulacan, and rebranded as Golden Minds Colleges. Today, we stand as a Senior High-ready institution offering tracks such as General Academic Strand (GAS), Accountancy, Business, and Management Strand (ABM), as well as Technical-Vocational Livelihood Strands with majors in Home Economics (TVL-HE) and Information and Communication Technology (TVL-ICT).
              The driving force behind our institution believes that it doesn't take a genius to achieve success in life. Rather, it's the passion for imparting knowledge that empowers us to influence young minds to pursue their dreams and become successful individuals.
            </p>
          </div>
        </div>
      </div>

      <div>
        <label class="gradient-brown-text label">14 Years of Educational Excellence</label>
        <p class="text">
          Experience the comforts of a home-away-from-home at Golden Minds Colleges, a Bulacan-based private institution offering tuition-free education across three campuses in Sta. Maria, Balagtas, and Guiguinto. Our cutting-edge academic programs are driven by a commitment to research and innovation, ensuring a leading-edge educational experience.
        </p>
      </div>
    </Container>
  </Section>
</template>

<style scoped>
/*about-us-info*/
.info {
	background: #F8FAFC;
  padding: 0 0 40px 0;
} .info .content {
  padding-top: 20px;
	max-width: 1150px;
} .info .label {
  font-size: 25px;
  font-weight: 600;
} .info .image {
  pointer-events: none;
  height: 200px;
} .info .content .text {
	margin-top: 10px;
	font-size: 17px;
	line-height: 26px;
}
/*end-about-us-info*/

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
  .info {
    padding: 0 0 40px 0;
  } .info .content {
    padding-top: -30px;
    max-width: 1350px;
  } .info .label {
    font-size: 18px;
    font-weight: 600;
  } .info .image {
    width: auto;
    height: 150px;
  } .info .content .text {
    margin-top: 10px;
    font-size: 14px;
    line-height: 26px;
  }
}

/* iPad, Tablets (481px-768px)*/
@media only screen and (min-width: 481px) and (max-width: 768px) {}

/* Small screens, laptops (769px-1024px)*/
@media only screen and (min-width: 769px) and (max-width: 1024px) {}

/* Desktops, large screens (1025px-1200px)*/
@media only screen and (min-width: 1025px) and (max-width: 1200px) {}
</style>