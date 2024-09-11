<script setup>
import { computed } from 'vue';
import { useStore } from 'vuex';
import Container from '@/components/base/Container.vue';
import Section from '@/components/base/Section.vue';
import Sidebar from '@/components/base/Sidebar.vue';
import RelatedPage from '@/components/guest/RelatedPage.vue';

const store = useStore();
const data = computed(() => ({
	relatedLinks:            				 store.getters['guest/getPoliciesLinks'],
	privacyStatementInfos: 					 store.getters['guest/policy/getInfos'],
}));
</script>

<template>
	<Section className="statement">
		<Container className="content">
      <div class="content">
      	<div id="header">
	        <div class="row flex-lg-row-reverse align-items-center">
	          <div class="col-10 col-sm-8 col-lg-4">
	            <img src="@assets/images/851fpolicy.png" class="image"
	              alt="img" width="340" height="300" loading="lazy"/>
	          </div>
	          <div class="col-lg-8">
	            <label class="gradient-brown-text label">Golden Minds Colleges</label>
	            <h1 class="gradient-dark-text header">Privacy Policy and Statement</h1>
	            <p class="text">
	 							At Golden Minds Bulacan, we value your privacy and are committed to protecting your personal information. This Privacy Policy outlines how we collect, use, and safeguard the personal data of our valued stakeholders, including students, faculty, staff, and visitors.
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
		          <p class="description">
								This Privacy Policy describes how <b>Golden Minds Bulacan</b> collects and uses personally identifiable information (“Personal Information”) of Data Subjects. Personal Information may be collected manually via forms or documents, or collected electronically. For purposes of this Privacy Policy, the following terms shall have their respective meanings as set forth below:
								<br/><br/>
				        “Data Subject” refers to an individual whose Personal Information is processed (typically a student or employee of Golden Minds);
				        <br/><br/>
				        “Personal Information” refers to any information from which the identity of a Data Subject is apparent or can be reasonably and directly ascertained by a person in possession of said information, and which may include, but is not limited to, the name, date of birth, email and physical addresses, demographic information, and contact information; and
				        <br/><br/>
				        “Processing” refers to any activity conducted on the Personal Information including, but not limited to, collection, recording, organization, storage, updating or modification, retrieval, consultation, use, consolidation, blocking, and erasure or destruction.
				        <br/><br/>
				        Golden Minds privacy policy sets forth the privacy practices that are applicable to all its Personal Information processing activities. Moreover, Golden Minds privacy policy and guidelines shall be interpreted and applied in accordance with all the relevant laws and guidelines of the Philippines, including the Data Privacy Act of 2012 and its Implementing Rules and Regulations.
							</p>
							<hr class="divider">
							<table class="table">
						    <tbody>
						      <template v-for="info in data.privacyStatementInfos" :key="info.title">
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
		        <div class="col-lg-2" style="margin-top: -1440px;">
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
.statement {
  background: #FFFFFF;
  margin-top: -70px;
  padding-top: 50px!important;
} .statement .content {
  margin-top: 70px;
} .statement .image {
  pointer-events: none;
  width: 315px;
  height: 310px;
} .statement .label {
  font-size: 25px;
  font-weight: 600;
} .statement .header {
  font-family: var(--app-font-poppins);
  font-size: 60px;
  margin-bottom: 20px;
} .statement .text {
  font-size: 18px;
  color: #212529BF;
} .statement .description {
	font-size: 16px;
}.statement .link {
  font-size: 18px;
  font-weight: bold;
  color: var(--app-light-brown);
  text-decoration: none;
  transition: all ease .3s;
} .statement .link:hover {
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
	.statement {
	  margin-top: -75px;
	} .statement .content {
	  margin-top: 50px;
	} .statement .image {
	  width: 240px;
	  height: 230px;
	  margin-left: 60px;
	  margin-bottom: 10px;
	} .statement .label {
	  font-size: 18px;
	  font-weight: 600;
	} .statement .header {
	  font-size: 30px;
	  margin-bottom: 10px;
	} .statement .text {
	  font-size: 14px;
	} .statement .description {
		font-size: 14px;
	}.statement .link {
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