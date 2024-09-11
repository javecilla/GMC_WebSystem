<script setup>
import { computed } from 'vue';
import { useStore } from 'vuex';
import Container from '@/components/base/Container.vue';
import Section from '@/components/base/Section.vue';
import Sidebar from '@/components/base/Sidebar.vue';
import RelatedPage from '@/components/guest/RelatedPage.vue';

const store = useStore();
const data = computed(() => ({
	relatedLinks:            store.getters['guest/getPoliciesLinks'],
	getTermOfUse: 					 store.getters['guest/policy/getTermOfUse'],
}));
</script>

<template>
	<Section className="termOfUse">
		<Container className="content">
      <div class="content">
      	<div id="header">
	        <div class="row flex-lg-row-reverse align-items-center">
	          <div class="col-10 col-sm-8 col-lg-4">
	            <img src="@assets/images/852fpolicy.png" class="image"
	              alt="img" width="340" height="300" loading="lazy"/>
	          </div>
	          <div class="col-lg-8">
	            <label class="gradient-brown-text label">Golden Minds Colleges</label>
	            <h1 class="gradient-dark-text header">Webiste Online Services Term of Use</h1>
	            <p class="text">
								Welcome to Golden Minds Colleges' online services. By accessing and using our website, applications, and other digital platforms, you agree to comply with these Terms of Use. We strive to provide a secure and enjoyable experience for our users while protecting their privacy and personal information in accordance with our
								<RouterLink :to="{ name: 'policy.statement'}" class="link-dark fw-bold text-muted">Privacy Policy</RouterLink>.
        	 		</p>
	          </div>
	        </div>
        </div>
        <div id="sub-header">
		      <span class="text text-start"><i class="fa-solid fa-circle-info"></i> Golden Minds IT Department</span>
		      <span class="text float-end"><span class="d-none d-lg-inline">Last Modified:</span> January 20, 2024</span>
	      </div>
        <div>
					<div class="row align-items-center">
		        <div class="col-lg-10 mt-3">
							<table class="table">
						    <tbody>
						      <template v-for="info in data.getTermOfUse" :key="info.title">
										<tr>
											<td :rowspan="info.rowspan"><i><b>{{ info.title }}</b></i></td>
										</tr>
										<tr v-for="description in info.descriptions" :key="description.description">
											<td><span v-html="description.data"></span></td>
										</tr>
									</template>
						    </tbody>
						  </table>
		        </div>
		        <div class="col-lg-2" style="margin-top: -530px;">
		        	<div class="d-none d-lg-inline">
								<Sidebar>
									<RelatedPage :data="data.relatedLinks"/>
								</Sidebar>
							</div>
		        </div>
	        </div>
        </div>
      </div>
		</Container>
	</Section>
</template>

<style scoped>
.termOfUse {
  background: #FFFFFF;
  margin-top: -70px;
  padding-top: 50px!important;
} .termOfUse .content {
  margin-top: 70px;
} .termOfUse .image {
  pointer-events: none;
  width: 320px;
  height: 315px;
} .termOfUse .label {
  font-size: 25px;
  font-weight: 600;
} .termOfUse .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .termOfUse .text {
  font-size: 18px;
  color: #212529BF;
} .termOfUse .description {
	font-size: 16px;
}.termOfUse .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .termOfUse .link:hover {
  text-decoration: underline;
  font-weight: bolder;
  color: var(--app-dark-brown);
}
#sub-header {
  background: #fff;
  margin-top: 30px;
  margin-bottom: 15px;
  border-top: 1px solid #dce1d8;
  border-bottom: 1px solid #dce1d8;
  padding: 15px;
  cursor: default;
} #sub-header .data {
  display: flex;
  align-items: center;
} #sub-header .data .icon {
  font-size: 25px;
  color: #1F1F1F;
  opacity: .7;
  transition: all ease .2s;
} #sub-header .data .text {
  font-family: var(--app-font-poppins);
  font-size: 16px;
  color: #1F1F1F;
  text-align: center;
  margin-left: 10px;
  opacity: .7;
  transition: all ease .2s;
} #sub-header .data:hover .icon,
  #sub-header .data:hover .text {
    color: var(--app-light-brown);
    opacity: .8;
}
.divider { color: #c1c7c8; }

/* Mobile Devices (320px-480px)*/
@media only screen and (min-width: 320px) and (max-width: 480px) {
	.termOfUse {
	  margin-top: -80px;
	} .termOfUse .content {
	  margin-top: 50px;
	} .termOfUse .image {
		width: 215px;
	  height: 230px;
	  margin-left: 70px;
	  margin-bottom: 10px;
	} .termOfUse .label {
	  font-size: 18px;
	  font-weight: 600;
	} .termOfUse .header {
	  font-size: 30px;
	  margin-bottom: 10px;
	} .termOfUse .text {
	  font-size: 14px;
	} .termOfUse .description {
		font-size: 14px;
	}.termOfUse .link {
	  font-size: 14px;
	  text-decoration: none;
	}
	#sub-header {
	  margin-top: 30px;
	  margin-bottom: 15px;
	  padding: 15px;
	} #sub-header .data .text {
	  font-size: 16px;
	  margin-left: 10px;
	}
	td {
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